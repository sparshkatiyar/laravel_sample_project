@include('layouts.header')
@include('layouts.popup')
<!-- divider -->
<div id="divaider"></div>
<!-- -----------section1----------- -->

<section id="section1">
    <div class="container-fluid main">
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
                            <option value="0">select</option>
                            <option value="1">small Pooja</option>
                            <option value="2">Medium Pooja</option>
                            <option value="3">Large Pooja</option>
                        </select>
                    </p>
                    <p class="Category">Date :
                         <span>
                           <input type="date" name="date">
                        </span>
                    </p>
                    <p class="Category">Select Time :
                         <span>
                           <input type="time" name="date">
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- ----- -->

        <div class="details">
            <h2>{{ $pujaDetails->puja_id->name}}</h2>

            <h4> WHY YOU NEED THIS POOJA</h4>
            <p>
            {{ $pujaDetails->puja_id->desc}}
                Akhand Ramayan Path is performed to achieve peace and prosperity at the home and get blessings of Shri
                Ram and Hanuman. This can be performed at any auspicious event like Wedding Anniversary, Birthdays,
                Navratra days or other auspicious days or to get a wish to be fulfilled and etc.

                Akhand Ramayan Path is the recital of Ramcharit manas<br><br><br> continuously without stopping for 24
                hours, it is performed with bhajans and kirtan in the praise of lord Shri Ram.

                Get the blessings of lord Shri Ram and his life teachings for Read More/Hindi
            </p>

            <!-- ---box-- -->
            <div class="detail-box">
                <h6>Pooja Samagri :</h6>
                <div>
                    <details>
                        <summary>
                            <h4> With Samagri </h4>
                        </summary>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid totam quaerat omnis hic.
                            Omnis ratione officiis dolor repellat, facere exercitationem ea aliquid architecto cumque
                            facilis, cupiditate accusantium impedit fugit minima.</p>
                    </details> &nbsp;
                    <input type="radio" name="category" value="samagri" id="samgari">
                </div>
                <!--  -->
                <div>
                    <details>
                        <summary>
                            <h4> Without Samagri </h4>
                        </summary>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid totam quaerat omnis hic.
                            Omnis ratione officiis dolor repellat, facere exercitationem ea aliquid architecto cumque
                            facilis, cupiditate accusantium impedit fugit minima.</p>
                    </details> &nbsp;<input type="radio" name="category" value="wsamagri" id="wsamgari">
                </div>
                <!--  -->
                <div>
                    <details>
                        <summary>
                            <h4> All </h4>
                        </summary>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid totam quaerat omnis hic.
                            Omnis ratione officiis dolor repellat, facere exercitationem ea aliquid architecto cumque
                            facilis, cupiditate accusantium impedit fugit minima.</p>
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
    <div class="container-fluid boxes">
        <div class="box1">
            <div class="a">
                <h4>Advantages of this pooja</h4>
            </div>
            <div class="b">
                <ul>
                    <li>

                        {{ $pujaDetails->puja_id->advantage}}
                    </li>
                    <!-- <li>
                        <p>Brings the peace, understanding, prosperity and happiness in the family.</p>
                    </li>
                    <li>
                        <p>Brings success to new business and ventures.</p>
                    </li>
                    <li>
                        <p>Auspicious for new beginnings like Griha Pravesh, wedding ceremonies, Birth of a baby and so
                            on</p>
                    </li>
                    <li>
                        <p>A divine atmosphere is created at the place where Akhand Ramayan Paath is recited..</p>
                    </li>
                    <li>
                        <p>Induces truth, bravery and morality amongst devotees.</p>
                    </li>
                    <li>
                        <p>Provides moksha to soul and rids it from trails of re-birth.</p>
                    </li>
                    <li>
                        <p>Prevents damage and danger from evil.</p>
                    </li>
                    <li>
                        <p>Protects against health problem.
                        </p>
                    </li> -->
                </ul>
            </div>
        </div>

        <!-- --- -->
        <div class="box2">
            <div class="a">
                <h4>Your Pooja is Simplified</h4>
            </div>
            <div class="b">
                <h5>Your Pooja is Simplified at “AstroPandit Om”</h5>
                <ul>
                    <li>       {{ $pujaDetails->puja_id->pujasimplified}}</li>
                    <!-- <li>
                        <p>No of Pandits: 5, Time: 24 Hr,
                        </p>
                    </li>
                    <li>
                        <p>Pooja Cost: Ghar pe Pooja (At your place-home or office): Rs 13501/-. Price is inclusive of
                            Pooja samagri. You need to arrange eatables, utensils, hawan kund, flowers / garland etc.
                            For details what you need to arrange, check Pooja Samagri Column below. </p>
                    </li>
                    <li>
                        <p>Extra Rs 2000 for Sound system.</p>
                    </li>
                    <li>
                        <p>For Team of 7 People with Amplifier Sound System and Murti Setup for Big function Price - Rs
                            21000/-</p>
                    </li> -->

                </ul>
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
                <div class="column nature">
                    <div class="content">
                        <a href="../Pooja-1/pooja-book.html"> <img src="{{ asset('puja/god-img1.png')}}" alt="Mountains"
                                style="width:100%"></a>
                        <a href="../Pooja-1/pooja-book.html">
                            <h4>Akhand Ramayan (Musical)</h4> <a href="../Pooja-1/pooja-book.html"></a>
                            <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column people">
                    <div class="content">
                        <a href=""> <img src="{{ asset('puja/god-img2.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column cars">
                    <div class="content">
                        <a href=""> <img src="{{ asset('puja/god-img3.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column people">
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
</script>
<!-- -------------footer-------- -->
@include('layouts.footer')