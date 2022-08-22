@include('layouts.header')
<!-- divider -->
<div id="divaider"></div>
<div class="">
  <div class="container2">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="nav nav-tabs custom-nav-pooja" id="nav-tab" role="tablist">
          <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
            <span>All</span>
          </button>
          <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
            <span>Ghar Pe Pooja</span>
          </button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
            <span>Online Pooja</span>
          </button>
          <button class="nav-link" id="specialPooja-tab" data-bs-toggle="tab" data-bs-target="#specialPooja" type="button" role="tab" aria-controls="specialPooja" aria-selected="false">
            <span>On Request Special Pooja</span>
          </button>
        </div>
        <div class="tab-content custom-tab-content" id="nav-tabContent">
          <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="pooja-section">
              <div class="left-section">
                <div class="img">
                  <img src="{{ asset('puja/img1.png')}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="right-section">
                <h5>Ghar Pe Pooja</h5>
                <div class="read-more">
                  <p>Please book your Pooja in this category, if your Pooja is to be done at your home or place of your choice. The priest will come to your desired place with all pooja Samagri. You just need to arrange eatables and other items easily available at your home.</p>
                </div>
              </div>
            </div>
            <div class="pooja-section">
              <div class="left-section">
                <div class="img">
                  <img src="{{ asset('puja/img1.png')}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="right-section">
                <h5>Online Pooja</h5>
                <div class="read-more">
                  <p>If you wish that the pooja of your choice is to be performed Online. Then, you can book your pooja under this category. Nowadays, people prefer this type of pooja also and it is believed that it also works. In this case you need not to arrange anything. Our qualified Priest will arrange the pooja with all pooja samagri required as per your convenience. The pooja will be performed preferably at a holy place of temples. After booking your pooja and successful payment of full amount as mentioned in the description of pooja column, our support team will work to allocate the pooja to a qualified priest/ pandit. You will be given the confirmation message and one link. Through this link you will be able to connect with the pooja place and our priest. Then priest will take Sankalp (your name, father’s name, Gotra, your place, and purpose of pooja like information will be required) while starting the pooja. You may like to observe the pooja for full time as per your convenience or can do your routine urgent works in between if you want. Based on the availability, our Customer care/ Support team executive may also join for a short while to see all is well arranged. Rates of online pooja are less than the onsite Pooja.</p>
                </div>
              </div>
            </div>
            <div class="pooja-section">
              <div class="left-section">
                <div class="img">
                  <img src="{{ asset('puja/img1.png')}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="right-section">
                <h5>On Request-Special Pooja</h5>
                <div class="read-more">
                  <p>Ghar pe premium pooja as customized by you, Ghar Pe Pooja on Urgent basis and Pooja from holy places of your choice in India along holy river banks, temples and Dhams etc.

If you wish that the pooja of your choice is to be performed specially with more pandits or your pooja is to be performed from holy places in India of your choice. Then, you can book your pooja under this category.

For special pooja, you are required to post your requirement with details through contact us portal on our website. Our support team will work on its workability and communicate you the estimate as early as possible. On your payment the process of Pooja Arrangement will be done by us as per your convenience. This category is useful for following cases;

Urgency: If date for your pooja is not available in category i) and you wish to book your pooja on early date,

Customized pooja/s, you may place your requirement with more pandits if you desire.

If you wish to book grand pooja like Mata ka Jagran, Akhand Ramayan, Bhagwat pooja or any other special pooja which is not listed on our website.

