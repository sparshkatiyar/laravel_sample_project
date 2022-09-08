  
  @include('layouts.header')
  @include('layouts.popup')
  <?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "HBxc80";
$SALT = "yauHLEFqtr8L4KD4eeqEWpP0YHccAGS4";
$txnid=$txnidn;
$name="pk";
$email="pkworkout@gmail.com";
$amount=100;
$phone="7992215707";
$surl="http://localhost/cake/my_app_name/view/sucess";
$furl="http://localhost/cake/my_app_name/view/failure";
$productInfo="xyzabc";

// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>
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
                    <a href="javascript:void" onclick="popshow()">
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
                        <div class="width-100">
                            <h5>Address &nbsp; <span><img src="right.png" alt="" width="20px"></span></h5>
                        </div>
                        <button id="" class="btn-same" onclick="f1()">Fill</button>
                    </div>

                    <!-- ---detail-form -->
                    <div class="detail-form">
                        <form action="{{url('save-address/')}}" method="post" id="address-form">
                            @csrf
                            <div class="contact">
                                <label for="">Contact Details :</label>
                                <div class="form-menu">
                                    <input type="text" value="{{@@$userAddress->contact_name}}" name="contact_name" placeholder="Name*">
                                    <input type="text" value="{{@@$userAddress->contact_no}}" name="contact_no" placeholder="Alternate Mobile No*">
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
                                        @foreach(@$state_list as $skey=>$svalue)
                                            @if(@$skey == @$userAddress->state)
                                            <option value="{{$skey}}" selected>{{$svalue}}</option>
                                            @else
                                            <option value="{{$skey}}">{{$svalue}}</option>
                                            @endif
                                        
                                        @endforeach
                                    </select>
                                </div>
                                <label for="">Order Note (If any)  :</label>
                                <div class="form-menu">

                                    <input type="text" class="width-100"  {{@@$userAddress->city}}  placeholder="Enter note">
                                   
                                </div>
                            </div>
                            <!--  -->
                            <div class="note">
                                <button type="submit">Save</button>
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
                        <div class="width-100">
                            <h5>Select Date and Time of Pooja &nbsp;<span><img src="{{asset('web/image/right.png')}}" alt="" width="20px"></span></h5>
                        
                        </div>
                        <button id="" class="date-2 btn-same"> Fill</button>
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
                        <div  class="width-100">
                            <h5>Order Summary &nbsp;<span></span></h5>
                        </div>
                        <button id="" class="btn-same"  onclick="f3()"> View</button>
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
                <div class="price-detail">
                    <form action="{{url('/booking-placed')}}" method="post" id="boooking-place">
                        @csrf
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
                            <div class="custom-radio">
                                <input name="cod" type="radio"  id="tdy" checked="checked">
                                <h6>Payment Mode</h6>
                                <form action="" method="post">

                                    <h6> <span id="cod">Online </span></h6>
                                </form>
                            </div>
                        </div>
                        <input type="text" value="{{$tax}}" name="price_tax" hidden>
                        <input type="text" value="" name="finalprice" hidden>
                        <input type="text" value="0" name="price_coupan" hidden>
                        <input type="text" value="1" name="booking_type" hidden>
                        <input type="text" name="delivery_date" id="ddate" hidden>
                        <input type="text" name="delivery_time" id="dtime" hidden>
                        @if(Auth::guard('user')->user())
                        
                        <span class="placeBtn" onclick="openmodal()">Book Pooja</span>
                        
                        @else
            
                        <span class="placeBtn" onclick="popshow()">Book Pooja</span>
                        
                        @endif

                    
                    </form>
                    <form action="https://secure.payu.in/_payment" method="post" name="payuform">
                       
                        <input type="hidden" name="key" value="{{$MERCHANT_KEY}}" hidden/>
                        <input type="hidden" name="hash"  value="<?php echo $hash;?>" hidden/>
                        <input type="hidden" name="txnid" value="{{$txnid}}" hidden/>

                        <input type="text" name="amount" id="payuamount" value="<?php echo $amount;?>" hidden/>
                        <input type="text" name="firstname" id="firstname" value="{{$name}}" hidden/>
                        <input type="text" name="email" id="email"  value="{{@$email}}" hidden/>
                        <input type="text" name="phone" value="{{$phone}}" hidden/>
                        <input type="text" name="productinfo" value="{{ @$productInfo}}" hidden>
                        <input type="text" name="surl"  size="64" value="{{$surl}}" hidden/>
                        <input type="text" name="furl"  size="64" value="{{$furl}}" hidden/>
                        <input type="hidden" name="service_provider" value="AstroPanditOm"hidden />
                        <button id="placeBtn"type="submit"  value="submit">Place Order</button>
                    </form>
                </div>
        </div>
    </section>


    <!-- -------------footer-------- -->



    <!-- ------rights bootm bar----- -->

<!-- Modal -->




<div class="modal fade success-message" id="successModal" tabindex="-1" aria-labelledby="successModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="success-message">
        <img src="{{ asset('images/suceess-img.svg')}}" alt="#" class="img-fluid success-img" />
            <h3>Order Successful</h3>
            <p>Your Order has been submited successfully</p>
            <button type="button" data-bs-dismiss="modal" onclick="ordersuccess()">Thank You</button>
        </div>
      </div>
      
    </div>
  </div>
</div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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
        function openmodal()
        {
            var bookingform=new FormData($("#boooking-place")[0]);
            if($('#ddate').val()=='' && $('#dtime').val()=='')
            {
                swal('Please select date and time');
                return false;
            }else
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{url('booking-placed')}}",
                    type: "POST",
                    dataType: 'json',
                    data: bookingform,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // var data = JSON.parse(response);
                        if(response==1)
                        {
                            swal('Please fill address form');
                        }else
                        {
                            $('#successModal').modal('show');
                        }
                        
                    }
                });
               
                
            }
            
        }
        function otpcls(){
            $("#otp-popup").css({"display": "none"});
            $("#pop1").css({"display": "none"});

        }

        function ordersuccess()
        {
            window.location.href = "{{route('user.index')}}";
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

        var totalPrice =  parseInt("{{$adPay}}");;
            // var setPrice = $("#finalprice").text(totalPrice);
        var finalprice = $("input[name=finalprice]").val(totalPrice);
        $("#adpay").click(function(){
            var basePrice ="{{$price_order}}";
            // alert(basePrice);
            var totalPrice =  parseInt("{{$adPay}}");;
            var setPrice = $("#finalprice").text(totalPrice);
            var finalprice = $("input[name=finalprice]").val(totalPrice);
            var tinstotal = Math.round(totalPrice);            
            $("#payuamount").val(tinstotal);
        });
        $("#tdpay").click(function(){
            var basePrice ="{{$price_order}}";
            // alert(basePrice);
            var totalPrice = parseInt(basePrice) ;;
            var setPrice = $("#finalprice").text(totalPrice);
            var finalprice = $("input[name=finalprice]").val(totalPrice);
            var tinstotal =Math.round(totalPrice);
            $("#payuamount").val(tinstotal);
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
    <script>
       $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate() + 1;
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#delivery_date').attr('min', maxDate);
});


        </script>

@include('layouts.footer')




