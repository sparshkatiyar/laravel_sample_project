@include('layouts.header')
<!-- divider -->
<div id="divaider"></div>
<!-- -----------section1----------- -->

<section id="section1">
    <div class="container-fluid main">
        <div class="img">
            <div>
                <img src="{{ asset('puja/img1.png')}}" alt="">

                <div class="img-content">
                    <h3>Starting From <span>&#x20b9 110.0</span></h3>
                    <p class="Category">Category : <span>
                            <font color="#B66200">Online E-Pooja</font>
                        </span></p>
                    <p class="">Choose Your Pooja :
                        <select id="dropdown">
                            <option value="a">Large Pooja</option>
                            <option value="b">small Pooja</option>
                            <option value="c">Large Pooja</option>
                        </select>
                    </p>
                </div>
            </div>
        </div>

        <!-- ----- -->

        <div class="details">
            <h2>Akhand Ramayan (Musical)</h2>

            <h4> WHY YOU NEED THIS POOJA</h4>
            <p>
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
                    <input type="radio">
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
                    </details> &nbsp;<input type="radio">
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
                    </details> &nbsp;<input type="radio">
                </div>
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
                    </li>
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
                    <li>
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
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="text-center" id="view-btn">
        <a href="{{url('puja-delivery')}}"> <button>Book Your Pooja</button></a>
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

<!-- -------------footer-------- -->
@include('layouts.footer')