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

                <div class="content-2">
                <h5 class="title3">{{ $pujaDetails->puja_id->name}}</h5>
                <h6 class="subtitle3">(Starting From  &#x20b9 {{ $pujaDetails->puja_base_price}} )</h6>
                <p class="cat-puja"><span>Category : </span>{{ $pujaDetails->puja_id->type}}</p>
                <p class="why-txt">WHY YOU NEED THIS POOJA</p>
                <!-- <span class="text-all" >

                <?php
                    // $string = strip_tags($pujaDetails->puja_id->desc);
                    // if (strlen($string) > 550) {

                    //     // truncate string
                    //     $stringCut = substr($string, 0, 550);
                    //     $endPoint = strrpos($stringCut, ' ');
                    
                    //     //if the string doesn't contain any space then it will cut without word basis.
                    //     $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    //     $string .= '... <a href="javascript:void(0); " id="readMore">Read More</a>';
                    // }
                    
                    // $string_hindi = strip_tags($pujaDetails->puja_id->deschindi);
                    // if($string_hindi)
                    // {
                    //     $string .= '<a href="javascript:void(0); " id="readMore">Read More</a>';
                    // }
                    // echo $string;
                    // echo '<p style="display:none;" id="hindi_desc">'.$string_hindi.'</p>';

                ?>
                </span>      -->
                <div class="englishDesc">
               
                {!! $pujaDetails->puja_id->desc!!}
       <a class="englishDesclink" href="javascript:void(0)">Read More/Hindi</a>
   
                    </div>
    <div class="hindiDesc"  style="display: none;">
   
    {!! $pujaDetails->puja_id->pujasimplified!!}
      <a class="hindDesclink" href="javascript:void(0)">Read less</a>
   
                    </div>
                <!-- <p class="english-desc">
                    {!! $pujaDetails->puja_id->desc!!}
                    
                </p>
                <p class="hindi-desc">
                    {!! $pujaDetails->puja_id->pujasimplified!!}
                    
                </p> -->
               
                </div>
                
            </div>
        </div>
        
        <div class="top-row">

            <div class="top2">
                    <div class="detail-box detail-box2">
                        <h6 class="text-heading2">Choose Your Pooja :</h6>
                        @if(!empty($category_samagri->standard_pooja))
                        <div class="cate-item">
                            <label class="custom-radio">Standard
                                <input type="radio" name="pujatype" value="1" id="standard" checked="checked" onclick=getpooja('standard')>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        @endif
                        @if(!empty($category_samagri->premium_pooja))
                        <div class="cate-item">
                            <label class="custom-radio">Premium
                                <input type="radio" name="pujatype" value="2" id="premium" onclick=getpooja('premium')>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        @endif
                        @if(!empty($category_samagri->grand_pooja))
                        <div class="cate-item">
                            <label class="custom-radio">Grand
                                <input t type="radio" name="pujatype" value="3" id="grand" onclick=getpooja('grand')>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        @endif
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
            <div class="top2" id="standard-samagri">
                <div class="detail-box detail-box2 detail-box3">
                    <h6  class="text-heading2">Pooja Samagri :</h6>
                    @if(!empty($category_samagri->category_wsamagri))
                    <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> Without Pooja Samagri
                            <input type="radio" name="category" value="samagri" id="samgari" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                    {{@$category_samagri->category_wsamagri ?? ''}}
                                
                                </p>
                            </details>
                     </div>

                     @endif
                    @if(!empty($category_samagri->category_samagri))
                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> With Pooja Samagri
                            <input type="radio" name="category" value="wsamagri" id="wsamgari">
                                <span class="checkmark"></span>
                            </label>
                        
                            </summary>
                                <p>  
                                {{@$category_samagri->category_samagri ?? ''}}       
                                </p>
                            </details>
                     </div>
                     @endif
                    @if(!empty($category_samagri->category_all))
                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio">With Pooja Samagri & All Items
                            <input type="radio" name="category" value="all" id="all">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                {{@$category_samagri->category_all ?? ''}}  
                                
                                </p>
                            </details>
                     </div>
                     @endif
                </div>

                <br>
                
            </div>
            <div class="top2" id="premium-samagri" style="display:none;">
                <div class="detail-box detail-box2 detail-box3">
                    <h6  class="text-heading2">Pooja Samagri :</h6>
                  
                    @if(!empty($category_samagri->premium_category_wsamagri))
                    <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> Without Pooja Samagri
                            <input type="radio" name="category" value="samagri" id="samgari" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                    {{@$category_samagri->premium_category_wsamagri ?? ''}}
                                
                                </p>
                            </details>
                     </div>
                     @endif
                    @if(!empty($category_samagri->premium_category_samagri))

                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> With Pooja Samagri
                            <input type="radio" name="category" value="wsamagri" id="wsamgari">
                                <span class="checkmark"></span>
                            </label>
                        
                            </summary>
                                <p>  
                                {{@$category_samagri->premium_category_samagri ?? ''}}       
                                </p>
                            </details>
                     </div>
                     @endif
                    @if(!empty($category_samagri->premium_category_all))
                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio">With Pooja Samagri & All Items
                            <input type="radio" name="category" value="all" id="all">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                {{@$category_samagri->premium_category_all ?? ''}}  
                                
                                </p>
                            </details>
                     </div>
                     @endif
                </div>

                <br>
                
            </div>
            
            <div class="top2" id="grand-samagri" style="display:none;">
                <div class="detail-box detail-box2 detail-box3">
                    <h6  class="text-heading2">Pooja Samagri :</h6>
                    @if(!empty($category_samagri->grand_category_wsamagri))
                    <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> Without Pooja Samagri
                            <input type="radio" name="category" value="samagri" id="samgari" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                    {{@$category_samagri->grand_category_wsamagri ?? ''}}
                                
                                </p>
                            </details>
                     </div>
                    @endif
                    @if(!empty($category_samagri->grand_category_samagri))
                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> With Pooja Samagri
                            <input type="radio" name="category" value="wsamagri" id="wsamgari">
                                <span class="checkmark"></span>
                            </label>
                        
                            </summary>
                                <p>  
                                {{@$category_samagri->grand_category_samagri ?? ''}}       
                                </p>
                            </details>
                     </div>
                    @endif
                    @if(!empty($category_samagri->grand_category_all))
                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio">With Pooja Samagri & All Items
                            <input type="radio" name="category" value="all" id="all">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                {{@$category_samagri->grand_category_all ?? ''}}  
                                
                                </p>
                            </details>
                     </div>
                     @endif
                </div>

                <br>
                
            </div>

            <!-- <div class="top2">
                <div class="detail-box detail-box2 detail-box3">
                    <h6  class="text-heading2">Pooja Samagri :</h6>
                    <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> Without Pooja Samagri
                            <input type="radio" name="category" value="samagri" id="samgari" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                    {{@$category_samagri->category_samagri ?? ''}}
                                
                                </p>
                            </details>
                     </div>


                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio"> With Pooja Samagri
                            <input type="radio" name="category" value="wsamagri" id="wsamgari">
                                <span class="checkmark"></span>
                            </label>
                        
                            </summary>
                                <p>  
                                {{@$category_samagri->category_wsamagri ?? ''}}       
                                </p>
                            </details>
                     </div>

                     <div class="item-4">
                        <details>
                        <summary>
                            <label class="custom-radio">With Pooja Samagri & All Items
                            <input type="radio" name="category" value="all" id="all">
                                <span class="checkmark"></span>
                            </label>
                        
                        </summary>
                                <p>  
                                {{@$category_samagri->category_all ?? ''}}  
                                
                                </p>
                            </details>
                     </div>
                </div>

                <br>
                
            </div> -->
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
                        {!!$pujaDetails->puja_id->advantage!!}
                        </div>
                    </div>
                    @if(!empty($category_samagri->standard_pooja))
                    <div class="right-section" id="standard-simplified">
                        <div class="header-title">Your Pooja is Simplified</div>
                        <div class="content">
                            <!-- <p>Your Pooja is Simplified at “AstroPandit Om”</p> -->
                            {!!$category_samagri->standard_pooja!!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($category_samagri->premium_pooja))
                    <div class="right-section" id="premium-simplified" style="display:none;">
                        <div class="header-title">Your Pooja is Simplified</div>
                        <div class="content">
                            <!-- <p>Your Pooja is Simplified at “AstroPandit Om”</p> -->
                            {!!$category_samagri->premium_pooja!!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($category_samagri->grand_pooja))
                    <div class="right-section" id="grand-simplified" style="display:none;">
                        <div class="header-title">Your Pooja is Simplified</div>
                        <div class="content">
                            <!-- <p>Your Pooja is Simplified at “AstroPandit Om”</p> -->
                            {!!$category_samagri->grand_pooja!!}
                        </div>
                    </div>
                    @endif
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

                @foreach(@$pujaList as $puja)
                 
                    <!-- <div class="item">
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}">

                            <div class="img-section">
                            <img src="{{ $puja->puja_id->image }}" class="img-fluid" alt="">
                            </div>
                            <h5>{{$puja->puja_id->name}}</h5>
                            <p>INR- {{$puja->puja_base_price}}/-</p>
                        </a>
                    </div> -->
                
                
                    <div class="column show nature">
                        <div class="content">
                            <a href="{{url('puja-booking/')}}/{{$puja->id}}"> <img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                    style="width:100%"></a>
                            
                                <h4>{{$puja->puja_id->name}}</h4> 
                                <p>INR- {{$puja->puja_base_price}}/-</p>
                        </div>
                    </div>
                @endforeach







                <!-- END GRID -->
            </div>


            <!-- END MAIN -->
        </div>

    </div>

