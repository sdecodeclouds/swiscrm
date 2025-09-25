<?php
    session_start();
    if(isset($_SESSION) || !empty($_SESSION)){
        session_destroy();
    }

    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === "on" ? 'https://' : 'http://';
    $hostname = $_SERVER["HTTP_HOST"];
    $request_uri = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);

    $complete_url = $protocol.$hostname.$request_uri;
    //print_r($complete_url);

 
    $affid = (!empty($_GET["affid"]))?$_GET["affid"]:null;
    $c1 = (!empty($_GET["c1"]))?$_GET["c1"]:null;
    $c2 = (!empty($_GET["c2"]))?$_GET["c2"]:null;
    $c3 = (!empty($_GET["c3"]))?$_GET["c3"]:null;
    $sub5 = (!empty($_GET["sub5"]))?$_GET["sub5"]:null;
    $c5 = (!empty($_GET["c3"]))?$_GET["c3"]:null;
    $getKeys = ["affid","c1","c2","c3"];
    $arrCopied = $_GET;
    for($i = 0;$i<count($getKeys);$i++){
        if(isset($arrCopied[$getKeys[$i]])){
            unset($arrCopied[$getKeys[$i]]);
        }
    }
    $arrCopied["offer_url"] = $complete_url;
    $newArray = json_encode($arrCopied);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="googlebot" content="noindex" />
    <meta name="Slurp" content="noindex" />
    <link rel="icon" href="assets/images/Favicon.png?v=32" type="image/x-icon">
    <title>Blood Support</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;700;800&amp;family=Source+Sans+Pro&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.23.0/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        body{
            overflow-x: hidden;
        }
        .footer li{
  white-space: normal;          
  overflow-wrap: anywhere;      
  word-break: break-word;  
  white-space: nowrap;
}
.footer li a{
  white-space: normal;          
  overflow-wrap: anywhere;      
  word-break: break-word;  
}

.logo {
    float: none;
    max-width: 100%;
}
.p1img-bnr {
    display: table;
    margin: 6px auto 0;
}
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        font-family: Arial, sans-serif;
    }
    </style>
</head>

