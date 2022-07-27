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
    <link href="{{ asset('asset/css/pujabook.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/delivery.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/pandit.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/popup.css') }}" rel="stylesheet">
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/pooja-main-script.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
                    <p><a href=""> 1234567890</a></p>
                    <img src="https://img.icons8.com/ios/2x/apple-mail.png" alt="#" width="25px" />
                    <p><a href=""> tim.jennings@example.com</a></p>
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
                <a onclick="popshow()">Login/Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ----r-navabr---- -->