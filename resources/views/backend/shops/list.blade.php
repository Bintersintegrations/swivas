@extends('layouts.backend.app')
@push('styles')
    <!-- datepicker css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Vendor List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Vendors</li>
                    <li class="breadcrumb-item active">Vendor List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Vendor Details</h5>
        </div>
        <div class="card-body vendor-table">
            <table class="display" id="basic-1">
                <thead>
                <tr>
                    <th>Store Name</th>
                    <th>Location</th>
                    <th>Owner</th>
                    <th>Products</th>
                    <th>Orders</th>
                    <th>Wallet Balance</th>
                    <th>Status</th>
                    <th>Profile</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($shops as $shop)
                <tr>
                    <td>
                        <div class="d-flex vendor-list">
                            <img src="{{asset('storage/media/'.$shop->logo)}}" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                            <a href="{{route('shop.view',$shop)}}"><span>{{$shop->name}}</span></a>
                        </div>
                    </td>
                    <td>{{$shop->city->name.' '.$shop->state->name}}</td>
                    <td>{{$shop->user->firstname}}</td>
                    <td>{{$shop->products->count()}}</td>
                    <td>{{$shop->orders->count()}}</td>
                    <td>{{$shop->country->currenry_symbol.''.$shop->wallet}}</td>
                    <td>{{ucwords($shop->status)}}</td>
                    <td>
                        <div>
                            <a href="{{route('admin.vendor.manage',$shop)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <button class="btn btn-primary"><i class="fa fa-trash"></i></button>
                        </div>
                    </td>
                </tr> 
                @empty
                    
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Datepicker jquery-->
<script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables/custom-basic.js')}}"></script>
@endpush
