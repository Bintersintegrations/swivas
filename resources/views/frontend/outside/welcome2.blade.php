
@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')




    <!-- Home slider -->
    <section class="pt-0 height-65">
        <div class="slide-1 home-slider">
            <div>
                <div class="home text-left">
                    <img src="{{asset('assets/images/electronics/8.jpg')}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container-fluid custom-container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>Headsets for all styles</h4>
                                        <h1>Starting ₦50019</h1>
                                        <a href="{{route('products')}}" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="{{asset('assets/images/home-banner/12.jpg')}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container-fluid custom-container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>Giveaways today</h4>
                                        <h1>Up to 70% off</h1>
                                        <a href="#" class="btn btn-solid">View now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="home text-center">
                    <img src="{{asset('assets/images/home-banner/12.jpg')}}" alt="" class="bg-img blur-up lazyload">
                    <div class="container-fluid custom-container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>Offers today</h4>
                                        <h1>Up to 70% off</h1>
                                        <a href="#" class="btn btn-solid">Bid now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="pt-0 ratio3_2">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-3 col-sm-6 p-0">
                    <a href="#">
                        <div class="collection-banner p-left">
                            <div class="img-part bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/banner/10.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{asset('assets/images/marketplace/banner/10.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            </div>
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2 class="text-dark">women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <a href="#">
                        <div class="collection-banner p-left">
                            <div class="img-part bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/banner/9.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{asset('assets/images/marketplace/banner/9.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            </div>
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2 class="text-dark">men</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <a href="#">
                        <div class="collection-banner p-left">
                            <div class="img-part bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/banner/12.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{asset('assets/images/marketplace/banner/12.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            </div>
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2 class="text-dark">women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 p-0">
                    <a href="#">
                        <div class="collection-banner p-left">
                            <div class="img-part bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/banner/11.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{asset('assets/images/marketplace/banner/11.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;">
                            </div>
                            <div class="contain-banner banner-4">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2 class="text-dark">women</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- Paragraph-->
    <div class="title6 section-t-space">
        <h2 class="font-fraunces">top collection</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                {{-- <div class="product-para">
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    <!-- product start -->
    <section class="bag-product pt-0 section-b-space ratio_square">
        <div class="container">
            {{-- <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gy-sm-4 gy-3"> --}}
            <div class="row">
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/1.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/2.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/2.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/3.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/3.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/4.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/4.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/5.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/6.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/6.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/7.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/7.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/8.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/8.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/9.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/9.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/10.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/10.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/11.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/11.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 my-sm-4 my-3 ">
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyloaded" style="background-image: url({{asset('assets/images/marketplace/pro/12.jpg')}}); background-size: cover; background-position: center center; display: block;"><img alt="" src="{{asset('assets/images/marketplace/pro/12.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>₦500.00</h4>
                            <div class="add-btn">
                                <a href="javascript:void(0)" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </section>
    <!-- product end -->


    <!-- Parallax banner -->
    <section class="p-0 product-vertical overflow-hidden">
        <div class="full-banner parallax text-center p-left bg-theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="title6">
                            <h2 class="font-fraunces text-white">top collection</h2>
                        </div>
                        {{-- <div class="product-para">
                            <p class="text-center text-white">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            </p>
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="slide-3 no-arrow slick-default-margin full-box">
                            <div class="theme-card center-align">
                                <div class="offer-slider">
                                    <div class="sec-1">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a href="product-page(no-sidebar).html" tabindex="0">
                                                    <img class="img-fluid blur-up lazyloaded" src="{{asset('assets/images/pro2/43.jpg')}}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i> 
                                                        <i class="fa fa-star"></i> 
                                                        <i class="fa fa-star"></i> 
                                                        <i class="fa fa-star"></i> 
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="product-page(no-sidebar).html" tabindex="0">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>₦500.00 <del>₦600.00</del></h4>
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
                            <div class="theme-card center-align">
                                <div class="offer-slider">
                                    <div class="sec-1">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a href="product-page(no-sidebar).html" tabindex="0"><img class="img-fluid blur-up lazyloaded" src="{{asset('assets/images/pro2/21.jpg')}}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html" tabindex="0">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>₦500.00 <del>₦600.00</del></h4>
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
                            <div class="theme-card center-align">
                                <div class="offer-slider">
                                    <div class="sec-1">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a href="product-page(no-sidebar).html" tabindex="0"><img class="img-fluid blur-up lazyloaded" src="{{asset('assets/images/pro2/44.jpg')}}" alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <a href="product-page(no-sidebar).html" tabindex="0">
                                                        <h6>Slim Fit Cotton Shirt</h6>
                                                    </a>
                                                    <h4>₦500.00 <del>₦600.00</del></h4>
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
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- product slider start -->
    <section class="bag-product ratio_square">  
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-basic">
                        <h2 class="title font-fraunces"><i class="ti-bolt"></i>Don't Miss These</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slide-6 product-m no-arrow">
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/43.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/44.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/45.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/46.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/47.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/48.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 section-t-space">
                    <div class="title-basic">
                        <h2 class="title font-fraunces"><i class="ti-bolt"></i> Trending Offers</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slide-6 product-m no-arrow">
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/49.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/50.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/1.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/2.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/3.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html"><img alt=""
                                            src="{{asset('assets/images/marketplace/pro/4.jpg')}}"
                                            class="img-fluid blur-up lazyload bg-img"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                        data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                        title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider end -->


    <!-- two banner -->
    <section class="pb-0 ratio2_1">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/banner/13.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{asset('assets/images/marketplace/banner/13.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2>sale</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/banner/14.jpg')}}); background-size: cover; background-position: center center; display: block;">
                                <img src="{{asset('assets/images/marketplace/banner/14.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2>watch</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- two banner -->


    <section class="section-b-space">
        <div class="container">
            <div class="row multiple-slider">
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">new products</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/1.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00 <del>₦600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/3-.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/4.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/5.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00 <del>₦600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/1-.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/3--.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">feature product</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/4-.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/5--.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00 <del>₦600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/6.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/7.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/8.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/25.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00 <del>₦600.00</del></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">best seller</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/10.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00 <del>₦600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/11.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/12.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/13.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00 <del>₦600.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/14.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/16.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">on sell</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/16.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/17.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/18.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/19.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/20.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                            src="{{asset('assets/images/pro/21.jpg')}}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>₦500.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- service section start -->
    {{-- <section class="service section-b-space bg-light">
        <div class="container">
            <div class="row partition4 ">
                <div class="col-lg-3 col-md-6 service-block1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
                        <path d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0" fill="#ff4c3b"></path>
                    </svg>
                    <h4>free shipping</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve" width="512px" height="512px">
                        <g>
                            <g>
                                <g>
                                    <path d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160     c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24     c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z" fill="#ff4c3b"></path>
                                    <path d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552     c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8     c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32     l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8     S332.418,464,328,464z" fill="#ff4c3b"></path>
                                    <path d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0     C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288     V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2     c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296     c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0     c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248     c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952     C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112     C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568     c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z" fill="#ff4c3b"></path>
                                    <path d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704     c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947     c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888     C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002     c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002     C224.781,213.464,224.781,218.53,221.658,221.654z" fill="#ff4c3b"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h4>24 X 7 service</h4>
                    <p>Smart People Shop At Swivas. Shop & Earn With Us.. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1 border border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
                        <path d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0" fill="#ff4c3b"></path>
                        <path d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0" fill="#ff4c3b"></path>
                        <path d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0" fill="#ff4c3b"></path>
                        <path d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0" fill="#ff4c3b"></path>
                        <path d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0" fill="#ff4c3b"></path>
                        <path d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0" fill="#ff4c3b"></path>
                    </svg>
                    <h4>festival offer</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1 border border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px">
                        <g>
                            <g>
                                <g>
                                    <path d="M498.409,175.706L336.283,13.582c-8.752-8.751-20.423-13.571-32.865-13.571c-12.441,0-24.113,4.818-32.865,13.569     L13.571,270.563C4.82,279.315,0,290.985,0,303.427c0,12.442,4.82,24.114,13.571,32.864l19.992,19.992     c0.002,0.001,0.003,0.003,0.005,0.005c0.002,0.002,0.004,0.004,0.006,0.006l134.36,134.36H149.33     c-5.89,0-10.666,4.775-10.666,10.666c0,5.89,4.776,10.666,10.666,10.666h59.189c0.014,0,0.027,0.001,0.041,0.001     s0.027-0.001,0.041-0.001l154.053,0.002c5.89,0,10.666-4.776,10.666-10.666c0-5.891-4.776-10.666-10.666-10.666l-113.464-0.002     L498.41,241.434C516.53,223.312,516.53,193.826,498.409,175.706z M483.325,226.35L226.341,483.334     c-4.713,4.712-11.013,7.31-17.742,7.32h-0.081c-6.727-0.011-13.025-2.608-17.736-7.32L56.195,348.746L302.99,101.949     c4.165-4.165,4.165-10.919,0-15.084c-4.166-4.165-10.918-4.165-15.085,0.001L41.11,333.663l-12.456-12.456     c-4.721-4.721-7.321-11.035-7.321-17.779c0-6.744,2.6-13.059,7.322-17.781L285.637,28.665c4.722-4.721,11.037-7.321,17.781-7.321     c6.744,0,13.059,2.6,17.781,7.322l57.703,57.702l-246.798,246.8c-4.165,4.164-4.165,10.918,0,15.085     c2.083,2.082,4.813,3.123,7.542,3.123c2.729,0,5.459-1.042,7.542-3.124l246.798-246.799l89.339,89.336     C493.128,200.593,493.127,216.546,483.325,226.35z" fill="#ff4c3b"></path>
                                    <path d="M262.801,308.064c-4.165-4.165-10.917-4.164-15.085,0l-83.934,83.933c-4.165,4.165-4.165,10.918,0,15.085     c2.083,2.083,4.813,3.124,7.542,3.124c2.729,0,5.459-1.042,7.542-3.124l83.934-83.933     C266.966,318.982,266.966,312.229,262.801,308.064z" fill="#ff4c3b"></path>
                                    <path d="M228.375,387.741l-34.425,34.425c-4.165,4.165-4.165,10.919,0,15.085c2.083,2.082,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l34.425-34.425c4.165-4.165,4.165-10.919,0-15.085     C239.294,383.575,232.543,383.575,228.375,387.741z" fill="#ff4c3b"></path>
                                    <path d="M260.054,356.065l-4.525,4.524c-4.166,4.165-4.166,10.918-0.001,15.085c2.082,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.459-1.042,7.541-3.125l4.525-4.524c4.166-4.165,4.166-10.918,0.001-15.084     C270.974,351.901,264.219,351.9,260.054,356.065z" fill="#ff4c3b"></path>
                                    <path d="M407.073,163.793c-2-2-4.713-3.124-7.542-3.124c-2.829,0-5.541,1.124-7.542,3.124l-45.255,45.254     c-2,2.001-3.124,4.713-3.124,7.542s1.124,5.542,3.124,7.542l30.17,30.167c2.083,2.083,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l45.253-45.252c4.165-4.165,4.165-10.919,0-15.084L407.073,163.793z M384.445,231.673     l-15.085-15.084l30.17-30.169l15.084,15.085L384.445,231.673z" fill="#ff4c3b"></path>
                                    <path d="M320.339,80.186c2.731,0,5.461-1.042,7.543-3.126l4.525-4.527c4.164-4.166,4.163-10.92-0.003-15.084     c-4.165-4.164-10.92-4.163-15.084,0.003l-4.525,4.527c-4.164,4.166-4.163,10.92,0.003,15.084     C314.881,79.146,317.609,80.186,320.339,80.186z" fill="#ff4c3b"></path>
                                    <path d="M107.215,358.057l-4.525,4.525c-4.165,4.164-4.165,10.918,0,15.085c2.083,2.082,4.813,3.123,7.542,3.123     s5.459-1.041,7.542-3.123l4.525-4.525c4.165-4.166,4.165-10.92,0-15.085C118.133,353.891,111.381,353.891,107.215,358.057z" fill="#ff4c3b"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h4>online payment</h4>
                    <p>Secure, Fast & Efficient Online Payment With A Click. </p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- service section end -->


    <!-- product slider start -->
    <section class="bag-product section-b-space ratio_square">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-basic">
                        <h2 class="title font-fraunces"><i class="ti-bolt"></i> Big Savings</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slide-6 product-m no-arrow">
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/15.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/15.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/16.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/16.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/17.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/17.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/19.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/19.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/18.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/18.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/14.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/14.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/15.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/15.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/16.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/16.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>           
                    </div>
                </div>
                <div class="col-12 section-t-space">
                    <div class="title-basic">
                        <h2 class="title font-fraunces"><i class="ti-bolt"></i> Top Rated For You</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slide-6 product-m no-arrow ">
                        <div class="product-box product-wrap product-style-3">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/5.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/22.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/22.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/23.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/23.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/24.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/24.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/25.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/25.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>        
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/9.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/9.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/5.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/22.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/22.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/23.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/23.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/24.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="0"><img alt="" src="{{asset('assets/images/marketplace/pro/24.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="0"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="0"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="0"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="0">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="0">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/25.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/25.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>    
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/9.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/9.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/5.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/5.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/22.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/22.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                    </div>
                                    <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="product-info">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div>
                                    <a href="product-page(no-sidebar).html" tabindex="-1">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>₦500.00</h4>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="" tabindex="-1">
                                            <i class="ti-shopping-cart"></i> add to cart
                                        </a>
                                    </div>
                                </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/23.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/23.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/24.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/24.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-box product-wrap product-style-3" style="width: 100%; display: inline-block;">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="product-page(no-sidebar).html" class="bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/pro/25.jpg')}}); background-size: cover; background-position: center center; display: block;" tabindex="-1"><img alt="" src="{{asset('assets/images/marketplace/pro/25.jpg')}}" class="img-fluid blur-up lazyload bg-img" style="display: none;"></a>
                                </div>
                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist" tabindex="-1"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View" tabindex="-1"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare" tabindex="-1"><i class="ti-reload" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="product-info">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a href="product-page(no-sidebar).html" tabindex="-1">
                                    <h6>Slim Fit Cotton Shirt</h6>
                                </a>
                                <h4>₦500.00</h4>
                                <div class="add-btn">
                                    <a href="javascript:void(0)" class="" tabindex="-1">
                                        <i class="ti-shopping-cart"></i> add to cart
                                    </a>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider end -->


    <!-- banner section -->
    {{-- <section class="pt-0 section-b-space">
        <div class="container">
            <div class="full-banner custom-space p-right text-end bg-size blur-up lazyload" style="background-image: url({{asset('assets/images/marketplace/banner/15.jpg')}}); background-size: cover; background-position: center center; display: block;">
                <img src="{{asset('assets/images/marketplace/banner/15.jpg')}}" alt="" class="bg-img blur-up lazyload" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="banner-contain custom-size">
                                <h2>2018</h2>
                                <h3>fashion trends</h3>
                                <h4>special offer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- banner section end -->


    {{-- 
        <!-- footer section start -->
        <footer class="dark-footer footer-style-1 footer-theme-color">
            <section class="section-b-space darken-layout">
                <div class="container">
                    <div class="row footer-theme partition-f">
                        <div class="col-lg-4 col-md-6 sub-title">
                            <div class="footer-title footer-mobile-title">
                                <h4>about</h4>
                            </div>
                            <div class="footer-contant">
                                <div class="footer-logo"><img src="{{asset('assets/images/icon/logo/f11.png')}}" alt=""></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore</p>
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India 345-659
                                    </li>
                                    <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                    <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#">Support@Fiot.com</a></li>
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
            <div class="sub-footer dark-subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="footer-end">
                                <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by
                                    pixelstrap</p>
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
        <!-- footer section end -->


        <!--modal popup start-->
        <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body modal1">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-bg">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <div class="offer-content"> <img src="{{asset('assets/images/Offer-banner.png')}}" class="img-fluid blur-up lazyloaded" alt="">
                                            <h2>newsletter</h2>
                                            <form action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda" class="auth-form needs-validation" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                                <div class="form-group mx-sm-3">
                                                    <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Enter your email" required="required">
                                                    <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal popup end-->


        <!-- Quick-view modal popup start-->
        <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content quick-view-modal">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="quick-view-img"><img src="{{asset('assets/images/pro3/1.jpg')}}" alt="" class="img-fluid blur-up lazyload"></div>
                            </div>
                            <div class="col-lg-6 rtl-text">
                                <div class="product-right">
                                    <h2>Women Pink Shirt</h2>
                                    <h3>$32.96</h3>
                                    <ul class="color-variant">
                                        <li class="bg-light0"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-light2"></li>
                                    </ul>
                                    <div class="border-product">
                                        <h6 class="product-title">product details</h6>
                                        <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium</p>
                                    </div>
                                    <div class="product-description border-product">
                                        <div class="size-box">
                                            <ul>
                                                <li class="active"><a href="javascript:void(0)">s</a></li>
                                                <li><a href="javascript:void(0)">m</a></li>
                                                <li><a href="javascript:void(0)">l</a></li>
                                                <li><a href="javascript:void(0)">xl</a></li>
                                            </ul>
                                        </div>
                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick-view modal popup end--> 
    --}}
@endsection
@push('scripts')
    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }

    </script>
@endpush