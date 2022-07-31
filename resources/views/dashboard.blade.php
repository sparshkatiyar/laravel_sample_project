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
    <section class="order-page">
        <!-- -----------side bar show button-------- -->
        <div class="sideBtn-order">
            <button id="Sb">
                <!-- <img src="sidebar btn.png" alt="sidebar"> -->
                <img src="sidebar btn.png" alt="sidebar" id="filterIcopn">
                <img src="cancel.png" alt="cancle-arrow" id="cancle">
            </button>
        </div>
        <!-- -----------//side bar show button-------- -->
    
        <div class="container-order">
            <!-- -------side bar---- -->
      
            @include('dashnav')
            <!-- --------------------------------col 2----------------- -->
            <div class="second-div">
                <!-- ----uper buttons-- -->
                <!-- <div class="upper-buttons" id="upperBtns">
                  <button id="uBtn" value="All">  All</button>
                  <button id="uBtn" value="Completed">  Completed</button>
                  <button id="uBtn" value="Cancelled">  Cancelled</button>
                  <button id="uBtn" value="Ongoing">  Ongoing</button>
                    
                </div> -->
                <!-- -------alll-------- -->
                <div class="all-content">
    
                    <!-- ----no-order--- -->
                    <div class="boxs  no-order boxs-show" id="noOrder">
                        <img src="{{asset('web/image/empty-cart.png')}}" alt="no-order-img">
                        <h2>You have no ordered</h2>
                        <a href="#">Book Now</a>
                    </div>
    
    
    
                    <!-- ------// no order----- -->
    
                    <!-- -----------my pooja-------------- -->
                    <div class="boxs my-pooja" id="myPja">
                         <!-- ----uper buttons-- -->
                <div class="upper-buttons" id="upperBtns">
                  <button id="uBtn" value="All">  All</button>
                  <button id="uBtn" value="Completed">  Completed</button>
                  <button id="uBtn" value="Cancelled">  Cancelled</button>
                  <button id="uBtn" value="Ongoing">  Ongoing</button>
                    
                </div>
                        <!-- ---card 1-- -->
                        <div class="pooja-card" id="Ongoing">
    
                            <div class="col col1">
                                <p class="order-no">
                                    Order No: <span>25365425</span>
                                </p>
                            </div>
                            <div class="col col2">
                                <p class="date">
                                    Date <span>5/02/2022</span>
                                </p>
                            </div>
    
    
    
                            <div class="col col3">
                                <img src="ram.png" alt="ram img">
                            </div>
                            <div class="col col4">
                                <p class="Name">Akhand Ramayan</p>
    
                            </div>
    
    
                            <div class="col col5">
                                <img src="right.png" alt="right" width="10px">
                                <p>Delivery Expected on Nov
                                    02,2022</p>
                            </div>
                            <div class="col col6">
                                <p class="text">Lorem ipsum dolor sit tetur </p>
                            </div>
                            <div class="col col7">
                                <img src="star.png" alt="star">
                                <p>Rates the Pooja</p>
                            </div>
                            <div class="col col8">
                                <p class="price"><span><b>$5.00</b></span> <span><del>$6.00</del></span></p>
                            </div>
    
                            <div class="col col9">
                                <p><a href="order-detail/order-detail.html">View Details</a></p>
                            </div>
    
    
                        </div>
                        <!-- ---card 2-- -->
                        <div class="pooja-card" id="Completed">
    
                            <div class="col col1">
                                <p class="order-no">
                                    Order No: <span>25365425</span>
                                </p>
                            </div>
                            <div class="col col2">
                                <p class="date">
                                    Date <span>5/02/2022</span>
                                </p>
                            </div>
    
    
    
                            <div class="col col3">
                                <img src="ram.png" alt="ram img">
                            </div>
                            <div class="col col4">
                                <p class="Name">Akhand Ramayan</p>
    
                            </div>
    
    
                            <div class="col col5">
                                <img src="done-arrow.png" alt="right" width="10px">
                                <p>Pooja Done on Nov 02,2022</p>
                            </div>
                            <div class="col col6">
                                <p class="text">Lorem ipsum dolor sit tetur </p>
                            </div>
                            <div class="col col7">
                                <img src="star.png" alt="star">
                                <p>Rates the Pooja</p>
                            </div>
                            <div class="col col8">
                                <p class="price"><span><b>$5.00</b></span> <span><del>$6.00</del></span></p>
                            </div>
    
                            <div class="col col9">
                                <p><a href="order-detail/order-detail.html">View Details</a></p>
                            </div>
    
    
                        </div>
    
                        <!-- ---card 3-- -->
                        <div class="pooja-card" id="Cancelled">
    
                            <div class="col col1">
                                <p class="order-no">
                                    Order No: <span>25365425</span>
                                </p>
                            </div>
                            <div class="col col2">
                                <p class="date">
                                    Date <span>5/02/2022</span>
                                </p>
                            </div>
    
    
    
                            <div class="col col3">
                                <img src="ram.png" alt="ram img">
                            </div>
                            <div class="col col4">
                                <p class="Name">Akhand Ramayan</p>
    
                            </div>
    
    
                            <div class="col col5">
                                <img src="cancle-arrow.png" alt="right" width="10px">
                                <p>Cancelled on Nov 02,2022</p>
                            </div>
                            <div class="col col6">
                                <p class="text">Lorem ipsum dolor sit tetur </p>
                            </div>
                            <div class="col col7">
                                <img src="star.png" alt="star">
                                <p>Rates the Pooja</p>
                            </div>
                            <div class="col col8">
                                <p class="price"><span><b>$5.00</b></span> <span><del>$6.00</del></span></p>
                            </div>
    
                            <div class="col col9">
                                <p><a href="order-detail/order-detail.html">View Details</a></p>
                            </div>
    
    
                        </div>
    
                        <!-- ------//card---- -->
    
    
                    </div>
                    <!-- ------// my pooja----- -->
    
                    <!-- -----------------call---------------------- -->
                    <div class="boxs  call-box" id="Call">
                        <div class="cards">
    
                            <!-- -----card 1-- -->
                            <div class="card">
                                <div class="col col1">
                                    <p>Order No: <span>25365425</span> </p>
                                </div>
                                <div class="col col2">
                                    <p>Date: <span>5/02/2022</span> | <span>09:50PM</span></p>
                                </div>
                                <div class="col col3">
                                    <img src="call-person.png" alt="call-person">
                                </div>
                                <div class="col col4 ">
                                    <h4>Astro Rahul</h4>
                                </div>
                                <div class="col col5">
                                    <p>
                                        <b> Status : <span class="status">Completed</span></b>
                                    </p>
                                </div>
                                <div class="col col6">
                                    Duration : <span> 10 Min </span>
                                </div>
                                <div class="col col7">
                                    <a href="#"> <img src="call-icon.png" alt="callicon" width="30px"></a>
                                    <p>call</p>
                                </div>
                                <div class="col col8">
                                    <a href="#"> <img src="trash.png" alt="trash" width="20px"></a>
                                </div>
                                <div class="col col9">
                                    <a href="#"> <img src="share.png" alt="share " width="20px"></a>
                                </div>
                                <div class="col col10">
                                    <p>Rate : <span>Rs.5.00/Min</span></p>
                                </div>
                                <div class="col col11">
                                    <img src="star.png" alt="star" width="15px">
                                    <p>Rates the Pandit</p>
                                </div>
                                <div class="col col12">
                                   <p> Total Deduction : <span>Rs.50.00</span>
                                   </p></div>
    
                            </div>
    
                            <!-- -----card 1-- -->
                            <div class="card">
                                <div class="col col1">
                                    <p>Order No: <span>25365425</span> </p>
                                </div>
                                <div class="col col2">
                                    <p>Date: <span>5/02/2022</span> | <span>09:50PM</span></p>
                                </div>
                                <div class="col col3">
                                    <img src="call-person.png" alt="call-person">
                                </div>
                                <div class="col col4 ">
                                    <h4>Astro Rahul</h4>
                                </div>
                                <div class="col col5">
                                    <p>
                                        <b> Status : <span class="status">Completed</span></b>
                                    </p>
                                </div>
                                <div class="col col6">
                                    Duration : <span> 10 Min </span>
                                </div>
                                <div class="col col7">
                                    <a href="#"> <img src="call-icon.png" alt="callicon" width="30px"></a>
                                    <p>call</p>
                                </div>
                                <div class="col col8">
                                    <a href="#"> <img src="trash.png" alt="trash" width="20px"></a>
                                </div>
                                <div class="col col9">
                                    <a href="#"> <img src="share.png" alt="share " width="20px"></a>
                                </div>
                                <div class="col col10">
                                    <p>Rate : <span>Rs.5.00/Min</span></p>
                                </div>
                                <div class="col col11">
                                    <img src="star.png" alt="star" width="15px">
                                    <p>Rates the Pandit</p>
                                </div>
                                <div class="col col12">Total Deduction : <span>Rs.50.00</span></div>
    
                            </div>
    
    
                        </div>
                    </div>
                    <!-- -----------------//call---------------------- -->
    
                    <!-- -----------------chat---------------------- -->
                    <div class="boxs call-box" id="Chat">
                        <div class="cards">
    
                            <!-- -----card 1-- -->
                            <div class="card">
                                <div class="col col1">
                                    <p>Order No: <span>25365425</span> </p>
                                </div>
                                <div class="col col2">
                                    <p>Date: <span>5/02/2022</span> | <span>09:50PM</span></p>
                                </div>
                                <div class="col col3">
                                    <img src="call-person.png" alt="call-person">
                                </div>
                                <div class="col col4 ">
                                    <h4>Astro Rahul</h4>
                                </div>
                                <div class="col col5">
                                    <p>
                                        <b> Status : <span class="status">Completed</span></b>
                                    </p>
                                </div>
                                <div class="col col6">
                                    Duration : <span> 10 Min </span>
                                </div>
                                <div class="col col7">
                                    <a href="#"> <img src="chat-icon.png" alt="callicon" width="30px"></a>
                                    <p>Chat</p>
                                </div>
                                <div class="col col8">
                                    <a href="#"> <img src="trash.png" alt="trash" width="20px"></a>
                                </div>
                                <div class="col col9">
                                    <a href="#"> <img src="share.png" alt="share " width="20px"></a>
                                </div>
                                <div class="col col10">
                                    <p>Rate : <span>Rs.5.00/Min</span></p>
                                </div>
                                <div class="col col11">
                                    <img src="star.png" alt="star" width="15px">
                                    <p>Rates the Pandit</p>
                                </div>
                                <div class="col col12">Total Deduction : <span>Rs.50.00</span></div>
    
                            </div>
    
                            <!-- -----card 1-- -->
                            <div class="card">
                                <div class="col col1">
                                    <p>Order No: <span>25365425</span> </p>
                                </div>
                                <div class="col col2">
                                    <p>Date: <span>5/02/2022</span> | <span>09:50PM</span></p>
                                </div>
                                <div class="col col3">
                                    <img src="call-person.png" alt="call-person">
                                </div>
                                <div class="col col4 ">
                                    <h4>Astro Rahul</h4>
                                </div>
                                <div class="col col5">
                                    <p>
                                        <b> Status : <span class="status">Completed</span></b>
                                    </p>
                                </div>
                                <div class="col col6">
                                    Duration : <span> 10 Min </span>
                                </div>
                                <div class="col col7">
                                    <a href="#"> <img src="chat-icon.png" alt="callicon" width="30px"></a>
                                    <p>Chat</p>
                                </div>
                                <div class="col col8">
                                    <a href="#"> <img src="trash.png" alt="trash" width="20px"></a>
                                </div>
                                <div class="col col9">
                                    <a href="#"> <img src="share.png" alt="share " width="20px"></a>
                                </div>
                                <div class="col col10">
                                    <p>Rate : <span>Rs.5.00/Min</span></p>
                                </div>
                                <div class="col col11">
                                    <img src="star.png" alt="star" width="15px">
                                    <p>Rates the Pandit</p>
                                </div>
                                <div class="col col12">Total Deduction : <span>Rs.50.00</span></div>
    
                            </div>
    
    
                        </div>
                    </div>
                    <!-- -----------------//chat---------------------- -->
                    <!-- -----------------video---------------------- -->
                    <div class="boxs call-box" id="Video">
                        <div class="cards">
    
                            <!-- -----card 1-- -->
                            <div class="card">
                                <div class="col col1">
                                    <p>Order No: <span>25365425</span> </p>
                                </div>
                                <div class="col col2">
                                    <p>Date: <span>5/02/2022</span> | <span>09:50PM</span></p>
                                </div>
                                <div class="col col3">
                                    <img src="call-person.png" alt="call-person">
                                </div>
                                <div class="col col4 ">
                                    <h4>Astro Rahul</h4>
                                </div>
                                <div class="col col5">
                                    <p> <b> Status : <span class="status">Completed</span></b></p>
                                </div>
                                <div class="col col6">
                                    Duration : <span> 10 Min </span>
                                </div>
                                <div class="col col7">
                                    <a href="#"> <img src="video-icon.png" alt="callicon" width="30px"></a>
                                    <p>Video</p>
                                </div>
                                <div class="col col8">
                                    <a href="#"> <img src="trash.png" alt="trash" width="20px"></a>
                                </div>
                                <div class="col col9">
                                    <a href="#"> <img src="share.png" alt="share " width="20px"></a>
                                </div>
                                <div class="col col10">
                                    <p>Rate : <span>Rs.5.00/Min</span></p>
                                </div>
                                <div class="col col11">
                                    <img src="star.png" alt="star" width="15px">
                                    <p>Rates the Pandit</p>
                                </div>
                                <div class="col col12">Total Deduction : <span>Rs.50.00</span></div>
    
                            </div>
    
                            <!-- -----card 1-- -->
                            <div class="card">
                                <div class="col col1">
                                    <p>Order No: <span>25365425</span> </p>
                                </div>
                                <div class="col col2">
                                    <p>Date: <span>5/02/2022</span> | <span>09:50PM</span></p>
                                </div>
                                <div class="col col3">
                                    <img src="call-person.png" alt="call-person">
                                </div>
                                <div class="col col4 ">
                                    <h4>Astro Rahul</h4>
                                </div>
                                <div class="col col5">
                                    <p>
                                        <b> <b> Status : <span class="status">Completed</span></b></b>
                                    </p>
                                </div>
                                <div class="col col6">
                                    Duration : <span> 10 Min </span>
                                </div>
                                <div class="col col7">
                                    <a href="#"> <img src="video-icon.png" alt="callicon" width="30px"></a>
                                    <p>Video</p>
                                </div>
                                <div class="col col8">
                                    <a href="#"> <img src="trash.png" alt="trash" width="20px"></a>
                                </div>
                                <div class="col col9">
                                    <a href="#"> <img src="share.png" alt="share " width="20px"></a>
                                </div>
                                <div class="col col10">
                                    <p>Rate : <span>Rs.5.00/Min</span></p>
                                </div>
                                <div class="col col11">
                                    <img src="star.png" alt="star" width="15px">
                                    <p>Rates the Pandit</p>
                                </div>
                                <div class="col col12">Total Deduction : <span>Rs.50.00</span></div>
    
                            </div>
    
    
                        </div>
                    </div>
                    <!-- -----------------//video---------------------- -->
    
    
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