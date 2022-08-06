<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--  ---font awsome link ----->
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Astro Pandit') }}</title>
    <link href="{{ asset('asset/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    
    
    <!-- <script src="{{ asset('asset/js/script.js') }}"></script> -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <!-- <script src="{{ asset('asset/js/pooja-main-script.js') }}"></script> -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
</head>
<body>
 <!-- --------navbar---- -->
    <div class="container-fluid b-navbar">
        <div class="img-div">
            <img src="{{ asset('images/Logo.png')}}" alt="#" />
        </div>

        <div class="menu-div">
            <div class="contact-div">
                <div class="item1">
                    <img src="https://img.icons8.com/ios/2x/apple-phone.png" alt="#" width="20px" />
                    <p><a href="tel:+91 88106 40406 "> +91 88106 40406</a></p>
                    <img src="https://img.icons8.com/ios/2x/apple-mail.png" alt="#" width="25px" />
                    <p><a href="mailto:info@astropanditom.com">  info@astropanditom.com</a></p>
                </div>
                <div class="item2">
                    <img src="https://img.icons8.com/material-outlined/2x/search.png" alt="#" width="20px" />
                    <a href="../Product/add to cart/cart.html"> <img src="https://img.icons8.com/small/2x/shopping-cart-loaded.png" alt="#" width="25px" /></a>
                    <img src="https://img.icons8.com/small/344/user.png" alt="#" width="20px" />
                    <a href="{{url('pandit-registration')}}">

                        <p>Pandit Registration</p>
                    </a>
                </div>
            </div>
            <div class="menu-row">
                <div class="menu">
                    <a href="{{url('./')}}">Home</a>
                    <a href="../Home-page/Home-page.html">Talk to Astrologers</a>
                    <a href="../Product/product.html">Astroshop</a>
                    <a href="../Horoscope-page/horoscope.html">Horoscope</a>
                    <a href="{{url('puja-home')}}">Pooja</a>
                    <a href="../About/about.html">About us</a>
                    <a href="../Contact/contact.html">Contact us</a>
                </div>
                <div class="button">
                    @if(Auth::guard('user')->user())
                    <a href="{{url('./dashboard')}}">Dashboard</a>
                   <!-- <a onclick="popshow()">Login/Sign up</a> -->
                    @else
                    <a onclick="popshow()">Login/Sign up</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ----r-navabr---- -->

    <!-- ---------popup page ---------->
      <!-- ---first -- -->
      <div class="popup-1 "  id="pop1">
         <div class="main-div">
            <div class="next-div">
               <button type="button" class="close" aria-label="Close" id="cls-index">
               <span aria-hidden="true">&times;</span>
               </button>
               <h5 class="login">Login</h5>
               <b>
                  <p class="heading">Hold Tight ,We take you on board Enter your mobile<br> number</p>
               </b>
               <h3 class="heading2">Enter your mobile number*</h3>
            </div>
            <div class="second-div">
               <select class="optiondiv">
                  <option>IND</option>
                  <option>PAK</option>
               </select>
               <input type="text" id="numberOtp">
            </div>
            <button type="submit" class="main-button" id="otpContinue">Continue</button>
         </div>
      </div>
      <!-- ----second--- -->
      <div id="otp-popup">
         <div class="main-div">
            <div class="next-div">
               <button type="button" class="close" aria-label="Close" id="otpClose">
               <span aria-hidden="true">&times;</span>
               </button>
               <h5 class="login">Verify Phone</h5>
               <p class="otpheading">OTP sent to <span> +91 1234567890</span></p>
            </div>
            <form action="" class="mt-5">
               <input
                  class="otp"
                  type="text"
                  oninput="digitValidate(this)"
                  onkeyup="tabChange(1)"
                  maxlength="1"
                  />
               <input
                  class="otp"
                  type="text"
                  oninput="digitValidate(this)"
                  onkeyup="tabChange(2)"
                  maxlength="1"
                  />
               <input
                  class="otp"
                  type="text"
                  oninput="digitValidate(this)"
                  onkeyup="tabChange(3)"
                  maxlength="1"
                  />
               <input
                  class="otp"
                  type="text"
                  oninput="digitValidate(this)"
                  onkeyup="tabChange(4)"
                  maxlength="1"
                  />
            </form>
            <button class="main-button-index" id="otp-submit">Submit</button>
            <p class="otpheading1">
               Resent OTP available in<span class="second"> 58s</span>
            </p>
            <p class="resendbutton"><a href="#">Resend OTP availablenin</a></p>
            <div class="button-div">
               <button class="resendotp">
               Resend OTP on<br />
               SMS</button
                  ><button class="resendotp">
               Resend OTP on<br />
               Call
               </button>
            </div>
         </div>
      </div>
      <!-- -------popup end------- -->