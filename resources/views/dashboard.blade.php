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
    <link href="{{ asset('asset/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/custom-new-style.css') }}" rel="stylesheet">
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
            
            
            <div class="custom-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                    

                            <div class="tab-container-one">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item active"><a class="nav-link active" href="#home" role="tab" aria-controls="home" data-bs-toggle="tab">All</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#profile" role="tab" aria-controls="profile" data-bs-toggle="tab">Completed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#messages" role="tab" aria-controls="messages" data-bs-toggle="tab">Cancelled</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" role="tab" aria-controls="settings" data-bs-toggle="tab">Ongoing</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            @if(empty($orderList))
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="boxs  no-order boxs-show" id="noOrder">
                                                    <img src="{{asset('web/image/empty-cart.png')}}" alt="no-order-img">
                                                    <h2>You have no ordered</h2>
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                            @endif
                                            @foreach($orderList as $orderDetails)
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="pooja-card" id="Ongoing">
    
                                                    <div class="col col1">
                                                        <p class="order-no">
                                                            Order No: <span>{{$orderDetails->booking_id}}</span>
                                                        </p>
                                                    </div>
                                                    <div class="col col2">
                                                        <p class="date">
                                                            Booking Date <span>{{date('d-m-Y',strtotime($orderDetails->created_at))}}</span>
                                                        </p>
                                                    </div>



                                                    <div class="col col3">
                                                        <img  src="{{asset('web/image/202207031212-puja.png')}}" alt="ram img">
                                                    </div>
                                                    <div class="col col4">
                                                        <p class="name-pooja">{{$orderDetails->ecomm_puja_id->puja_id->name}}</p>

                                                    </div>


                                                    <div class="col col5">
                                                        <!-- <img src="right.png" alt="right" width="10px"> -->
                                                        <p class="delivery-date">Delivery Date
                                                            {{$orderDetails->deliver_date}}</p>
                                                    </div>
                                                    <div class="col col6">
                                                        <p class="text-pooja">Lorem ipsum dolor sit tetur </p>
                                                    </div>
                                                    <div class="col col7">
                                                        <img src="{{ asset('images/rating-img.svg')}}" alt="star">
                                                        <p class="pooja-rates">Rates the Pooja</p>
                                                    </div>
                                                    <div class="col col8">
                                                        <p class="price"><span><b>&#x20b9 {{$orderDetails->price_total}}</b></span> </p>
                                                    </div>

                                                    <div class="col col9">
                                                        <p class="view-dt"><a href="order-detail/order-detail.html">View Details</a></p>
                                                    </div>


                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- {!! $orderList->appends(['sort' => 'id'])->links() !!} -->
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        @foreach($orderListCompleted as $orderDetails)
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="pooja-card" id="Ongoing">

                                                <div class="col col1">
                                                    <p class="order-no">
                                                        Order No: <span>{{$orderDetails->booking_id}}</span>
                                                    </p>
                                                </div>
                                                <div class="col col2">
                                                    <p class="date">
                                                        Date <span>{{$orderDetails->created_at}}</span>
                                                    </p>
                                                </div>



                                                <div class="col col3">
                                                    <img  src="{{asset('web/image/202207031212-puja.png')}}" alt="ram img">
                                                </div>
                                                <div class="col col4">
                                                    <p class="Name">{{$orderDetails->ecomm_puja_id->puja_id->name}}</p>

                                                </div>


                                                <div class="col col5">
                                                    <!-- <img src="right.png" alt="right" width="10px"> -->
                                                    <p>Delivery Expected on Nov
                                                        {{$orderDetails->deliver_date}}</p>
                                                </div>
                                                <div class="col col6">
                                                    <p class="text">Lorem ipsum dolor sit tetur </p>
                                                </div>
                                                <div class="col col7">
                                                    <img src="{{ asset('images/rating-img.svg')}}" alt="star">
                                                    <p>Rates the Pooja</p>
                                                </div>
                                                <div class="col col8">
                                                    <p class="price"><span><b>&#x20b9 {{$orderDetails->price_total}}</b></span> </p>
                                                </div>

                                                <div class="col col9">
                                                    <p><a href="order-detail/order-detail.html">View Details</a></p>
                                                </div>


                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- {!! $orderList->appends(['sort' => 'id'])->links() !!} -->
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">

                                        @foreach($orderListCanceled as $orderDetails)
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="pooja-card" id="Ongoing">

                                                <div class="col col1">
                                                    <p class="order-no">
                                                        Order No: <span>{{$orderDetails->booking_id}}</span>
                                                    </p>
                                                </div>
                                                <div class="col col2">
                                                    <p class="date">
                                                        Date <span>{{$orderDetails->created_at}}</span>
                                                    </p>
                                                </div>



                                                <div class="col col3">
                                                    <img  src="{{asset('web/image/202207031212-puja.png')}}" alt="ram img">
                                                </div>
                                                <div class="col col4">
                                                    <p class="Name">{{$orderDetails->ecomm_puja_id->puja_id->name}}</p>

                                                </div>


                                                <div class="col col5">
                                                    <!-- <img src="right.png" alt="right" width="10px"> -->
                                                    <p>Delivery Expected on Nov
                                                        {{$orderDetails->deliver_date}}</p>
                                                </div>
                                                <div class="col col6">
                                                    <p class="text">Lorem ipsum dolor sit tetur </p>
                                                </div>
                                                <div class="col col7">
                                                    <img src="{{ asset('images/rating-img.svg')}}" alt="star">
                                                    <p>Rates the Pooja</p>
                                                </div>
                                                <div class="col col8">
                                                    <p class="price"><span><b>&#x20b9 {{$orderDetails->price_total}}</b></span> </p>
                                                </div>

                                                <div class="col col9">
                                                    <p><a href="order-detail/order-detail.html">View Details</a></p>
                                                </div>


                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- {!! $orderList->appends(['sort' => 'id'])->links() !!} -->
                                    </div>
                                    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                        @foreach($orderListOngoing as $orderDetails)
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="pooja-card" id="Ongoing">

                                                <div class="col col1">
                                                    <p class="order-no">
                                                        Order No: <span>{{$orderDetails->booking_id}}</span>
                                                    </p>
                                                </div>
                                                <div class="col col2">
                                                    <p class="date">
                                                        Date <span>{{$orderDetails->created_at}}</span>
                                                    </p>
                                                </div>



                                                <div class="col col3">
                                                    <img  src="{{asset('web/image/202207031212-puja.png')}}" alt="ram img">
                                                </div>
                                                <div class="col col4">
                                                    <p class="Name">{{$orderDetails->ecomm_puja_id->puja_id->name}}</p>

                                                </div>


                                                <div class="col col5">
                                                    <img src="right.png" alt="right" width="10px">
                                                    <p>Delivery Expected on Nov
                                                        {{$orderDetails->deliver_date}}</p>
                                                </div>
                                                <div class="col col6">
                                                    <p class="text">Lorem ipsum dolor sit tetur </p>
                                                </div>
                                                <div class="col col7">
                                                    <img src="{{ asset('images/rating-img.svg')}}" alt="star">
                                                    <p>Rates the Pooja</p>
                                                </div>
                                                <div class="col col8">
                                                    <p class="price"><span><b>&#x20b9 {{$orderDetails->price_total}}</b></span> </p>
                                                </div>

                                                <div class="col col9">
                                                    <p><a href="order-detail/order-detail.html">View Details</a></p>
                                                </div>


                                            </div>
                                        </div>
                                        @endforeach
                                            <!-- {!! $orderList->appends(['sort' => 'id'])->links() !!} -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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



