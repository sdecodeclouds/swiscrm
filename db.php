<?php
    class db{
        private $servername = "localhost";
        private $database = "swiss_offer_db";
        private $username = "root";
        private $password = "";
        private $conn;

        public function __construct(){
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
            if($this->conn->connect_error){
                echo $this->conn->connect_error;
            }else{
                //echo "connection Successful!";
            }
        }
        public function loopRecursive($column){
            
            $data = [];
            $i = 0;
            foreach ($column as $col){
                $data[$i] = "'".$col."'";
                //echo $data[$i];
                $i++;
            }
            return $data;
        }
        public function clickInsert($table,$column){
            //print_r($column);
            $data = $this->loopRecursive($column);
            //print_r("line 26".$data);
            $column = implode(",",$data);
            //print_r($column);
            $sql = "insert into $table(ip,country,session_id,payload) values($column)";
            $res = $this->conn->query($sql);
            if($res === true){
                if($this->conn->affected_rows > 0){
                    return $res;
                }   
            }else{
                return $this->conn->error;
            }
            
        }

        public function checkEmailId($table, $email) {
            $sql = "SELECT COUNT(email) as count FROM $table WHERE email = '$email'";
            $res = $this->conn->query($sql);

            if ($res) {
                $row = $res->fetch_assoc();
                //print_r($row);
                return json_encode($row);
            } else {
                return json_encode($this->conn->error);
            }
        }

        public function joinTables(){
            $draw   = isset($_POST['draw']) ? intval($_POST['draw']) : 0;
            //print_r($_POST['draw']);
            $start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
            //print_r($_POST['start']);
            $length = isset($_POST['length']) ? intval($_POST['length']) : 10;
            //print_r($_POST['length']);
            $searchValue = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';
            //print_r($_POST['search']['value']);
            //print_r($searchValue);

            $baseSql = "select click_tbl.id, click_tbl.ip, click_tbl.country, click_tbl.session_id,prospect_tbl.email, prospect_tbl.phone, prospect_tbl.campaign_name,success_tbl.total_price, checkout_tbl.card_last_digit, checkout_tbl.order_id,success_tbl.total_items, success_tbl.total_ship_price, click_tbl.payload as click_payload, prospect_tbl.payload as prospect_payload, checkout_tbl.payload as checkout_payload, upsell_tbl.payload as upsell_payload, success_tbl.payload as success_payload from click_tbl left join prospect_tbl on click_tbl.session_id = prospect_tbl.session_id left join checkout_tbl on prospect_tbl.email = checkout_tbl.email left join upsell_tbl on checkout_tbl.email = upsell_tbl.email left join success_tbl on checkout_tbl.email = success_tbl.email";
                
                $resTotal = $this->conn->query($baseSql);
                $recordsTotal = $resTotal->num_rows;

                $where = "";
                if (!empty($searchValue)) {
                    $searchValue = $this->conn->real_escape_string($searchValue);
                    $where = " where (click_tbl.ip like '%$searchValue%'
                                or click_tbl.country like '%$searchValue%'
                                or prospect_tbl.email like '%$searchValue%'
                                or prospect_tbl.phone like '%$searchValue%'
                                or success_tbl.total_price like '%$searchValue%'
                                or prospect_tbl.campaign_name like '%$searchValue%'
                                or checkout_tbl.card_last_digit like '%$searchValue%'
                                or success_tbl.total_ship_price like '%$searchValue%'
                                or checkout_tbl.order_id like '%$searchValue%')";
                    $resFiltered = $this->conn->query($baseSql . $where);
                }else{
                    //$list = " order by click_tbl.id desc";
                    $baseSql = "select click_tbl.id, click_tbl.ip, click_tbl.country, click_tbl.session_id,prospect_tbl.email, prospect_tbl.phone, prospect_tbl.campaign_name,success_tbl.total_price, checkout_tbl.card_last_digit, checkout_tbl.order_id,success_tbl.total_items, success_tbl.total_ship_price, click_tbl.payload as click_payload, prospect_tbl.payload as prospect_payload, checkout_tbl.payload as checkout_payload, upsell_tbl.payload as upsell_payload, success_tbl.payload as success_payload from click_tbl left join prospect_tbl on click_tbl.session_id = prospect_tbl.session_id left join checkout_tbl on prospect_tbl.email = checkout_tbl.email left join upsell_tbl on checkout_tbl.email = upsell_tbl.email left join success_tbl on checkout_tbl.email = success_tbl.email order by click_tbl.id desc";
                    $resFiltered = $this->conn->query($baseSql);
                    //print_r($resFiltered);
                }

                //$resFiltered = $this->conn->query($baseSql . $where);
                $recordsFiltered = $resFiltered->num_rows;

                $sql = $baseSql . $where . " limit $start, $length";
                //print_r($sql);
                $res = $this->conn->query($sql);
                //print_r($res);
                $data = [];
                if ($res && $res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        $data[] = $row;
                    }
                }

                return json_encode([
                    "draw" => $draw,
                    "recordsTotal" => $recordsTotal,
                    "recordsFiltered" => $recordsFiltered,
                    "data" => $data
                ]);
        }    

        public function prospectInsert($table,$column){
            $data = $this->loopRecursive($column);
            $column = implode(",",$data);
            //print_r($value);
            $sql = "insert into $table(session_id,email,phone,campaign_name,order_id,payload) values($column)";
            $res = $this->conn->query($sql);
            if($res === true){
                if($this->conn->affected_rows > 0){
                    return $res;
                }
            }else{
                return $this->conn->error;
            }
        }

        public function checkoutInsert($table,$column){
            $data = $this->loopRecursive($column);
            $column = implode(",",$data);
            //print_r( $column);
            $sql = "insert into $table(session_id,email,total_price,card_last_digit,order_id,payload) values($column)";
            $res = $this->conn->query($sql);
            if($res === true){
                if($this->conn->affected_rows > 0){
                    return $res;
                }
            }else{
                return $this->conn->error;
            }
        }

        public function upsellInsert($table,$column){
            $data = $this->loopRecursive($column);
            $column = implode(",",$data);
            //print_r($value);
            $sql = "insert into $table(session_id,email,order_id,total_price,payload) values($column)";
            $res = $this->conn->query($sql);
            if($res === true){
                if($this->conn->affected_rows > 0){
                    return $res;
                }
            }else{
                return $this->conn->error;
            }
        }

        public function successFetchData($table,$column){
            $data = $this->loopRecursive($column);
            $column = implode(",",$data);
            //print_r($value);
            $sql = "insert into $table(session_id,email,total_items,total_price,total_ship_price,order_id,payload) values($column)";
            $res = $this->conn->query($sql);
            if($res === true){
                if($this->conn->affected_rows > 0){
                    return $res;
                }
            }else{
                return $this->conn->error;
            }
        }

        public function destruct(){
            $this->conn->close();
        }

    }
?>