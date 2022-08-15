@include('layouts.header')
<!-- divider -->
<div id="divaider"></div>

<!-- ------tabsection---- -->
<div class="buttons">
    <button class="btnn" id="all" onclick="show(), filterSelection('all')">All</button>
    <button class="btnn" id="g-pooja" onclick="hide(event , 'a1') , filterSelection('ghar_pe_puja')">Ghar Pe Pooja</button>
    <button class="btnn" id="o-pooja" onclick="hide(event , 'a2'), filterSelection('online_puja')">Online Pooja</button>
    <button class="btnn" id="r-pooja" onclick="hide(event , 'a3') , filterSelection('onrequest_puja')">On Request Special
        Pooja</button>
    <!-- <div class="drop">
      <button class="btnn" id="all" onclick="show(), filterSelection('all')">All</button>
      <button class="btnn" id="g-pooja" onclick="hide(event , 'a1') , filterSelection('nature')">Ghar Pe Pooja</button>
      <button class="btnn" id="o-pooja" onclick="hide(event , 'a2'), filterSelection('online_puja')">Online Pooja</button>
      <button class="btnn" id="r-pooja" onclick="hide(event , 'a3') , filterSelection('ghar_pe_puja')">On Request Special Pooja</button>
    </div> -->
</div>

<!-- --------pooja detail--- -->

<section id="section1">
    <div class="container-fluid">
        <div class="first" id="a1">

            <div class="img">
                <img src="{{ asset('puja/img1.png')}}" alt="">
            </div>
            <div class="detail">

                <h2>Ghar Pe Pooja</h2>
                <p>Please book your Pooja in this category, if your Pooja is to be done at your home or place of your choice. The priest will come to your desired place with all pooja Samagri. You just need to arrange eatables and other items easily available at your home.</p>
            </div>
        </div>


        <!-- --------------- -->
        <div class="first" id="a2">

            <div class="img">
                <img src="{{ asset('puja/img1.png')}}" alt="">
            </div>
            <div class="detail">

                <h2>Online Pooja</h2>
                <p>If you wish that the pooja of your choice is to be performed Online. Then, you can book your pooja under this category. Nowadays, people prefer this type of pooja also and it is believed that it also works. In this case you need not to arrange anything. Our qualified Priest will arrange the pooja with all pooja samagri required as per your convenience. The pooja will be performed preferably at a holy place of temples. After booking your pooja and successful payment of full amount as mentioned in the description of pooja column, our support team will work to allocate the pooja to a qualified priest/ pandit. You will be given the confirmation message and one link. Through this link you will be able to connect with the pooja place and our priest. Then priest will take Sankalp (your name, father’s name, Gotra, your place, and purpose of pooja like information will be required) while starting the pooja. You may like to observe the pooja for full time as per your convenience or can do your routine urgent works in between if you want. Based on the availability, our Customer care/ Support team executive may also join for a short while to see all is well arranged. Rates of online pooja are less than the onsite Pooja.</p>
            </div>
        </div>
        <!-- --------------- -->
        <div class="first" id="a3">

            <div class="img">
                <img src="{{ asset('puja/img1.png')}}" alt="">
            </div>
            <div class="detail">

                <h2>On Request-Special Pooja</h2>
                <p>If you wish that the pooja of your choice is to be performed Online. Then, you can book your pooja under this category. Nowadays, people prefer this type of pooja also and it is believed that it also works. In this case you need not to arrange anything. Our qualified Priest will arrange the pooja with all pooja samagri required as per your convenience. The pooja will be performed preferably at a holy place of temples. After booking your pooja and successful payment of full amount as mentioned in the description of pooja column, our support team will work to allocate the pooja to a qualified priest/ pandit. You will be given the confirmation message and one link. Through this link you will be able to connect with the pooja place and our priest. Then priest will take Sankalp (your name, father’s name, Gotra, your place, and purpose of pooja like information will be required) while starting the pooja. You may like to observe the pooja for full time as per your convenience or can do your routine urgent works in between if you want. Based on the availability, our Customer care/ Support team executive may also join for a short while to see all is well arranged. Rates of online pooja are less than the onsite Pooja.</p>
            </div>
        </div>
    </div>
</section>


<!-- -----------------------All Pooja’s------------ -->
<!-- ----------------------Book Pooja------------- -->
<section id="Book-Pooja">
    <div class="container-fluid text-center p-0">

        <h2 id="h2">All Pooja’s</h2>


        <!-- MAIN (Center website) -->
        <div class="main">




            <!-- Portfolio Gallery Grid -->
            <div class="row">
               
            @foreach(@$pujaList as $puja)
                
                @if($puja->puja_id->type == "Ghar pe puja")
                <div class="column show ghar_pe_puja">
                    <div class="content">
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}"> <img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                style="width:100%"></a>
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}">
                            <h4>{{$puja->puja_id->name}}</h4>
                        </a>
                        <p>INR- {{$puja->puja_base_price}}/-</p>
                    </div>
                </div>
                @elseif($puja->puja_id->type  == "Online Puja")
                <div class="column show online_puja">
                    <div class="content">
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}"> <img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                style="width:100%"></a>
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}">
                            <h4>{{$puja->puja_id->name}}</h4>
                        </a>
                        <p>INR- {{$puja->puja_base_price}}/-</p>
                    </div>
                </div>
                @elseif($puja->puja_id->type  =="On Request")
                <div class="column show onrequest_puja">
                    <div class="content">
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}"> <img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                style="width:100%"></a>
                        <a href="{{url('puja-booking/')}}/{{$puja->id}}">
                            <h4>{{$puja->puja_id->name}}</h4>
                        </a>
                        <p>INR- {{$puja->puja_base_price}}/-</p>
                    </div>
                </div>
                @endif
                
            @endforeach
            </div>


            <!-- END MAIN -->
        </div>

    </div>
    <div class="text-center" id="view-btn">
        <button>View All</button>
    </div>
