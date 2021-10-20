<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Swivas MarketPlace is a unique marketplace">
    <meta name="keywords" content="Swivas MarketPlace ">
    <meta name="author" content="Multishops">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('assets/images/favicon/1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/1.png')}}" type="image/x-icon">
    <title>Swivas - MarketPlace</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2-bootstrap.min.css')}}">
    @stack('styles')
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap5.css')}}"> --}}

    <!-- Theme css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color1.css')}}" media="screen" id="color"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="screen" id="color">


</head>

<body>
    <!-- loader start -->
    {{-- <div class="loader_skeleton">
        <header class="header-tools marketplace">
            <div class="top-header d-none d-sm-block">
                <div class="container-fluid custom-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-contact">
                                <ul>
                                    <li>Welcome to Our store Swivas</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <ul class="header-dropdown">
                                <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                </li>
                                <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" @auth aria-hidden="true" @endauth></i>
                                    @guest Login @else My Account @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid custom-container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="javascript:void(0)" onclick="openNav()">
                                        <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="index.html"><img src="{{asset('assets/images/icon/logo.png')}}"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                        aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{route('products')}}">Products</a>
                                            </li>
                                            <li>
                                                <a href="{{route('givings')}}">Giveaways</a>
                                            </li>
                                            <li><a href="{{route('auctions')}}">Auctions</a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">blog</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav d-none d-sm-block">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img src="{{asset('assets/images/icon/search.png')}}" onclick="openSearch()"
                                                        class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                        onclick="openSearch()"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-setting">
                                                <div><img src="{{asset('assets/images/icon/setting.png')}}"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-settings"></i></div>
                                            </li>
                                            <li class="onhover-div mobile-cart">
                                                <div><img src="{{asset('assets/images/icon/cart.png')}}"
                                                        class="img-fluid blur-up lazyload" alt=""> <i
                                                        class="ti-shopping-cart"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="home-slider">
            <div class="home"></div>
        </div>
        <section class="collection-banner banner-padding banner-furniture ">
            <div class="container-fluid">
                <div class="row partition4">
                    <div class="col-lg-3 col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class=" grid-products center-detail row">
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6 product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h5></h5>
                                <h5 class="second"></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- loader end -->
  
    <header class="header-style-5 color-style" id="sticky-header">
        <div class="mobile-fix-option"></div>
        <div class="top-header top-header-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Swivas Multishops</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-contact text-right">
                            <ul>
                                <li><i class="fa fa-truck" aria-hidden="true"></i>Track Order</li>
                                <li class="pr-0"><i class="fa fa-gift" aria-hidden="true"></i>Gift Cards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar d-block d-xl-none">
                                <a href="javascript:void(0)">
                                    <div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="brand-logo">
                                <a href="index.html"><img src="{{asset('assets/images/icon/swivas.jpg')}}" class="img-fluid blur-up lazyloaded" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <form class="form_search ajax-search the-basics" role="form">
                                <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                                    <input type="search" class="nav-search nav-search-field typeahead tt-hint" aria-expanded="true" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="search" placeholder="Search any Device or Gadgets..." class="nav-search nav-search-field typeahead tt-input" aria-expanded="true" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                                    <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;">
                                    </pre>
                                    <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                                        <div class="tt-dataset tt-dataset-states"></div>
                                    </div>
                                </span>
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
                                        <a href="login.html">
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
                                            <span class="cart_qty_cls">2</span>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img alt="" class="me-3" src="{{asset('assets/images/fashion/product/1.jpg')}}"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
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
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><a href="cart.html" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
                                                </li>
                                            </ul>
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
                            <div id="toggle-sidebar" class="toggle-sidebar">
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
                                            <li> <a href="#" class="has-submenu" id="sm-1634015758794352-5" aria-haspopup="true" aria-controls="sm-1634015758794352-6" aria-expanded="false">more<span class="sub-arrow"></span></a>
                                                <ul id="sm-1634015758794352-6" role="group" aria-hidden="true" aria-labelledby="sm-1634015758794352-5" aria-expanded="false">
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
                                    {{-- <li><a href="#">Kitchen &amp; Home</a></li>
                                    <li><a href="#">Gaming Consoles</a></li>
                                    <li> <a href="#" class="has-submenu" id="sm-1634015758794352-13" aria-haspopup="true" aria-controls="sm-1634015758794352-14" aria-expanded="false">cameras<span class="sub-arrow"></span></a>
                                        <ul id="sm-1634015758794352-14" role="group" aria-hidden="true" aria-labelledby="sm-1634015758794352-13" aria-expanded="false">
                                            <li><a href="#">fashion jewellery</a></li>
                                            <li><a href="#">caps and hats</a></li>
                                            <li><a href="#">precious jewellery</a></li>
                                            <li> <a href="#" class="has-submenu" id="sm-1634015758794352-15" aria-haspopup="true" aria-controls="sm-1634015758794352-16" aria-expanded="false">more..<span class="sub-arrow"></span></a>
                                                <ul id="sm-1634015758794352-16" role="group" aria-hidden="true" aria-labelledby="sm-1634015758794352-15" aria-expanded="false">
                                                    <li><a href="#">necklaces</a></li>
                                                    <li><a href="#">earrings</a></li>
                                                    <li><a href="#">wrist wear</a></li>
                                                    <li> <a href="#" class="has-submenu" id="sm-1634015758794352-17" aria-haspopup="true" aria-controls="sm-1634015758794352-18" aria-expanded="false">accessories<span class="sub-arrow"></span></a>
                                                        <ul id="sm-1634015758794352-18" role="group" aria-hidden="true" aria-labelledby="sm-1634015758794352-17" aria-expanded="false">
                                                            <li><a href="#">ties</a></li>
                                                            <li><a href="#">cufflinks</a></li>
                                                            <li><a href="#">pockets squares</a></li>
                                                            <li><a href="#">helmets</a></li>
                                                            <li><a href="#">scarves</a></li>
                                                            <li> <a href="#" class="has-submenu" id="sm-1634015758794352-19" aria-haspopup="true" aria-controls="sm-1634015758794352-20" aria-expanded="false">more...<span class="sub-arrow"></span></a>
                                                                <ul id="sm-1634015758794352-20" role="group" aria-hidden="true" aria-labelledby="sm-1634015758794352-19" aria-expanded="false">
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
                                    <li><a href="#">All Electronics </a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-9 position-unset">
                        <div class="main-nav-center">
                            <nav class="text-left">
                                <!-- Sample menu definition -->
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal hover-unset" data-smartmenus-id="16340157587770315">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="mega" id="hover-cls">
                                        <a href="#" class="has-submenu" id="sm-16340157587770315-1" aria-haspopup="true" aria-controls="sm-16340157587770315-2" aria-expanded="false">feature<span class="sub-arrow"></span></a>
                                        <ul class="mega-menu full-mega-menu" id="sm-16340157587770315-2" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-1" aria-expanded="false">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>add to cart</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="nursery.html">cart modal
                                                                                popup</a></li>
                                                                        <li><a href="vegetables.html">qty.
                                                                                counter
                                                                                <i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                        </li>
                                                                        <li><a href="bags.html">cart top</a>
                                                                        </li>
                                                                        <li><a href="shoes.html">cart bottom</a>
                                                                        </li>
                                                                        <li><a href="watch.html">cart left</a>
                                                                        </li>
                                                                        <li><a href="tools.html">cart right</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>model</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="index.html">Newsletter</a>
                                                                        </li>
                                                                        <li><a href="index.html">exit<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                        </li>
                                                                        <li><a href="christmas.html">christmas</a>
                                                                        </li>
                                                                        <li><a href="furniture-3.html">black
                                                                                friday</a></li>
                                                                        <li><a href="fashion-4.html">cyber
                                                                                monday</a></li>
                                                                        <li><a href="marketplace-demo-3.html">new
                                                                                year</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>cookie bar</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="index.html">bottom<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                        </li>
                                                                        <li><a href="fashion-4.html">bottom
                                                                                left</a></li>
                                                                        <li><a href="bicycle.html">bottom
                                                                                right</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title mt-2">
                                                                    <h5>search</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="marketplace-demo-2.html">ajax
                                                                                search<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>invoice template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank" href="invoice-1.html">invoice
                                                                                1</a></li>
                                                                        <li><a target="_blank" href="invoice-2.html">invoice
                                                                                2</a></li>
                                                                        <li><a target="_blank" href="invoice-3.html">invoice
                                                                                3</a></li>
                                                                        <li><a target="_blank" href="invoice-4.html">invoice
                                                                                4</a></li>
                                                                        <li><a target="_blank" href="invoice-5.html">invoice
                                                                                5</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank" href="../email-template/email-order-success.html">order
                                                                                success</a></li>
                                                                        <li><a target="_blank" href="../email-template/email-order-success-two.html">order
                                                                                success 2</a></li>
                                                                        <li><a target="_blank" href="../email-template/email-template.html">email
                                                                                template</a></li>
                                                                        <li><a target="_blank" href="../email-template/email-template-two.html">email
                                                                                template 2</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title mt-2">
                                                                    <h5>elements</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="elements.html">
                                                                                elements page<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src="{{asset('assets/images/menu-banner.jpg')}}" class="img-fluid mega-img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-submenu" id="sm-16340157587770315-3" aria-haspopup="true" aria-controls="sm-16340157587770315-4" aria-expanded="false">shop<span class="sub-arrow"></span></a>
                                        <ul id="sm-16340157587770315-4" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-3" aria-expanded="false">
                                            <li><a href="category-page(top-filter).html">top filter<span class="new-tag">new</span></a></li>
                                            <li><a href="category-page(modern).html">modern<span class="new-tag">new</span></a></li>
                                            <li><a href="category-page.html">left sidebar</a></li>
                                            <li><a href="category-page(right).html">right sidebar</a></li>
                                            <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                            <li><a href="category-page(sidebar-popup).html">sidebar popup</a>
                                            </li>
                                            <li><a href="category-page(metro).html">metro</a></li>
                                            <li><a href="category-page(full-width).html">full width</a></li>
                                            <li><a href="category-page(infinite-scroll).html">infinite
                                                    scroll</a></li>
                                            <li><a href="category-page(3-grid).html">three grid</a></li>
                                            <li><a href="category-page(6-grid).html">six grid</a></li>
                                            <li><a href="category-page(list-view).html">list view</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-submenu" id="sm-16340157587770315-5" aria-haspopup="true" aria-controls="sm-16340157587770315-6" aria-expanded="false">product<span class="sub-arrow"></span></a>
                                        <ul id="sm-16340157587770315-6" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-5" aria-expanded="false" class="sm-nowrap" style="width: auto; min-width: 10em; display: none; max-width: 20em; top: auto; left: 0px; margin-left: 0px; margin-top: 0px;">
                                            <li><a href="product-page(360-view).html">360 view <span class="new-tag">new</span></a></li>
                                            <li><a href="product-page(video-thumbnail).html">video
                                                    thumbnail<span class="new-tag">new</span></a></li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-7" aria-haspopup="true" aria-controls="sm-16340157587770315-8" aria-expanded="false">sidebar<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-8" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-7" aria-expanded="false">
                                                    <li><a href="product-page.html">left sidebar</a></li>
                                                    <li><a href="product-page(right-sidebar).html">right
                                                            sidebar</a>
                                                    </li>
                                                    <li><a href="product-page(no-sidebar).html">no sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-9" aria-haspopup="true" aria-controls="sm-16340157587770315-10" aria-expanded="false">thumbnail image<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-10" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-9" aria-expanded="false">
                                                    <li><a href="product-page(left-image).html">left image</a>
                                                    </li>
                                                    <li><a href="product-page(right-image).html">right image</a>
                                                    </li>
                                                    <li><a href="product-page(image-outside).html">image
                                                            outside</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-11" aria-haspopup="true" aria-controls="sm-16340157587770315-12" aria-expanded="false">three column<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-12" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-11" aria-expanded="false">
                                                    <li><a href="product-page(3-col-left).html">thumbnail
                                                            left</a>
                                                    </li>
                                                    <li><a href="product-page(3-col-right).html">thumbnail
                                                            right</a>
                                                    </li>
                                                    <li><a href="product-page(3-column).html">thubnail
                                                            bottom</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="product-page(4-image).html">four image</a></li>
                                            <li><a href="product-page(sticky).html">sticky</a></li>
                                            <li><a href="product-page(accordian).html">accordian</a></li>
                                            <li><a href="product-page(bundle).html">bundle</a></li>
                                            <li><a href="product-page(image-swatch).html">image swatch </a></li>
                                            <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                        </ul><span class="scroll-up" style="top: auto; left: 0px; margin-left: 0px; width: 224px; z-index: 2; margin-top: -186px; visibility: hidden; display: none;"><span class="scroll-up-arrow"></span></span><span class="scroll-down" style="display: none; top: auto; left: 0px; margin-left: 0px; width: 224px; z-index: 2; margin-top: 144px; visibility: hidden;"><span class="scroll-down-arrow"></span></span>
                                    </li>
                                    <li><a href="#" class="has-submenu" id="sm-16340157587770315-13" aria-haspopup="true" aria-controls="sm-16340157587770315-14" aria-expanded="false">pages<span class="sub-arrow"></span></a>
                                        <ul id="sm-16340157587770315-14" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-13" aria-expanded="false">
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-15" aria-haspopup="true" aria-controls="sm-16340157587770315-16" aria-expanded="false">vendor<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-16" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-15" aria-expanded="false">
                                                    <li><a href="vendor-dashboard.html">vendor dashboard</a>
                                                    </li>
                                                    <li><a href="vendor-profile.html">vendor profile</a></li>
                                                    <li><a href="become-vendor.html">become vendor</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-17" aria-haspopup="true" aria-controls="sm-16340157587770315-18" aria-expanded="false">account<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-18" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-17" aria-expanded="false">
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="dashboard.html">Dashboard</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="forget_pwd.html">forget password</a></li>
                                                    <li><a href="profile.html">profile</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="order-success.html">order success</a></li>
                                                    <li><a href="order-tracking.html">order tracking<span class="new-tag">new</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-19" aria-haspopup="true" aria-controls="sm-16340157587770315-20" aria-expanded="false">portfolio<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-20" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-19" aria-expanded="false">
                                                    <li><a href="" class="has-submenu" id="sm-16340157587770315-21" aria-haspopup="true" aria-controls="sm-16340157587770315-22" aria-expanded="false">grid<span class="sub-arrow"></span></a>
                                                        <ul id="sm-16340157587770315-22" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-21" aria-expanded="false">
                                                            <li><a href="grid-2-col.html">grid
                                                                    2</a></li>
                                                            <li><a href="grid-3-col.html">grid
                                                                    3</a></li>
                                                            <li><a href="grid-4-col.html">grid
                                                                    4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="" class="has-submenu" id="sm-16340157587770315-23" aria-haspopup="true" aria-controls="sm-16340157587770315-24" aria-expanded="false">masonry<span class="sub-arrow"></span></a>
                                                        <ul id="sm-16340157587770315-24" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-23" aria-expanded="false">
                                                            <li><a href="masonary-2-grid.html">grid 2</a></li>
                                                            <li><a href="masonary-3-grid.html">grid 3</a></li>
                                                            <li><a href="masonary-4-grid.html">grid 4</a></li>
                                                            <li><a href="masonary-fullwidth.html">full width</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about-page.html">about us</a></li>
                                            <li><a href="search.html">search</a></li>
                                            <li><a href="review.html">review</a>
                                            </li>
                                            <li>
                                                <a href="#" class="has-submenu" id="sm-16340157587770315-25" aria-haspopup="true" aria-controls="sm-16340157587770315-26" aria-expanded="false">compare<span class="sub-arrow"></span></a>
                                                <ul id="sm-16340157587770315-26" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-25" aria-expanded="false">
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="compare-2.html">compare-2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="collection.html">collection</a></li>
                                            <li><a href="lookbook.html">lookbook</a></li>
                                            <li><a href="sitemap.html">site map</a>
                                            </li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="coming-soon.html">coming soon</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-submenu" id="sm-16340157587770315-27" aria-haspopup="true" aria-controls="sm-16340157587770315-28" aria-expanded="false">blog<span class="sub-arrow"></span></a>
                                        <ul id="sm-16340157587770315-28" role="group" aria-hidden="true" aria-labelledby="sm-16340157587770315-27" aria-expanded="false">
                                            <li><a href="blog-page.html">left sidebar</a></li>
                                            <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                            <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 d-none d-xxl-inline-block">
                        <div class="header-options">
                            <div class="vertical-slider no-arrow slick-initialized slick-slider slick-vertical">
                                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                                <div class="slick-list draggable" style="height: 0px;"><div class="slick-track" style="opacity: 1; height: 0px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                                </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 0px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-truck" aria-hidden="true"></i>Free Shipping on Orders
                                        $100+</span>
                                </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 0px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-announcement" aria-hidden="true"></i>Buy One Get Two Free</span>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-truck" aria-hidden="true"></i>Free Shipping on Orders
                                        $100+</span>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-announcement" aria-hidden="true"></i>Buy One Get Two Free</span>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                    <span><i class="ti-gift" aria-hidden="true"></i>Gift Card for all the season</span>
                                </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('main')
    
    <!-- footer -->
    
    <footer class="footer-light">
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6 sub-title">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                                <img src="{{asset('assets/images/icon/logo/f11.png')}}" alt=""></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore</p>
                            <ul class="contact-list">
                                <li><i class="fa fa-map-marker"></i>17, Dele Aiyedun Close, Ogba Lagos
                                </li>
                                <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">business@swivas.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>my account</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">mens</a></li>
                                    <li><a href="#">womens</a></li>
                                    <li><a href="#">clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">shipping &amp; return</a></li>
                                    <li><a href="#">secure shopping</a></li>
                                    <li><a href="#">gallary</a></li>
                                    <li><a href="#">affiliates</a></li>
                                    <li><a href="#">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>follow us</h4>
                            </div>
                            <div class="footer-contant">
                                <p class="mb-cls-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt
                                    ut labore</p>
                                <form class="form-inline">
                                    <div class="form-group me-sm-3 mb-2">
                                        <label for="inputPassword2" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Enter Your Email">
                                    </div>
                                    <button type="submit" class="btn btn-solid mb-2">subscribe</button>
                                </form>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Swivas PLC</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{asset('assets/images/icon/visa.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('assets/images/icon/mastercard.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('assets/images/icon/paypal.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('assets/images/icon/american-express.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('assets/images/icon/discover.png')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

<!-- slick js-->






<!-- Theme js-->




    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>

    <!-- exitintent jquery-->
    <script src="{{asset('assets/js/jquery.exitintent.js')}}"></script>
    <script src="{{asset('assets/js/exit.js')}}"></script>

    <!-- popper js-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/slick-animation.min.js')}}"></script>
    <!-- menu js-->
    <script src="{{asset('assets/js/menu.js')}}"></script>
    <script src="{{asset('assets/js/sticky-menu.js')}}"></script>
    <!-- lazyload js-->
    <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    {{-- <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script> --}}

    <!-- Bootstrap Notification js-->
    <script src="{{asset('assets/js/bootstrap-notify.min.js')}}"></script>

    <!-- Fly cart js-->
    <script src="{{asset('assets/js/fly-cart.js')}}"></script>
    <script src="{{asset('assets/js/select2.full.js')}}"></script>
    <!-- Theme js-->
    {{-- <script src="{{asset('assets/js/script5.js')}}"></script> --}}
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/custom-slick-animated.js')}}"></script>

    
    
    @stack('scripts')
    @include('layouts.frontend.notify')
    <script>
        // $(window).on('load', function () {
        //     setTimeout(function () {
        //         $('#exampleModal').modal('show');
        //     }, 2500);
        // });
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
    
</body>

</html>