<body class="">

    <div id="wrapper">
        <div class="page-top">
            <div class="container">
                <p class="p1-pgtop"><span class="span1">WARNING:</span> Due to extremely high media demand, there is
                    limited supply of <span class="span1">Blood Support</span> in stock as of <span
                        class="span1 date-container"></span></p>
            </div>
        </div>

        <!--================-->
        <div class="banner-hm">
            <div class="container">
                <div class="bnrhm-lft a1">
                    <div class="bnrhm-lft-in1">
                        <img src="assets/images/logo-red-dark.png" class="logo">

                    </div>
                    <img src="assets/images/p1img-bnr.png" class="p1img-bnr bpimg">
                    <p class="p2-bnrhm">Safely &amp; Naturally</p>

                    <p class="p3-bnrhm desktop" style="font-size: 17px;">Helps Reduce Excess Pounds, Fast</p>

                    <p class="p4-bnrhm">#1 Formula on the marketplace for managing healthy blood levels.</p>

                    <ul class="points-bnrhm pointsdiv">
                        <li><span>Balances</span> Blood Sugar Levels</li>
                        <li><span>Lowers</span> Bad Cholesterol (LDL)</li>
                        <li><span>Increases</span> Good Cholesterol (HDL)</li>
                        <li><span>Reverses</span> Insulin Resistance</li>
                        <li><span>Regulates</span> Blood Pressure</li>
                    </ul>

                    <img src="assets/images/arwtxt-bnr.png" class="arwtxt-bnr bpimg2">

                    <img src="assets/images/Blood-Support-2.png" class="prod-bnr desktop" width="402">
                    <img src="assets/images/shp2-sec1.png" class="prod-bnr-add">
                    <div class="rvw-no" id="fades">
                        <p class="p5-bnrhm" style="display: block; opacity: 0.9527473742263972;"><img
                                src="assets/images/eye-bnr.png" class="eye-bnr">13 others are viewing this offer
                            right now!</p>
                        <p class="p5-bnrhm" style="display: none;"><img src="assets/images/eye-bnr.png"
                                class="eye-bnr">25 people bought this in the last hour!</p>
                    </div>

                </div>
                <!---------------------->
                <div class="bnrhm-rgt" id="formid">

                    <p class="p6-bnrhm"><img src="assets/images/flag-US.png" class="flag-bnrhm"><span>Internet Exclusive
                            Offer Available to <span id="stateName">American</span> Residents Only</span></p>
                    <div class="formdiv-bnrhm">
                        <div class="formdiv-bnrhm-top">
                            <h2 style="color:#f1ba10;">GET YOUR</h2>
                            <h2 style="color: white;">DISCOUNTED BOTTLES</h2>

                        </div>
                        <div class="form-bnrhm">
                            <form class="form123" id="theForm" method="POST" action="" autocomplete="on">

                                <!--<input type='hidden' name='AFFID' value='347DF8C5'><input type='hidden' name='c1'
                                    value='{affiliate_id}'><input type='hidden' name='c2' value='{sub1}'><input
                                    type='hidden' name='c3' value='{transaction_id}'><input type='hidden' name='c4'
                                    value='{sub2}'>-->
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="First Name" id="shipFirstName"
                                        name="fields_fname">
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Last Name"
                                        id="shipLastName" name="fields_lname">
                                </div>
                                <div class="form-holder">
                                    <input type="email" class="form-control" placeholder="Email" id="emailAddress"
                                        name="fields_email">
                                </div>
                                <div class="form-holder">
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phoneNumber"
                                        name="fields_phone">
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="Address" id="shipAddress1"
                                        name="fields_address1">
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" placeholder="City" id="shipCity"
                                        name="fields_city">
                                </div>

                                <div class="form-holder">
                                    <select id="shipState" name="fields_state" class="form-control">
                                        <option value="AG">Agrigento</option>
                                        <option value="AL">Alessandria</option>
                                        <option value="AN">Ancona</option>
                                        <option value="AO">Aosta</option>
                                        <option value="AR">Arezzo</option>
                                        <option value="AP">Ascoli Piceno</option>
                                        <option value="AT">Asti</option>
                                        <option value="AV">Avellino</option>
                                        <option value="BA">Bari</option>
                                        <option value="BT">Barletta-Andria-Trani</option>
                                        <option value="BL">Belluno</option>
                                        <option value="BN">Benevento</option>
                                        <option value="BG">Bergamo</option>
                                        <option value="BI">Biella</option>
                                        <option value="BO">Bologna</option>
                                        <option value="BZ">Bolzano</option>
                                        <option value="BS">Brescia</option>
                                        <option value="BR">Brindisi</option>
                                        <option value="CA">Cagliari</option>
                                        <option value="CL">Caltanissetta</option>
                                        <option value="CB">Campobasso</option>
                                        <option value="CI">Carbonia-Iglesias</option>
                                        <option value="CE">Caserta</option>
                                        <option value="CT">Catania</option>
                                        <option value="CZ">Catanzaro</option>
                                        <option value="CH">Chieti</option>
                                        <option value="CO">Como</option>
                                        <option value="CS">Cosenza</option>
                                        <option value="CR">Cremona</option>
                                        <option value="KR">Crotone</option>
                                        <option value="CN">Cuneo</option>
                                        <option value="EN">Enna</option>
                                        <option value="FM">Fermo</option>
                                        <option value="FE">Ferrara</option>
                                        <option value="FI">Firenze (Florence)</option>
                                        <option value="FG">Foggia</option>
                                        <option value="FC">Forlì-Cesena</option>
                                        <option value="FR">Frosinone</option>
                                        <option value="GE">Genova (Genoa)</option>
                                        <option value="GO">Gorizia</option>
                                        <option value="GR">Grosseto</option>
                                        <option value="IM">Imperia</option>
                                        <option value="IS">Isernia</option>
                                        <option value="AQ">L’Aquila</option>
                                        <option value="SP">La Spezia</option>
                                        <option value="LT">Latina</option>
                                        <option value="LE">Lecce</option>
                                        <option value="LC">Lecco</option>
                                        <option value="LI">Livorno</option>
                                        <option value="LO">Lodi</option>
                                        <option value="LU">Lucca</option>
                                        <option value="MC">Macerata</option>
                                        <option value="MN">Mantova (Mantua)</option>
                                        <option value="MS">Massa-Carrara</option>
                                        <option value="MT">Matera</option>
                                        <option value="VS">Medio Campidano</option>
                                        <option value="ME">Messina</option>
                                        <option value="MI">Milano (Milan)</option>
                                        <option value="MO">Modena</option>
                                        <option value="MB">Monza e Brianza</option>
                                        <option value="NA">Napoli (Naples)</option>
                                        <option value="NO">Novara</option>
                                        <option value="NU">Nuoro</option>
                                        <option value="OG">Ogliastra</option>
                                        <option value="OT">Olbia-Tempio</option>
                                        <option value="OR">Oristano</option>
                                        <option value="PD">Padova (Padua)</option>
                                        <option value="PA">Palermo</option>
                                        <option value="PR">Parma</option>
                                        <option value="PV">Pavia</option>
                                        <option value="PG">Perugia</option>
                                        <option value="PU">Pesaro e Urbino</option>
                                        <option value="PE">Pescara</option>
                                        <option value="PC">Piacenza</option>
                                        <option value="PI">Pisa</option>
                                        <option value="PT">Pistoia</option>
                                        <option value="PN">Pordenone</option>
                                        <option value="PZ">Potenza</option>
                                        <option value="PO">Prato</option>
                                        <option value="RG">Ragusa</option>
                                        <option value="RA">Ravenna</option>
                                        <option value="RC">Reggio Calabria</option>
                                        <option value="RE">Reggio Emilia</option>
                                        <option value="RI">Rieti</option>
                                        <option value="RN">Rimini</option>
                                        <option value="RM">Roma (Rome)</option>
                                        <option value="RO">Rovigo</option>
                                        <option value="SA">Salerno</option>
                                        <option value="SS">Sassari</option>
                                        <option value="SV">Savona</option>
                                        <option value="SI">Siena</option>
                                        <option value="SR">Siracusa</option>
                                        <option value="SO">Sondrio</option>
                                        <option value="TA">Taranto</option>
                                        <option value="TE">Teramo</option>
                                        <option value="TR">Terni</option>
                                        <option value="TO">Torino (Turin)</option>
                                        <option value="TP">Trapani</option>
                                        <option value="TN">Trento</option>
                                        <option value="TV">Treviso</option>
                                        <option value="TS">Trieste</option>
                                        <option value="UD">Udine</option>
                                        <option value="VA">Varese</option>
                                        <option value="VE">Venezia (Venice)</option>
                                        <option value="VB">Verbano-Cusio-Ossola</option>
                                        <option value="VC">Vercelli</option>
                                        <option value="VR">Verona</option>
                                        <option value="VV">Vibo Valentia</option>
                                        <option value="VI">Vicenza</option>
                                        <option value="VT">Viterbo</option>
                                    </select>
                                </div>


                                <div class="form-holder">
                                    <input type="text" Placeholder="Zipcode" class="form-control" id="shipPostalCode"
                                        name="fields_zip" type="tel">
                                </div>
                                <input class="btn-bnrhm pulse clk-btn" src="assets/images/btn-ordr.png" type="image">
                                <img src="assets/images/mcfee.png" class="security-bnrhm">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--========section1========-->
        <div class="section1" id="content-desktop">
            <div class="container">
                <div class="sec1-in">
                    <p class="hdng1 p1-sec1">Do You Suffer <br>From Any of The Following Symptoms</p>
                    <div class="points1-sec1">
                        <img src="assets/images/img-points1-sec1.png" class="img-points1-sec1">
                        <ul>
                            <li>Have you been diagnosed with a heart problem?</li>
                            <li>Have you been diagnosed with Type <br>2 Diabetes?</li>
                            <li>Do you suffer from high blood pressure &amp; blood sugar? </li>
                            <li>Are you overweight <br>for your age &amp; body type?</li>
                        </ul>
                    </div>
                    <p class="p2-sec1"><span class="span1">If you answered <span class="span2">"Yes"</span>to any of
                            these questions!</span>
                        <b>Blood Support </b> Can Reduce Your<br>
                        <span class="span3"><span class="span4">Blood Pressure</span> &amp; Help You <span
                                class="span4">Lose Excess Weight</span> Fast &amp; Effectively!</span>
                    </p>

                    <div class="sec1-in1">
                        <p class="hdng1 p3-sec1"><span class="span1">Introducing </span> Blood Support </p>

                        <div class="hdngbrdrdiv hdngbrdrdiv-sec1"><img src="assets/images/shp-hdngbrdr.png"
                                class="shp-hdngbrdr shp1-hdngbrdr"></div>

                        <p class="p4-sec1">The <b> Blood Support </b> is a never before seen revolutionary
                            formula to manage blood pressure and blood sugar levels better than any other product in the
                            marketplace. Simply put, you will never see another product like this out there.<br><br>

                            We've sourced the most rare 100% natural ingredients that have been scientifically PROVEN to
                            manage high blood pressure and promote overall healthy blood levels, and combined them into
                            a breakthrough formula that is now going viral.</p>

                        <p class="p5-sec1"><span>Triple Action Formula</span> <br>For Rapid Action &amp; Results</p>

                        <div class="points2-sec1">
                            <ul>
                                <li>Regulates Blood Pressure</li>
                                <li>Manages Blood Sugar Levels</li>
                                <li>Reduces Excess Weight &amp; Obesity</li>
                            </ul>
                        </div>
                        <img src="assets/images/Blood-Support-2.png" class="prod-sec1" width="363">
                        <img src="assets/images/shp1-sec1.png" class="shp1-sec1">
                    </div>

                </div>
            </div>
        </div>

        <div id="content-mobile">
            <div class="sec2-bg">
                <p class="s2-hdg">Do You Suffer From Any of The Following Symptoms</p>
                <img src="assets/images/comn-hdg-bar.png" alt="" class="comn-hdg-bar">
                <ul class="s2-list">
                    <li class="smallerFont">
                        <img src="assets/images/sec2-list-img1.png" alt="" class="oldpplImgs">
                        Have you been diagnosed with a heart problem?
                    </li>
                    <li class="smallerFont">
                        <img src="assets/images/sec2-list-img2.png" alt="" class="oldpplImgs">
                        Have you been diagnosed with Type 2 Diabetes?
                    </li>
                    <li class="smallerFont">
                        <img src="assets/images/sec2-list-img3.png" alt="" class="oldpplImgs">
                        Do you suffer from high blood pressure &amp; blood sugar?
                    </li>
                    <li class="smallerFont">
                        <img src="assets/images/sec2-list-img4.png" alt="" class="oldpplImgs">
                        Have you been diagnosed with a heart problem?
                    </li>
                </ul>
            </div>

            <div class="sec3-bg">
                <img src="assets/images/sec3-bar.png" alt="" class="sec3-bar">
                <p class="sec3-txt1">If you answered <span>"Yes"</span> to any of these questions! </p>
                <p class="sec3-txt2"><strong>Blood Balance Advanced Formula</strong> Can Reduce Your <strong><span>Blood
                            Pressure</span> &amp; Help You <span>Lose Excess Weight</span> Fast &amp;
                        Effectively!</strong> </p>
                <p class="comn-hdg"><span>Introducing</span><br>Blood Balance Advanced Formula</p>
                <img src="assets/images/comn-hdg-bar.png" alt="">
                <div class="sec3-img">
                    <img src="assets/images/prod3-new.png" alt="" width="297">
                </div>
                <p class="comn-txt">The <strong> Blood Balance Advanced Formula</strong> is a never before seen
                    revolutionary formula to manage blood pressure and blood sugar levels better than any other product
                    in the marketplace. Simply put, you will never see another product like this out there.<br><br>

                    We�ve sourced the most rare 100% natural ingredients that have been scientifically PROVEN to manage
                    high blood pressure and promote overall healthy blood levels, and combined them into a breakthrough
                    formula that is now going viral.</p>
                <p class="sec3-txt3"><span>Triple Action Formula</span><br>For Rapid Action &amp; Results</p>
                <ul class="sec3-list">
                    <li>Regulates Blood Pressure</li>
                    <li>Manages Blood Sugar Levels</li>
                    <li>Reduces Excess Weight &amp; Obesity</li>
                </ul>
            </div>

        </div>
        <!--========cta========-->
        <div class="cta" id="content-desktop">
            <div class="container">
                <div class="cta-in">
                    <div class="cta-lft">
                        <p class="p1-cta"><span>Are You Ready</span> To Restore Your Health?</p>
                        <p class="p2-cta">Feel the difference <b>Blood Support </b> makes!</p>
                    </div>
                    <a href="#formid"><img src="assets/images/btn-ordr.png" class="btn-ordr-cta pulse"></a>
                </div>
            </div>
        </div>

        <div class="strip" id="content-mobile">
            <p class="strip-txt1"><span>Are You Ready</span><br>To Restore Your Health?</p>
            <p class="strip-txt2">Feel the difference Blood Balance Advanced Formula makes!</p>
        </div>


        <!--========section2========-->
        <div class="section2" id="content-desktop">
            <div class="container">
                <div class="sec2-in">
                    <p class="hdng1 p1-sec2"><span class="span1">Benefits of </span> <br>Blood Support</p>
                    <div class="hdngbrdrdiv hdngbrdrdiv-sec2"><img src="assets/images/shp-hdngbrdr.png"
                            class="shp-hdngbrdr shp2-hdngbrdr"></div>

                    <p class="p2-sec2">When you start taking the <b>Blood Support </b> right now, here are some
                        of the incredible benefits you'll start experiencing right away...</p>

                    <div class="points-bnfts">
                        <div class="points-in-bnfts">
                            <div class="bnfts-lftin">

                                <p class="p3-sec2"><img src="assets/images/ic1-sec2.png" class="ic1-sec2">Reduces
                                    <span>Blood Pressure</span>
                                </p>
                                <p class="p4-sec2">The <b>Blood Support</b> exclusive blend of the world’s most
                                    exclusive ingredients that are clinically proven to lower high blood pressure and
                                    reduce the risk of <br>heart disease.</p>
                            </div>

                            <div class="bnfts-rgtin">

                                <p class="p3-sec2"><img src="assets/images/ic4-sec2.png" class="ic2-sec2">Increase
                                    <span>Good Cholesterol</span>
                                </p>
                                <p class="p4-sec2">In order keep your blood levels healthy and sustain, we made sure to
                                    include important ingredients that promote good cholesterol (HDL Cholesterol) so you
                                    can constantly keep your blood pressure levels in a healthy state.</p>
                            </div>
                        </div>
                        <div class="points-in-bnfts mrgn1-sec2">

                            <div class="bnfts-lftin">

                                <p class="p3-sec2"><img src="assets/images/ic2-sec2.png" class="ic1-sec2">Regulates
                                    <span>Blood Sugar</span>
                                </p>
                                <p class="p4-sec2">The <b>Blood Support </b> is by far the absolute best
                                    formula for controlling blood sugar and reducing the risk of Type 2 Diabetes better
                                    than anything else in the market <br>utilizing the specific combination of
                                    ingredients and herbs inside this cutting edge formula.
                                </p>
                            </div>
                            <div class="bnfts-rgtin">

                                <p class="p3-sec2"><img src="assets/images/ic5-sec2.png" class="ic2-sec2">Combats
                                    <span>Insulin Resistance</span>
                                </p>
                                <p class="p4-sec2">The main cause of Type 2 Diabetes is <br>becoming insulin resistance.
                                    The Blood Support <br> combats insulin <br>resistance in a way no other
                                    product has <br>done in the industry.</p>
                            </div>
                        </div>

                        <div class="points-in-bnfts">
                            <div class="bnfts-lftin">

                                <p class="p3-sec2"><img src="assets/images/ic3-sec2.png" class="ic1-sec2">Lowers
                                    <span>Bad Cholesterol</span>
                                </p>
                                <p class="p4-sec2">The clinically proven natural ingredients inside the <b>
                                        Blood Support </b> have been shown to lower bad cholesterol (LDL cholesterol)
                                    without the nasty side effects you see with statins.</p>
                            </div>
                            <div class="bnfts-rgtin">

                                <p class="p3-sec2"><img src="assets/images/ic6-sec2.png" class="ic2-sec2">Supports
                                    <span>Weight Loss</span>
                                </p>
                                <p class="p4-sec2">On top of the blood health benefits of the <b>Blood Support
                                        ,</b> it also promotes healthy weight loss by boosting your natural fat burning
                                    metabolism so you can be confident that you�ll live a longer healthier life without
                                    weight issues.</p>
                            </div>
                        </div>
                        <img src="assets/images/prod2-new.png" class="prod-sec2" width="374">
                    </div>
                </div>
            </div>
        </div>

        <div id="content-mobile">

        </div>

        <!--========cta========-->
        <div class="cta" id="content-desktop">
            <div class="container">
                <div class="cta-in">
                    <div class="cta-lft">
                        <p class="p1-cta"><span>Are You Ready</span> To Restore Your Health?</p>
                        <p class="p2-cta">Feel the difference <b>Blood Support </b> makes!</p>
                    </div>
                    <a href="#formid"><img src="assets/images/btn-ordr.png" class="btn-ordr-cta pulse"></a>
                </div>
            </div>
        </div>

        <!--=======section3=========-->
        <div class="section3">
            <div class="container">
                <div class="sec2-in">
                    <p class="hdng1 p1-sec3"><span class="span1">Powerful Ingredients of </span> <br>Blood
                        Support </p>
                    <div class="hdngbrdrdiv hdngbrdrdiv-sec2"><img src="assets/images/shp-hdngbrdr.png"
                            class="shp-hdngbrdr shp2-hdngbrdr"></div>

                    <p class="p2-sec3">Here are some of the cutting edge ingredients inside the <strong> Blood
                            Support </strong><br>that are clinically proven to provide results!</p>

                    <div class="points-sec3">
                        <img src="assets/images/points-img-sec3.png" class="points-img-sec3">
                        <p class="p3-sec3 po1-sec3 desktop"><span class="span1"><span>White</span> Mulberry
                                Leaf</span>Shown to reduce the risk of diabetes and decreases high blood sugar levels
                        </p>
                        <p class="p3-sec3 po2-sec3 juniper"><span class="span1"><span>Juniper</span>
                                Berry</span>Controls inflammation levels and promotes weight loss</p>
                        <p class="p3-sec3 po3-sec3 padd1-sec3 desktop"><span class="span1"><span>Biotin
                                    +</span>Chromium</span>Lowers high blood pressure levels and increases natural
                            energy levels</p>
                        <p class="p3-sec3 po4-sec3 padd2-sec3"><span
                                class="span1"><span>Berberine</span>Extract</span>Lowers cholesterol levels and reduces
                            excessive glucose production in the liver</p>
                        <p class="p3-sec3 po5-sec3"><span class="span1"><span>Bitter</span>Melon</span>Lowers bad
                            cholesterol and increases good cholesterol</p>
                    </div>
                    <div class="clearall"></div>
                    <div class="ingrdiv-sec3">
                        <img src="assets/images/ingr-sec3.png" class="ingr-sec3">
                        <p class="p4-sec3"><span>Cinnamon</span> Bark Powder</p>
                        <img src="assets/images/brdr-ingr-sec3.png" class="brdr-ingr-sec3">
                        <div class="clearall"></div>
                        <p class="p5-sec3">Controls insulin levels and helps with insulin resistance</p>
                    </div>
                    <p class="p6-sec3 natImg"><span class="span1"><span>100%</span> Made from</span><span
                            class="span2">All Natural</span><span class="span3">Ingredients</span></p>
                </div>
            </div>
        </div>

        <!--========cta========-->
        <div class="cta">
            <div class="container">
                <div class="cta-in">
                    <div class="cta-lft">
                        <p class="p1-cta"><span>Are You Ready</span> To Restore Your Health?</p>
                        <p class="p2-cta">Feel the difference <b>Blood Support </b> makes!</p>
                    </div>
                    <a href="#formid"><img src="assets/images/btn-ordr.png" class="btn-ordr-cta pulse"></a>
                </div>
            </div>
        </div>

        <!--=======section4=========-->
        <div class="section4">
            <div class="container">
                <div class="sec4-in">
                    <p class="hdng1 p1-sec4"><span class="span1">Real People . Real Results .</span><br> Blood
                        Support </p>
                    <div class="hdngbrdrdiv hdngbrdrdiv-sec2"><img src="assets/images/shp-hdngbrdr.png"
                            class="shp-hdngbrdr shp2-hdngbrdr"></div>

                    <p class="p2-sec4">Here�s what everyone else is saying about the incredible results of the
                        <b>Blood Support </b>
                    </p>
                    <div class="testi-div">
                        <div class="testi-in-div">
                            <p class="p3-sec4"><img src="assets/images/img1-testi.png" class="img-testi"><span>Works
                                    wonders! Helped me get my BP
                                    under control.</span></p>
                            <img src="assets/images/shp-testi.png" class="shp-testi">
                            <p class="p4-sec4">"I started taking <strong>Blood Support </strong> about 30 days
                                ago. My blood pressure has not only been stable but also in the perfect range after
                                almost 1 year. My last reading was 120/78, whereas prior to supplementation it was 140 -
                                160 over 90."</p>
                            <p class="p5-sec4"><span class="span1"><span class="span2">Heather,</span> NY</span><img
                                    src="assets/images/stars-testi.png" class="stars-testi"></p>
                        </div>

                        <div class="testi-in-div mrgn1-sec4">
                            <p class="p3-sec4"><img src="assets/images/img2-testi.png" class="img-testi"><span>One
                                    solution for a wide range of health
                                    concerns!</span></p>

                            <img src="assets/images/shp-testi.png" class="shp-testi">
                            <p class="p4-sec4">"<strong>Blood Support </strong> helps you control blood sugar
                                and blood pressure while also keeping your weight in check, all at once. My wife and I
                                have been using this product for over 3 months and can't recommend it enough. "</p>
                            <p class="p5-sec4"><span class="span1"><span class="span2">Chris A,</span> FL</span><img
                                    src="assets/images/stars-testi.png" class="stars-testi"></p>
                        </div>

                        <div class="testi-in-div">
                            <p class="p3-sec4"><img src="assets/images/img3-testi.png" class="img-testi"><span>All
                                    natural solution for
                                    hypertension </span></p>
                            <img src="assets/images/shp-testi.png" class="shp-testi">
                            <p class="p4-sec4">"What makes <strong>Blood Support </strong> the best product out
                                there is its all-natural ingredient matrix. You can take the supplement with complete
                                confidence, knowing it is free from any harmful fillers, synthetics or chemicals."</p>
                            <p class="p5-sec4"><span class="span1"><span class="span2">Rebecaa S,</span> TX</span><img
                                    src="assets/images/stars-testi.png" class="stars-testi"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--========cta========-->
        <div class="cta desktop">
            <div class="container">
                <div class="cta-in">
                    <div class="cta-lft">
                        <p class="p1-cta"><span>Are You Ready</span> To Restore Your Health?</p>
                        <p class="p2-cta">Feel the difference <b>Blood Support</b> makes!</p>
                    </div>
                    <a href="#formid"><img src="assets/images/btn-ordr.png" class="btn-ordr-cta pulse"></a>
                </div>
            </div>
        </div>

        <!--========section5========-->
        <div class="section5">
            <div class="container">
                <div class="sec5-in desktop">
                    <img src="assets/images/logo-red-dark.png" class="logo-sec5">

                    <img src="assets/images/p1img-bnr.png" class="p1img-sec5 desktop">
                    <p class="p2-sec5 desktop">Safely &amp; Naturally</p>

                    <p class="p3-sec5 desktop" style="font-size: 17px;">Helps Reduce Excess Pounds, Fast</p>

                    <p class="p4-bnrhm desktop">#1 Formula on the marketplace for managing healthy blood levels.</p>

                    <ul class="points-sec5 desktop">
                        <li><span>Balances</span> Blood Sugar Levels</li>
                        <li><span>Lowers</span> Bad Cholesterol (LDL)</li>
                        <li><span>Increases</span> Good Cholesterol (HDL)</li>
                        <li><span>Reverses</span> Insulin Resistance</li>
                        <li><span>Regulates</span> Blood Pressure</li>
                    </ul>
                    <a href="#formid"><img src="assets/images/btn-ordr.png" class="btn-sec5 pulse"></a>
                    <img src="assets/images/prod3-new.png" class="prod-sec5" width="429">
                    <img src="assets/images/seals-sec5.png" class="seals-sec5">
                </div>


            </div>
        </div>
    </div>

    <!-- footer section -->
    <div class="footer">
        <div class="container">
            <p class="p1-ftr">This product has not been evaluated by the FDA. This product is not intended to diagnose,
                treat, cure or prevent any disease.<br> Results in description and testimonials may not be typical
                results and individual results may vary.<br> This product is intended to be used in conjunction with a
                healthy diet and regular exercise.<br> Consult your physician before starting any diet, exercise
                program, and taking any diet pill to avoid any health issues.</p>

            <ul class="list-ftr">
                <li>
                    <a href="javascript:void(0);"
                        onClick="openNewWindow('./static/partials/popup-privacy.php','modal');">Privacy Policy </a>
                </li>
                <li>
                    <a href="javascript:void(0);"
                        onClick="openNewWindow('./static/partials/popup-terms.php','modal');">Terms and Conditions </a>
                </li>
                <li>
                    <a href="javascript:void(0);"
                        onClick="openNewWindow('./static/partials/popup-wireless.php','modal');">Wireless Policy</a>
                </li>

            </ul>
            <br>

            <ul style="margin-bottom: 15px">
                <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4466762/"
                        target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4466762/</a></li>
            </ul>
            <p class="p2-ftr">2025 &#169; PreferredBrandHealth Support</p>

        </div>

    </div>
    <!-- end footer section -->

    <!--popup loading wrapper-->
    <section class="popup-loading-wrapper" style="display: none">
        <div class="popup">
            <figure class="product-image"></figure>
            <p>Reserving Your Bottle Of</p>
            <h2>Blood Support</h2>
            <img src="static/images/icon-loading.png" alt="" class="loading-image" />
        </div>
    </section>

    <div id="loader" style="display:none;">
        <img src="https://i.gifer.com/ZZ5H.gif" width="50" />
        <p>Processing...</p>
    </div>
    <!--end popup loading wrapper-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.23.0/dist/sweetalert2.all.min.js"></script>
    <script>
        $(window).on('load',function(){
            $.ajax({
                url: "ajaxHandler.php",
                type: "POST",
                data: {
                    requestType: "clickHandler",
                    c1: "<?=$c1?>",
                    c2: "<?=$c2?>",
                    c3: "<?=$c3?>",
                    c5: "<?=$c5?>",
                    affid: "<?=$affid?>",
                    sub5: "<?=$sub5?>",
                    additionalParams: '<?=$newArray?>'
                },
                success:function(response){
                    console.log(response);
                }
            });
        })
        
        $(".clk-btn").click(function(e){
            e.preventDefault();
            //console.log("Welcome");
            let shipFirstName = $("#shipFirstName").val();
            let shipLastName = $("#shipLastName").val();
            let emailAddress = $("#emailAddress").val();
            let phoneNumber = $("#phoneNumber").val();
            let shipAddress1 = $("#shipAddress1").val();
            let shipCity = $("#shipCity").val();
            let shipState = $("#shipState").val();
            let shipPostalCode = $("#shipPostalCode").val();
            let arr = [];
            // alert(shipFirstName+shipLastName+emailAddress+phoneNumber+shipAddress1+shipCity+shipState+shipPostalCode)
            if(shipFirstName == ""){
                arr.push("Please insert your first name!");
            }
            if(shipLastName == ""){
                arr.push("Please insert your last name!");
            }
            if(emailAddress == ""){
                arr.push("Please insert your email id!");
            }
            if(phoneNumber == ""){
                arr.push("Please insert your phone number!");
            }
            if(shipAddress1 == ""){
                arr.push("Please insert your shipping address!");
            }
            if(shipCity == ""){
                arr.push("Please insert your shipping city!");
            }
            if(shipState == ""){
                arr.push("Please select your shipping state!");
            }
            if(shipPostalCode == ""){
                arr.push("Please select your shipping zip!");
            }
            //alert(arr);
            if(arr.length > 0){
                let dataArray = arr.join("<br>");
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    html: dataArray
                });
                //alert(arr.join("\n"));
            } else{
                $.ajax({
                    url: 'ajaxHandler.php',
                    type: 'POST',
                    data: {
                        requestType: 'checkEmail',
                        email: emailAddress,
                        table: 'prospect_tbl'
                    },
                    success: function(response){
                        // console.log(typeof response);
                        res = JSON.parse(response);
                        count = parseInt(res.count);
                        //return;
                        if(count === 0){
                            //console.log("first");
                            $.ajax({
                                url: 'ajaxHandler.php',
                                type: 'POST',
                                data: {
                                    requestType: 'prospect',
                                    shipFirstName: shipFirstName,
                                    shipLastName: shipLastName,
                                    emailAddress: emailAddress,
                                    phoneNumber: phoneNumber,
                                    shipAddress1: shipAddress1,
                                    shipCity: shipCity,
                                    shipState: shipState,
                                    shipPostalCode: shipPostalCode
                                },
                                beforeSend: function(){
                                    $("#loader").show();
                                },
                                success: function(response){
                                    //return false;
                                    $("#loader").hide();
                                    const queryString = window.location.search;
                                    window.location.href = "checkout.php"+queryString;
                                    // var result = JSON.parse(response);
                                    // console.log("API Response:", result);
                                }
                            })
                        }else{
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Email Exists. Please try with different one!"
                            });
                            //alert("Email Exists. Please try with different one!");
                            return false;
                        }
                    }
                })
            }
        })
    </script>
</body>
</html>

