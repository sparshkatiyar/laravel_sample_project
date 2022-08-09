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
  
    <link href="{{ asset('asset/css/pandit.css') }}" rel="stylesheet">
    
</head>
<body>
    <!-- --------navbar---- -->
    @include('navbar')
    <!-- ----r-navabr---- -->

<!-- divider -->
<div id="divaider"></div>
 <!-- -----main box--- -->


    <!-- -----main box--- -->

    <div class="main-container">
        <center>
            <p class="main-heading">Pandit Registration</p>
            <p class="text-success">{{Session::get('success')}}</p>
        </center>
        <form action="{{url('pandit-registration')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- ---form-contaienr -->
            <div class="container  form-container">
                <h6>Personal Details :</h6>
                <!-- <h2>{{Session::get('success')}}</h2> -->
                <div class="logo-box">
                    
                    <div class="image-upload">
                        <label for="file-input">
                            <img src="{{ asset('pandit/pandit-logo.png')}}" height="80px" width="80px" />
                        </label>

                        <input id="file-input" name="pandit_pic" type="file" />
                    </div>
                    <p>Profile Pic <span> *(png, jpg, jpeg only)</span></p>
                </div>
                <!--  -->
                <div class=" form ">
                    <div class="row">
                        <div class="col">
                            <label for="javascript:void(0);">Name*</label><br>
                            <input type="text"  name="name" placeholder="Rajesh Shukla" class="text" required>
                        </div>
    
                        <div class="col">
                            <label for="javascript:void(0);">Email ID*</label><br>
                            <input type="email" name="email" placeholder="rajeshshukla@gmail.com" class="text" required>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col">
                            <label for="javascript:void(0);">Gender*</label><br>
                            <select id="gender" name="gender" required>
                                <option value="1" selected>Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
    
                        <div class="col">
                            <label for="javascript:void(0);">Date Of Birth*</label><br>
                            <input type="date" name="dob" placeholder="11 March 2001" class="text" required>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col">
                            <label for="javascript:void(0);">Register As* (Can Choose Upto 2)</label><br>
                            <!-- <div id="list3" class="dropdown-check-list" tabindex="100"> -->
                                <ul class="items">
                                    <li><input type="checkbox" class="single-checkbox" name="reg_as[]" value="Astrologers"/>Astrologers</li>
                                    <li><input type="checkbox" class="single-checkbox" name="reg_as[]" value="Pandit Ji"/>Pandit Ji</li>
                                    <li><input type="checkbox" class="single-checkbox" name="reg_as[]" value="Motivational guide "/>Motivational guide </li>
                                    
    
                                </ul>
                            <!-- </div> -->
                            
                        </div>
    
                        <div class="col">
                            <label for="javascript:void(0);">Primary Skill*</label><br>
                            <div id="list1" class="dropdown-check-list" tabindex="100">
                                <span class="anchor">Vedic</span>
                                <ul class="items" >
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Vedic Puja-path"/>Vedic Puja-path </li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Karamkand visheshgya"/>Karamkand visheshgya</li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Kathavachak"/>Kathavachak </li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Vedic Puja-path"/>Vedic Puja-path </li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Karamkand"/>Karamkand </li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value=""/>Puja-path Consultation </li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Gemstone consultation"/>Gemstone consultation</li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Puja Muhurat Consultation"/>Puja Muhurat Consultation</li>
                                    <li><input type="checkbox" class="four-checkbox" name="skill_primary[]" value="Bhajan/Sandhya- Sangeetmay Path"/>Bhajan/Sandhya- Sangeetmay Path</li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="row">
                        <div class="col">
                            <label for="javascript:void(0);">Seconadary Skills (Optional)</label><br>
                            <div id="list2" class="dropdown-check-list" tabindex="100">
                                <span class="anchor">Astrologers</span>
                                <ul class="items">
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Birth Chart Analysis"/>Birth Chart Analysis </li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Gemstone consultatio"/>Gemstone consultation</li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Vastu Consultation"/>Vastu Consultation </li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Kundali Matching"/>Kundali Matching</li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Marriage consultation"/>Marriage consultation </li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Career and business advice"/>Career and business advice </li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Love and Relationship advice"/>Love and Relationship advice</li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Health and Family issues advice"/>Health and Family issues advice </li>
                                    <li><input type="checkbox" class="six-checkbox" name="skill_secondry[]" value="Spiritual/Reiki healing"/>Spiritual/Reiki healing </li>
    
                                </ul>
                            </div>
                        </div>
    
                        <div class="col">
                            <label for="javascript:void(0);">Your Preferred to consult with Devotee </label><br>
    
                            <input type="text" name="consult_time" placeholder="10:00 AM to 08:00 PM" class="text">
                        </div>
                    </div>
                    <!-- -----other detail-- -->
                    <h6 class="other-detail
                        ">Other Details :</h6>
                    <div class="row">
                        <div class="col">
    
                            <label for="javascript:void(0);">Are you working on any other online platform?*</label>
    
                            <div class="row">
                                <div class="col">
                                    <input type="radio" name="other_platform"> <label>Yes</label>
                                    <input type="radio" name="other_platform"> <label>No</label>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="col">
                            <label for="javascript:void(0);">Name of the App or Website </label><br>
    
                            <input type="text" name="app_or_website" class="text" required>
                        </div>
    
                    </div>
    
                    <div class="row">
    
                        <div class="col ">
                            <label for="javascript:void(0);">Aadhar Card No.* </label><br>
    
                            <input type="number"  name="uid_number" class="text" required>
                        </div>
                        <div class="col d-flex flex-column"
                            style="background-color: javascript:void(0);FFF4E8; border-radius:10px; padding:0 10px 10px 10px ">
                            <label for="javascript:void(0);">Upload Aadhar Card* </label>
                            <input type="file" name="uid_image" placeholder="Choose File" required>
    
                        </div>
    
    
                    </div>
    
    
    
                    <div class="row">
                        <div class="col">
                            <label for="javascript:void(0);">Summary of Experties* ( Maximum 200 Words)</label><br>
                            <textarea name="experties" id="javascript:void(0);" cols="auto" rows="5" required></textarea>
                        </div>
                    </div>
                    <!-- ---Consultation Charges--- -->
                    <h6 class="charges">Consultation Charges :</h6>
    
                    <div class="row">
    
                        <div class="col">
                            <label for="javascript:void(0);">For Call</label><br>
    
                            <input type="text"  name="charge_call" placeholder="INR 50" class="text" required>
                        </div>
                        <div class="col">
                            <label for="javascript:void(0);">For Chat</label>
                            <input type="text" name="charge_chat" placeholder="INR 50" class="text" required>
    
                        </div>
    
    
                    </div>
    
    
                    <div class="row">
    
                        <div class="col">
                            <label for="javascript:void(0);">For Video Chat</label><br>
    
                            <input type="text" name="charge_video" placeholder="INR 50" class="text" required>
                        </div>
                        <div class="col"></div>
    
                    </div>
    
                    <div class="row">
                        <div class="col">
                            <input type="checkbox" name="is_term" id="javascript:void(0);" required> <span>By submitting, you accept our Terms & Conditions
                                and our Privacy Policy</span>
                        </div>
                    </div>
    
                    <center>
                        <div class="submit-div"><button class="submit" type="submit">Submit</button></div>
                    </center>
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <!-- for dropdow-- -->
    <script>
        var checkList = document.getElementById('list1');
        checkList.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (checkList.classList.contains('visible'))
                checkList.classList.remove('visible');
            else
                checkList.classList.add('visible');
        }

        var checkList2 = document.getElementById('list2');
        checkList2.getElementsByClassName('anchor')[0].onclick = function (evt) {
            if (checkList2.classList.contains('visible'))
                checkList2.classList.remove('visible');
            else
                checkList2.classList.add('visible');
        }

        // var checkList3 = document.getElementById('list3');
        // checkList3.getElementsByClassName('anchor')[0].onclick = function (evt) {
        //     if (checkList3.classList.contains('visible'))
        //         checkList3.classList.remove('visible');
        //     else
        //         checkList3.classList.add('visible');
        // }


        
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){      
            
            $('input[type=checkbox].single-checkbox').change(function(e){
            if ($('input[type=checkbox]:checked').length > 2) {
                    $(this).prop('checked', false)
                    // alert("allowed only 3");
            }
            })
            $('input[type=checkbox].four-checkbox').change(function(e){
            if ($('input[type=checkbox].four-checkbox:checked').length > 4) {
                    $(this).prop('checked', false)
                    // alert("allowed only 3");
            }
            })
            $('input[type=checkbox].six-checkbox').change(function(e){
            if ($('input[type=checkbox].six-checkbox:checked').length > 6) {
                    $(this).prop('checked', false)
                    // alert("allowed only 3");
            }
            })
        });
    </script>
    
@include('layouts.footer')