If you wish to have your online pooja at special holy places on the bank of rivers like Ganga, Yamuna, Narmada, Godavari, or other holy places like Haridwar, Rishikesh, Kedarnath, Badrinath, Mathura, Mata Vaishno devi, Jagannath puri etc. or any other place of your choice. In this case you need not to arrange anything., our qualified Priest will arrange the pooja with all pooja samagri required. After booking your online pooja and successful payment of full amount as communicated to you, our support team will work to allocate the online pooja to qualified Priest/ pandit from your desired holy place. You will be given the confirmation message and one link. Through this link you will be connected with the pooja place and our priest. Priest will take Sankalp (your name, fathers name, Gotra, your place, and purpose of pooja like information) while starting the pooja. You may like to observe the pooja full time as per your convenience or can do your routine urgent works in between. Based on the availability, our Customer care/ Support team executive may also join for a short while to see all is well arranged.</p>
                </div>
              </div>
            </div>
            <div class="pooja-details-section">
              <h3>All Pooja’s</h3>
              <div class="inner-pooja-details">
                
                
                @foreach(@$pujaList as $puja)       
                    <div class="item">
                        <a href="{{'puja-booking/'}}{{$puja->id}}">
                            <div class="img-section">
                                <img src="{{$puja->puja_id->image}}" class="img-fluid" alt="">
                            </div>
                            <h5>{{$puja->puja_id->name}}</h5>
                            <p>INR-{{$puja->puja_base_price}}/-</p>
                        </a>
                    </div>
                @endforeach
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-view-all">View All</button>
              </div>
            </div>
            <!-- -----------about section-------- -->
            <section id="about-section">
              <!-- ---about-- -->
              <div class="container-fluid about">
                <center>
                  <h2>About</h2>
                </center>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget magna tempus hendrerit scelerisque amet. Natoque pretium sit pretium donec eget duis sit in pretium. Laoreet sed nisl, porta nisl nunc scelerisque ipsum cursus. Vitae lectus lorem varius at a. sit pretium donec eget duis sit in pretium <br>
                  <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget magna tempus hendrerit scelerisque amet. Natoque pretium sit pretium donec eget duis sit in pretium. Laoreet sed nisl, porta nisl nunc scelerisque ipsum cursus. Vitae lectus lorem varius at a. sit pretium donec eget duis sit in pretium Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget magna tempus sit pretium donec eget duis sit in pretium. Laoreet sed nisl, porta nisl nunc scelerisque ipsum cursus. Vitae lectus lorem varius at a. sit pretium donec eget duis sit in pretium
                </p>
              </div>
            </section>
            <!-- -------------------Pandit Registration----------- -->
            <section class="pandit-registration">
                <div class="container">
                    <div class="inner-section">
                        <h3>Not a Member? Connect with Us...</h3>
                         <button>Pandit Registration</button>
                    </div>
                </div>
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
                        <p>" We had an incredible experience working with Landify and were impressed they made such a big difference in only three weeks. Our team is so grateful for the wonderful improvements they made and their ability to get familiar with the product concept so quickly. It acted as a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="profile-name">
                            <div class="img-section">
                                 <img src="{{ asset('puja/img1.png')}}" alt="">
                            </div>
                          <div class="content">
                            <h6 class="name-title">Jenny Wilson</h6>
                            <p class="name-subtitle">Vice President</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="carousel-cell">
                      <div class="review">
                        <p>" We had an incredible experience working with Landify and were impressed they made such a big difference in only three weeks. Our team is so grateful for the wonderful improvements they made and their ability to get familiar with the product concept so quickly. It acted as a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="profile-name">
                            <div class="img-section">
                                 <img src="{{ asset('puja/img1.png')}}" alt="">
                            </div>
                          <div class="content">
                            <h6 class="name-title">Jenny Wilson</h6>
                            <p class="name-subtitle">Vice President</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-cell">
                      <div class="review">
                        <p>" We had an incredible experience working with Landify and were impressed they made such a big difference in only three weeks. Our team is so grateful for the wonderful improvements they made and their ability to get familiar with the product concept so quickly. It acted as a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="profile-name">
                            <div class="img-section">
                                 <img src="{{ asset('puja/img1.png')}}" alt="">
                            </div>
                          <div class="content">
                            <h6 class="name-title">Jenny Wilson</h6>
                            <p class="name-subtitle">Vice President</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-cell">
                      <div class="review">
                        <p>" We had an incredible experience working with Landify and were impressed they made such a big difference in only three weeks. Our team is so grateful for the wonderful improvements they made and their ability to get familiar with the product concept so quickly. It acted as a catalyst to take our design to the next level and get more eyes on our product.
                        <div class="quots">“</div>
                        </p>
                        <div class="profile-name">
                            <div class="img-section">
                                 <img src="{{ asset('puja/img1.png')}}" alt="">
                            </div>
                          <div class="content">
                            <h6 class="name-title">Jenny Wilson</h6>
                            <p class="name-subtitle">Vice President</p>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane fade active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="pooja-section">
              <div class="left-section">
                <div class="img">
                  <img src="{{ asset('puja/img1.png')}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="right-section">
                <h5>Ghar Pe Pooja</h5>
                <div class="read-more">
                  <p>Please book your Pooja in this category, if your Pooja is to be done at your home or place of your choice. The priest will come to your desired place with all pooja Samagri. You just need to arrange eatables and other items easily available at your home.</p>
                </div>
              </div>
            </div>
            <div class="pooja-details-section">
              <h3>Ghar Pe Pooja</h3>
              <div class="inner-pooja-details">          

                @foreach(@$pujaList as $puja)
                    
                    @if($puja->puja_id->type == "Ghar pe puja")
                        <div class="item">
                            <a href="{{url('puja-booking/')}}/{{$puja->id}}">

                                <div class="img-section">
                                <img src="{{ $puja->puja_id->image }}" class="img-fluid" alt="">
                                </div>
                                <h5>{{$puja->puja_id->name}}</h5>
                                <p>INR- {{$puja->puja_base_price}}/-</p>
                            </a>
                        </div>
                
                    @endif
                
                @endforeach
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-view-all">View All</button>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="pooja-section">
              <div class="left-section">
                <div class="img">
                  <img src="{{ asset('puja/img1.png')}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="right-section">
                <h5>Online Pooja</h5>
                <div class="read-more">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget arcu eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris, et. Eget maecenas tortor blandit leo.</p>
                  <!-- <p>If you wish that the pooja of your choice is to be performed specially with more pandits or your pooja is to be performed from holy places in India of your choice. Then, you ...<a href="" class="read-more-link">Read More</a></p> -->
                </div>
              </div>
            </div>
            <div class="pooja-details-section">
              <h3>Online Pooja</h3>
              <div class="inner-pooja-details">
              
               
                
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-view-all">View All</button>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

             
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
</script> @include('layouts.footer')