@include('layouts.header')
@include('layouts.popup')
<!-- divider -->
<div id="divaider"></div>
<!-- -----------section1----------- -->

<section id="section1">
    <div class="container-fluid main-pooja">
        <div class="img">
            <div>
                <img src="{{ $pujaDetails->puja_id->image}}" alt="">
                <input type="text" name="ecomm_puja_id" value="{{$ecomm_puja_id}}" hidden>
                <div class="img-content">
                    <h3>Starting From
                        <span id="bprice">&#x20b9  {{ $pujaDetails->puja_base_price}}</span>
                        
                    </h3>
                    <p class="Category">Category : <span>
                            <font color="#B66200">{{ $pujaDetails->puja_id->type}}</font>
                        </span>
                    </p>
                    <p class="">Choose Your Pooja :
                        <select id="pujatype" name="pujatype">
                            <option value="">select</option>
                            <option value="Standard">Standard</option>
                            <option value="Premium">Premium</option>
                            <option value="Grand">Grand</option>
                        </select>
                    </p>
                    <div  class="date-time">
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
                    </p>
                    
                </div>
            </div>
        </div>

        <!-- ----- -->

        <div class="details">
            <h2>{{ $pujaDetails->puja_id->name}}</h2>
            <span >

            <?php
                $string = strip_tags($pujaDetails->puja_id->desc);
                /*if (strlen($string) > 500) {

                    // truncate string
                    $stringCut = substr($string, 0, 600);
                    $endPoint = strrpos($stringCut, ' ');
                
                    //if the string doesn't contain any space then it will cut without word basis.
                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    $string .= '... <a href="javascript:void(0); " id="readMore">Read More</a>';
                }*/
                
                $string_hindi = strip_tags($pujaDetails->puja_id->deschindi);
                if($string_hindi)
                {
                    $string .= '<a href="javascript:void(0); " id="readMore">Read More</a>';
                }
                echo $string;
                echo '<p style="display:none;" id="hindi_desc">'.$string_hindi.'</p>';

            ?>
            </span>     
            <p>
                <!-- {!! $pujaDetails->puja_id->desc!!} -->
                
            </p>
            <a id="lessMore" href="javascript:void(0); ">...lessmore</a>
            <!-- ---box-- -->
            <div class="detail-box">
                <h6>Pooja Samagri :</h6>
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
            <div class="detail-box">
                <h5>

                    <b>Total you pay : <span id="adds" class="web-tex"> &#x20b9 </span>
                            <span id="addprice" class="web-tex">{{ $pujaDetails->puja_base_price}}</span>
                    </b>
                </h5>
            </div>
        </div>

    </div>
</section>

<!-- ----section2-- -->

<section id="section2">
    <div class="container-fluid boxes-pooja">
        <div class="box1">
            <div class="a">
                <h4>Advantages of this pooja</h4>
            </div>
                           
            <div class="b">
                {!!$pujaDetails->puja_id->advantage!!}
            </div>
        </div>

        <!-- --- -->
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

    <div class="text-center" id="view-btn">
        @if(Auth::guard('user')->user())
        <a id="proceedBook"> <button>Book Your Pooja</button></a>
            <!-- <a href="{{url('./dashboard')}}">Dashboard</a> -->
            <!-- <a onclick="popshow()">Login/Sign up</a> -->
        @else
        <a id="proceedBookForLogin"> <button>Book Your Pooja</button></a>
            
        @endif
        
    </div>


</section>



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
    
        $('#pujatype').on('change', function() {
            if(this.value == 1){
                $("#adds").show();
                $("#addprice").show();
                totalPrice = parseInt(basePrice) + parseInt("{{$pujaDetails->puja_price_samall}}");
                $("#addprice").text(0);
                // $("#bprice").hide();
                $("#addprice").text(totalPrice);               
                
            }
            else if(this.value == 2){
                $("#adds").show();
                $("#addprice").show();
                totalPrice = parseInt(basePrice) + parseInt("{{$pujaDetails->puja_price_medium}}");
                $("#addprice").text(0);
                // $("#bprice").hide();
                $("#addprice").text(totalPrice);
            }
            else if(this.value == 3){
                $("#adds").show();
                $("#addprice").show();
                totalPrice = parseInt(basePrice) + parseInt("{{$pujaDetails->puja_price_large}}");
                $("#addprice").text(0);
                // $("#bprice").hide();
                $("#addprice").text(totalPrice);
            }
        });
        $("#samgari").click(function(){
            var ptype = $("select[name=pujatype]").val();
            if(ptype ==1){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype ==2){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            else if(ptype ==3){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_samagri_price}}"); 
            }
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
        
        })
        $("#wsamgari").click(function(){
            var ptype = $("select[name=pujatype]").val();
            if(ptype ==1){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype ==2){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            else if(ptype ==3){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            }
            // totalPrice = parseInt(basePrice) +parseInt(setPrice)+ parseInt("{{$pujaDetails->puja_wsamagri_price}}"); 
            $("#addprice").text(0);
            $("#addprice").text(totalPrice);
            
        })
        $("#all").click(function(){
            var ptype = $("select[name=pujatype]").val();
            if(ptype ==1){
                totalPrice = parseInt("{{$pujaDetails->puja_price_samall}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else if(ptype ==2){
                totalPrice = parseInt("{{$pujaDetails->puja_price_medium}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            else if(ptype ==3){
                totalPrice = parseInt("{{$pujaDetails->puja_price_large}}") +parseInt(basePrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
            }
            // totalPrice = parseInt(basePrice) +parseInt(setPrice)+ parseInt("{{$pujaDetails->puja_price_all}}"); 
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
        var puja_type = $("select[name=pujatype]").val();
        
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