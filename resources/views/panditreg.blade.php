@include('layouts.header')
@include('layouts.popup')


<!-- divider -->
<div id="divaider"></div>
 <!-- -----main box--- -->


    <!-- -----main box--- -->

    <div class="main-container" id="pandit-regi-container">
        <center>
            <p class="regPandit-title">Pandit Registration</p>
            <p class="text-success">{{Session::get('success')}}</p>
            <p class="text-danger">{{Session::get('error')}}</p>
        </center>
        <form action="{{url('pandit-registration')}}" method="post" enctype="multipart/form-data" id="create-pandit">
            @csrf
            <!-- ---form-contaienr -->
            <div class="container  form-container">
                <h6 class="reg-pr-dt">Personal Details :</h6>

                <!-- <h2>{{Session::get('success')}}</h2> -->
                <div class="logo-box">
                    <div class="logo"><img src="{{ asset('pandit/pandit-logo.png')}}" alt="#" id="pandit-pic">
                        <input type="file" id="imgupload"  name="pandit_pic" type="file" onchange="previewimg(this)" required="true">
                    </div>

                    <p>Profile Pic <span> *(png, jpg, jpeg only)</span></p>
                 </div>
                <!-- <div class="logo-box">
                    
                    <div class="image-upload">
                        <label for="file-input">
                            <img src="{{ asset('pandit/pandit-logo.png')}}" height="80px" width="80px" />
                        </label>

                        <input id="file-input" name="pandit_pic" type="file" />
                    </div>
                    <p>Profile Pic <span> *(png, jpg, jpeg only)</span></p>
                </div> -->
                <!--  -->
                <div class="form reg-form-section">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Name*</label><br>
                                <input type="text"  name="name" class="form-control" placeholder="Rajesh Shukla" class="text" value="{{old('name')}}" required="true">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Email ID*</label><br>
                                <input type="email" name="email" class="form-control" placeholder="rajeshshukla@gmail.com" class="text" value="{{old('email')}}" required="true">
                            </div>
                        </div>
                       
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Gender*</label><br>
                                <select id="gender" name="gender" class="form-control" required="true">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Date Of Birth*</label><br>
                                <input type="date" name="dob" class="form-control" placeholder="11 March 2001" value="{{old('dob')}}" class="text" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Register As* <span>(Can Choose Upto 2)</span></label><br>
                                <!-- <div id="list3" class="dropdown-check-list" tabindex="100"> -->
                                    <!-- <ul class="items">
                                        <li><input type="checkbox" class="single-checkbox" name="reg_as[]" value="Astrologers"/>Astrologers</li>
                                        <li><input type="checkbox" class="single-checkbox" name="reg_as[]" value="Pandit Ji"/>Pandit Ji</li>
                                        <li><input type="checkbox" class="single-checkbox" name="reg_as[]" value="Motivational guide "/>Motivational guide </li>
                                        
        
                                    </ul> -->
                                   <div class="multiple-select1 multiple-selectin1" id="multiple-select1">
                                   <select id="example-getting-started" name="reg_as[]" multiple="multiple" required="true">
                                        <option value="Pandit Ji">Pandit Ji</option>
                                        <option value="Astrologers">Astrologers</option>
                                        <option value="Motivational Guide">Motivational Guide </option>
                                     
                                    </select>
                                   </div>
                                <!-- </div> -->
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Primary Skill*</label><br>

                                <div class="multiple-select1 multiple-selectin2" id="multiple-select2">
                                   <select id="primarySkill" multiple="multiple" name="skill_primary[]" required="true">
                                        <option value="Vedic">Vedic</option>
                                        <option value="Vedic Puja-path">Vedic Puja-path</option>
                                        <option value="Karamkand visheshgya">Karamkand visheshgya</option>
                                        <option value="Kathavachak">Kathavachak</option>
                                        <option value="Puja-path Consultation">Puja-path Consultation</option>
                                        <option value="Gemstone consultation">Gemstone consultation</option>
                                        <option value="Puja Muhurat Consultation">Puja Muhurat Consultation</option>
                                        <option value="Bhajan/Sandhya- Sangeetmay Path">Bhajan/Sandhya- Sangeetmay Path</option>
                                    </select>
                                   </div>
                                <!-- <div id="list1" class="dropdown-check-list" tabindex="100">
                                    <span class="anchor"></span>
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
                                </div> -->
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                            <label>Seconadary Skills (Optional)</label><br>
                            <!-- <div id="list2" class="dropdown-check-list" tabindex="100">
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
                            </div> -->
                            <div class="multiple-select1 multiple-selectin3" id="multiple-select3">
                                   <select id="seconadarySkill" multiple="multiple" name="skill_secondry[]" required="true">
                                        <option value="Astrologers">Astrologers</option>
                                        <option value="Birth Chart Analysis">Birth Chart Analysis</option>
                                        <option value="Gemstone consultation">Gemstone consultation</option>
                                        <option value="Vastu Consultation">Vastu Consultation</option>
                                        <option value="Kundali Matching">Kundali Matching</option>
                                        <option value="Marriage consultation">Marriage consultation</option>
                                        <option value="Career and business advice ">Career and business advice </option>
                                        <option value="Love and Relationship advice">Love and Relationship advice</option>
                                        <option value="Health and Family issues advice">Health and Family issues advice</option>
                                        <option value="Reiki healing">Reiki healing</option>
                                    </select>
                                   </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Your Preferred to consult with Devotee* </label><br>
                                <input type="text" name="consult_time" class="form-control" value="{{old('consult_time')}}" placeholder="10:00 AM to 08:00 PM" class="text" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Select Language* <span> (Choose Upto 3)</span> </label><br>
                                <div class="multiple-select1 multiple-selectin4" id="language-select" value="{{old('consult_time')}}" required="true">
                                   <select id="language" multiple="multiple" name="language[]">
                                        
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                        <option value="Marathi">Marathi</option>
                                        <option value="Kannad">Kannad</option>
                                        <option value="Malyalam">Malyalam</option>
                                    </select>
                                   </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Experience* <span> (In Years)</span> </label><br>
                                <input type="number" name="experiance" min="1" class="form-control" value="{{old('experiance')}}" placeholder="Enter Experiance year" class="text" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h6 class="title-reg">Other Details :</h6>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Are you working on any other online platform?*</label>
                              
                                    <div class="d-flex cstm align-items-center">
                                        <label class="custom-radio" style="color: #111112 !important;">Yes
                                                <input type="radio" name="other_platform" value="yes" onchange="getoption(this)"> 
                                                <span class="checkmark"></span>
                                        </label>
                                        <label class="custom-radio" style="color:#111112 !important;">No
                                        <input type="radio" name="other_platform" checked="true" value="no" onchange="getoption(this)"> 
                                                <span class="checkmark"></span>
                                        </label>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="display:none;" id="website">
                            <div class="form-group">
                            <label>Name of the App or Website </label><br>
    
                                <input type="text" class="form-control" name="app_or_website" value="{{old('app_or_website')}}" class="text" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Aadhar Card No.* </label><br>
                                <input type="number" class="form-control"  name="uid_number" value="{{old('uid_number')}}" class="text" minlength="12" maxlength="12" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                               
                                    <label>Upload Aadhar Card* </label>
                                    <div class="uploadAdhar">
                                    <input type="file" name="uid_image" placeholder="Choose File" required="true">
                                    </div>
            
                                
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>Summary of Experties* <span>( Maximum 200 Words)</span></label><br>
                                <textarea name="experties" class="form-control" id="javascript:void(0);"  cols="auto" rows="5" required="true">{{old('experties')}}</textarea>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h6 class="title-reg">Consultation Charges :</h6>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>For Call*</label><br>
                                <input type="text" class="form-control" name="charge_call" value="{{old('charge_call')}}" placeholder="INR 50" class="text" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                            <label>For Chat*</label>
                            <input type="text" class="form-control" name="charge_chat" value="{{old('charge_chat')}}" placeholder="INR 50" class="text" required="true">
                            </div>
                        </div>
                       
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-group">
                                <label>For Video Chat*</label><br>
                                <input type="text" class="form-control" name="charge_video" value="{{old('charge_video')}}" placeholder="INR 50" class="text" required="true">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="cs-checkbox">By submitting, you accept our Terms & Conditions
                                and our Privacy Policy*
                                <input type="checkbox"  type="checkbox" name="is_term"  value="1" required="true">
                                <span class="checkmark"></span>
                            </label>
                        
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="submit-div">
                                <button class="submit" type="submit">Submit</button>
                            </div>
                        </div>
                       
                    </div>
    
                   
                        
                   
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <script>
    $(document).ready(function () {
    $('#create-pandit').validate({ // initialize the plugin

        rules: {
            field1: {
                required: true,
                email: true
            },
            field2: {
                required: true,
                password: true
            }
             
        }
    });

});
        $(function(){      
            
            $('#example-getting-started').change(function(e){
                if ($(this).val().length > 2) {
                    this.checked = false; // reset first
                    event.preventDefault();
                    alert('You can select only 2');
                    $(this).attr('checked', false);
                    event.target.checked = false
                    
                    // alert("Not allowed only 2");
                    // e.preventDefault();
                    // e.stopPropagation();
                }
            })
                
            
            $('#primarySkill').change(function(e){
                if ($(this).val().length > 4) {
                    this.checked = false; // reset first
                    event.preventDefault();
                    alert('You can select only 4');
                    event.target.checked = false;
                    // alert("Not allowed only 2");
                    // e.preventDefault();
                    // e.stopPropagation();
                }
            })
            $('#seconadarySkill').change(function(e){
                if ($(this).val().length > 6) {
                    this.checked = false; // reset first
                    event.preventDefault();
                    alert('You can select only 6');
                    event.target.checked = false
                    // alert("Not allowed only 2");
                    // e.preventDefault();
                    // e.stopPropagation();
                }
            })
        });

        function getoption(app)
        {
            if($(app).val()=='yes')
            {
                $('#website').show();
            }else
            {
                $('#website').hide();
            }

        }


    </script>
    <script>
    function previewimg(img)
	{
        document.getElementById('pandit-pic').src = window.URL.createObjectURL(img.files[0]);
    }
    </script>


    @include('layouts.footer')


  
