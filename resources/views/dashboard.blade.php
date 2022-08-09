<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--  ---font awsome link ----->
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Astro Pandit') }}</title>
  
   <link href="{{ asset('asset/css/dashboard.css') }}" rel="stylesheet">
    
</head>

<body>
    @include('navbar')
    <div id="divaider"></div>
    <section class="order-page">
        <!-- -----------side bar show button-------- -->
        <div class="sideBtn-order">
            <button id="Sb">
                <!-- <img src="sidebar btn.png" alt="sidebar"> -->
                <img src="sidebar btn.png" alt="sidebar" id="filterIcopn">
                <img src="cancel.png" alt="cancle-arrow" id="cancle">
            </button>
        </div>
        <!-- -----------//side bar show button-------- -->
    
        <div class="container-order">
            <!-- -------side bar---- -->
      
            @include('dashnav')
            
            
            <div class="custom-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
            
                            <div class="tab-container-one">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item active"><a class="nav-link active" href="#home" role="tab" aria-controls="home" data-bs-toggle="tab">All</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#profile" role="tab" aria-controls="profile" data-bs-toggle="tab">Completed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#messages" role="tab" aria-controls="messages" data-bs-toggle="tab">Cancelled</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" role="tab" aria-controls="settings" data-bs-toggle="tab">Ongoing</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                <div class="boxs  no-order boxs-show" id="noOrder">
                                                    <img src="{{asset('web/image/empty-cart.png')}}" alt="no-order-img">
                                                    <h2>You have no ordered</h2>
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="pooja-card" id="Ongoing">
    
                                                        <div class="col col1">
                                                            <p class="order-no">
                                                                Order No: <span>25365425</span>
                                                            </p>
                                                        </div>
                                                        <div class="col col2">
                                                            <p class="date">
                                                                Date <span>5/02/2022</span>
                                                            </p>
                                                        </div>



                                                        <div class="col col3">
                                                            <img  src="{{asset('web/image/ram.png')}}" alt="ram img">
                                                        </div>
                                                        <div class="col col4">
                                                            <p class="Name">ddd Ramayan</p>

                                                        </div>


                                                        <div class="col col5">
                                                            <img src="right.png" alt="right" width="10px">
                                                            <p>Delivery Expected on Nov
                                                                02,2022</p>
                                                        </div>
                                                        <div class="col col6">
                                                            <p class="text">Lorem ipsum dolor sit tetur </p>
                                                        </div>
                                                        <div class="col col7">
                                                            <img src="{{asset('web/image/ram.png')}}" alt="star">
                                                            <p>Rates the Pooja</p>
                                                        </div>
                                                        <div class="col col8">
                                                            <p class="price"><span><b>$5.00</b></span> <span><del>$6.00</del></span></p>
                                                        </div>

                                                        <div class="col col9">
                                                            <p><a href="order-detail/order-detail.html">View Details</a></p>
                                                        </div>


                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        Profile...</div>
                                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                        Messages...</div>
                                    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                        Settings...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
        </div>
        <!-- --------//---- -->
        </div>
    
    </section>
</body>
<!-- divider -->

<!-- -----------section1----------- -->
@include('layouts.footer')

<scritp>

 function simulateClick(elem) {
	// Create our event (with options)
	var evt = new MouseEvent('click', {
		bubbles: true,
		cancelable: true,
		view: window
	});
	// If cancelled, don't dispatch our event
	var canceled = !elem.dispatchEvent(evt);
};

function prepareTabs(triggerEl) {
    var tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', function (event) {
        event.preventDefault()
        //alert('test-'+this.parentNode.tagName);
        tabTrigger.show()

        //console.log('>>>' + this.parentNode.tagName);
        //console.log('>>>>' + this.parentNode.parentNode.tagName);
        var sibling = this.parentNode.parentNode.firstChild;
        // Loop through each sibling and push to the array
        while (sibling) {
            if (sibling.tagName !== undefined) 
            {
                //console.log('>>>' + sibling.tagName);
                //console.log('--->' + sibling.classList);
                //console.log('>>' + sibling.firstChild.href);
                sibling.classList.remove('active');
            }
            sibling = sibling.nextSibling;
        }
        this.parentNode.classList.add('active');
        console.log('href = ' + this.href);
        simulateClick(document.querySelector(this.href));
    })
}

var triggerTabListTest = [].slice.call(document.querySelectorAll("#myTab a"));
triggerTabListTest.forEach(function (triggerEl) {
  prepareTabs(triggerEl);
});

</script>