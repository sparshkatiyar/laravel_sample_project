@include('layouts.header')
@include('layouts.popup')
<!-- divider -->
<div id="divaider"></div>
<!-- -----------section1----------- -->

<section id="section1">
    <div class="container-fluid main-pooja">
        <div class="top">

            <div class="top1">
                <img src="{{ $pujaDetails->puja_id->image}}" alt="">
                <input type="text" name="ecomm_puja_id" value="{{$ecomm_puja_id}}" hidden>
            </div>
            <div class="top1">
                <h5> <b>{{ $pujaDetails->puja_id->name}}</b></h5>
                <span >

                <?php
                    $string = strip_tags($pujaDetails->puja_id->desc);
                    if (strlen($string) > 550) {

                        // truncate string
                        $stringCut = substr($string, 0, 550);
                        $endPoint = strrpos($stringCut, ' ');
                    
                        //if the string doesn't contain any space then it will cut without word basis.
                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                        $string .= '... <a href="javascript:void(0); " id="readMore">Read More</a>';
                    }
                    
                    $string_hindi = strip_tags($pujaDetails->puja_id->deschindi);
                    if($string_hindi)
                    {
                        $string .= '<a href="javascript:void(0); " id="readMore">Read More</a>';
                    }
                    echo $string;
                    echo '<p style="display:none;" id="hindi_desc">'.$string_hindi.'</p>';

                ?>
                </span>     
                <!-- <p>
                    {!! $pujaDetails->puja_id->desc!!}
                    
                </p> -->
                <a id="lessMore" href="javascript:void(0); ">...lessmore</a>
            </div>
        </div>
        
        <div class="top-row">

            <div class="top2">
                    <div class="detail-box detail-box2">
                        <h6 class="text-heading2">Choose Your Pooja :</h6>

                        <div class="cate-item">
                            <label class="custom-radio">Standard
                                <input type="radio" name="pujatype" value="1" id="standard">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="cate-item">
                            <label class="custom-radio">Premium
                                <input type="radio" name="pujatype" value="2" id="premium">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="cate-item">
                            <label class="custom-radio">Grand
                                <input t type="radio" name="pujatype" value="3" id="grand">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <!-- <div >
                            <details>
                                <summary>
                                    <h6> Standard </h6>
                                    <input type="radio" name="pujatype" value="1" id="standard">
                                </summary>
                                <p>
                                    
                                    {{$category_samagri->category_samagri ?? ''}}
                                
                                </p>
                            </details> &nbsp;
                        </div>
                        
                        <div>
                            <details style="padding-bottom:17px;">
                                <summary>
                                    <h6> Premium </h6>
                                    <input type="radio" name="pujatype" value="2" id="premium">
                                </summary>
                                <p>                           
                                    {{$category_wsamagri->category_wsamagri ?? ''}}                          
                                </p>
                            </details>
                        </div>
                        
                        <div>
                            <details style="padding-bottom:17px;">
                                <summary>
                                    <h6> Grand</h6>
                                    <input type="radio" name="pujatype" value="3" id="grand">
                                </summary>
                                <p>

                                    {{$category_all->category_all ?? ''}}  
                                </p>
                            </details>  </div> -->
                    </div>
                    <!-- <div  class="date-time">
                        <span class="datey" >Date :
                        </span>

                        <span class="datey">
                          <input type="date" name="date">
                       </span>
                    </div>
                    <p>

                        <div  class="date-time">
                            <span class="datey" >Select Time :
                            </span>
    
                            <span class="datey">
                            <input type="time" name="date">
                           </span>
                        </div>
                    </p> -->
            </div>
            <div class="top2">
                <div class="detail-box detail-box2 detail-box3">
                    <h6  class="text-heading2">Pooja Samagri :</h6>

                   
                    <div >
                        <details>
                            <summary>
                                <h4> With Samagri </h4>
                            </summary>
                            <p>
                                
                                {{$category_samagri->category_samagri ?? ''}}
                            
                            </p>
                        </details> &nbsp;
                        <input type="radio" name="category" value="samagri" id="samgari">
                    </div>
                    <!--  -->
                    <div>
                        <details>
                            <summary>
                                <h4> Without Samagri </h4>
                            </summary>
                            <p>                           
                                {{$category_wsamagri->category_wsamagri ?? ''}}                          
                            </p>
                        </details> &nbsp;<input type="radio" name="category" value="wsamagri" id="wsamgari">
                    </div>
                    <!--  -->
                    <div>
                        <details>
                            <summary>
                                <h4> All </h4>
                            </summary>
                            <p>

                                {{$category_all->category_all ?? ''}}  
                            </p>
                        </details> &nbsp;<input type="radio" name="category" value="all" id="all">
                    </div>
                </div>

                <br>
                
            </div>
        </div>

       
        <div class="text-center">
            <h5>

                <b>Total you pay : <span id="adds" class="web-tex"> &#x20b9 </span>
                        <span id="addprice" class="web-tex">{{ $pujaDetails->puja_base_price}}</span>
                </b>
            </h5>
        </div>

      
      
        <div class="text-center" id="view-btn">
            @if(Auth::guard('user')->user())
            <a id="proceedBook"> <button>Book Your Pooja</button></a>
                <!-- <a href="{{url('./dashboard')}}">Dashboard</a> -->
                <!-- <a onclick="popshow()">Login/Sign up</a> -->
            @else
            <a id="proceedBookForLogin"> <button>Book Your Pooja</button></a>
                
            @endif
            
        </div>
    </div>
