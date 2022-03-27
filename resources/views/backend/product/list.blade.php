@extends('layouts.backend.app')
@push('styles')
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    {{-- <style>
        table{
            margin: 0 auto;
            width: 100%;
            clear: both;
            border-collapse: collapse;
            table-layout: fixed; 
            word-wrap:break-word;
        }
    </style> --}}
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Products
                        <small>Swivas Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Items</li>
                    <li class="breadcrumb-item active">Products</li>
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
                    <h5>Manage Product</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display table" id="basic-1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Shop</th>
                                <th>Price</th>
                                <th>Orders</th>
                                <th>Status</th>
                                <th>Action/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td><a href="#">{{$product->name}}</a></td>
                                <td>{{$product->shop->name}}</td>
                                
                                
                                <td>{{$product->shop->country->currency_symbol.' '.$product->price}}</td>
                                <td>{{$product->orders->count()}}</td>
                                <td>
                                    @if($product->approved) 
                                        <span class="badge badge-success">Approved</span> 
                                    @else 
                                        <span class="badge badge-danger">Disapproved</span>  
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-xs btn-success" title="status" data-toggle="modal" data-target="#status{{$product->id}}">
                                        <i class="fa fa-check"></i>
                                    </button>
                                    <div class="modal fade" id="status{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="status{{$product->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel"> Change Product Status</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <form class="needs-validation" action="{{route('admin.product.status')}}" method="POST" enctype="multipart/form-data">@csrf
                                                    <div class="modal-body">
                                                        <h5>Change status of product: {{$product->name}} </h5>
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <div class="form-group row">
                                                            <div class="col">Approved <input type="checkbox" name="approved" value="1"></div>
                                                            <div class="col">Featured <input type="checkbox" name="featured" value="1"></div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="submit">Save</button>
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-xs btn-primary" title="Delete" data-toggle="modal" data-target="#product{{$product->id}}"><i class="fa fa-trash"></i></button>
                                    <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="product{{$product->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Product</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <form class="needs-validation" action="{{route('admin.product.delete')}}" method="POST" enctype="multipart/form-data">@csrf
                                                    <div class="modal-body">
                                                        <h5>Are you sure you want to delete product: <br>{{$product->name}} </h5>
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
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
                            @endforeach
                            
                            
                          
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
{{-- <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script> --}}
@endpush
