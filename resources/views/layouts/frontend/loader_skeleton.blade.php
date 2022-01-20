<!-- loader start -->
<div class="loader_skeleton">
    <header class="header-style-5 color-style">
        <div class="mobile-fix-option"></div>
        {{-- <div class="top-header top-header-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Swivas Multishops</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +234-817-933-3448</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-contact text-right">
                            <ul>
                                <li><a href="{{route('sell')}}" class="text-white"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Sell</a></li>
                                <li><a href="#" class="text-white"><i class="fa fa-sitemap" aria-hidden="true"></i>Multi-Level Network</a></li>
                                
                                @guest
                                <li class="pr-0">
                                    <a href="{{route('login')}}" class="text-white"><i class="fa fa-user"></i>Account</a>
                                
                                    @else
                                    
                                    <a href="{{ route('logout') }}" class="text-white" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar d-block d-xl-none">
                                <a href="javascript:void(0)">
                                    <div class="bar-style" id=""><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="brand-logo">
                                <a href="{{route('index')}}"><img src="{{asset('assets/images/icon/swivas.jpg')}}" class="img-fluid blur-up lazyloaded" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <form class="form_search ajax-search the-basics" role="form">
                                <input type="search" placeholder="Search & Shop"
                                    class="nav-search nav-search-field typeahead" aria-expanded="true">
                                <button type="submit" name="nav-submit-button" class="btn-search">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="menu-right pull-right">
                            <nav class="text-start">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            </nav>
                            <div class="top-header d-block">
                                <ul class="header-dropdown">
                                    <li class="mobile-wishlist">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/heart-1.png')}}" alt=""> 
                                        </a>
                                    </li>
                                    <li class="onhover-dropdown mobile-account">
                                        <a href="{{route('user.dashboard')}}">
                                            <img src="{{asset('assets/images/icon/user-1.png')}}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div d-xl-none d-inline-block mobile-search">
                                            <div>
                                                <img src="{{asset('assets/images/icon/white-icon/search.png')}}" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> 
                                                <i class="ti-search" onclick="openSearch()"></i>
                                            </div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form class="ajax-search">
                                                                        <div class="form-group the-basics">
                                                                            <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control typeahead tt-hint" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input type="text" class="form-control typeahead tt-input" id="exampleInputPassword1" placeholder="Search a Product" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-states"></div></div></span>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="{{asset('assets/images/icon/setting-1.png')}}" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-settings"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#">english</a></li>
                                                    <li><a href="#">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a></li>
                                                    <li><a href="#">rupees</a></li>
                                                    <li><a href="#">pound</a></li>
                                                    <li><a href="#">doller</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="{{asset('assets/images/icon/shopping-cart.png')}}" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-shopping-cart"></i></div>
                                            {{-- <span class="cart_qty_cls">2</span> --}}
                                            {{-- <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3" src="{{asset('assets/images/fashion/product/1.jpg')}}"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x ₦ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3" src="{{asset('assets/images/fashion/product/2.jpg')}}"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x ₦ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>₦299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><a href="cart.html" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
                                                </li>
                                            </ul> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="category-menu d-none d-xl-block h-100">
                            <div id="" class="">
                                <i class="fa fa-bars sidebar-bar"></i>
                                <h5 class="mb-0">shop by category</h5>
                            </div>
                        </div>
                        <div class="sidenav fixed-sidebar marketplace-sidebar">
                            <nav>
                                <div>
                                    <div class="sidebar-back text-left d-xl-none d-block">
                                        <i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back
                                    </div>
                                </div>
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                    <li> <a href="#" >TV & Audio</a>
                                        <ul class="mega-menu clothing-menu">
                                            <li>
                                                <div class="row m-0">
                                                    <div class="col-xl-4">
                                                        <div class="link-section">
                                                            <h5>women's fashion</h5>
                                                            <ul>
                                                                <li><a href="#">dresses</a></li>
                                                                <li><a href="#">skirts</a></li>
                                                                <li><a href="#">westarn wear</a></li>
                                                                <li><a href="#">ethic wear</a></li>
                                                                <li><a href="#">sport wear</a></li>
                                                            </ul>
                                                            <h5>men's fashion</h5>
                                                            <ul>
                                                                <li><a href="#">sports wear</a></li>
                                                                <li><a href="#">western wear</a></li>
                                                                <li><a href="#">ethic wear</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="link-section">
                                                            <h5>accessories</h5>
                                                            <ul>
                                                                <li><a href="#">fashion jewellery</a></li>
                                                                <li><a href="#">caps and hats</a></li>
                                                                <li><a href="#">precious jewellery</a></li>
                                                                <li><a href="#">necklaces</a></li>
                                                                <li><a href="#">earrings</a></li>
                                                                <li><a href="#">wrist wear</a></li>
                                                                <li><a href="#">ties</a></li>
                                                                <li><a href="#">cufflinks</a></li>
                                                                <li><a href="#">pockets squares</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <a href="#" class="mega-menu-banner"><img src="{{asset('assets/images/mega-menu/fashion.jpg')}}" alt="" class="img-fluid blur-up lazyload"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#" >air conditioners</a>
                                        <ul>
                                            <li><a href="#">makeup</a></li>
                                            <li><a href="#">skincare</a></li>
                                            <li><a href="#">premium beaty</a></li>
                                            <li> <a href="#">more<span class="sub-arrow"></span></a>
                                                <ul>
                                                    <li><a href="#">fragrances</a></li>
                                                    <li><a href="#">luxury beauty</a></li>
                                                    <li><a href="#">hair care</a></li>
                                                    <li><a href="#">tools &amp; brushes</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">Refrigerators</a>
                                        <ul>
                                            <li><a href="#">shopper bags</a></li>
                                            <li><a href="#">laptop bags</a></li>
                                            <li><a href="#">clutches</a></li>
                                            <li> <a href="#">purses</a>
                                                <ul>
                                                    <li><a href="#">purses</a></li>
                                                    <li><a href="#">wallets</a></li>
                                                    <li><a href="#">leathers</a></li>
                                                    <li><a href="#">satchels</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">Washing Machines</a>
                                        <ul>
                                            <li><a href="#">sport shoes</a></li>
                                            <li><a href="#">formal shoes</a></li>
                                            <li><a href="#">casual shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kitchen &amp; Home</a></li>
                                    <li><a href="#">Gaming Consoles</a></li>
                                    <li> <a href="#">cameras<span class="sub-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">fashion jewellery</a></li>
                                            <li><a href="#">caps and hats</a></li>
                                            <li><a href="#">precious jewellery</a></li>
                                            <li> <a href="#">more..<span class="sub-arrow"></span></a>
                                                <ul>
                                                    <li><a href="#">necklaces</a></li>
                                                    <li><a href="#">earrings</a></li>
                                                    <li><a href="#">wrist wear</a></li>
                                                    <li> <a href="#">accessories<span class="sub-arrow"></span></a>
                                                        <ul>
                                                            <li><a href="#">ties</a></li>
                                                            <li><a href="#">cufflinks</a></li>
                                                            <li><a href="#">pockets squares</a></li>
                                                            <li><a href="#">helmets</a></li>
                                                            <li><a href="#">scarves</a></li>
                                                            <li> <a href="#">more...<span class="sub-arrow"></span></a>
                                                                <ul>
                                                                    <li><a href="#">accessory gift sets</a></li>
                                                                    <li><a href="#">travel accessories</a></li>
                                                                    <li><a href="#">phone cases</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">belts &amp; more</a></li>
                                                    <li><a href="#">wearable</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Heating &amp; Cooling</a></li>
                                    <li><a href="#">All accessories </a></li>
                                    <li><a href="#">All Electronics </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-9 position-unset">
                        <div class="main-nav-center">
                            <nav class="text-left">
                                <!-- Sample menu definition -->
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li>
                                        <a href="#">shops</a>
                                    </li>
                                    <li>
                                        <a href="#">sell</a>
                                        
                                    </li>
                                    <li>
                                        <a href="#">network</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{route('user.dashboard')}}">Account</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 d-none d-xxl-inline-block">
                        <div class="header-options">
                            <div class="vertical-slider no-arrow">
                                <div>
                                    <div>
                                        <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <span><i class="ti-truck" aria-hidden="true"></i>Free Shipping on Orders ₦100+</span>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <span><i class="ti-announcement" aria-hidden="true"></i>Buy One Get Two Free</span>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <span><i class="ti-truck" aria-hidden="true"></i>Free Shipping on Orders
                                            ₦100+</span>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <span><i class="ti-announcement" aria-hidden="true"></i>Buy One Get Two Free</span>
                                    </div>
                                </div>
                                <div>
                                    <div >
                                        <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- loader end -->