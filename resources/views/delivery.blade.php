  
  @include('layouts.header')
<!-- divider -->
<div id="divaider"></div>
  <!-- ----------------section1--------- -->

    <section id="section1">

        <div class="container main">

            <div class="form">
                <!-- ---login form-- -->
                <div class="login">
                    <div>
                        <div class="num">
                            1
                        </div>

                        <h4>Login <span><img src="right.png" alt="" width="20px"></span></h4>

                    </div>
                    <div id="loginNumber">{{$user->country_code}}-{{$user->mobile_number}}</div>
                    <!-- <button id="changeButton" href="{{url('/address')}}">change</button> -->
                    <button id="changeButton" href="{{url('/address')}}">change</button>
                </div>
                <!-- Customer Details for Pooja -->
                <div class="customer-detail" id="customerDetail">
                    <div class="show-heding">
                        <div class="num">
                            2
                        </div>
                        <div>
                            <h5>Delivery Address &nbsp; <span><img src="right.png" alt="" width="20px"></span></h5>
                        </div>
                        <button id="downBtn" onclick="f1()">Fill</button>
                    </div>

                    <!-- ---detail-form -->
                    <div class="detail-form">
                        <form method="">
                            <div class="contact">
                                <label for="">Contact Details :</label>
                                <div>
                                    <input type="text" name="contact_name" placeholder="Name*">
                                    <input type="text" name="contact_no" placeholder="Mobile No*">
                                </div>
                            </div>
                            <!--  -->
                            <div class="add">
                                <label for="">Address :</label>
                                <div>

                                    <input type="text" name="flat_no" placeholder="Flat no.*">
                                    <input type="text" name="locality_no" placeholder="Locality*">

                                </div>

                                <div>

                                    <input type="text" name="city" placeholder="City*">
                                    <input type="text" name="pincode" placeholder="Pincode*">

                                </div>

                                <div>
                                    <textarea id="" name="address" rows="4" cols="50"
                                        placeholder="Address (Area and Street)"></textarea>
                                </div>
                                <div>
                                    <input type="text" name="town" placeholder="City/District/Town">
                                    <select name="state">
                                        <option value="#">--Select State--</option>
                                        <option value="state 1">state 1</option>
                                        <option value="State 2">State 2</option>
                                    </select>
                                </div>
                            </div>
                            <!--  -->
                            <div class="note">
                                <button>Deliver Here</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!------- date-- -->


                <!----summary--  -->
                <div class="summary" id="sum">
                    <div class="show-heding">
                        <div class="num">
                            3
                        </div>
                        <div>
                            <h5>Order Summary &nbsp;<span></span></h5>
                        </div>
                        <button id="downBtn" onclick="f3()"> Fill</button>
                    </div>

                    <!-- ---summary-detail-- -->
                    <div class="summary-detail">
                        <div class="img">
                            <img src="product.png" alt="">
                        </div>
                        <div class="detail">
                            <h5>Rudraksh</h5>
                            <p>Lorem ipsum dolor sit tetur </p>

                            <p class="price-pera"><strong> <span class="current-price">&#x20b9 5.00</span></strong>
                                <small><del>
                                        <font color="gray"> &#x20b9 6.00 </font>
                                    </del></small></p>
                            <div id="offer">
                                <font color="#A65D08
                                ">25% off</font>
                            </div>
                        </div>


                        <div class="Quantity">
                            <!-- <h5>Quantity</h5>
      -->
                            <div class="input">
                                <div class="value-button" id="decrease" onclick="decreaseValue()"
                                    value="Decrease Value">-</div>
                                <input type="number" id="number" placeholder="#" value="0" />
                                <div class="value-button" id="increase" onclick="increaseValue()"
                                    value="Increase Value">+</div>
                            </div>
                        </div>


                    </div>
                    <button id="continue">Continue</button>
                </div>

                <!-- ----pay-option-- -->
                <div class="pay-option">
                    <div class="show-heding">
                        <div class="num">
                            3
                        </div>
                        <div>
                            <h5>Payment Options &nbsp;<span><img src="{{asset('web/image/right.png')}}" alt="" width="20px"></span></h5>
                           
                        </div>
                        <!-- <button id="downBtn"> <img src="down.png" alt=""></button> -->
                    </div>
                </div>
            </div>
            <!-- ----------------------------------------------------------------------------------------- -->
            <form action="{{url('/booking-placed')}}" method="post">
                @csrf
                <div class="price-detail">
                    <div class="detail">
                        <p>Price-Detail :</p>
    
                        <div>
                            <h6>Price( 2 Items)</h6>
                            <h6>&#x20b9 <span>50.00</span></h6>
                        </div>
    
                        <div class="tax">
                            <h6>Tax</h6>
                            <h6>&#x20b9 <span>5.00</span></h6>
                        </div>
    
                        <div class="total">
                            <h6>Total amount</h6>
                            <h6>&#x20b9 <span>55.00</span></h6>
                        </div>
                    </div>
                    <input type="text" value="5" name="price_tax" hidden>
                    <input type="text" value="{{}}" name="price_total" hidden>
                    <input type="text" value="0" name="price_coupan" hidden>
                    <button id="placeBtn" type="submit" value="submit">Place Order</button>
                </div>
            </form>
        </div>
    </section>


    <!-- -------------footer-------- -->



    <!-- ------rights bootm bar----- -->







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



    <script>
        // --for customer-detail2
        function f1() {
            let div = document.getElementById("customerDetail");
            div.classList.toggle("customer-detail2");
        }

        // --for address2
        function f2() {
            let div = document.getElementById("adr");
            div.classList.toggle("address2");
        }

        // --for customer-detail2
        function f3() {
            let div = document.getElementById("sum");
            div.classList.toggle("summary2");

        }
    </script>

    <script>
        function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }

        function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById('number').value = value;
        }
    </script>

@include('layouts.footer')