</section>

<!-- ----section2-- -->

<section class="pooja-description-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pooja-description">
                    <div class="left-section">
                        <div class="header-title">Advantages of this pooja</div>
                        <div class="content">
                            <ul>
                                <li>Brings the peace, understanding, prosperity and happiness in the family.</li>
                                <li>Brings success to new business and ventures.</li>
                                <li>Auspicious for new beginnings like Griha Pravesh, wedding ceremonies, Birth of a baby and so on</li>
                                <li>A divine atmosphere is created at the place where Akhand Ramayan Paath is recited.</li>
                                <li>Induces truth, bravery and morality amongst devotees.</li>
                                <li>Provides moksha to soul and rids it from trails of re-birth.</li>
                                <li>Prevents damage and danger from evil.</li>
                                <li>Protects against health problem.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="header-title">Your Pooja is Simplified</div>
                        <div class="content">
                            <p>Your Pooja is Simplified at “AstroPandit Om”</p>
                            <ul>
                                <li>No of Pandits: 5, Time: 24 Hr,</li>
                                <li>Pooja Cost: Ghar pe Pooja  (At your place-home or office): Rs 13501/-. Price is inclusive of Pooja samagri. You need to arrange eatables, utensils, hawan kund, flowers / garland etc. For details what you need to arrange, check Pooja Samagri Column below. </li>
                                <li>Extra Rs 2000 for Sound system.</li>
                                <li>For Team of 7 People with Amplifier Sound System and Murti Setup for Big function Price - Rs 21000/-</li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section id="section2">
    <div class="container-fluid boxes-pooja">
        <div class="box1">
            <div class="a">
                <h4>Advantages of this pooja</h4>
            </div>
                           
            <div class="b">
                {!!$pujaDetails->puja_id->advantage!!}
            </div>
        </div>

         <div class="box2">
            <div class="a">
                <h4>Your Pooja is Simplified</h4>
            </div>
            <h5>Your Pooja is Simplified at “AstroPandit Om”</h5>
            
            <div class="b">
                {!! $pujaDetails->puja_id->pujasimplified!!}
            </div>
        </div>
    </div>

    


</section> -->



<!-- -----------------------All Pooja’s------------ -->
<!-- ----------------------Book Pooja------------- -->
<section id="Book-Pooja">
    <div class="container-fluid text-center p-0">

        <h2 id="h2">Related Pooja’s</h2>


        <!-- MAIN (Center website) -->
        <div class="main">




            <!-- Portfolio Gallery Grid -->
            <div class="row">
                <div class="column show nature">
                    <div class="content">
                        <a href="../Pooja-1/pooja-book.html"> <img src="{{ asset('puja/god-img1.png')}}" alt="Mountains"
                                style="width:100%"></a>
                        <a href="../Pooja-1/pooja-book.html">
                            <h4>Akhand Ramayan (Musical)</h4> <a href="../Pooja-1/pooja-book.html"></a>
                            <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show people">
                    <div class="content">
                        <a href=""> <img src="{{ asset('puja/god-img2.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show cars">
                    <div class="content">
                        <a href=""> <img src="{{ asset('puja/god-img3.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show people">
                    <div class="content">
                        <a href=""> <img src="{{ asset('puja/god-img2.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>





                <!-- END GRID -->
            </div>


            <!-- END MAIN -->
        </div>

    </div>

