<div class="container-fluid b-navbar">
        <div class="img-div">
            <img src="{{ asset('images/Logo.png')}}" alt="#" />
        </div>

        <div class="menu-div">
            <div class="contact-div">
                <div class="item1">
                    <img src="https://img.icons8.com/ios/2x/apple-phone.png" alt="#" width="20px" />
                    <p><a href="tel:+91 88106 40406 "> +91 88106 40406</a></p>
                    <img src="https://img.icons8.com/ios/2x/apple-mail.png" alt="#" width="25px" />
                    <p><a href="mailto:info@astropanditom.com">  info@astropanditom.com</a></p>
                </div>
                <div class="item2">
                    <img src="https://img.icons8.com/material-outlined/2x/search.png" alt="#" width="20px" />
                    <a href="../Product/add to cart/cart.html"> <img src="https://img.icons8.com/small/2x/shopping-cart-loaded.png" alt="#" width="25px" /></a>
                    <img src="https://img.icons8.com/small/344/user.png" alt="#" width="20px" />
                    <a href="{{url('pandit-registration')}}">

                        <p>Pandit Registration</p>
                    </a>
                </div>
            </div>
            <div class="menu-row">
               <div class="menu header-menu">
                  <ul>
                     <li> <a href="{{url('./')}}">Home</a></li>
                     <li><a href="../Home-page/Home-page.html">Talk to Astrologers</a></li>
                     <li> <a href="../Product/product.html">Astroshop</a></li>
                     <li><a href="../Horoscope-page/horoscope.html">Horoscope</a></li>
                     <li class="submenu"> <a class=""  href="{{url('./puja-home')}}">Pooja</a>
                           <ul class="dropdown-menu-custom">
                              <li><a href="{{url('./puja-ghar')}}">Ghar Pe Pooja</a></li>
                              <li><a href="{{url('./puja-online')}}">Online E-Pooja</a></li>
                              <li><a href="{{url('./puja-request')}}">On Request-Pooja</a></li>
                           </ul>
                     </li>
                     <li>
                        
                     </li>
                     <li> 
                    <a href="../About/about.html">About us</a>
                  </li>
                  <li>  <a href="../Contact/contact.html">Contact us</a></li>
                  </ul>
               </div>
                <div class="menu">
                   
                   
                </div>
                <div class="button">
                    @if(Auth::guard('user')->user())
                    <a href="{{url('./dashboard')}}">Dashboard</a>
                   <!-- <a onclick="popshow()">Login/Sign up</a> -->
                    @else
                    <a onclick="popshow()">Login/Sign up</a>
                    @endif
                    
                </div>
              
            </div>
        </div>
    </div>