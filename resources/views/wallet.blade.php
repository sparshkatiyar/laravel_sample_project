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
  
   <link href="{{ asset('asset/css/dashboard.css') }}" rel="stylesheet">
    
</head>

<body>
    @include('navbar')
    <div id="divaider"></div>
    <section class="wallet-page-order">
        <!-- -----------side bar show button-------- -->
        <div class="sideBtn">
            <button id="Sb">
                <!-- <img src="sidebar btn.png" alt="sidebar"> -->
                <img src="sidebar btn.png" alt="sidebar" id="filterIcopn">
                <img src="../cancel.png" alt="cancle-arrow" id="cancle">
            </button>
        </div>
        <!-- -----------//side bar show button-------- -->

        <div class="container">
            <!-- -------side bar---- -->
            <div class="sidebar" id="side-Bar">
                <!-- ----col 1 -->

                @include('dashnav')
               

               



            </div>
            <!-- --------------------------------col 2----------------- -->
            <div class="second-div">


                <!-- -------alll-------- -->
                <div class="all-content">

                    <div class="main-heading">
                        <div>
                            <a href="../order.html">
                                <img src="{{asset('web/image/back.png')}}" alt="back" width="7px">
                                Back
                            </a>
                        </div>
                        <div>
                            <p class="head" style=" font-family: 'Tinos', serif; font-weight: 500;">
                                My Wallet
                            </p>
                        </div>
                    </div>


                    <!-- ------my wallet--- -->
                    <div class="wallet-balance">
                        <div class="balance-info">
                            <div class="col col1">
                                <img src="{{asset('web/image/wallet.png')}}" alt="wallet">
                            </div>
                            <div class="col col2">
                                <p class="headding">Wallet Balance</p>

                                <p class="balance">
                                    &#x20b9; <span id="walletBalance"> 00.00</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- -----wallet options---- -->
                    <div class="options">
                        <div class="button">
                            <button class="price-button" value="50"> &#x20b9; 50.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="100"> &#x20b9; 100.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="150"> &#x20b9; 150.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="200"> &#x20b9; 200.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="1250"> &#x20b9; 250.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="300"> &#x20b9; 300.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="500"> &#x20b9; 500.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="700"> &#x20b9; 700.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="750"> &#x20b9; 750.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="1000"> &#x20b9; 1000.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="2000"> &#x20b9; 2000.0</button>
                        </div>
                        <div class="button">
                            <button class="price-button" value="5000"> &#x20b9; 5000.0</button>
                        </div>
                    </div>

                    <!-- --add button -->
                    <div class="add-button">
                        <button class="add-btn">Add Money</button>
                    </div>

                    <!-- ------//my wallet--- -->



                </div>



            </div>

        </div>
        <!-- --------//---- -->
        </div>
    </section>
</body>
<!-- divider -->

<!-- -----------section1----------- -->
@include('layouts.footer')