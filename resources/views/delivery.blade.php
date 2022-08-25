  
  @include('layouts.header')
  @include('layouts.popup')
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
                    <div id="loginNumber">{{@$user->country_code}} {{@$user->mobile_number}}</div>
                   
                    @if(Auth::guard('user')->user())
                    <a href="{{url('/address')}}">
                        <button class="changeNumber" >change</button>

                    </a>
                    @else
                    <button class="changeNumber" onclick="popshow()">Signup</button>
                  
                    @endif
                    
                </div>
                <!-- Customer Details for Pooja -->
                <div class="customer-detail" id="customerDetail">
                    <div class="show-heding">
                        <div class="num">
                            2
                        </div>
                        <div>
                            <h5>Address &nbsp; <span><img src="right.png" alt="" width="20px"></span></h5>
                        </div>
                        <button id="downBtn" onclick="f1()">Fill</button>
                    </div>

                    <!-- ---detail-form -->
                    <div class="detail-form">
                        <form action="{{url('save-address/')}}" method="post">
                            @csrf
                            <div class="contact">
                                <label for="">Contact Details :</label>
                                <div class="form-menu">
                                    <input type="text" value="{{@@$userAddress->contact_name}}" name="contact_name" placeholder="Name*">
                                    <input type="text" value="{{@@$userAddress->contact_no}}" name="contact_no" placeholder="Mobile No*">
                                </div>
                            </div>
                            <!--  -->
                            <div class="add">
                                <label for="">Address :</label>
                                <div class="form-menu">

                                    <input type="text" value="{{@@$userAddress->flat_no}}" name="flat_no" placeholder="Flat no.*">
                                    <input type="text"  value="{{@@$userAddress->locality_no}}" name="locality_no" placeholder="Locality*">

                                </div>

                                <div class="form-menu">

                                    <input type="text" value="{{@@$userAddress->city}}" name="city" placeholder="City*">
                                    <input type="text"  value="{{@@$userAddress->pincode}}" name="pincode" placeholder="Pincode*">

                                </div>

                                <div class="form-menu">
                                    <textarea id="" name="address" rows="4" cols="50"
                                        placeholder="Address (Area and Street)">{{@@$userAddress->address}}</textarea>
                                </div>
                                <div class="form-menu">
                                    <input type="text" value="{{@@$userAddress->town}}" name="town" placeholder="City/District/Town">
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
                                <label for="">Order Note (If any)  :</label>
                                <div class="form-menu">

                                    <input type="text" class="width-100"   placeholder="Enter note">
                                   
                                </div>
                            </div>
                            <!--  -->
                            <div class="note">
                                <button type="submit">Deliver Here</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!------- date-- -->

                <div class="pay-option data-select" id="selectDate">
                    <div class="show-heding">
                        <div class="num">
                            3
                        </div>
                        <div>
                            <h5>Select Date and Time of Pooja &nbsp;<span><img src="{{asset('web/image/right.png')}}" alt="" width="20px"></span></h5>
                        
                        </div>
                        <button id="downBtn" class="date-2"> Fill</button>
                    </div>
                    <div class="">
                        <div class="form-menu">

                        <input type="date"  id="delivery_date">
                        <input type="time"  id="delivery_time">

                        </div>
                    </div>
                </div>

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

                    <div class="inner-summary-detail">
                        <div class="img-section">
                        <img src="{{ @$pujaDetails->puja_id->image}}" alt="">
                        </div>
                        <div class="content-section">
                        <h4>{{ @$pujaDetails->puja_id->name}}</h4>
                        <!-- <p><span>Pooja Date :</span>   22 March 2022</p> -->
                        <p><span> Catogary :</span>     {{ @$pujaDetails->puja_id->type}} 
                        <strong>&#x20b9 {{$price_order}}</strong>
                    </p>
                        </div>
                    </div>
                        


                      


                    </div>
                    <!-- <button id="continue">Continue</button> -->
                </div>

                <!-- ----pay-option-- -->
               
            </div>
            <!-- ----------------------------------------------------------------------------------------- -->
            <form action="{{url('/booking-placed')}}" method="post">
                @csrf
                <div class="price-detail">
                    <div class="detail">
                        <p class="pr-dt">Price-Detail :</p>
    
                        <div class="price-item">

                        <label class="custom-radio">Pay Advance Amount
                            <input  name="totalPay" type="radio" value="{{$price_order}}" id="adpay" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                            <h6></h6>
                            <h6>&#x20b9 <span>{{$adPay}}</span></h6>
                        
                        </div>
                        
                        <small class="pay-b">(pay balance amount to pandit ji)</small>
    
                        <div class="tax price-item">
                            
                            <label class="custom-radio">Pay Full Amount
                            <input name="totalPay" type="radio" value="{{$adPay}}" id="tdpay">
                            <span class="checkmark"></span>
                        </label>
                            <h6>&#x20b9 <span>{{$price_order}}</span></h6>
                        </div>
                        
                        <div class="total">
                            <h6>Total amount</h6>
                            <h6>&#x20b9 <span id="finalprice">{{$adPay}}</span></h6>
                        </div>
                    </div>
                    <input type="text" value="{{$tax}}" name="price_tax" hidden>
                    <!-- <input type="text" value="{{$price_total}}" name="price_total" hidden> -->
                    <input type="text" value="0" name="price_coupan" hidden>
                    <input type="text" value="1" name="booking_type" hidden>
                    <input type="text" name="delivery_date" id="ddate" hidden>
                    <input type="text" name="delivery_time" id="dtime" hidden>
                    @if(Auth::guard('user')->user())
                    <button id="placeBtn" type="submit" data-bs-toggle="modal" data-bs-target="#successModal" value="submit">Place Order</button>
                    @else
          
                    <span class="placeBtn" onclick="popshow()">Place Order</span>
                    
                    @endif

                    
                </div>
            </form>
            <!-- <button id="placeBtn" type="submit" data-bs-toggle="modal" data-bs-target="#successModal" value="submit">Place Order</button> -->
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
        function f4() {
            alert("hi")
            let div = document.getElementById("selectDate");
            div.classList.toggle("pay-option2");

        }
        $(".date-2").click(function(){

        $(".pay-option").toggleClass("active");


        })
       function clsfirstpopup(){
            $("#pop1").css({"display": "none"});
        }
        function popshow(){

            $("#pop1").css({"display": "flex"});
        }
        // $("#clsindex").click(function(){
        //     $("#pop1").css({"display": "none"});;
        // })
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

        $("#adpay").click(function(){
            var basePrice ="{{$price_order}}";
            // alert(basePrice);
            var totalPrice =  parseInt("{{$adPay}}");;
            var setPrice = $("#finalprice").text(totalPrice);
        });
        $("#tdpay").click(function(){
            var basePrice ="{{$price_order}}";
            // alert(basePrice);
            var totalPrice = parseInt(basePrice) ;;
            var setPrice = $("#finalprice").text(totalPrice);
        });

        
        $("#delivery_date").on("change",function(){
            let  selected = $(this).val();
            $("#ddate").val(selected);
            let dd =   $("#ddate").val();
            // alert(dd);
        });
        $("#delivery_time").on("change",function(){
            let selected = $(this).val();
            $("#dtime").val(selected);
            let  dt =   $("#dtime").val();
        });
    </script>

@include('layouts.footer')




<!-- Modal -->
<div class="modal fade success-message" id="successModal" tabindex="-1" aria-labelledby="successModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="success-message">
        <img src="{{ asset('images/suceess-img.svg')}}" alt="#" class="img-fluid success-img" />
            <h3>Order Successful</h3>
            <p>Your Order #1234 has successfully place</p>
            <button type="button" data-bs-dismiss="modal">Thank You</button>
        </div>
      </div>
      
    </div>
  </div>
</div>