</section>
<script>
    
        function getpooja(sel)
        {
            if(sel=='standard')
            {
                $('#standard-samagri').show();
                $('#premium-samagri').hide();
                $('#grand-samagri').hide();
                $('#standard-simplified').show();
                $('#premium-simplified').hide();
                $('#grand-simplified').hide();
            }
            else if(sel=='premium')
            {
                $('#standard-samagri').hide();
                $('#premium-samagri').show();
                $('#grand-samagri').hide();
                $('#standard-simplified').hide();
                $('#premium-simplified').show();
                $('#grand-simplified').hide();
            }
            else if(sel=='grand')
            {
                $('#standard-samagri').hide();
                $('#premium-samagri').hide();
                $('#grand-samagri').show();
                $('#standard-simplified').hide();
                $('#premium-simplified').hide();
                $('#grand-simplified').show();
            }
        }
    $(document).ready(function(){
        var basePrice =" {{$pujaDetails->puja_base_price}}";
        var totalPrice = 0;
        var setPrice = $("#addprice").text();
       
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
            }
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


<script>
	$('.englishDesclink').click(function() {
 $(".hindiDesc").css({"display": "inline-block",});
 
 $(".englishDesclink").css({"display": "none",});
   $(".hindDesclink").css({"display": "inline-block",});
});

$('.hindDesclink').click(function() {
 $(".englishDesclink").css({"display": "inline-block",});
 $(".hindDesclink").css({"display": "none",});
 $(".hindiDesc").css({"display": "none",});
});
</script>
<!-- -------------footer-------- -->
@include('layouts.footer')