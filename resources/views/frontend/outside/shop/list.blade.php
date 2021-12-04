@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('main')

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
                                @forelse ($categories as $category)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="zara">
                                        <label class="custom-control-label" for="zara">{{$category->name}}</label>
                                    </div>
                                @empty
                                    
                                @endforelse
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                {{-- <div class="collection-sidebar-banner">
                    <a href="#"><img src="{{asset('assets/images/side-banner.png')}}" class="img-fluid blur-up lazyload"
                            alt=""></a>
                </div> --}}
                <!-- silde-bar colleps block end here -->
            </div>
            <div class="col">
                <div class="collection">
                    <div class="row partition-collection">
                        @forelse ($shops as $shop)
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="collection-block border">
                                    <div>
                                        <img src="{{asset('storage/media/'.$shop->logo)}}" class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <div class="collection-content mb-3">
                                        <h5>({{$shop->products->count()}} products)</h5>
                                        <h4 class="font-weight-bold">{{$shop->name}}</h4>
                                        <p>{!! \Illuminate\Support\Str::words($shop->description, 5,'....')  !!}</p><a
                                            href="{{route('shop.view',$shop)}}" class="btn btn-outline">shop here !</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="col-12 mb-4">
                            <div class="collection-block">
                                <p>No Shops</p>
                            </div>
                        </div>
                        @endforelse
                        
                
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