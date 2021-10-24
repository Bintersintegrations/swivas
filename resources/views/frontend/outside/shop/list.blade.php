@extends('layouts.frontend.app')
@push('styles')
    {{-- <style>
        ul.note-dropdown-menu li{
            display:none !important;
        }
    </style> --}}
@endpush
@section('main')
<!--section start-->
{{-- <section class="collection section-b-space ratio_square ">
    <div class="container">
        <div class="row partition-collection">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/1.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/3.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/5.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/6.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row partition-collection section-t-space">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/7.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/8.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/9.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="collection-block">
                    <div><img src="{{asset('assets/images/collection/11.jpg')}}" class="img-fluid blur-up lazyload bg-img"
                            alt=""></div>
                    <div class="collection-content">
                        <h5>(20 products)</h5>
                        <h4 class="font-weight-bold">fashion</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                            href="category-page.html" class="btn btn-outline">shop here !</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--Section ends-->

<!-- collection section start -->
<section class="section-b-space">
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
                    
                    
                </div>
                <div class="collection-sidebar-banner">
                    <a href="#"><img src="{{asset('assets/images/side-banner.png')}}" class="img-fluid blur-up lazyload"
                            alt=""></a>
                </div>
                <!-- silde-bar colleps block end here -->
            </div>
            <div class="col">
                <div class="collection">
                    <div class="row partition-collection">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="collection-block">
                                <div>
                                    <img src="{{asset('assets/images/collection/7.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="collection-content">
                                    <h5>(20 products)</h5>
                                    <h4 class="font-weight-bold">fashion</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                        href="category-page.html" class="btn btn-outline">shop here !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="collection-block">
                                <div>
                                    <img src="{{asset('assets/images/collection/8.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="collection-content">
                                    <h5>(20 products)</h5>
                                    <h4 class="font-weight-bold">fashion</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                        href="category-page.html" class="btn btn-outline">shop here !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="collection-block">
                                <div>
                                    <img src="{{asset('assets/images/collection/9.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                                </div>
                                <div class="collection-content">
                                    <h5>(20 products)</h5>
                                    <h4 class="font-weight-bold">fashion</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                        href="category-page.html" class="btn btn-outline">shop here !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="collection-block">
                                <div><img src="{{asset('assets/images/collection/11.jpg')}}" class="img-fluid blur-up lazyload"
                                        alt=""></div>
                                <div class="collection-content">
                                    <h5>(20 products)</h5>
                                    <h4 class="font-weight-bold">fashion</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                        href="category-page.html" class="btn btn-outline">shop here !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section end -->


@endsection
@push('scripts')
    
@endpush