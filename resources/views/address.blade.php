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
    <section class="my-address-order">
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

                    <div class="main-heading">
                        
                        <div>
                            <p class="head" style=" font-family: 'Tinos', serif; font-weight: 500;">
                                My Adresses
                            </p>
                        </div>
                    </div>

                    <form action="{{url('save-address/')}}" method="post"> 
                        @csrf
                        <div class="form">
                            <div class="col">
                                <h4>Contact Details :</h4>
                            </div>
                            <div class="col2">
                                <input type="text" value="{{@$userAddress->contact_name}}" name="contact_name" placeholder="Name*">
                            </div>
                            <div class="col3">
                                <input type="text" value="{{@$userAddress->contact_no}}" name="contact_no" placeholder="Mobile No*">
                            </div>
                            <div class="col4">
                                <h5>Address:</h5>
                            </div>
                            <div class="col5">
                                <input type="text" value="{{@$userAddress->flat_no}}" name="flat_no" placeholder="Flat No*">
                            </div>
                            <div class="col6">
                                <input type="text" value="{{@$userAddress->locality_no}}" name="locality_no" placeholder="Locality*">
                            </div>
    
                            <div class="col7">
                                <input type="text" value="{{@$userAddress->city}}" name="city" placeholder="City*">
                            </div>
    
                            <div class="col8">
                                <input type="text" value="{{@$userAddress->pincode}}" name ="pincode" placeholder="Pincode*">
                            </div>
                            <div class="col9">
                                <textarea cols="30" rows="5" name="address" placeholder="Address (Area and Street)">"{{@$userAddress->address}}"</textarea>
                            </div>
                            <div class="col10">
                                <input type="text" value="{{@$userAddress->town}}" name="town" placeholder="City/District/Town">
                            </div>
                            <div class="col11">
                                <select name="state" id="state" class="form-control">
                                    <option selected><b>--Select State--</b> </option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="col12">
                                <button type="submit" value="submit">Save</button>
                            </div>
    
                        </div>
                    </form>
                    <!-- ----form--- -->
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