</section>
<script>
    $(function(){
        // $("#adds").hide();
        // $("#addprice").hide();
    })
    $(document).ready(function(){
        var basePrice =" {{$pujaDetails->puja_base_price}}";
        var totalPrice = 0;
        var setPrice = $("#addprice").text();
        
        // var ptype= $("#pujatype").val();
    
        // $('#pujatype').on('change', function() {
        //     if(this.value == 1){
        //         $("#adds").show();
        //         $("#addprice").show();
        //         totalPrice = parseInt(basePrice) + parseInt("{{$pujaDetails->puja_price_samall}}");
        //         $("#addprice").text(0);
        //         // $("#bprice").hide();
        //         $("#addprice").text(totalPrice);               
                
        //     }
        //     else if(this.value == 2){
        //         $("#adds").show();
        //         $("#addprice").show();
        //         totalPrice = parseInt(basePrice) + parseInt("{{$pujaDetails->puja_price_medium}}");
        //         $("#addprice").text(0);
        //         // $("#bprice").hide();
        //         $("#addprice").text(totalPrice);
        //     }
        //     else if(this.value == 3){
        //         $("#adds").show();
        //         $("#addprice").show();
        //         totalPrice = parseInt(basePrice) + parseInt("{{$pujaDetails->puja_price_large}}");
        //         $("#addprice").text(0);
        //         // $("#bprice").hide();
        //         $("#addprice").text(totalPrice);
        //     }
        // });
        $("#samgari").click(function(){
            var ptype = $("input[name=pujatype]:checked").val();
         
            if(ptype ==1){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype ==2){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype ==3){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else{
                totalPrice = parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
        
        })
        $("#wsamgari").click(function(){
            var ptype = $("input[name=pujatype]:checked").val();

            // alert(ptype);
            if(ptype ==1){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype ==2){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype ==3){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else{
                totalPrice = parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
           
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
            
        })
        $("#all").click(function(){
            var ptype = $("input[name=pujatype]:checked").val();
            if(ptype ==1){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else if(ptype ==2){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else if(ptype ==3){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else{
                totalPrice = parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
        })

        $("#standard").click(function(){
            var ptype = $("input[name=category]:checked").val();
            // alert(ptype);
         
            if(ptype =="samagri"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype =="wsamagri"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype =="all"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }Welcome@1212!!
            else{
                totalPrice = parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_samall}}"); 
                // alert(totalPrice);
            }

            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
        
        })
        $("#premium").click(function(){
            var ptype = $("input[name=category]:checked").val();

            // alert(ptype);
            if(ptype =="samagri"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype =="wsamagri"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype =="all"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else{
                totalPrice = parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_medium}}"); 
            }
           
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
            
        })
        $("#grand").click(function(){
            var ptype = $("input[name=category]:checked").val();
            // alert(ptype);
            if(ptype =="samagri"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype =="wsamagri"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype =="all"){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else{
                totalPrice = parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_large}}"); 
            }
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
        })

    });
</script>

<script>

    $('#proceedBook').on('click',  function(){

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });         
        var puja_type = $("input[name=pujatype]:checked").val();
        
        var puja_category= $("input[name=category]").val();           
        var ecomm_puja_id= $("input[name=ecomm_puja_id]").val();           
        var price_order= $("#addprice").text();           
        // alert(price_order)
        
        var base_url = '<?=url('');?>'; 
        // var ecomm_puja_id = 6;          
        $.ajax({
            url: "{{url('puja-delivery')}}",
            type: "POST",
            data: "price_order="+price_order + "&puja_category=" + puja_category+ "&puja_type=" +puja_type+"&ecomm_puja_id=" +ecomm_puja_id,
            success: function( response ) {
                window.location.replace("{{url('puja-delivery')}}");
                // alert('Ajax form has been submitted successfully');
            }
        });
    });
        
    $('#proceedBookForLogin').on('click',  function(){

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });         
        var puja_type = $("select[name=pujatype]").val();
        
        var puja_category= $("input[name=category]").val();           
        var ecomm_puja_id= $("input[name=ecomm_puja_id]").val();           
        var price_order= $("#addprice").text();           
        // alert(price_order)
        
        var base_url = '<?=url('');?>'; 
        // var ecomm_puja_id = 6;          
        $.ajax({
            url: "{{url('puja-delivery-login')}}",
            type: "POST",
            data: "price_order="+price_order + "&puja_category=" + puja_category+ "&puja_type=" +puja_type+"&ecomm_puja_id=" +ecomm_puja_id,
            success: function( response ) {
                window.location.replace("{{url('puja-delivery')}}");
                // alert('Ajax form has been submitted successfully');
            }
        });
        });
        $(function(){

            //$('.details p').hide();
            $('.details a#lessMore').hide();
            $('.details ol li').hide();
            $('.details ul li').hide();
            $('.details details').show();
            
        });
        $(document).ready(function(){
            
            $('#readMore').click(function(){
                $('#hindi_desc').show();
                $(this).hide();
                /*$('.details span').hide();
                $('.details p').show();
                $('.details ol li').show();
                $('.details ul li').show();*/
                $('.details a#lessMore').show();
            });
        })
        $(document).ready(function(){
            
            $('#lessMore').click(function(){
                 $('#hindi_desc').hide();
                  $('.details a#readMore').show();
                  $(this).hide();
               /* $('.details a#lessMore').hide();
                $('.details span').show();
                $('.details p').hide();
                $('.details ol li').hide();
                $('.details ul li').hide();*/
            });

        })
</script>
<!-- -------------footer-------- -->
@include('layouts.footer')