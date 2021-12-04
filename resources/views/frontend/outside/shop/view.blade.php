@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('main')
<!-- vendor cover start -->
<div class="vendor-cover">
    <div>
        <img src="{{asset('storage/media/'.$shop->cover)}}" alt="" class="bg-img lazyload blur-up">
    </div>
</div>
<!-- vendor cover end -->


<!-- section start -->
<section class="vendor-profile pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile-left">
                    <div class="profile-image">
                        <div>
                            <img src="{{asset('storage/media/'.$shop->logo)}}" alt="" class="img-fluid mb-3">
                            <h3>{{$shop->name}}</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h6>750 followers | 10 review</h6>
                        </div>
                    </div>
                    <div class="profile-detail">
                        <div>
                            <p>{{$shop->description}}</p>
                        </div>
                    </div>
                    <div class="vendor-contact">
                        <div>
                            <h6>Contact Shop:</h6>
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
</section>
<!-- Section ends -->


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
                                @foreach ($shop->categories() as $category)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zara">
                                        <label class="custom-control-label" for="zara">{{$category->name}}</label>
                                    </div>
                                @endforeach
                                
                                {{-- <div class="custom-control custom-checkbox collection-filter-checkbox">
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
                                </div> --}}
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
                                        @foreach($shop->products as $product)
                                            <div class="col-xl-3 col-6 col-grid-box">
                                                <div class="product-box product-wrap">
                                                    <div class="img-wrapper">
                                                        
                                                        @if($product->onSale())
                                                            <div class="lable-block">
                                                                <span class="lable3">new</span> 
                                                                <span class="lable4">on sale</span>
                                                            </div>
                                                        @endif
                                                        <div class="front">
                                                            <a href="{{route('product.view',$product)}}">
                                                                <img src="{{$product->images[0]}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="back">
                                                            <a href="{{route('product.view',$product)}}">
                                                                <img @if(count($product->images) > 1) src="{{$product->images[1]}}" @else src="{{$product->images[0]}}" @endif class="img-fluid blur-up lazyload bg-img" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-box">
                                                            <button class="add-to-cart" title="Add to cart" data-product="{{$product->id}}product">
                                                                <i class="ti-shopping-cart"></i>
                                                            </button> 
                                                            <a href="javascript:void(0)" class="add-to-wish" data-product="{{$product->id}}product" title="Add to Wishlist">
                                                                <i class="ti-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="quick-view" data-product="{{$product->id}}product" title="Quick View">
                                                                <i class="ti-search" aria-hidden="true"></i>
                                                            </a> 
                                                            <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-detail text-center">
                                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                        <a href="{{route('product.view',$product)}}">
                                                            <h6>{{$product->name}}</h6>
                                                        </a>
                                                        @if(!$product->onSale())
                                    
                                                            <h4>{{$product->shop->country->currency_symbol.''.$product->price}}</h4>
                                                        @else
                                                            <h4><del>{{$product->shop->country->currency_symbol.''.$product->price}}</del>
                                                            {{$product->shop->country->currency_symbol.''.$product->sale_price}}</h4>
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        @endforeach
                                        
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
</section>
<!-- collection section end -->


@endsection
@push('scripts')
    <!-- price range js -->
    <script src="{{asset('assets/js/price-range.js')}}"></script>
        @include('frontend.snippets')
    <script>
        $(document).on('click','.color-options',function(){
            $(this).closest('.product-box').find('.product-image').attr('src',$(this).attr('data-image'));
        });
        $(document).on('click','.add-to-cart',function(){
            var product_id = parseInt($(this).attr('data-product'));
            $.ajax({
                type:'POST',
                dataType: 'json',
                url: "{{route('product.addtocart')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'product_id': product_id
                },
                success:function(data) {
                    
                    $('.cart_qty_cls').html(data.cart_count);
                    $('.cart_qty_cls,.shopping-cart').show();
                    var cart_total = 0;
                    var listing;
                    $('#shopping_list').html('');
                    $.each( data.cart, function( key, value ) {
                        listing =  `<li  id="cartlist`+key+`">
                                        <div class="media">
                                            <a href="#">
                                                <img alt="" class="mr-3"
                                                    src="`+value.product.images[0] +`">
                                            </a>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h4>`+value.product.name +`</h4>
                                                </a>
                                                <h4><span>`+value['quantity']+` x `+value['amount'] +`</span></h4>
                                            </div>
                                        </div>
                                        <div class="close-circle">
                                            <a href="javascript:void(0)" class="remove-from-cart" data-product="`+key+`product"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        </div>
                                    </li>`;
                        cart_total += parseInt(value['quantity']) * parseInt(value['amount']);
                        $('#shopping_list').prepend(listing);
                    });
                    $('#cart_total').html(cart_total);
                },
                error: function (data, textStatus, errorThrown) {
                console.log(data);
                },
            });
        });   
        $(document).on('click','.add-to-wish',function(){
            var product_id = parseInt($(this).attr('data-product'));
            $.ajax({
                type:'POST',
                dataType: 'json',
                url: "{{route('product.addtowish')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'product_id': product_id
                },
                success:function(data) {
                    $('#wish_counter').html(data.wish_count);
                    $('#wish_counter').show();
                },
                error: function (data, textStatus, errorThrown) {
                console.log(data);
                },
            });
        });
        $(document).on('click','.quick-view',function(){

            $("#quick-view").modal();
        });

    </script>
@endpush