</section>


<!-- -----------about section-------- -->
<section id="about-section">
    <!-- ---about-- -->
    <div class="container-fluid about">
        <center>
            <h2>About</h2>
        </center>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget magna tempus hendrerit scelerisque
            amet. Natoque pretium
            sit pretium donec eget duis sit in pretium. Laoreet sed nisl, porta nisl nunc scelerisque ipsum cursus.
            Vitae lectus lorem varius at a.
            sit pretium donec eget duis sit in pretium
            <br>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget magna tempus hendrerit scelerisque
            amet. Natoque pretium
            sit pretium donec eget duis sit in pretium. Laoreet sed nisl, porta nisl nunc scelerisque ipsum cursus.
            Vitae lectus lorem varius at a.
            sit pretium donec eget duis sit in pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Vestibulum eget magna tempus
            sit pretium donec eget duis sit in pretium. Laoreet sed nisl, porta nisl nunc scelerisque ipsum cursus.
            Vitae lectus lorem varius at a.
            sit pretium donec eget duis sit in pretium
        </p>
    </div>
</section>

<!-- -------------------Pandit Registration----------- -->

<section id="Pandit-Registration">
    <h1>Not a Member? Connect with Us...</h1>
    <button>Pandit Registration</button>
</section>




<!-- -------------------testimonial----------- -->

<section id="testimonial">
    <div class="container text-center">
        <h2 id="h2">What our clients think about us?</h2>

        <div class="review-box">

            <div class="carousel" data-flickity='{ }'>
                <!-- ------- -->
                <div class="carousel-cell">
                    <div class="review">

                        <p>" We had an incredible experience working with Landify and were impressed they made such a
                            big difference in only three weeks. Our team is so grateful for the wonderful improvements
                            they made and their ability to get familiar with the product concept so quickly. It acted as
                            a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="name">
                            <img src="{{ asset('puja/img1.png')}}" alt="">
                            <div>
                                <h6>Jenny Wilson</h6>
                                <p>Vice President</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ------- -->
                <div class="carousel-cell">
                    <div class="review">

                        <p>" We had an incredible experience working with Landify and were impressed they made such a
                            big difference in only three weeks. Our team is so grateful for the wonderful improvements
                            they made and their ability to get familiar with the product concept so quickly. It acted as
                            a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="name">
                            <img src="{{ asset('puja/img1.png')}}" alt="">
                            <div>
                                <h6>Jenny Wilson</h6>
                                <p>Vice President</p>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- ------- -->
                <div class="carousel-cell">
                    <div class="review">

                        <p>" We had an incredible experience working with Landify and were impressed they made such a
                            big difference in only three weeks. Our team is so grateful for the wonderful improvements
                            they made and their ability to get familiar with the product concept so quickly. It acted as
                            a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="name">
                            <img src="{{ asset('puja/img1.png')}}" alt="">
                            <div>
                                <h6>Jenny Wilson</h6>
                                <p>Vice President</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ------- -->
                <div class="carousel-cell">
                    <div class="review">

                        <p>" We had an incredible experience working with Landify and were impressed they made such a
                            big difference in only three weeks. Our team is so grateful for the wonderful improvements
                            they made and their ability to get familiar with the product concept so quickly. It acted as
                            a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="name">
                            <img src="{{ asset('puja/img1.png')}}" alt="">
                            <div>
                                <h6>Jenny Wilson</h6>
                                <p>Vice President</p>
                            </div>
                        </div>

                    </div>
                </div>




                <!-- ------- -->
                <div class="carousel-cell">
                    <div class="review">
                        <p>" We had an incredible experience working with Landify and were impressed they made such a
                            big difference in only three weeks. Our team is so grateful for the wonderful improvements
                            they made and their ability to get familiar with the product concept so quickly. It acted as
                            a catalyst to take our design to the next level and get more eyes on our product.</p>
                        <div class="name">
                            <img src="{{ asset('puja/img1.png')}}" alt="">
                            <div>
                                <h6>Jenny Wilson</h6>
                                <p>Vice President</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>





        </div>
    </div>
</section>
<script>
function show() {

    sections = document.getElementsByClassName("first");



    for (i = 0; i < sections.length; i++) {
        sections[i].style.display = "flex"
        sections[i].style.transition = "1s"

    }
}

function hide(evt, box) {

    var i, sections;
    sections = document.getElementsByClassName("first");

    for (i = 0; i < sections.length; i++) {

        sections[i].style.display = "none"
    }

    let boxes = document.getElementById(box);
    boxes.style.display = "flex";
}
</script>
@include('layouts.footer')