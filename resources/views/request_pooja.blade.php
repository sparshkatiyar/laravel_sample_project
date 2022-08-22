@include('layouts.header')
<!-- divider -->
<div id="divaider"></div>
<div class="">
  <div class="container2">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
       
        <div class="tab-content custom-tab-content" id="nav-tabContent">
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="pooja-section">
              <div class="left-section">
                <div class="img">
                  <img src="{{ asset('puja/img1.png')}}" class="img-fluid" alt="">
                </div>
              </div>
              <div class="right-section">
                <h5>On Request-Special Pooja</h5>
                <div class="read-more">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget arcu eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris, et. Eget maecenas tortor blandit leo.</p>
                </div>
              </div>
            </div>
            
           
          </div>
          <div>
            
            <div class="specialPooja-form">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <div class="form-group">
                    <label> Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Enter Your Email">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <div class="form-group">
                    <label>Enter Your Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Mobile Number">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <div class="form-group">
                    <label>Enter Location</label>
                    <input type="text" class="form-control" placeholder="Enter Location">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                  <div class="form-group">
                    <label>Enter City</label>
                    <input type="text" class="form-control" placeholder="Enter City">
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                  <div class="form-group">
                    <label>Your Message <span>( Maximum 200 Words) </span>
                    </label>
                    <textarea name="" id="" cols="3" rows="3" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                  <button type="submit" class="btn btn-submit">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ------tabsection---- -->
<!-- <div class="buttons"><button class="btnn" id="all" onclick="show(), filterSelection('all')">All</button><button class="btnn" id="g-pooja" onclick="hide(event , 'a1') , filterSelection('ghar_pe_puja')">Ghar Pe Pooja</button><button class="btnn" id="o-pooja" onclick="hide(event , 'a2'), filterSelection('online_puja')">Online Pooja</button><button class="btnn" id="r-pooja" onclick="hide(event , 'a3') , filterSelection('onrequest_puja')">On Request Special
        Pooja</button></div><section id="section1"><div class="container-fluid"><div class="first" id="a1"><div class="img"><img src="{{ asset('puja/img1.png')}}" alt=""></div><div class="detail"><h2>Ghar Pe Pooja</h2><p>Please book your Pooja in this category, if your Pooja is to be done at your home or place of your choice. The priest will come to your desired place with all pooja Samagri. You just need to arrange eatables and other items easily available at your home.</p></div></div><div class="first" id="a2"><div class="img"><img src="{{ asset('puja/img1.png')}}" alt=""></div><div class="detail"><h2>Online Pooja</h2><p>If you wish that the pooja of your choice is to be performed Online. Then, you can book your pooja under this category. Nowadays, people prefer this type of pooja also and it is believed that it also works. In this case you need not to arrange anything. Our qualified Priest will arrange the pooja with all pooja samagri required as per your convenience. The pooja will be performed preferably at a holy place of temples. After booking your pooja and successful payment of full amount as mentioned in the description of pooja column, our support team will work to allocate the pooja to a qualified priest/ pandit. You will be given the confirmation message and one link. Through this link you will be able to connect with the pooja place and our priest. Then priest will take Sankalp (your name, father’s name, Gotra, your place, and purpose of pooja like information will be required) while starting the pooja. You may like to observe the pooja for full time as per your convenience or can do your routine urgent works in between if you want. Based on the availability, our Customer care/ Support team executive may also join for a short while to see all is well arranged. Rates of online pooja are less than the onsite Pooja.</p></div></div><div class="first" id="a3"><div class="img"><img src="{{ asset('puja/img1.png')}}" alt=""></div><div class="detail"><h2>On Request-Special Pooja</h2><p>If you wish that the pooja of your choice is to be performed Online. Then, you can book your pooja under this category. Nowadays, people prefer this type of pooja also and it is believed that it also works. In this case you need not to arrange anything. Our qualified Priest will arrange the pooja with all pooja samagri required as per your convenience. The pooja will be performed preferably at a holy place of temples. After booking your pooja and successful payment of full amount as mentioned in the description of pooja column, our support team will work to allocate the pooja to a qualified priest/ pandit. You will be given the confirmation message and one link. Through this link you will be able to connect with the pooja place and our priest. Then priest will take Sankalp (your name, father’s name, Gotra, your place, and purpose of pooja like information will be required) while starting the pooja. You may like to observe the pooja for full time as per your convenience or can do your routine urgent works in between if you want. Based on the availability, our Customer care/ Support team executive may also join for a short while to see all is well arranged. Rates of online pooja are less than the onsite Pooja.</p></div></div></div></section> -->
<!-- -----------------------All Pooja’s------------ -->
<!-- ----------------------Book Pooja------------- -->
<!-- <section id="Book-Pooja"><div class="container-fluid text-center p-0"><h2 id="h2">All Pooja’s</h2><div class="main"><div class="row">
               
            @foreach(@$pujaList as $puja)
                
                @if($puja->puja_id->type == "Ghar pe puja")
                <div class="column show ghar_pe_puja"><div class="content"><a href="{{url('puja-booking/')}}/{{$puja->id}}"><img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                style="width:100%"></a><a href="{{url('puja-booking/')}}/{{$puja->id}}"><h4>{{$puja->puja_id->name}}</h4></a><p>INR- {{$puja->puja_base_price}}/-</p></div></div>
                @elseif($puja->puja_id->type  == "Online Puja")
                <div class="column show online_puja"><div class="content"><a href="{{url('puja-booking/')}}/{{$puja->id}}"><img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                style="width:100%"></a><a href="{{url('puja-booking/')}}/{{$puja->id}}"><h4>{{$puja->puja_id->name}}</h4></a><p>INR- {{$puja->puja_base_price}}/-</p></div></div>
                @elseif($puja->puja_id->type  =="On Request")
                <div class="column show onrequest_puja"><div class="content"><a href="{{url('puja-booking/')}}/{{$puja->id}}"><img src="{{ $puja->puja_id->image }}" alt="Mountains"
                                style="width:100%"></a><a href="{{url('puja-booking/')}}/{{$puja->id}}"><h4>{{$puja->puja_id->name}}</h4></a><p>INR- {{$puja->puja_base_price}}/-</p></div></div>
                @endif
                
            @endforeach
            </div></div></div><div class="text-center" id="view-btn"><button>View All</button></div></section> -->
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