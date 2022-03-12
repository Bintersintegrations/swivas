@extends('layouts.backend.app')
@push('styles')
    <!-- datepicker css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Create Coupon
                        <small>Swivas Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Coupons </li>
                    <li class="breadcrumb-item active">Create Coupon</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card tab2-card">
        <div class="card-header">
            <h5>Discount Coupon Details</h5>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                <li class="nav-item"><a class="nav-link" id="restriction-tabs" data-toggle="tab" href="#restriction" role="tab" aria-controls="restriction" aria-selected="false" data-original-title="" title="">Restriction</a></li>
                {{-- <li class="nav-item"><a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false" data-original-title="" title="">Usage</a></li> --}}
            </ul>
            <form class="needs-validation" action="{{route('admin.coupons.save')}}" method="POST">@csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <h4>General</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="title" class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                                    <input class="form-control col-md-7" id="title" name="name" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="code" class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                                    <input class="form-control col-md-7" id="code" name="code" type="text" required="" >
                                    <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Start Date</label>
                                    <input class="datepicker-here form-control digits col-md-7" name="start_date" type="text" data-language="en">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">End Date</label>
                                    <input class="datepicker-here form-control digits col-md-7" name="end_date" type="text" data-language="en">
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Quantity</label>
                                    <input class="form-control col-md-7" type="number" name="quantity" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Discount Type</label>
                                    <select class="custom-select col-md-7" required="" name="type">
                                        <option value="">--Select--</option>
                                        <option value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="discountvalue" class="col-xl-3 col-md-4"><span>*</span>Discount Value</label>
                                    <input class="form-control col-md-7" id="discountvalue" name="value" type="number" required="" >
                                    <div class="valid-feedback">Enter correct values.</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Free Shipping</label>
                                    <div class="checkbox checkbox-primary col-md-7">
                                        <input id="checkbox-primary-1" type="checkbox" data-original-title="" title="" name="shipping" value="1">
                                        <label for="checkbox-primary-1">Allow Free Shipping</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Status</label>
                                    <div class="checkbox checkbox-primary col-md-7">
                                        <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="" name="status" value="1">
                                        <label for="checkbox-primary-2">Enable the Coupon</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
                        {{-- <form class="needs-validation" novalidate=""> --}}
                            <h4>Restriction</h4>
                            <div class="form-group row">
                                <label for="products" class="col-xl-3 col-md-4">Products</label>
                                <div class="col-md-7 px-0">
                                    <select class="form-control  select2" id="products" name="products[]" multiple style="width:100%;">
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
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
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-md-4" for="countries">Countries</label>
                                <div class="col-md-7 px-0">
                                    <select class="custom-select select2" name="countries[]" id="countries" multiple style="width:100%;">
                                        @foreach ($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="minimum_spend" class="col-xl-3 col-md-4">Minimum Spend</label>
                                <input class="form-control col-md-7" id="minimum_spend" type="number" name="minimum_spend">
                            </div>
                            <div class="form-group row">
                                <label for="maximum_spend" class="col-xl-3 col-md-4">Maximum Spend</label>
                                <input class="form-control col-md-7" id="maximum_spend" type="number" name="maximum_spend">
                            </div>
                            <h4>Usage Limits</h4>
                            
                            <div class="form-group row">
                                <label for="per_customer" class="col-xl-3 col-md-4">Per Customer</label>
                                <input class="form-control col-md-7" id="per_customer" type="number" name="per_customer" >
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
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Datepicker jquery-->
<script src="{{asset('assets/js/datepicker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/datepicker.custom.js')}}"></script>
<script>
    $('.select2').select2();
</script>
@endpush
