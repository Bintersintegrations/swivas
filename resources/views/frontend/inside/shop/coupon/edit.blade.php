@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                                        <li class="nav-item"><a class="nav-link" id="restriction-tabs" data-toggle="tab" href="#restriction" role="tab" aria-controls="restriction" aria-selected="false" data-original-title="" title="">Restriction</a></li>
                                    </ul>
                                    <form class="needs-validation" action="{{route('shop.coupon.save',$shop)}}" method="POST">@csrf
                                        <div class="tab-content p-5" id="myTabContent">
                                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                                
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="title" class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                                                            <input class="form-control col-md-7" id="title" name="name" value="{{$coupon->name ?? old('name')}}" type="text" required="">
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="code" class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                                                            <input class="form-control col-md-7" id="code" name="code" value="{{$coupon->code?? old('code')}}" type="text" required="" >
                                                            <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-md-4">Start Date</label>
                                                            <div class="col-md-7 px-0">
                                                                <input class="form-control digits " name="start_date" id="start_date" value="{{$coupon->start_at ? $coupon->start_at->toDateString(): old('start_date')}}" type="text"  data-language="en">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-md-4">End Date</label>
                                                            <div class="col-md-7 px-0">
                                                                <input class="form-control digits" name="end_date" value="{{$coupon->end_at ? $coupon->end_at->toDateString() : old('end_date')}}" id="end_date" type="text" data-language="en">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-md-4">Quantity</label>
                                                            <input class="form-control col-md-7" type="number" name="quantity" value="{{$coupon->quantity}}" required="">
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-md-4">Discount Type</label>
                                                            <select class="custom-select col-md-7" required="" name="type">
                                                                
                                                                <option value="percent" @if($coupon->type == "percent") selected @endif>Percent</option>
                                                                <option value="fixed" @if($coupon->type == "fixed") selected @endif>Fixed</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="discountvalue" class="col-xl-3 col-md-4"><span>*</span>Discount Value</label>
                                                            <input class="form-control col-md-7" id="discountvalue" name="value" value="{{$coupon->value}}" type="number" required="" >
                                                            <div class="valid-feedback">Enter correct values.</div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-md-4">Free Shipping</label>
                                                            <div class="checkbox checkbox-primary col-md-7">
                                                                <input id="checkbox-primary-1" type="checkbox" data-original-title="" title="" name="shipping" @if($coupon->shipping) checked @endif value="1">
                                                                <label for="checkbox-primary-1">Allow Free Shipping</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-md-4">Status</label>
                                                            <div class="checkbox checkbox-primary col-md-7">
                                                                <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="" name="status" @if($coupon->status) checked @endif value="1">
                                                                <label for="checkbox-primary-2">Enable the Coupon</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
                                                {{-- <form class="needs-validation" novalidate=""> --}}
                                                <div class="form-group row">
                                                    <label for="items" class="col-xl-3 col-md-4">Items</label>
                                                    <div class="col-md-7 px-0">
                                                        <select class="form-control select2" id="items" name="products[]" multiple style="width:100%;">
                                                            @foreach ($products as $product)
                                                                <option value="{{$product->id}}" @if($coupon->product_limit && in_array($product->id,$coupon->product_limit)) selected @endif>{{$item->name}}</option>
                                                            @endforeach 
                                                        </select>
                                                    </div>
                                                    <div class="valid-feedback">Please Provide a Product Name.</div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-md-4" for="category">Categories</label>
                                                    <div class="col-md-7 px-0">
                                                        <select class="custom-select select2" name="categories[]" id="categories" multiple style="width:100%;">
                                                            @foreach ($categories as $category)
                                                                <option value="{{$category->id}}" @if($coupon->category_limit &&  in_array($category->id,$coupon->category_limit)) selected @endif>{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="minimum_spend" class="col-xl-3 col-md-4">Minimum Spend</label>
                                                    <input class="form-control col-md-7" id="minimum_spend" type="number" name="minimum_spend" value="{{$coupon->minimum_spend}}">
                                                </div>
                                                <div class="form-group row">
                                                    <label for="maximum_spend" class="col-xl-3 col-md-4">Maximum Spend</label>
                                                    <input class="form-control col-md-7" id="maximum_spend" type="number" name="maximum_spend" value="{{$coupon->maximum_spend}}">
                                                </div>
                                                <h4>Usage Limits</h4>
                                                <div class="form-group row">
                                                    <label for="per_customer" class="col-xl-3 col-md-4">Per Customer</label>
                                                    <input class="form-control col-md-7" id="per_customer" type="number" name="per_customer" value="{{$coupon->limit_per_user}}">
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
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
</section>

@endsection

@push('scripts')
<script src="{{asset('assets/js/date-picker.js')}}"></script>
<script>
    $('#start_date').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#end_date').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('.select2').select2();
</script>
@endpush