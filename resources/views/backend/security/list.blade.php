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
                    <h3>Giving
                        <small>Swivas Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Items</li>
                    <li class="breadcrumb-item active">GiveAway</li>
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
                    <h5>Manage Givings</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            {{-- <th>User</th> --}}
                            <th>Image</th>
                            <th>Category</th>
                            <th>Available</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($givings as $giving)
                            <tr>
                                <td>#{{$giving->id}}|{{$giving->item->name}}</td>
                                {{-- <td><a href="#">{{$giving->item->user->firstname}}</a></td> --}}
                                <td>
                                    <div class="d-flex">
                                        {{-- @if($giving->image)
                                            <img src="{{$giving->image->name}}" class="img-fluid img-30 mr-2 blur-up lazyloaded" alt="">
                                        @endif --}}
                                         
                                    </div>
                                </td>
                                <td><span class="badge badge-secondary">{{$giving->item->category->name}}</span></td>
                                
                                <td>Remaining: {{$giving->available}}</td>
                                <td>{{$giving->item->user->name}}</td>
                
                                <td><span class="badge badge-success">Approved</span></td>
                                <td>
                                    <button class="btn btn-xs btn-success" title="approve"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-xs btn-primary" title="delete"><i class="fa fa-trash"></i></button>
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
