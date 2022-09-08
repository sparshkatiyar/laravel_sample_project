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
    <section class="profile-page-order">


        <!-- -----------side bar show button-------- -->
        <div class="sideBtn">
            <button id="Sb">
                <!-- <img src="sidebar btn.png" alt="sidebar"> -->
                <img src="sidebar btn.png" alt="sidebar" id="filterIcopn">
                <img src="../ cancel.png" alt="cancle-arrow" id="cancle">
            </button>
        </div>
        <!-- -----------//side bar show button-------- -->

        <div class="container">
            <!-- -------side bar---- -->
            @include("dashnav")
            <!-- --------------------------------col 2----------------- -->
            <div class="second-div">
            

                <!-- -------alll-------- -->
                <div class="all-content">
                <center>
                    <p class="text-success">{{Session::get('success')}}</p>
                    <p class="text-danger">{{Session::get('error')}}</p>
                    </center>
                    <div class="main-heading">
                    
                        <div>
                            <p class="head" style=" font-family: 'Tinos', serif; font-weight: 500;">
                                My Profile
                            </p>
                        </div>
                    </div>

                    <!-- ----form--- -->
                    <form method="post" action="{{route('user.profile')}}">
                        @csrf
                    <div class="form">
                        <div class="col">
                            <h4>Name :</h4>
                        </div>
                        <div class="col2">
                            <input type="text" placeholder="Enter User Name" name="user_name" value="{{$user->user_name}}">
                        </div>
                        <!-- --- -->
                        <div class="col">
                            <h4>Mobile No :</h4>
                        </div>
                        <div class="col number">
                            <select id="selectcountry" name="country_code">
                                @if(!empty($countrylist) && count($countrylist) >0)
                                @foreach($countrylist as $country)
                                <option value="{{$country->code}}"@if(!empty($user->country_code) && $user->country_code==$country->code) selected @endif>{{$country->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            <input type="tel" id="phone" name="phone"
                                placeholder="Enter User Mobile Number" name="mobile_number" value="{{$user->mobile_number}}">
                        </div>
                        <!-- --- -->
                        <div class="col">
                            <h4>Email ID :</h4>
                        </div>
                        <div class="col2">
                            <input type="text" placeholder="Enter Email Id" name="email" value="{{$user->email}}">
                        </div>
                        <!-- --- -->
                        <div class="col">
                            <h4>Birth Date</h4>
                        </div>
                        <div class="col2">
                            <input type="date" placeholder="Enter Birth Date" name="date_of_birth" value="{{$user->date_of_birth}}">
                        </div>

                        <div class="col double">
                            <div>
                                <div class="col">
                                    <h4>Birth Time</h4>
                                </div>
                                <div class="col2">
                                    <input type="time" placeholder="Enter Birth Time" name="birth_time" value="{{$user->birth_time}}">
                                </div>
                            </div>
                            <div>
                                <div class="col">
                                    <h4>Birth Place</h4>
                                </div>
                                <div class="col2">
                                    <input type="text" placeholder="Birth Place" name="birth_place" value="{{$user->birth_place}}">
                                </div>
                            </div>


                        </div>
                        <div class="col">
                            <h4>Gender</h4>
                        </div>

                        <div class="col double">
                            <div style="display: flex; align-items:center;"> <input type="radio" name="gender"
                                    style="width: 20px; " name="gender" value="Male" @if(!empty($user->gender) && $user->gender=='Male') checked @endif > &nbsp; <b>Male</b>&nbsp;&nbsp;&nbsp; <input type="radio"
                                    name="gender" style="width: 20px; " value="Female" name="gender" @if(!empty($user->gender) && $user->gender=='Female') checked @endif> &nbsp; <b>Female</b> </div>

                        </div>
                        <div class="col12">
                            <button>Save</button>
                        </div>

                    </div>
                    </form>
                    <!-- ------// form----- -->




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