@include('layouts.header')

<!-- divider -->
<div id="divaider"></div>
 <!-- -----main box--- -->

 <div class="main-container">
        <center>
            <p class="main-heading">Pandit Registration</p>
        </center>

        <!-- ---form-contaienr -->
        <div class="container form-container">
            <h6>Personal Details :</h6>
            <div class="logo-box">
                <div class="logo"><img src="{{ asset('pandit/pandit-logo.png')}}" alt="#" /></div>
                <p>Profile Pic <span> *(png, jpg, jpeg only)</span></p>
            </div>
            <!--  -->
            <div class="form">
                <div class="row">
                    <div class="col">
                        <label for="#">Name*</label><br />
                        <input type="text" placeholder="Rajesh Shukla" class="text" />
                    </div>

                    <div class="col">
                        <label for="#">Email ID*</label><br />
                        <input type="email" placeholder="rajeshshukla@gmail.com" class="text" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="#">Gender*</label><br />
                        <select id="gander">
                            <option value="1" selected>Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="#">Date Of Birth*</label><br />
                        <input type="date" placeholder="11 March 2001" class="text" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="#">Register As* (Can Choose Upto 2)</label><br />
                        <select id="Astrologers">
                            <option value="1" selected>Astrologers</option>
                            <option value="2">Pandit Ji</option>
                            <option value="3">Motivational guide</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="#">Primary Skill*</label><br />
                        <div id="list1" class="dropdown-check-list" tabindex="100">
                            <span class="anchor">Vedic</span>
                            <ul class="items">
                                <li><input type="checkbox" />Vedic Puja-path</li>
                                <li><input type="checkbox" />Karamkand visheshgya</li>
                                <li><input type="checkbox" />Kathavachak</li>
                                <li><input type="checkbox" />Vedic Puja-path</li>
                                <li><input type="checkbox" />Karamkand</li>
                                <li><input type="checkbox" />Puja-path Consultation</li>
                                <li><input type="checkbox" />Gemstone consultation</li>
                                <li><input type="checkbox" />Puja Muhurat Consultation</li>
                                <li>
                                    <input type="checkbox" />Bhajan/Sandhya- Sangeetmay Path
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="#">Seconadary Skills (Optional)</label><br />
                        <div id="list1" class="dropdown-check-list" tabindex="100">
                            <span class="anchor">Astrologers</span>
                            <ul class="items">
                                <li><input type="checkbox" />Birth Chart Analysis</li>
                                <li><input type="checkbox" />Gemstone consultation</li>
                                <li><input type="checkbox" />Vastu Consultation</li>
                                <li><input type="checkbox" />Kundali Matching</li>
                                <li><input type="checkbox" />Marriage consultation</li>
                                <li><input type="checkbox" />Career and business advice</li>
                                <li><input type="checkbox" />Love and Relationship advice</li>
                                <li>
                                    <input type="checkbox" />Health and Family issues advice
                                </li>
                                <li><input type="checkbox" />Spiritual/Reiki healing</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <label for="#">Your Preferred to consult with Devotee </label><br />

                        <input type="text" placeholder="10:00 AM to 08:00 PM" class="text" />
                    </div>
                </div>
                <!-- -----other detail-- -->
                <h6 class="other-detail">Other Details :</h6>
                <div class="row">
                    <div class="col">
                        <label for="#">Are you working on any other online platform?*</label>

                        <div class="row">
                            <div class="col">
                                <input type="radio" name="a" /> <label>Yes</label>
                                <input type="radio" name="a" /> <label>No</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <label for="#">Name of the App or Website </label><br />

                        <input type="text" class="text" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="#">Aadhar Card No.* </label><br />

                        <input type="number" class="text" />
                    </div>
                    <div class="col d-flex flex-column" style="
                background-color: #fff4e8;
                border-radius: 10px;
                padding: 0 10px 10px 10px;
              ">
                        <label for="#">Upload Aadhar Card* </label>
                        <input type="file" placeholder="Choose File" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="#">Summary of Experties* ( Maximum 200 Words)</label><br />
                        <textarea name="#" id="#" cols="auto" rows="5"></textarea>
                    </div>
                </div>
                <!-- ---Consultation Charges--- -->
                <h6 class="charges">Consultation Charges :</h6>

                <div class="row">
                    <div class="col">
                        <label for="#">For Call</label><br />

                        <input type="text" placeholder="INR 50" class="text" />
                    </div>
                    <div class="col">
                        <label for="#">For Chat</label>
                        <input type="text" placeholder="INR 50" class="text" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="#">For Video Chat</label><br />

                        <input type="text" placeholder="INR 50" class="text" />
                    </div>
                    <div class="col"></div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="checkbox" name="#" id="#" />
                        <span>By submitting, you accept our Terms & Conditions and our
                            Privacy Policy</span>
                    </div>
                </div>

                <center>
                    <div class="submit-div"><button class="submit">Submit</button></div>
                </center>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <!-- for dropdow-- -->
    <script>
        var checkList = document.getElementById("list1");
        checkList.getElementsByClassName("anchor")[0].onclick = function (evt) {
            if (checkList.classList.contains("visible"))
                checkList.classList.remove("visible");
            else checkList.classList.add("visible");
        };
    </script>
@include('layouts.footer')