<!DOCTYPE html>
<html>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <title>Preferred Brand Health</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="googlebot" content="noindex" />
      <meta name="Slurp" content="noindex" />
      
      
      <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;700;800&amp;family=Source+Sans+Pro&amp;display=swap" rel="stylesheet">
      <link href="./assets/css/app.css?v=<?php echo time(); ?>" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="./assets/css/style-new.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/checkout-new.css">
      <link rel="stylesheet" type="text/css" href="./assets/css/inline-style.css?v=<?php echo time(); ?>">
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.23.0/dist/sweetalert2.min.css" rel="stylesheet">
      <style>
     button.btn-bnrhm1.pulse.chnginput {
    cursor: pointer;
}
    .form-holder input, .form-holder select {padding: 0 4px;}  
@media screen and (min-width: 768px) and (max-width:999px) {
    .billing-form.billing-info {
    margin: 0 auto;}
    .form-holder {
    margin: 8px auto;
    display: table;
    text-align: center;
    width: 286px;
}
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
   <body class="checkout">
      <div class="chk-bg">
         <div class="container">
            <div class="ckh-in">
               <div class="chk-top-row">
                  <img src="./assets/images/logo-red-dark.png" class="logo" alt="img">
                  <img src="./assets/images/chk-stps.png" class="chk-stps" alt="img">
               </div>
               <div class="red-bar">
                  <p>Your Special 40% OFF Savings with FREE Shipping discount expires in: <img src="./assets/images/clk.png" class="clk" alt="img">
                     <span class="count-up" id="stopwatch">09:58</span>
                  </p>
               </div>
               <div class="pakage-div">
                  <div class="pkg-lft">
                     <p class="p1-chk">SELECT YOUR PACKAGE</p>
                     <div class="pkg active baseProduct product1" id="pkg1" data-campaign-id = "5">
                        <div class="pkg-top-chk">
                           <p class="p1-pkgchk">Buy 3 Bottles + <span>Get 2 Free</span></p>
                           <p class="p2-pkgchk">FREE SHIPPING</p>
                        </div>
                        <div class="pkg-btm-chk">
                           <div class="pkg-prod-chk">
                              <img src="./assets/images/btl-5.png" class="btl-5" width="349">
                           </div>
                           <div class="pkg-prc-chk">
                              <div class="pkg-prcin-chk">
                                 <p class="p4-pkgchk">5 bottles</p>
                                 <div style="padding:15px;"></div>
                                 <p style="font-size:13px;font-weight:bold;font-family: 'Open Sans', sans-serif;">RETAIL <strike>$399.92</strike></p>
                                 <div style="padding:1px;"></div>
                                 <p class="p5-pkgchk">$47.99<sub>/each</sub></p>
                                 <div class="btn-div-chk" id="btn-pkg1"><img id="sel_pkg3" src="./assets/images/select-act.png"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pkg product2 baseProduct" id="pkg2" data-campaign-id = "4">
                        <div class="pkg-top-chk">
                           <p class="p1-pkgchk">Buy 2 Bottles + <span>Get 1 Free</span></p>
                           <p class="p2-pkgchk">FREE SHIPPING</p>
                        </div>
                        <div class="pkg-btm-chk">
                           <div class="pkg-prod-chk">
                              <img src="./assets/images/btl-3.png" class="btl-5" width="349">
                           </div>
                           <div class="pkg-prc-chk">
                              <div class="pkg-prcin-chk">
                                 <p class="p4-pkgchk">3 bottles</p>
                                 <div style="padding:15px;"></div>
                                 <p style="font-size:13px;font-weight:bold;font-family: 'Open Sans', sans-serif;">RETAIL <strike>$389.93</strike></p>
                                 <div style="padding:1px;"></div>
                                 <p class="p5-pkgchk">$51.99<sub>/each</sub></p>
                                 <div class="btn-div-chk" id="btn-pkg2"><img id="sel_pkg2" src="./assets/images/select.png"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pkg product3 baseProduct" id="pkg3" data-campaign-id = "3">
                        <div class="pkg-top-chk">
                           <p class="p1-pkgchk">Buy 1 Bottle + <span>Get 1 Free</span></p>
                           <p class="p2-pkgchk">FREE SHIPPING</p>
                        </div>
                        <div class="pkg-btm-chk">
                           <div class="pkg-prod-chk">
                              <img src="./assets/images/btl-1.png" class="btl-5" width="349">
                           </div>
                           <div class="pkg-prc-chk">
                              <div class="pkg-prcin-chk">
                                 <p class="p4-pkgchk">2 bottles</p>
                                 <div style="padding:15px;"></div>
                                 <p style="font-size:13px;font-weight:bold;font-family: 'Open Sans', sans-serif;">RETAIL <strike>$239.88</strike></p>
                                 <div style="padding:1px;"></div>
                                 <p class="p5-pkgchk">$59.97<sub>/each</sub></p>
                                 <div class="btn-div-chk" id="btn-pkg3"><img id="sel_pkg1" src="./assets/images/select.png"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="risk-free-div desktop">
                        <p class="risk-p1">YOU'RE PROTECTED BY OUR 30-DAYS MONEY BACK GUARANTEE!</p>
                        <p class="risk-p2">Simply put, if you don’t see the results you wish for, send us an email or give us a call within the next month and we will return everything you paid. That's how confident we are in the quality of our products.</p>
                     </div>
                  </div>
                  <div class="rgt-div-pkg">
                     <div class="rgt-chk">
                        <div class="frm-top">
                           <img src="./assets/images/frm-top.png" alt="img">
                        </div>
                        <div class="timer-bg">
                           <img src="./assets/images/timer-bg-brdr.jpg" class="timer-bg-brdr">
                           <div class="timer-bgin">
                              <img src="./assets/images/timeric.png" class="timeric-bnrhm">
                              <div class="clock flip-clock-wrapper">
                                 <span class="flip-clock-divider hours"><span class="flip-clock-label">Hours</span></span>
                                 <ul class="flip ">
                                    <li class="flip-clock-before">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li class="flip-clock-active">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="flip ">
                                    <li class="flip-clock-before">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li class="flip-clock-active">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                                 <span class="flip-clock-divider minutes"><span class="flip-clock-label">Minutes</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span>
                                 <ul class="flip  play">
                                    <li class="flip-clock-before">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">1</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">1</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li class="flip-clock-active">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="flip  play">
                                    <li class="flip-clock-before">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li class="flip-clock-active">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                                 <span class="flip-clock-divider seconds"><span class="flip-clock-label">Seconds</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span>
                                 <ul class="flip  play">
                                    <li class="flip-clock-before">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li class="flip-clock-active">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">5</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">5</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="flip  play">
                                    <li class="flip-clock-before">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">0</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li class="flip-clock-active">
                                       <a href="#">
                                          <div class="up">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                          <div class="down">
                                             <div class="shadow"></div>
                                             <div class="inn">9</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <img src="./assets/images/timer-bg-brdr.jpg" class="timer-bg-brdr">
                        </div>
                        <div class="form-in-chk">
                           <form class="form-popup" id="checkout" autocomplete="on" method="post" action="ajax.php?method=new_order_prospect" name="checkout_form" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8">
                           
                              <input type="hidden" name="campaigns[1][id]" value="5" id="dynamic_camp">
                              
                           <p style="color: #fff;margin: 10px 0 10px;">PAYMENT INFORMATION</p>
                           <p id="errorText"></p>
                           <div id="isbillingsame" style="text-align: center;">
                              <style>.payment_as_shipping_label {
                                 display: flex;
                                 align-items: center;
                                 justify-content: center;
                                 }
                                 .payment_as_shipping_label input {
                                 margin-right: 5px;
                                 }
                              </style>
                              <label
                                 for="payment_as_shipping" class="payment_as_shipping_label">
                              <input type="checkbox" name="payment_as_shipping" class="billing" id="togData" checked="checked" value="yes" />
                              <span>Billing same as Shipping</span>
                              </label>
                              <p style="display:none">
                                    <input type="radio" name="billingSameAsShipping" id="sameAddress"
                                        value="yes" checked="checked"> YES
                                    <input type="radio" name="billingSameAsShipping" id="diffAddress"
                                        value="no"> NO
                             </p>
                           </div>
                           <!--<div class="billing-form billing-info" style="display: none;">
                              <div class="form-holder">
                                 <label>First Name: </label>
                                 <input
                                    type="text" id="firstName" name="billingFirstName" placeholder="Billing First Name" class="form-control" data-error-message="Please enter your billing first name!"/>
                                 <div class="accept-icon"></div>
                              </div>
                              <div class="form-holder">
                                 <label>Last Name: </label>
                                 <input
                                    type="text" id="lastName" name="billingLastName" placeholder="Billing Last Name" class="form-control" autocomplete="family-name" data-error-message="Please enter your billing last name!"/>
                                 <div class="accept-icon"></div>
                              </div>
                              <div class="form-holder">
                                 <label> Address :</label>
                                 <input
                                    type="text" name="billingAddress1" placeholder="Billing Address" class="form-control" data-error-message="Please enter your billing address!"/>
                                 <div class="accept-icon"></div>
                              </div>
                              <div class="form-holder">
                                 <label> City :</label>
                                 <input type="text" name="billingCity" placeholder="City" class="form-control" autocomplete="address-level2" data-error-message="Please select your billing city!"/>
                                 <div class="accept-icon"></div>
                              </div>
                               <div class="form-holder" style="display:none;" >
                                     <label> Country :</label>
                              <select name="billingCountry" class="field-all form-control" onmousedown="(function(e){ e.preventDefault(); })(event, this)" data-selected="US" data-error-message="Please select your billing country!" ></select>
                              </div>
                              <div class="form-holder">
                                 <label>State: </label>
                                 <input type="text" name="billingState" placeholder="Your State" class="form-control" data-error-message="Please select your billing state!" readonly>
                                
                                 <div class="accept-icon"></div>
                              </div>
                              <div class="form-holder">
                                 <label> Zip Code: </label>
                                 <input type="tel" name="billingZip" class="form-control" placeholder="Zip Code" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" pattern='^[0-9]{5}' maxlength="5" data-error-message="Please enter a valid billing zip code!"/>
                                 <div class="accept-icon"></div>
                              </div>
                              <br>
                           </div>-->
                           <!--==================-->
                           <div class="form-holder">
                              <!--<select name="creditCardType" data-error-message="Please select valid card type!" style="display:none;" class="field-all required">
                                    <option value="">Card Type</option>
                                    @php foreach ($config['allowed_card_types'] as $key => $value): @endphp
                                    <option value=""></option>
                                    @php endforeach @endphp
                             </select>-->
                             <div class="added-greenbar">
                                      
                                        <p>
                                            <img alt="MasterCard Logo" src="./assets/images/mc1.png" class="mc_logo"> USE MASTERCARD <span>for <u>Free Expedited Shipping</u> <img alt="Shipping Van" src="./assets/images/van1.png" class="van"></span>
                                        </p>
                                    </div>
                              <label>Card #:</label>
                              <input class="form-control required" name="creditCardNumber" id="cardNumber" maxlength="16" data-threeds="pan" placeholder="•••• •••• •••• ••••" type="tel" data-error-message="Please enter a valid credit card number!" />
                           </div>
                           <div class="form-holder clearfix">
                              <label>Exp. Date:</label>
                              <select id="cardMonth" name="expmonth" class="form-control required expmonth w1-chk mrgn1-chk" data-error-message="Please select a valid expiry month!">
                                <option value="">Month</option>
                                <option value="01">(01) January</option>
                                <option value="02">(02) February</option>
                                <option value="03">(03) March</option>
                                <option value="04">(04) April</option>
                                <option value="05">(05) May</option>
                                <option value="06">(06) June</option>
                                <option value="07">(07) July</option>
                                <option value="08">(08) August</option>
                                <option value="09">(09) September</option>
                                <option value="10">(10) October</option>
                                <option value="11">(11) November</option>
                                <option value="12">(12) December</option>
                              </select>
                              <select id="cardYear" name="expyear" class="form-control required expyear w1-chk" data-error-message="Please select a valid expiry year!">
                                 <option value="">Year</option>
                                 <option value="2025">2025</option>
                                 <option value="2026">2026</option>
                                 <option value="2027">2027</option>
                                 <option value="2028">2028</option>
                                 <option value="2029">2029</option>
                                 <option value="2030">2030</option>
                                 <option value="2031">2031</option>
                                 <option value="2032">2032</option>
                                 <option value="2033">2033</option>
                                 <option value="2034">2034</option>
                                 <option value="2035">2035</option>
                                 <option value="2036">2036</option>
                                 <option value="2037">2037</option>
                                 <option value="2038">2038</option>
                                 <option value="2039">2039</option>
                                 <option value="2040">2040</option>
                                 <option value="2041">2041</option>
                                 <option value="2042">2042</option>
                                 <option value="2043">2043</option>
                                 <option value="2044">2044</option>
                              </select>
                           </div>
                           <div class="form-holder" id="cvv">
                              <label>CVV:</label>
                              <input type="tel" id="cardCvv" name="CVV" placeholder="CVV" class="form-control w1-chk required" placeholder="CVV" data-validate="cvv" maxlength="3" data-error-message="Please enter a valid CVV code!"/>
                              <span style="display: inline-block" class="cvv-link  footerlink">
                              <a class="what" href="javascript:void(0)">What is this?</a></span>
                              <div class="cvv-image"><img src="./assets/images/cvv-image.png" alt=""></div>
                           </div>
                           <p id="errorText2"></p>
                           <!--<input class="btn-bnrhm1 pulse" src="./assets/images/btn.png" type="submit">-->
                            <button class="btn-bnrhm1 pulse chnginput" id="submit_btn" type="button">
                                <img src="./assets/images/btn.png"/>
                            </button>
                           <img src="./assets/images/sec-logos.png" class="security-chk">
                           <p id="loading-indicator" style="display:none;">Processing...</p>
                           </form>
                        </div>
                     </div>
                     <div class="revw-box desktop">
                        <p class="revw-p1">Testimonial</p>
                        <p class="revw-p2">Works wonders! Helped me get my BP under control.</p>
                        <p class="revw-p3">“I started taking Blood Support about 30 days ago. My blood pressure has not only been stable but also in the perfect range after almost 1 year. My last reading was 120/78, whereas prior to supplementation it was 140 - 160 over 90.”</p>
                        <hr class="rvw-hr">
                        <p class="revw-p2 fc2">One solution for a wide range of health concerns!</p>
                        <p class="revw-p3">“Blood Support helps you control Glucose Support and blood pressure while also keeping your weight in check, all at once. My wife and I have been using this product for over 3 months and can't recommend it enough. ”</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section -->
      <div class="footer">
         <div class="container">
            <p class="p1-ftr">This product has not been evaluated by the FDA. This product is not intended to diagnose, treat, cure or prevent any disease.<br> Results in description and testimonials may not be typical results and individual results may vary.<br> This product is intended to be used in conjunction with a healthy diet and regular exercise.<br> Consult your physician before starting any diet, exercise program, and taking any diet pill to avoid any health issues.</p>
            <ul class="list-ftr">
               <li>
                  <a href="javascript:void(0);" onClick="javascript:openNewWindow('page-privacy.php','modal');">Privacy Policy </a>
               </li>
               <li>
                  <a href="javascript:void(0);" onClick="javascript:openNewWindow('page-terms.php','modal');">Terms and Conditions </a>
               </li>
               <li>
                  <a href="javascript:void(0);" onClick="javascript:openNewWindow('page-contact.php','modal');">Contact Us</a>
               </li>
            </ul>
            <!--<ul style="margin-bottom: 15px">
               <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4466762/" target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4466762/</a></li>
            </ul>-->
            <p class="p2-ftr">Copyright <?= date('Y'); ?>  PreferredBrandHealth</p>
         </div>
      </div>
      <!-- end footer section -->

      <!-- Loader -->
      <div id="loader" style="display:none;">
         <img src="https://i.gifer.com/ZZ5H.gif" width="50" />
         <p>Processing...</p>
      </div>
      
      <div class="safebuy-corner"></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="./assets/js/flipclock.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.23.0/dist/sweetalert2.all.min.js"></script>
      <script>
         var clock = $('.clock').FlipClock(600, {
         
             countdown: true
         
         });
         
      </script>

        <script>
            jQuery(function($) {
                $(".cvv-link").click(function() {
                    $(this).siblings(".cvv-image").slideToggle();
                });
            });
            jQuery(function($) {
                $(".cvv-link").click(function() {
                    $(this).parent().siblings(".cvv-image").slideToggle();
                });
            });
            jQuery(function($) {
                $(".cvv-link").click(function() {
                    $(this).parent().parent().siblings(".cvv-image").slideToggle();
                });
            });
           
        </script>


      <script type="text/javascript">
         $(document).ready(function() {

             //Remove State

            //  $("input[name=billingSameAsShipping]").on("change", function(){
            //     setTimeout(function(){
            //         $("select[name$=State] option").each(function()
            //         {
            //             var billArray = ['AE','AA','AP','VI','MH','FM'];
            //             if(jQuery.inArray($(this).val(), billArray) !== -1)
            //             {
            //             $(this).remove();
            //             }
            //         });
            //     }, 2000);
            // });


            var spd = 100;
            var spdVal = 10;
            var cntDown = 9 * 60 * spdVal;
            setInterval(function () {
                var mn, sc, ms;
                cntDown--;
                if(cntDown < 0) {
                    return false;
                }
                mn = Math.floor((cntDown / spdVal) / 60 );
                mn = (mn < 10 ? '0' + mn : mn);
                sc = Math.floor((cntDown / spdVal) % 60);
                sc = (sc < 10 ? '0' + sc : sc);
                ms = Math.floor(cntDown % spdVal);
                ms = (ms < 10 ? '0' + ms : ms);
                var result = mn + ':' + sc;
                document.getElementById('stopwatch').innerHTML = result;
            }, spd);
              

             $(".billing").on("click", function () {
            if ($(this).prop("checked") == true) {
                $("#sameAddress").trigger('click');
            } else if ($(this).prop("checked") == false) {
                $("#diffAddress").trigger('click');
            }

        });

        $('.baseProduct').click(function(){
            $('#dynamic_camp').val($(this).data('campaign-id'));
            $(this).removeClass('active').addClass('active');
            $(this).siblings().removeClass('active');
            $(this).find('.btn-div-chk img').attr('src','./assets/images/select-act.png');
            $(this).siblings().find('.btn-div-chk img').attr('src','./assets/images/select.png');
        })
           
               //  $('#pkg1').click(function() {
         
               //       $('.product1').removeClass('active').addClass('active');
         
               //       $('.product2').removeClass('active');
         
               //       $('.product3').removeClass('active');

               //       $('#dynamic_camp').val('5');
                   
               //       $('#btn-pkg1 img').attr('src','./assets/images/select-act.png');
         
               //       $('#btn-pkg2 img').attr('src','./assets/images/select.png');
         
               //       $('#btn-pkg3 img').attr('src','./assets/images/select.png');

               //   });
         
         
         
               //   $('#pkg2').click(function() {
         
               //       $('.product2').removeClass('active').addClass('active');
         
               //       $('.product1').removeClass('active');
         
               //       $('.product3').removeClass('active');

               //       $('#dynamic_camp').val('4');
               //       $('#btn-pkg2 img').attr('src','./assets/images/select-act.png');
         
               //       $('#btn-pkg1 img').attr('src','./assets/images/select.png');
         
               //       $('#btn-pkg3 img').attr('src','./assets/images/select.png');
               //   });
         
               //   $('#pkg3').click(function() {
         
               //       $('.product3').removeClass('active').addClass('active');
         
               //       $('.product2').removeClass('active');
         
               //       $('.product1').removeClass('active');

               //       $('#dynamic_camp').val('3');
               //       $('#btn-pkg3 img').attr('src','./assets/images/select-act.png');
         
               //       $('#btn-pkg1 img').attr('src','./assets/images/select.png');
         
               //       $('#btn-pkg2 img').attr('src','./assets/images/select.png');
               //   });

                 $("#submit_btn").on("click",function(){
                    cardNumber = $("#cardNumber").val();
                    cardMonth = $("#cardMonth").val();
                    cardYear = $("#cardYear").val();
                    cardCvv = $("#cardCvv").val();
                    campaignId = $("#dynamic_camp").val();

                    arr = [];
                    if(cardNumber == ""){
                        arr.push("Please enter valid credit card number!");
                    }
                    if(cardMonth == ""){
                        arr.push("Please select month!");
                    }
                    if(cardYear == ""){
                        arr.push("Please select year!");
                    }
                    if(cardCvv == ""){
                        arr.push("Please enter valid cvv!");
                    }
                    if(arr.length > 0){
                        let dataArray = arr.join("<br>");
                        Swal.fire({
                           icon: "error",
                           title: "Oops...",
                           html: dataArray
                        });
                        //alert(arr.join("\n"));
                    }else{

                        $.ajax({
                            url: 'ajaxHandler.php',
                            type: 'POST',
                            data:{
                                requestType: 'checkout',
                                cardNumber: cardNumber,
                                cardMonth: cardMonth,
                                cardYear: cardYear,
                                cardCvv: cardCvv,
                                campaignId: campaignId
                            },
                            beforeSend: function(){
                              $("#loader").show();
                              
                            },
                            success: function(response){
                              $("#loader").hide();
                              //console.log(response);
                              let res = JSON.parse(response);
                              if(res.error || res.errors){
                                 let err = res.error+"!";
                                 Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: err
                                 });
                              }else{
                                 const queryString = window.location.search;
                                 window.location.href = "upsell1.php"+queryString;
                              }
                            }
                        });
                    }
                });
           });
         
      </script>
      <script>
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
