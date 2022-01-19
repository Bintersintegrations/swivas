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
        
        <!-- Themify icon -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}">

        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
        <!-- Theme css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="screen" id="color">
        @stack('styles')
        

    </head>

    <body>
        {{-- @include('layouts.frontend.loader_skeleton') --}}
    
        @include('layouts.frontend.topmenu')

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
                                    <img src="{{asset('assets/images/icon/swivas.jpg')}}" alt=""></div>
                                <p>An e-commerce company with multilevel memberships and a reusable credit reward scheme</p>
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>17, Dele Aiyedun Close, Ogba, Lagos
                                    </li>
                                    <li><i class="fa fa-phone"></i>WhatsApp: +234-817-9333-448</li>
                                    <li><i class="fa fa-envelope-o"></i>Email Us: <a href="#" style="text-transform: none">business@swivas.com</a></li>
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
                                        <li><a href="{{route('register')}}">Create Account</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('shop.list')}}">Shops</a></li>
                                        <li><a href="{{route('sell')}}">Sell</a></li>
                                        <li><a href="{{route('network')}}">Network</a></li>
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
                                        <li><a href="#">Terms &amp; Condition</a></li>
                                        <li><a href="#">Return & Refund Policy</a></li>
                                        <li><a href="#">Privacy & Cookie Policy</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQs</a></li>
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
                                    <p class="mb-cls-content">We like to stay in touch because we value you</p>
                                    <form class="form-inline">
                                        <div class="form-group me-sm-3 mb-2">
                                            <label for="inputPassword2" class="sr-only">Password</label>
                                            <input type="email" class="form-control" id="inputPassword2" placeholder="Enter Your Email">
                                        </div>
                                        <button type="submit" class="btn btn-solid mb-2">subscribe</button>
                                    </form>
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href="https://www.facebook.com/Swivas-Multishops-102192025358673/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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
                                <p><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Swivas Multishops</p>
                            </div>
                        </div>
                        {{-- <div class="col-xl-6 col-md-6 col-sm-12">
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
                        </div> --}}
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

        <script src="{{asset('assets/js/typeahead.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/typeahead.jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-custom.js')}}"></script>
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
        @stack('scripts')
        @include('layouts.frontend.notify')
        
        
    </body>

</html>