            
         <div class="sidebar" id="side-Bar">
         <nav class="py-2 mb-4">
                <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#">  My Order
                        <img src="{{asset('web/image/arrow.png')}}" alt="arrow" id="arrow">
                        </a>
                        <ul id="menu_item1" class="submenu collapse" data-bs-parent="#nav_accordion">
                            <li><a class="nav-link" href="#">My Pooja</a></li>
                            <li><a class="nav-link" href="#">My Astroshop </a></li>
                            <li><a class="nav-link" href="#">Call </a> </li>
                            <li><a class="nav-link" href="#">Chat </a> </li>
                            <li><a class="nav-link" href="#">Video Call </a> </li>
                          
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/address')}}">My Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/profile')}}"> My Profile </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> My Wishlist </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/wallet')}}"> My Wallet </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/logout')}}"> Logout</a>
                    </li>
                </ul>
            </nav>
        </div>            
          