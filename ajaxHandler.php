<?php 
    session_start();
    require_once __DIR__ . '/scAPI.php';
    include "./getIP.php";
    include "./db.php";

    $db = new db();

    function arrayInsert($columnCount, $res, $resAttr, $response){
        $counter = 0;
        $data = [];
        while($counter < $columnCount){
            if($counter == $columnCount-1){
                $data[$counter] = json_encode($response);
            }else{
                $data[$counter] = $res[$resAttr[$counter]];
            }
            $counter+=1;
        }
        return $data;
    }
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $affid = (!empty($_POST["affid"]))?$_POST["affid"]:null;
            $c1 = (!empty($_POST["c1"]))?$_POST["c1"]:null;
            $c2 = (!empty($_POST["c2"]))?$_POST["c2"]:null;
            $c3 = (!empty($_POST["c3"]))?$_POST["c3"]:null;
            $ip = $res["ip"];
            $country_code = $res["cc"];
            $requestType = trim($_POST['requestType']);
            $additionalParams = (!empty($_POST["additionalParams"]))?$_POST["additionalParams"]:null;

            // Creating Everflow API object
            $sc = new scAPI();
            switch ($requestType) {
                case 'clickHandler':
                    $payload = [
                        "click" => [
                        "aff_id"=> $affid,
                        "c1"=> $c1,
                        "c2"=> $c2,
                        "c3"=> $c3,
                        "additional_passed_values"=> json_decode($additionalParams,true),
                        "campaign_id"=> 2,
                        "ip_address"=> $ip,
                        "geo_state"=> $country_code,
                        "geo_country"=> $country_code,
                        "device"=> "Chrome"
                        ]
                    ];
                    print_r($payload);
                    $response = $sc->createClick($payload);
                    $_SESSION["click_details"] = $response;

                    $res = $response["data"]["attributes"];
                    $resAttr = ["ip_address","geo_country","session_token",];
                    $colCount = count($resAttr)+1;
                    $data = arrayInsert($colCount,$res,$resAttr, $response);
                    print_r($data);
                    $db->clickInsert("click_tbl",$data);

                    break;
                case 'prospect':
                    // Prepare the payload as an array
                    //echo $_SESSION["session_id"];
                    
                    $session_id = trim($_SESSION["click_details"]['data']['attributes']['session_token']);
                    $shipFirstName = trim($_POST['shipFirstName']);
                    $shipLastName = trim($_POST['shipLastName']);
                    $emailAddress = trim($_POST['emailAddress']);
                    $phoneNumber = trim($_POST['phoneNumber']);
                    $shipAddress1 = trim($_POST['shipAddress1']);
                    $shipCity = trim($_POST['shipCity']);
                    $shipState = trim($_POST['shipState']);
                    $shipPostalCode = trim($_POST['shipPostalCode']);
                    $payload = [
                        "session_token"=> $session_id,
                        "lead" => [
                            "first_name" => $shipFirstName,
                            "last_name" => $shipLastName,
                            "email" => $emailAddress,
                            "phone" => $phoneNumber,
                            "address_risk_data" => null,
                            "ship_address1" => $shipAddress1,
                            "ship_address2" => null,
                            "ship_city" => $shipCity,
                            "ship_state" => $shipState,
                            "ship_country" => "IT",
                            "ship_postal_code" => $shipPostalCode,
                            "locale" => "it-IT",
                            "send_partial_pixels" => 1,
                            "has_upsell" => 1,
                            "additional_details" =>[
                                    "notes" => "lead-page"
                                ]
                        ]
                    ];

                    // Fetch click IDs
                    $response = $sc->createLead($payload);
                    $_SESSION["prospect"] = $response;
                    //print_r($response);
                    $resDefKey = $response["data"]["attributes"];
                    $getKey = ["session_token","email","phone","campaign_name","number"];
                    $colCount = count($getKey)+1;
                    $data = arrayInsert($colCount,$resDefKey,$getKey, $response);
                    //print_r($data);
                    $db->prospectInsert("prospect_tbl",$data);

                    break;

                case 'checkout':
                    $session_id = trim($_SESSION["click_details"]['data']['attributes']['session_token']);
                    $fullName = $_SESSION["prospect"]['data']['attributes']['bill_first_name']." ".$_SESSION["prospect"]['data']['attributes']['bill_last_name'];
                    $cardNumber = trim($_POST['cardNumber']);
                    $cardMonth = trim($_POST['cardMonth']);
                    $cardYear = trim($_POST['cardYear']);
                    $cardCvv = trim($_POST['cardCvv']);

                    $campaignId = (int) $_POST['campaignId'];

                    $payload = [
                        "session_token"=> $session_id,
                        "order"=> [
                            "cc_risk_data"=> "",
                            "payment_source_attributes"=> [
                                "card"=> [
                                "month"=> $cardMonth,
                                "year"=> $cardYear,
                                "number"=> $cardNumber,
                                "cvv"=> $cardCvv,
                                "name"=> $fullName
                                ],
                                "redirect_links"=> [
                                    "success_url"=> "https://google.com/"
                                ],
                                "hosted"=> false
                            ],
                            "use_shipping_address"=> true,
                            "campaign_product_ids"=>[$campaignId]
                        ],
                        "pixel_data"=> []
                    ];

                    //print_r(json_encode($payload));

                    $response = json_encode($sc->createOrder($payload));

                    print_r($response);

                    $val = json_decode($response,true);

                    $_SESSION["checkout"] = $val;

                    if(!array_key_exists("error",$val)){
                        $resDefKey = $val["data"]["attributes"];
                        $getKey = ["session_token","email","item_total","last_digits","number"];
                        $colCount = count($getKey)+1;
                        $data = arrayInsert($colCount,$resDefKey,$getKey, json_decode($response));
                        //print_r($data);
                        $db->checkoutInsert("checkout_tbl",$data);
                    }
                    
                    break;

                case 'upsell':
                    $session_id = trim($_SESSION["checkout"]['data']['attributes']['session_token']);
                    $campaignId = (int) $_POST['upsell_prod_id'];
                    // print_r($campaignId);
                    // die();

                    $payload = [
                        "session_token"=> $session_id,
                        "order"=> [
                            "campaign_product_ids"=> [$campaignId]
                        ]
                    ];

                    //die($payload);

                    // print_r(json_encode($payload));
                    // print_r("1");
                    // print_r(json_encode($payload));
                    // die();

                    $response = $sc->createUpsell($payload);
                    print_r($response);

                    $_SESSION["upsell"] = $response;

                    //print_r($response);

                    $resDefKey = $response["data"]["attributes"];
                    $getKey = ["session_token","email","number","total"];
                    $colCount = count($getKey)+1;
                    $data = arrayInsert($colCount,$resDefKey,$getKey, $response);
                    print_r($data);
                    $db->upsellInsert("upsell_tbl",$data);

                    break;
                
                case 'checkEmail':
                    $table = $_POST["table"];
                    $email = $_POST["email"];
                    $response = $db->checkEmailId($table,$email);
                    print_r($response);
                    break;

                case 'joinTables':
                    //print_r($searched_data);
                    $response = $db->joinTables();
                    print_r($response);
                    break;

                case 'successOrder':
                    $session_id = trim($_SESSION["checkout"]['data']['attributes']['session_token']);
                    // print_r($campaignId);
                    // die();

                    $payload = [
                        "session_token"=> $session_id,
                        "pixel_data"=> []
                    ];

                    //die($payload);

                    // print_r(json_encode($payload));
                    // print_r("1");
                    // print_r(json_encode($payload));
                    // die();

                    $response = $sc->successOrder($payload);
                    print_r($response);

                    $_SESSION["success"] = $response;

                    //print_r($response);

                    $resDefKey = $response;
                    $getKey = ["session_token","email","item_count","item_total","ship_total","number"];
                    $colCount = count($getKey)+1;
                    $data = arrayInsert($colCount,$resDefKey,$getKey, $response);
                    print_r($data);
                    $db->successFetchData("success_tbl",$data);

                    break;

                default:
                    echo "Invalid request data type!";
            }
        }catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
?>
