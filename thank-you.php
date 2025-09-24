<?php
    session_start();
    $order_id = $_SESSION["checkout"]["data"]["attributes"]["number"];
    $firstName = $_SESSION["checkout"]["data"]["attributes"]["ship_first_name"];
    $lastName = $_SESSION["checkout"]["data"]["attributes"]["ship_last_name"];
    $shippingAddress = $_SESSION["checkout"]["data"]["attributes"]["ship_address1"];
    $shippingCity = $_SESSION["checkout"]["data"]["attributes"]["ship_city"];
    $shippingState = $_SESSION["checkout"]["data"]["attributes"]["ship_state"];
    $shippingZip = $_SESSION["checkout"]["data"]["attributes"]["ship_postal_code"];
?>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
         name="viewport"
         />
      <meta content="ie=edge" http-equiv="X-UA-Compatible" />
      <meta name="google" content="notranslate" />
       <title>Preferred Brand Health</title>
      <link href="./assets/css/bootstrap-3.3.5.css" rel="stylesheet" />
      <link href="./assets/css/style-thank.css?ver=2.5" rel="stylesheet" />
       <link rel="stylesheet" type="text/css" href="./assets/css/app.css?v=<?php echo time(); ?>">
      <style>
      .logo-thank {
    max-width: 297px;
    padding: 10px 0px 0px;
    margin: 7px 0px 0px;
}
      </style>
   </head>
   <body>
      <div class="container" id="app" style="margin-top: -15px">
         <div
            class="row"
            style="border-bottom:1px solid #ccc;margin-bottom:15px;padding-bottom:5px;"
            >
            <div class="col-xs-12 col-sm-6">
               <div class="header-left clearfix">
               <img src="./assets/images/logo-red-dark.png" class="logo-thank" alt="img">
                <!--  <h2 class="productName">Shroom IQ</h2>-->
               </div>
            </div>
            <div class="col-xs-12 col-sm-6">
               <div class="header-right clearfix">
                  <h3 class="customer-support">
                     Customer Service Support: <br class="hidden-md hidden-lg" /><span
                        class="active local-phone"
                        style="font-weight:bold;color:#000;"><a href="tel:(833) 962 0196" style="color:#000">(833) 962 0196</a></span>
                  </h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="alert alert-success" id="success" role="alert">
                  <span class="lead text-center">
                  <strong>Thank You!</strong> Your order will arrive in 2 - 3 shipping days. <br />
                  <span style="color:red;"
                     >Due to overwhelming order volume, please allow a few days
                  additional processing prior to shipping.</span
                     >
                  </span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-8">
               <div class="row" style="margin-bottom:15px;">
                  <div class="col-md-2" style="padding-right:0px;">
                     <img
                        alt=""
                        class="checkmark hidden-xs anim-1"
                        height="91"
                        src="./assets/images/checkmark.svg"
                        width="92"
                        />
                  </div>
                  <div class="col-md-10">
                     <h1 style="margin-top:0px;">Your Order is <span class="text-success">Complete</span></h1>
                     Order Number: <span class="transactionId"><?=$order_id?></span><br />
                     Descriptor: <span class="descriptionId"> Crestline Nutrition</span><br />
                     Ordered On: <span class="date-container"><?= date('d M, Y'); ?></span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div
                        class="panel panel-default col-sm-12"
                        style="padding:0; background-color:#F5F5F5;"
                        >
                        <div class="panel-body col-sm-12" style="position: relative;">
                           <div class="col-sm-6 text-left">
                              <h4>Shipping Address</h4>
                              <span id="firstName"><?=$firstName?></span>
                              <span id="lastName"><?=$lastName?></span>
                              <br>
                              <span id="address"><?=$shippingAddress?></span>
                              <br>
                              <span id="city"><?=$shippingCity?></span>, <span id="state"><?=$shippingState?></span>
                              <span id="zipCode"><?=$shippingZip?></span>
                           </div>
                           <div style="position: absolute; top: -15px; right: 0; width: 50px; height: 66px;">
                              <img
                                 alt=""
                                 height="66"
                                 src="./assets/images/location-icon.svg"
                                 style="max-width:50px; max-height:66px;"
                                 width="50"
                                 />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row" id="invoice-top" style="display:none">
                  <div class="col-xs-4 col-sm-4">
                     <h4>Items in Your Order</h4>
                  </div>
                  <div class="col-xs-3 col-sm-3">
                     <h4>
                        <!-- Retail Price -->
                     </h4>
                  </div>
                  <div class="col-xs-3 col-sm-3">
                     <h4>
                        <!-- Your Price -->
                     </h4>
                  </div>
                  <div class="col-xs-2 col-sm-2">
                     <h4>Amount</h4>
                  </div>
                  <div class="col-xs-3 col-sm-2 rebate-col">
                     <h4>Rebate</h4>
                  </div>
               </div>
               <!--<div style="margin-top:15px;">
                  This charge will show up on your bank statement as: * Shroom IQ            <b class="descriptionId"></b>
               </div>-->
            </div>
            <div class="col-sm-4">
               <br />
               <span class="lead">
                  Customer Service Hours:
                  <hour>9:00 A.M to 5:00 P.M. MST Monday - Friday</hour>
               </span>
               <div class="lead" style="margin-top:15px;">
                  <i aria-hidden="true" class="fa fa-phone"></i>
                  <span
                     class="active local-phone"
                     style="font-weight:bold;color:#000;"
                     ></span
                     ><br />
               </div>
               Please feel free to contact customer service for any questions,
               comments or testimonials.
               <br /><br />
               <img
                  alt=""
                  class="center-block img-responsive"
                  height="104"
                  src="./assets/images/secureicons_14.png"
                  style="width:100%; max-width:360px; max-height:84px;"
                  width="446"
                  />
              <!-- <img
                  alt=""
                  class="left-block img-responsive hidden-xs"
                  height="131"
                  src="./assets/images/5STAR-rating.svg"
                  style="width:100%; max-width:130px; max-height:131px;"
                  width="130"
                  />-->
            </div>
         </div>
         <div class="row transaction-conf" style="display:none;">
            <div class="col-xs-12 col-sm-9">
               <div class="savings">
                  <h3>Your transaction summary:</h3>
                  <div id="upsalesTransaction">
                  </div>
                  <div class="descriptionTransaction">
                     <p>
                        Will appear on your credit card bank <br />
                        statement as: <span class="descriptionId">* Crestline Nutrition</span>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xs-0 col-sm-3"></div>
            <div class="thumbs-up">
               <img
                  alt=""
                  class="thumbsup"
                  src="./assets/images/thumbs-up.png"
                  />
            </div>
         </div>
         <div
            class="row"
            style="font-size:22px; line-height:28px; background-color:#F7C61B; margin:20px 10px 10px; padding:15px; text-align:center; border-radius: 15px;"
            >
            <div class="hidden-xs col-sm-1">
               <img
                  alt=""
                  src="./assets/images/star-icon.svg"
                  style="max-width:25px; max-height:24px;"
                  />
            </div>
            <div class="col-xs-12 col-sm-10">
               Customer Service Support: <br class="hidden-md hidden-lg" /><span
                  class="active local-phone"
                  style="font-weight:bold;color:#000;"
                  > <a href="tel:(833) 962 0196" style="color:#000">(833) 962 0196</a></span>
            </div>
            <div class="hidden-xs col-sm-1">
               <img
                  alt=""
                  src="./assets/images/star-icon.svg"
                  style="max-width:25px; max-height:24px;"
                  />
            </div>
         </div>
         <div id="footer"> 
            <div class="left">
               <span class="productName"></span> © Copyright <?= date('Y'); ?>             <p class="p2-ftr"> PreferredBrandHealth</p>
