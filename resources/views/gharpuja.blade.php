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
                <h5>Ghar Pe Pooja</h5>
                <div class="read-more">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor vel dignissim volutpat vel eget arcu eget vel. Aenean augue amet, et, maecenas enim tristique sed mauris, et. Eget maecenas tortor blandit leo.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="pooja-details-section">
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
          
        </div>
      </div>
    </div>
  </div>
</div>
</div><div class="text-center" id="view-btn"><button>View All</button></div></section> -->
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