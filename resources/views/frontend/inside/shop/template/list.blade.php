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
                        <h3 class="collapse-block-title">shop category</h3>
                        <div class="collection-collapse-block-content">
                            <div class="collection-brand-filter">
                                <div class="custom-control custom-checkbox collection-filter-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="zara">
                                    <label class="custom-control-label" for="zara">zara</label>
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
                        @forelse ($templates->where('images','!=',null) as $template)
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="collection-block border">
                                    <div>
                                        <img @if(count($template->images)) src="{{asset('storage/'.$template->images[0])}}" @endif class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <div class="collection-content mb-3">
                                        <h4 class="font-weight-bold">{{$template->name}}</h4>
                                        <p>{{\Illuminate\Support\Str::words($template->description, 10,'....') }}</p>
                                        <a href="{{route('shop.product.template.create',[$shop,$template])}}" class="btn btn-outline">Use Template</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="col-12 mb-4">
                            <div class="collection-block">
                                <p>No Template</p>
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