<!-- Sucess Modal -->
<div class="modal fade success-message" id="successModal" tabindex="-1" aria-labelledby="successModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="success-message">
        <img src="{{ asset('images/suceess-img.svg')}}" alt="#" class="img-fluid success-img" />
            <h3>Your Review has been submited successfully</h3>
        
            <button type="button" data-bs-dismiss="modal">Thank You</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


<!-- Sucess Modal -->
<div class="modal fade ratingModal" id="ratingModal" tabindex="-1" aria-labelledby="ratingModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
      <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close">
      <img src="{{ asset('images/close.svg')}}" alt="#" class="img-fluid" />
      </button>
        <div class="rating-modal-section">
        
            <h3>Rate the Pooja</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam enim, tincidunt quam tortor ullamcorper egestas et et.</p>

            <ul>
                <li><img src="{{ asset('images/rating-img.svg')}}" alt="#" class="img-fluid" /></li>
                <li><img src="{{ asset('images/rating-img.svg')}}" alt="#" class="img-fluid" /></li>
                <li><img src="{{ asset('images/rating-img.svg')}}" alt="#" class="img-fluid" /></li>
                <li><img src="{{ asset('images/rating-img.svg')}}" alt="#" class="img-fluid" /></li>
            </ul>
            <label for="" class="rating-label">Feedback (If Any)</label>
            <textarea name="" id="" cols="3" rows="3"></textarea>
            <button type="button" class="rating-btn" data-bs-dismiss="modal">Submit</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
      $(window).on('load', function() {
        $('#successModal').modal('show');
    });
</script>