</div>
            <div class="right">
               <a href="javascript:void(0);" onClick="javascript:openNewWindow('page-terms.php','modal');" >Terms and Conditions</a>|
               <a href="javascript:void(0);" onClick="openNewWindow('page-privacy.php','modal');">Privacy Policy</a>|
               <a href="javascript:void(0);" onClick="openNewWindow('page-contact.php','modal');">Contact Us</a>
            </div>
            <div id="disclaimer" style="clear:both; padding:15px 0 25px 0;">
               <br />
               <center>
                  We are committed to maintaining the highest quality products and the
                  utmost integrity in business practices. All products sold on this
                  website are certified by Good Manufacturing Practices (GMP), which
                  is the highest standard of testing in the supplement industry.
               </center>
               <p></p>
               <p>
               <center>
                  Notice: The products and information found on this site are not
                  intended to replace professional medical advice or treatment.
                  These statements have not been evaluated by the Food and Drug
                  Administration. These products are not intended to diagnose,
                  treat, cure or prevent any disease. Individual results may vary.
               </center>
               <br />
               </p>
            </div>
         </div>
      </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script>
         $(function () {
            $.ajax({
                url: 'ajaxHandler.php',
                type: 'POST',
                data:{
                    requestType: 'successOrder'
                },
                success:function(response){
                    //return;
                    console.log(response);
                }
            });
             $(window).keydown(function (e) {
                 if (e.which === 27 && $('#error_handler_overlay').length) {
                     $('#error_handler_overlay').remove();
                 }
             });
         
             $(document).off('click', '#error_handler_overlay');
             $(document).on('click', '#error_handler_overlay', function () {
                 $(this).remove();
             });
         
             $(document).off('click', '#error_handler_overlay_close');
             $(document).on('click', '#error_handler_overlay_close', function () {
                 $('#error_handler_overlay').remove();
             });
         
             $(document).on('click', '#app_common_modal_close', function () {
                 //     alert('close');
                 $('#app_common_modal').remove();
             });
         });
         
         
            function openNewWindow(page_url, type, window_name, width, height, top, left, features) {
                if (!type) {
                    type = 'popup';
                }
         
                if (!width) {
                    width = 480;
                }
         
                if (!height) {
                    height = 480;
                }
         
                if (!top) {
                    top = 50;
                }
         
                if (!left) {
                    left = 50;
                }
         
                if (!features) {
                    features = 'resizable,scrollbars';
                }
         
                if (type == 'popup') {
                    var settings = 'height=' + height + ',';
                    settings += 'width=' + width + ',';
                    settings += 'top=' + top + ',';
                    settings += 'left=' + left + ',';
                    settings += features;
         
                    win = window.open(page_url, window_name, settings);
                    win.window.focus();
                } else if (type == 'modal') {
                    var html = '';
                    html += '<div id="app_common_modal">';
                    html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><iframe src="' + page_url + '" frameborder="0"></iframe></div>';
                    html += '</div>';
         
                    if (!$('#app_common_modal').length) {
         
                        $('body').append(html);
                    }
                    $('#app_common_modal').fadeIn();
                }
         
            }
      </script>
   </body>
</html>