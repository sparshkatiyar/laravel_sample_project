@include('layouts.header')
<!-- divider -->
<div id="divaider"></div>

<!-- ------tabsection---- -->
<div class="buttons">
    <button class="btnn" id="all" onclick="show(), filterSelection('all')">All</button>
    <button class="btnn" id="g-pooja" onclick="hide(event , 'a1') , filterSelection('nature')">Ghar Pe Pooja</button>
    <button class="btnn" id="o-pooja" onclick="hide(event , 'a2'), filterSelection('cars')">Online Pooja</button>
    <button class="btnn" id="r-pooja" onclick="hide(event , 'a3') , filterSelection('people')">On Request Special
        Pooja</button>
    <!-- <div class="drop">
      <button class="btnn" id="all" onclick="show(), filterSelection('all')">All</button>
      <button class="btnn" id="g-pooja" onclick="hide(event , 'a1') , filterSelection('nature')">Ghar Pe Pooja</button>
      <button class="btnn" id="o-pooja" onclick="hide(event , 'a2'), filterSelection('cars')">Online Pooja</button>
      <button class="btnn" id="r-pooja" onclick="hide(event , 'a3') , filterSelection('people')">On Request Special Pooja</button>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget arcu
                    eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris, et. Eget maecenas tortor
                    blandit leo.</p>
            </div>
        </div>


        <!-- --------------- -->
        <div class="first" id="a2">

            <div class="img">
                <img src="{{ asset('puja/img1.png')}}" alt="">
            </div>
            <div class="detail">

                <h2>Online Pooja</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget arcu
                    eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris, et. Eget maecenas tortor
                    blandit leo.</p>
            </div>
        </div>
        <!-- --------------- -->
        <div class="first" id="a3">

            <div class="img">
                <img src="{{ asset('puja/img1.png')}}" alt="">
            </div>
            <div class="detail">

                <h2>On Request-Special Pooja</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget arcu
                    eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris, et. Eget maecenas tortor
                    blandit leo.</p>
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

            <div class="column show nature">
                <div class="content">
                    <a href="{{url('puja-booking/')}}/{{$puja->id}}"> <img src="{{ $puja->puja_id->image }}" alt="Mountains"
                            style="width:100%"></a>
                    <a href="{{url('puja-booking/')}}/{{$puja->id}}">
                        <h4>{{$puja->puja_id->name}}</h4>
                    </a>
                    <p>INR- {{$puja->puja_base_price}}/-</p>
                </div>
            </div>
            @endforeach


                <div class="column show people">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img2.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show cars">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img3.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show people">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img2.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show cars">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img1.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>


                <div class="column show cars">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img3.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>

                <div class="column show cars">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img1.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>



                <div class="column show nature">
                    <div class="content">
                        <a href="{{url('puja-booking')}}"> <img src="{{ asset('puja/god-img2.png')}}" alt="Mountains" style="width:100%"></a>
                        <h4>Akhand Ramayan (Musical)</h4>
                        <p>INR-2100/-</p>
                    </div>
                </div>



                <!-- END GRID -->
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