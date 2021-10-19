@extends('layouts.backend.app')
@push('styles')
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jsgrid.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>List Coupons
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Coupons</li>
                    <li class="breadcrumb-item active">List Coupons</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Products Category</h5>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-danger btn-sm btn-delete mb-0 b-r-4">Delete</button>
                    <div class="category-table order-table jsgrid" style="position: relative; height: auto; width: 100%;">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">
                                        <input type="checkbox">
                                    </th>
                                    <th class="jsgrid-header-cell">Title</th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">Code</th>
                                    <th class="jsgrid-header-cell jsgrid-align-right">Discount</th>
                                    <th class="jsgrid-header-cell">Countries</th>
                                    <th class="jsgrid-header-cell">Period</th>
                                    <th class="jsgrid-header-cell">Status</th>
                                    <th class="jsgrid-header-cell">Action</th>
                                </tr>
                            </table>
                        </div>
                        <div class="jsgrid-grid-body">
                            <table class="jsgrid-table">
                                <tbody>
                                    @forelse ($coupons as $coupon)
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell jsgrid-align-center">
                                                <input type="checkbox">
                                            </td>
                                            <td class="jsgrid-cell jsgrid-align-right"> {{$coupon->name}}</td>
                                            <td class="jsgrid-cell jsgrid-align-right"> {{$coupon->code}}</td>
                                            <td class="jsgrid-cell"> @if($coupon->type=="percent") {{$coupon->value}}% Off @else -{{$coupon->value}}Off @endif</td>
                                            <td class="jsgrid-cell">Nigeria</td>
                                            <td class="jsgrid-cell"> @if($coupon->start_at && $coupon->end_at){{ $coupon->start_at->format('M-d')}} to {{$coupon->end_at->format('M-d')}} @else - @endif</td>
                                            <td class="jsgrid-cell"><i class="fa fa-circle @if($coupon->status) font-success @else font-danger @endif f-12"></i></td>
                                            <td class="jsgrid-cell">
                                                <a href="{{route('admin.coupons.edit',$coupon)}}" class="btn btn-xs btn-success" title="pen"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-xs btn-primary" title="delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr> 
                                    @empty
                                        <td class="jsgrid-cell">No Coupon</td>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="jsgrid-pager-container" style="display: none;">
                            <div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                <a href="javascript:void(0);">First</a></span> 
                                <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                    <a href="javascript:void(0);">Prev</a>
                                </span> 
                                <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span> 
                                <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                    <a href="javascript:void(0);">Next</a>
                                </span> 
                                <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                    <a href="javascript:void(0);">Last</a>
                                </span> &nbsp;&nbsp; 1 of 1 
                            </div>
                        </div>
                        <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                        <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Jsgrid js-->
<script src="{{asset('assets/js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/griddata-discount-coupon.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/jsgrid-discount-coupon.js')}}"></script>
@endpush
