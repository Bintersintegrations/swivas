@extends('layouts.frontend.app')
@push('styles')
    {{-- <style>
        ul.note-dropdown-menu li{
            display:none !important;
        }
    </style> --}}
@endpush
@section('main')
<!-- vendor cover start -->
<div class="vendor-cover">
    <div>
        <img src="{{asset('assets/images/vendor/profile.jpg')}}" alt="" class="bg-img lazyload blur-up">
    </div>
</div>
<!-- vendor cover end -->


<!-- section start -->
{{-- <section class="vendor-profile pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile-left">
                    <div class="profile-image">
                        <div>
                            <img src="{{asset('assets/images/logos/17.png')}}" alt="" class="img-fluid">
                            <h3>Fashion Store</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                (10)
                            </div> 
                            <h6><button class="btn btn-xs"><i class="fa fa-user-plus pr-1"></i>750k followers</button></h6>
                        </div>
                    </div>
                    <div class="profile-detail">
                        <div>
                            <p>Based in United States, Fashion store has been an Multikart member since May 15, 2017.
                                Fashion Store are engaged in all kinds of western clothing. In garment field we have
                                maintained 3 years exporting experience. company insist in the principle of "Customer
                                first, Quality uppermost".Based in United States, Fashion store has been an </p>
                            <p>Based in United States, Fashion store has been an Multikart member since May 15, 2017.
                                Fashion Store are engaged in all kinds of western clothing. In garment field we have
                                maintained 3 years exporting experience. company insist in the principle of "Customer
                                first, Quality uppermost"
                            </p>
                        </div>
                    </div>
                    <div class="vendor-contact">
                        <div>
                            <h6>follow us:</h6>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <h6>if you have any query:</h6>
                            <a href="#" class="btn btn-solid btn-sm">contact seller</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
<!-- Section ends -->

<section class="game-product ratio_asos pt-0">
    <div class="container">
        
        <div class="row mt-5">
            <div class="col">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        <li class="current">
                            <a href="tab-4">Products</a>
                        </li>
                        <li class="">
                            <a href="tab-5">Auctions</a>
                        </li>
                        <li class="">
                            <a href="tab-6">GiveAways</a>
                        </li>
                    </ul>
                    <div class="tab-content-cls">
                        <div id="tab-4" class="tab-content active default" style="display: block;">
                            <div class=" no-slider five-product row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/11.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/11.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/12.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/12.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/13.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/13.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/14.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/14.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/15.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/15.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/16.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/16.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/17.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/17.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/18.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/18.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/19.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/19.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/23.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/23.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <a href="#" class="btn btn-secondary">Show More</a>
                            </div>
                            
                        </div>
                        <div id="tab-5" class="tab-content" style="display: none;">
                            <div class=" no-slider five-product row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/1.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/1.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/2.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/2.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/3.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/3.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/4.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/4.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/5.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/5.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/6.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/6.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/7.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/7.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/8.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/8.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/22.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/22.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/10.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/10.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <a href="#" class="btn btn-secondary">Show More</a>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content" style="display: none;">
                            <div class=" no-slider five-product row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/14.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/14.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/15.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/15.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/16.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/16.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/11.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/11.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/12.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/12.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/1.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/1.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/2.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/2.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/3.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/3.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/4.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/4.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block">
                                            <span class="lable3">new</span>
                                            <span class="lable4">on sale</span>
                                        </div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/game/pro/5.jpg')}}); background-size: cover; background-position: center center; display: block;"><img src="{{asset('assets/images/game/pro/5.jpg')}}" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="add-button" data-toggle="modal" data-target="#addtocart">add to
                                            cart</div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <a href="#" class="btn btn-secondary">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-b-space pt-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        <li class=""><a href="tab-4">New Products</a></li>
                        <li class="current"><a href="tab-5">Featured Products</a></li>
                        <li class=""><a href="tab-6">Best Sellers</a></li>
                    </ul>
                    <div class="tab-content-cls">
                        <div id="tab-4" class="tab-content active default" style="display: none;">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                                <img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                                <img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                            </a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                <i class="ti-shopping-cart"></i>
                                            </button> 
                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a> 
                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content" style="display: block;">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content" style="display: none;">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/33.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/33.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/34.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/35.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/36.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/36.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/2.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/27.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/27.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/28.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img src="../assets/images/pro3/28.jpg" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="game-banner">
    <div class="container">
        <div class="row banner-timer">
            <div class="col-md-6">
                <div class="banner-text">
                    <h2>Save <span>30% off</span> Digital Watch</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="timer-box">
                    <div class="timer">
                        <p id="demo">EXPIRED</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="title1  title-gradient section-t-space">
                <h4>Recent Story</h4>
                <h2 class="title-inner1">from the blog</h2>
            </div>
        </div>
    </div>
</div>
<section class="blog p-t-0 section-b-space gym-blog ratio3_2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-3 no-arrow slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4810px; transform: translate3d(-1850px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/gym/blog/3.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/4.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/4.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/5.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/1.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/2.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 370px;"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="0">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/3.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="0">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 370px;"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="0">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/4.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/4.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="0">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 370px;"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="0">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/5.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="0">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/1.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/2.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/3.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/4.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/4.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 370px;" tabindex="-1"><div><div class="col-md-12" style="width: 100%; display: inline-block;">
                        <a href="#" tabindex="-1">
                            <div class="basic-effect">
                                <div class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{asset('assets/images/gym/blog/5.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                    <img src="{{asset('assets/images/gym/blog/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="blog-details">
                            <h4>25 January 2018</h4>
                            <a href="#" tabindex="-1">
                                <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                            </a>
                            <h6>by: John Dio , 2 Comment</h6>
                        </div>
                    </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
            </div>
        </div>
    </div>
</section>


<!-- collection section start -->
{{-- <section class="section-b-space">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-3 collection-filter">
                <!-- side-bar colleps block stat -->
                <div class="collection-filter-block">
                    <!-- brand filter start -->
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                aria-hidden="true"></i> back</span></div>
                    <div class="collection-collapse-block open">
                        <h3 class="collapse-block-title">vendor category</h3>
                        <div class="collection-collapse-block-content">
                            <div class="collection-brand-filter">
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="zara">
                                    <label class="custom-control-label" for="zara">bags</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="vera-moda">
                                    <label class="custom-control-label" for="vera-moda">clothes</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="forever-21">
                                    <label class="custom-control-label" for="forever-21">shoes</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="roadster">
                                    <label class="custom-control-label" for="roadster">accessories</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="only">
                                    <label class="custom-control-label" for="only">beauty products</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- color filter start here -->
                    <div class="collection-collapse-block open">
                        <h3 class="collapse-block-title">colors</h3>
                        <div class="collection-collapse-block-content">
                            <div class="color-selector">
                                <ul>
                                    <li class="color-1 active"></li>
                                    <li class="color-2"></li>
                                    <li class="color-3"></li>
                                    <li class="color-4"></li>
                                    <li class="color-5"></li>
                                    <li class="color-6"></li>
                                    <li class="color-7"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- price filter start here -->
                    <div class="collection-collapse-block border-0 open">
                        <h3 class="collapse-block-title">price</h3>
                        <div class="collection-collapse-block-content">
                            <div class="collection-brand-filter">
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="hundred">
                                    <label class="custom-control-label" for="hundred">$10 - $100</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="twohundred">
                                    <label class="custom-control-label" for="twohundred">$100 - $200</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="threehundred">
                                    <label class="custom-control-label" for="threehundred">$200 - $300</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="fourhundred">
                                    <label class="custom-control-label" for="fourhundred">$300 - $400</label>
                                </div>
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="fourhundredabove">
                                    <label class="custom-control-label" for="fourhundredabove">$400 above</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collection-sidebar-banner">
                    <a href="#"><img src="{{asset('assets/images/side-banner.png')}}" class="img-fluid blur-up lazyload"
                            alt=""></a>
                </div>
                <!-- silde-bar colleps block end here -->
            </div>
            <div class="col">
                <div class="collection-wrapper">
                    <div class="collection-content ratio_asos">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                </div>
                            </div>
                            <div class="collection-product-wrapper">
                                <div class="product-top-filter">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-filter-content">
                                                <div class="search-count">
                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                </div>
                                                <div class="collection-view">
                                                    <ul>
                                                        <li><i class="fa fa-th grid-layout-view"></i></li>
                                                        <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="collection-grid-view">
                                                    <ul>
                                                        <li><img src="{{asset('assets/images/icon/2.png')}}" alt=""
                                                                class="product-2-layout-view"></li>
                                                        <li><img src="{{asset('assets/images/icon/3.png')}}" alt=""
                                                                class="product-3-layout-view"></li>
                                                        <li><img src="{{asset('assets/images/icon/4.png')}}" alt=""
                                                                class="product-4-layout-view"></li>
                                                        <li><img src="{{asset('assets/images/icon/6.png')}}" alt=""
                                                                class="product-6-layout-view"></li>
                                                    </ul>
                                                </div>
                                                <div class="product-page-per-view">
                                                    <select>
                                                        <option value="High to low">24 Products Par Page</option>
                                                        <option value="Low to High">50 Products Par Page</option>
                                                        <option value="Low to High">100 Products Par Page</option>
                                                    </select>
                                                </div>
                                                <div class="product-page-filter">
                                                    <select>
                                                        <option value="High to low">Sorting items</option>
                                                        <option value="Low to High">50 Products</option>
                                                        <option value="Low to High">100 Products</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper-grid">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/fashion/product/1.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                        <a href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                            standard dummy text ever since the 1500s, when an unknown
                                                            printer took a galley of type and scrambled it to make a
                                                            type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/pro/1-.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/fashion/pro/04.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/fashion/product/4.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/fashion/product/25.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/beauty/pro/3.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/fashion/product/44.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-grid-box">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#"><img src="{{asset('assets/images/beauty/pro/1.jpg')}}"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i class="ti-shopping-cart"></i>
                                                        </button> <a href="javascript:void(0)"
                                                            title="Add to Wishlist"><i class="ti-heart"
                                                                aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                        href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book</p>
                                                    <h4>$500.00</h4>
                                                    <ul class="color-variant">
                                                        <li class="bg-light0"></li>
                                                        <li class="bg-light1"></li>
                                                        <li class="bg-light2"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-pagination mb-0">
                                    <div class="theme-paggination-block">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#"
                                                                aria-label="Previous"><span aria-hidden="true"><i
                                                                        class="fa fa-chevron-left"
                                                                        aria-hidden="true"></i></span> <span
                                                                    class="sr-only">Previous</span></a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"
                                                                aria-label="Next"><span aria-hidden="true"><i
                                                                        class="fa fa-chevron-right"
                                                                        aria-hidden="true"></i></span> <span
                                                                    class="sr-only">Next</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-sm-12">
                                                <div class="product-search-count-bottom">
                                                    <h5>Showing Products 1-24 of 10 Result</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- collection section end -->

@endsection
@push('scripts')
    
@endpush