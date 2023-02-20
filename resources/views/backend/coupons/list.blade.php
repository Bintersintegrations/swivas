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
                        <small>Binters Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
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
                        <div class="">
                            <table class="">
                                <tr class="">
                                    <th class="">
                                        <input type="checkbox">
                                    </th>
                                    <th class="">Title</th>
                                    <th class="">Code</th>
                                    <th class="">Discount</th>
                                    
                                    <th class="">Period</th>
                                    <th class="">Status</th>
                                    <th class="">Action</th>
                                </tr>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    @forelse ($coupons as $coupon)
                                        <tr class="">
                                            <td class=" ">
                                                <input type="checkbox">
                                            </td>
                                            <td class=" "> {{$coupon->name}}</td>
                                            <td class=" "> {{$coupon->code}}</td>
                                            <td class=""> @if($coupon->type=="percent") {{$coupon->value}}% Off @else -{{$coupon->value}}Off @endif</td>
                                           
                                            <td class=""> @if($coupon->start_at && $coupon->end_at){{ $coupon->start_at->format('M-d')}} to {{$coupon->end_at->format('M-d')}} @else - @endif</td>
                                            <td class=""><i class="fa fa-circle @if($coupon->status) font-success @else font-danger @endif f-12"></i></td>
                                            <td class="">
                                                <a href="{{route('admin.coupons.edit',$coupon)}}" class="btn btn-xs btn-success" title="pen"><i class="fa fa-pencil"></i></a>
                                                <button class="btn btn-xs btn-primary" title="delete"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr> 
                                    @empty
                                        <td class="">No Coupon</td>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="" style="display: none;">
                            <div class="">Pages: <span class="">
                                <a href="javascript:void(0);">First</a></span> 
                                <span class="">
                                    <a href="javascript:void(0);">Prev</a>
                                </span> 
                                <span class="">1</span> 
                                <span class="">
                                    <a href="javascript:void(0);">Next</a>
                                </span> 
                                <span class="">
                                    <a href="javascript:void(0);">Last</a>
                                </span> &nbsp;&nbsp; 1 of 1 
                            </div>
                        </div>
                        <div class="" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                        <div class="" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
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

@endpush
