@include('layouts.header')
<!-- -------popup include--- -->
@include('layouts.popup')





<section id="header">
        <div class="heading">
            <h1>Book Pandit Online</h1>
        </div>

        <div class="texts">
            Online Pooja <span style="color:
            #880000; font-weight: 600;">|</span> Ghar Pe Pooja<span style="color:
            #880000; font-weight: 600;">|</span> On Request Special Pooja
            <!-- <div class="item1">Online Pooja</div>
            <div class="item2">Ghar Pe Pooja</div>
            <div class="item3">On Request Special Pooja</div> -->
        </div>

        <div class="button">
            <button>BOOK NOW</button>
        </div>
    </section>


    <!-- ---------framse----------- -->

    <section id="frames">
        <div class="container-fluid frames-box">
            <div class="frame card-1">
                <img src="{{ asset('images/frame1.png')}}" alt="#">
                <h4>Talk to Astrologers</h4>
                <p>
                    Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Est enim <br>adipiscing libero accumsan
                </p>

            </div>


            <div class="frame card-2">
                <img src="{{ asset('images/frame2.png')}}" alt="#">
                <h4>Talk to Astrologers</h4>
                <p>
                    Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Est enim <br>adipiscing libero accumsan
                </p>

            </div>



            <div class="frame card-3">
                <img src="{{ asset('images/frame3.png')}}" alt="#">
                <h4>Talk to Astrologers</h4>
                <p>
                    Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Est enim <br>adipiscing libero accumsan
                </p>

            </div>

        </div>
    </section>


    <!-- -----------------Our Astrologers-------------- -->

    <section id="Astrologers">
        <div class="container-fluid text-center">
            <h2 id="h2">Our Astrologers</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et viverra vulputate viverra
                adipiscing.</p>
        </div>

        <!-- -----slider-- -->
        <!-- Flickity HTML init -->
        <div class="carousel" data-flickity='{ "groupCells": true }'>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <a href="../Pandit-profile/profile.html"> <img src="{{ asset('images/img1.png') }}" alt="#" width="90px"></a>
                            <a href="../Pandit-profile/profile.html">
                                <h5>Astro Anjana</h5>
                            </a>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </section>



    <!-- -----------------Our Our Vedic Pandits-------------- -->

    <section id="Astrologers">
        <div class="container-fluid text-center">
            <h2 id="h2">Our Vedic Pandits</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et viverra vulputate viverra
                adipiscing.</p>
        </div>

        <!-- -----slider-- -->
        <!-- Flickity HTML init -->
        <div class="carousel" data-flickity='{ "groupCells": true }'>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png')}}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </section>



    <!-- -----------------Our Our Vedic Pandits-------------- -->

    <section id="Astrologers">
        <div class="container-fluid text-center">
            <h2 id="h2">Our Motivational Speakers</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et viverra vulputate viverra
                adipiscing.</p>
        </div>

        <!-- -----slider-- -->
        <!-- Flickity HTML init -->
        <div class="carousel" data-flickity='{ "groupCells": true }'>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png')}}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png')}}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}"  width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-cell">
                <div class="slider-box">

                    <div class="box">
                        <!--  -->
                        <!--  -->
                        <div class="img">
                            <img src="{{ asset('images/img1.png') }}" alt="#" width="90px">
                            <h5>Astro Anjana</h5>
                            <div style="display: flex; align-items:center;"><span>4.5</span>
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                                <img src="{{ asset('images/star.png') }}" alt="#" width="15px">
                            </div>

                        </div>

                        <!--  -->
                        <div class="detail">
                            <p>Numerology, Tarot <br>Reading</p>
                            <p>Lang : Hindi, English</p>
                            <p>Exp: 15 years </p>
                            <p><b> <span> &#x20b9 50/min </span></b> <span> <del> <small> &#x20b9
                                            60/min</small></del></span></p>
                        </div>
                        <!--  -->
                        <div class="icon">
                            <a href="#"> <img src="{{ asset('images/Group1.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group2.png') }}" alt="#"></a>
                            <a href="#"> <img src="{{ asset('images/Group3.png') }}" alt="#"></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </section>




    <!-- ----------------------Book Pooja------------- -->
    <section id="Book-Pooja" class="pooja_tabs">
        <div class="container-fluid text-center p-0">

            <h2 id="h2">Book Pooja</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et viverra vulputate viverra
                adipiscing.</p>

            <!-- MAIN (Center website) -->
            <div class="main">



                <!-- ---dropdown -->
                <!-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href=""><button class="btn active" onclick="filterSelection('all')"> Show all</button></a></li>
          <li><a class="dropdown-item" href="">  <button class="btn" onclick="filterSelection('nature')"> Ghar Pe Pooja</button></a></li>
          <li><a class="dropdown-item" href=""><button class="btn" onclick="filterSelection('cars')"> Online Pooja</button></a></li>
          <li><a class="dropdown-item" href=""> <button class="btn" onclick="filterSelection('people')"> On Request Special Pooja</button></a></li>
          
        </ul>
      </div> -->

                <!--  -->
                <div id="myBtnContainer" class="tabs_title">
                  <button class="btn active" data-name="all"> Show all</button>
                  <button class="btn" data-name="nature" > Ghar Pe Pooja</button>
                  <button class="btn" data-name="cars" > Online Pooja</button>
                  <button class="btn" data-name="people" > On Request Special Pooja</button>
               </div>

                <!-- Portfolio Gallery Grid -->
                <div class="row tabs_content">
                    @foreach(@$pujaList as $puja)
                    <div class="column show nature">
                        <div class="content">
                            <a href="{{url('puja-booking/')}}/{{$puja->id}}"> <img src="{{ $puja->puja_id->image}}" alt="Mountains"
                                    style="width:100%"></a>
                            <a href="{{url('puja-booking/')}}/{{$puja->id}}">
                                <h4>{{$puja->puja_id->name}}                               
                                </h4>
                            </a>
                            <p>INR- {{$puja->puja_base_price}}/-</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="column show nature">
                        <div class="content">
                            <img src="{{ asset('images/god-img1.png') }}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>


                    <div class="column show people">
                        <div class="content">
                            <img src="{{ asset('images/god-img2.png') }}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>


                    <div class="column show cars">
                        <div class="content">
                            <img src="{{ asset('images/god-img3.png') }}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>


                    <div class="column show people">
                        <div class="content">
                            <img src="{{ asset('images/god-img2.png') }}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>


                    <div class="column show cars">
                        <div class="content">
                            <img src="{{ asset('images/god-img1.png')}}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>


                    <div class="column show cars">
                        <div class="content">
                            <img src="{{ asset('images/god-img3.png') }}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>

                    <div class="column show cars">
                        <div class="content">
                            <img src="{{ asset('images/god-img1.png')}}" alt="Mountains" style="width:100%">
                            <h4>Akhand Ramayan (Musical)</h4>
                            <p>INR-2100/-</p>
                        </div>
                    </div>



                    <div class="column show nature">
                        <div class="content">
                            <img src="{{ asset('images/god-img2.png') }}" alt="Mountains" style="width:100%">
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


    <!-- -------------------------------Astroshop---------------------- -->

    <section id="Astroshop">
        <div class="container-fluid text-center p-0">

            <h2 id="h2">Astroshop</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et viverra vulputate viverra
                adipiscing.</p>

            <!-- MAIN (Center website) -->
            <div class="main">




                <div id="myBtnContainer" class="tabs_title">
                  <button class="btn active" data-name="all"> All</button>
                  <button class="btn" data-name="nature">Pooja Essentials</button>
                  <button class="btn" data-name="cars">Gemstones</button>
                  <!-- <button class="btn" onclick="filterSelection('people')"> On Request Special Pooja</button> -->
               </div>

                <!-- Portfolio Gallery Grid -->
                <div class="row tabs_content">
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <a href="../Product/item-page/item1.html"> <button id="product-btn">Add</button> </a>
                            <button id="heart"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>


                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"> <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>

                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"> <img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>


                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>


                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>


                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>


                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>

                    <!-- ---- -->
                    <div class="column show nature">
                        <img src="{{ asset('images/product.png')}}" alt="Mountains" style="width:100%">
                        <div class="content">

                            <h4>Rudraksh</h4>
                            <p id="product-detail">Lorem ipsum dolor sit<br> tetur </p>
                            <p class="price-pera"><strong> <span class="current-price">&#x20b9
                                        5.00</span></strong><small><del> &#x20b9 6.00</del></small></p>
                            <button id="product-btn">Add</button>
                            <button id="heart"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077035.png"
                                    alt="#" style="width: 20px !important; height:20px;"></button>
                        </div>
                    </div>




                    <!-- -- -->








                    <!-- END GRID -->
                </div>


                <!-- END MAIN -->
            </div>

        </div>

        <div class="text-center" id="view-btn">
            <button style="color: white;">View All</button>
        </div>

    </section>

    <!-- -------------------------------counter--------------- -->

    <section id="counter">
        <div class="container text-center">
            <h5>Our Family</h5>
            <h3>We Work Together</h3>

            <div class="counter-box">
                <div class="itemm1">
                    <h1>1000+</h1>
                    <h3>Pooja's Performed</h3>
                </div>
                <div class="itemm2">
                    <h1>350+</h1>
                    <h3>Priests</h3>
                </div>
                <div class="itemm3">
                    <h1>500+</h1>
                    <h3>Astrologers</h3>
                </div>
                <div class="itemm4">
                    <h1>150+</h1>
                    <h3>Types of Pooja's</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- -----------------------------making cards------ -->

    <section id="matching">
        <div class="container">
            <div class="boxes">
                <div class="item" style="background-color:#F0FFF1 ;">
                    <img src="{{ asset('images/matching-img1.png')}}" alt="#">
                    <h5> <a href=""> Daily Horoscope</a></h5>
                </div>

                <div class="item" style="background-color:
          #fff3fd ;">
                    <img src="{{ asset('images/matching-img2.png')}}" alt="#">
                    <h5> <a href="../Free kundali/astropandit_free_kundali.html"> Free Kundali</a></h5>
                </div>


                <div class="item" style="background-color:#EFF9FF;">
                    <img src="{{ asset('images/matching-img3.png')}}" alt="#">
                    <h5> <a href="../Match Making Page/Match-Making.html"> Match Making </a></h5>
                </div>
            </div>
        </div>
    </section>


    <!-- ------------------------------------Daily Free Horoscopes--------- -->

    <section id="Horoscopes">
        <div class="container text-center">
            <h2 id="h2">Daily Free Horoscopes</h2>
            <p id="pera">Your daily zodiac sign reading free</p>

            <section id="cards">
                <div class="container card-container">
                    <!-- -----Aries---- -->
                    <div class="card">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/fimg1.png') }}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Aries </a>
                        </div>
                    </div>

                    <!-- -----Taurus---- -->
                    <div class="card card2">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img2.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Taurus </a>
                        </div>
                    </div>

                    <!-- -----Taurus---- -->
                    <div class="card card3">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img3.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Taurus </a>
                        </div>
                    </div>

                    <!-- -----Cancer---- -->
                    <div class="card card4">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img4.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Cancer </a>
                        </div>
                    </div>

                    <!-- -----Lio---- -->
                    <div class="card card5">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img5.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Lio </a>
                        </div>
                    </div>

                    <!-- -----Vigro---- -->
                    <div class="card card6">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img6.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Vigro </a>
                        </div>
                    </div>

                    <!-- -----Libra---- -->
                    <div class="card card7">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img7.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Libra </a>
                        </div>
                    </div>
                    <!-- -----Scorpio---- -->
                    <div class="card card8">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img8.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Scorpio </a>
                        </div>
                    </div>

                    <!-- -----Sagittarius---- -->
                    <div class="card card9">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img9.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Sagittarius </a>
                        </div>
                    </div>

                    <!-- -----Capricorn---- -->
                    <div class="card card10">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img10.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Capricorn </a>
                        </div>
                    </div>

                    <!-- -----Aquarius---- -->
                    <div class="card card11">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img11.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Aquarius </a>
                        </div>
                    </div>

                    <!-- -----Pisces---- -->
                    <div class="card card12">
                        <div class="img">
                            <a href="#"><img src="{{ asset('images/img12.png')}}" alt="#" /></a>
                        </div>
                        <div class="name">
                            <a href="#"> Pisces </a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        </div>
    </section>



    <!-- ---------------Our Gallery------ -->

    <section id="Gallery">
        <div class="container text-center">
            <h2 id="h2">Our Gallery</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est enim adipiscing libero accumsan,
                dignissim nulla aenean pellentesque.</p>


            <div class="gallary">
                <img src="{{ asset('images/gallary-img1.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img2.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img3.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img4.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img5.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img6.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img7.png') }}" alt="#">
                <img src="{{ asset('images/gallary-img8.png') }}" alt="#">
            </div>
        </div>


        <div class="text-center" id="view-btn">
            <button>View All</button>
        </div>
    </section>

    <!-- ---------------Our  Blog------ -->

    <section id="blog">
        <div class="container text-center">
            <h2 id="h2">Our Blog</h2>
            <p id="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est enim adipiscing libero
                accumsan,<br> dignissim nulla aenean pellentesque.</p>


            <div class="blog-box">
                <!-- ----1--- -->

                <div class="blog">
                    <img src="{{ asset('images/blog-img1.png')}}" alt="#">
                    <h4>Lorem ipsum dolor sit amet, consetur adipiscing elit.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est enim adipiscing libero accumsan,.
                    </p>

                    <a href="">Read More</a>
                </div>

                <!-- ----1--- -->

                <div class="blog">
                    <img src="{{ asset('images/blog-img1.png')}}" alt="#">
                    <h4>Lorem ipsum dolor sit amet, consetur adipiscing elit.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est enim adipiscing libero accumsan,.
                    </p>

                    <a href="">Read More</a>
                </div>


                <!-- ----1--- -->

                <div class="blog">
                    <img src="{{ asset('images/blog-img1.png')}}" alt="#">
                    <h4>Lorem ipsum dolor sit amet, consetur adipiscing elit.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est enim adipiscing libero accumsan,.
                    </p>

                    <a href="">Read More</a>
                </div>


            </div>
        </div>

        <div class="text-center" id="view-btn">
            <button>View All</button>
        </div>
    </section>



    <!-- -------------------About AstroPandit OM---------- -->

    <section id="About">
        <div class="container-fluid text-center">
            <h2 id="h2">About AstroPandit OM</h2>

            <div class="about">
                <div class="box1"></div>
                <div class="box2">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget
                        arcu eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris et. Eget maecenas
                        tortor blandit leo. Scelerisque vivamu facilisis
                        maecenas sem pretium purus feugiat ac Elit in cras purus venenatis, mauris viverraurna tellus
                        duis. Sed fames consequat volutpat elementu nunc, lorem elementum. Tempus nibh condimentum.</p>
                    <button>Learn More</button>
                </div>
            </div>
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

                            <p>" We had an incredible experience working with Landify and were impressed they made such
                                a big difference in only three weeks. Our team is so grateful for the wonderful
                                improvements they made and their ability to get familiar
                                with the product concept so quickly. It acted as a catalyst to take our design to the
                                next level and get more eyes on our product.
                            <div class="quots">“</div>
                            </p>
                            <div class="name">
                                <img src="{{ asset('images/img1.png') }}" alt="#">
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

                            <p>" We had an incredible experience working with Landify and were impressed they made such
                                a big difference in only three weeks. Our team is so grateful for the wonderful
                                improvements they made and their ability to get familiar
                                with the product concept so quickly. It acted as a catalyst to take our design to the
                                next level and get more eyes on our product.
                            <div class="quots">“</div>
                            </p>
                            <div class="name">
                                <img src="{{ asset('images/img1.png') }}" alt="#">
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

                            <p>" We had an incredible experience working with Landify and were impressed they made such
                                a big difference in only three weeks. Our team is so grateful for the wonderful
                                improvements they made and their ability to get familiar
                                with the product concept so quickly. It acted as a catalyst to take our design to the
                                next level and get more eyes on our product.
                            <div class="quots">“</div>
                            </p>
                            <div class="name">
                                <img src="{{ asset('images/img1.png') }}" alt="#">
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

                            <p>" We had an incredible experience working with Landify and were impressed they made such
                                a big difference in only three weeks. Our team is so grateful for the wonderful
                                improvements they made and their ability to get familiar
                                with the product concept so quickly. It acted as a catalyst to take our design to the
                                next level and get more eyes on our product.
                            <div class="quots">“</div>
                            </p>
                            <div class="name">
                                <img src="{{ asset('images/img1.png') }}" alt="#">
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
                            <p>" We had an incredible experience working with Landify and were impressed they made such
                                a big difference in only three weeks. Our team is so grateful for the wonderful
                                improvements they made and their ability to get familiar
                                with the product concept so quickly. It acted as a catalyst to take our design to the
                                next level and get more eyes on our product.</p>
                            <div class="name">
                                <img src="{{ asset('images/img1.png') }}" alt="#">
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

    
    @include('layouts.footer')