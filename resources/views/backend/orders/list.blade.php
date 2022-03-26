@extends('layouts.backend.app')
@push('styles')
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Orders
                        <small>Swivas Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Sales</li>
                    <li class="breadcrumb-item active">Orders</li>
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
                    <h5>Manage Orders</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display table" id="basic-1">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order Id</th>
                                <th>Shop</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>   
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <td>{{$order->created_at->format('M d,y')}}</td>
                                    <td><a href="{{route('admin.order.view',$order)}}">ID:#{{$order->id}}</a></td>
                                    <td>{{$order->shop->name}}<br>{{$order->shop->mobile}}</td>
                                    <td>N{{$order->total}}</td>
                                    <td>
                                        @switch($order->status)
                                            @case('pending_payment')
                                                <span class="badge badge-secondary">Pending Payment</span>
                                                @break
                                            @case('processing')
                                            <span class="badge badge-primary">Processing</span>
                                                @break
                                            @case('ready')
                                            <span class="badge badge-primary">Ready</span>
                                                @break
                                            @case('completed')
                                            <span class="badge badge-success">Completed</span>
                                                @break
                                            @case('on-hold')
                                            <span class="badge badge-warning">ON Hold</span>
                                                @break
                                            @case('cancelled')
                                            <span class="badge badge-danger">Cancelled</span>
                                                @break
                                            @default
                                                
                                        @endswitch
                                        
                                    </td>
                                    <td>
                                        <button class="btn btn-xs btn-primary" @if(!($order->status == 'pending_payment' || $order->status == 'cancelled')) disabled @endif title="Delete" data-toggle="modal" data-target="#product{{$order->id}}"><i class="fa fa-trash"></i></button>
                                        <div class="modal fade" id="product{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="product{{$order->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Order</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <form class="needs-validation" action="{{route('admin.order.delete')}}" method="POST" enctype="multipart/form-data">@csrf
                                                        <div class="modal-body">
                                                            <h5>Are you sure you want to delete Order: <br>{{$order->name}} </h5>
                                                            <input type="hidden" name="order_id" value="{{$order->id}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger" type="submit">Yes, Delete</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        No Orders
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Datatable js-->
<script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables/custom-basic.js')}}"></script>
@endpush
