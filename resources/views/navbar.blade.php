<div class="container-fluid b-navbar">
        <div class="img-div">
            <img src="{{ asset('images/Logo.png')}}" alt="javascript:void(0);" />
        </div>

        <div class="menu-div">
            <div class="contact-div">
                <div class="item1">
                    <img src="https://img.icons8.com/ios/2x/apple-phone.png" alt="javascript:void(0);" width="20px" />
                    <p><a href="tel:+91 88106 40406 "> +91 88106 40406</a></p>
                    <img src="https://img.icons8.com/ios/2x/apple-mail.png" alt="javascript:void(0);" width="25px" />
                    <p><a href="mailto:info@astropanditom.com">  info@astropanditom.com</a></p>
                </div>
                <div class="item2">
                    <img src="https://img.icons8.com/material-outlined/2x/search.png" alt="javascript:void(0);" width="20px" />
                    <a href="../Product/add to cart/cart.html"> <img src="https://img.icons8.com/small/2x/shopping-cart-loaded.png" alt="javascript:void(0);" width="25px" /></a>
                    <img src="https://img.icons8.com/small/344/user.png" alt="javascript:void(0);" width="20px" />
                    <a href="{{url('pandit-registration')}}">

                        <p>Pandit Registration</p>
                    </a>
                </div>
            </div>
            <div class="menu-row">
                <div class="menu header-menu">
                    <a href="{{url('./')}}">Home</a>
                    <a href="../Home-page/Home-page.html">Talk to Astrologers</a>
                    <a href="../Product/product.html">Astroshop</a>
                    <a href="../Horoscope-page/horoscope.html">Horoscope</a>
                    <a class="submenu" href="../{{url('puja-home')}}">Pooja
                        <ul class="dropdown-menu">
                            <li><a href="">Ghar Pe Pooja</a></li>
                            <li><a href="">Online E-Pooja</a></li>
                            <li><a href="">On Request-Pooja</a></li>
                        </ul>
                    </a>
                    <a href="../About/about.html">About us</a>
                    <a href="../Contact/contact.html">Contact us</a>
                </div>
                <div class="button">
                    @if(Auth::guard('user')->user())
                    <a href="{{url('./dashboard')}}">Dashboard</a>
                   <!-- <a onclick="popshow()">Login/Sign up</a> -->
                    @else
                    <a onclick="popshow()">Login/Sign up</a>
                    @endif
                    <!-- <a href="">Login/Sign up</a> -->
                </div>
            </div>
        </div>
    </div>