@extends('layouts.backend.app')
@push('styles')
    <!-- datepicker css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Settings
                        <small>Binters Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Settings </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card tab2-card">
       
        <div class="card-body">
            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                <li class="nav-item"><a class="nav-link" id="restriction-tabs" data-toggle="tab" href="#restriction" role="tab" aria-controls="restriction" aria-selected="false" data-original-title="" title="">Multilevel</a></li>
                {{-- <li class="nav-item"><a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false" data-original-title="" title="">Notif</a></li> --}}
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <form class="needs-validation" novalidate="">
                        <h4>General</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Value Added Service Tax</label>
                                    <input class="form-control col-md-7" id="validationCustom1" type="number" required="" >
                                    <div class="valid-feedback">Please Provide vat %</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Seller Percentage after sale</label>
                                    <input class="form-control col-md-7" type="number" data-language="en">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">System Percentage</label>
                                    <input class="form-control digits col-md-7" type="number" data-language="en">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4">Incentive Percentage</label>
                                    <input class="form-control digits col-md-7" type="number" data-language="en">
                                </div>
                                
                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
                    <form class="needs-validation" novalidate="">
                        <h4>Distribution</h4>
                        <div class="form-group row">
                            <label for="validationCustom3" class="col-xl-3 col-md-4">Buyer percentage</label>
                            <input class="form-control col-md-7" id="validationCustom3" type="text" required="" >
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom3" class="col-xl-3 col-md-4">Parent percentage</label>
                            <input class="form-control col-md-7" id="validationCustom3" type="text" required="" >
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom4" class="col-xl-3 col-md-4">Grand Parent Percentage</label>
                            <input class="form-control col-md-7" id="validationCustom4" type="number" >
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom5" class="col-xl-3 col-md-4">Great Grand Parent Percentage</label>
                            <input class="form-control col-md-7" id="validationCustom5" type="number" >
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom5" class="col-xl-3 col-md-4">Ancestors Percentage</label>
                            <input class="form-control col-md-7" id="validationCustom5" type="number" >
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary">Save</button>
            </div>
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

@endpush
