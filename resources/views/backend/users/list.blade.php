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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Users</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display table" id="basic-1">
                        <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Earnings</th>
                            <th>Status</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                
                                <td>{{$user->firstname.' '.$user->surname}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->email}}</td>
                                {{-- <th>last login</th> --}}
                                <th>
                                    @if($user->role->name == 'user')
                                        @if($user->shops->count()) 
                                            No of shops: {{$user->shops->count()}}
                                        @else
                                            Customer
                                        @endif
                                    @elseif($user->role->name == 'admin')
                                        Admin Staff
                                    @elseif($user->role->name == 'account')
                                        Account
                                    @elseif($user->role->name == 'experience')
                                        Experience Personnel
                                    @endif
                                </th>
                                <th>{{$user->wallet}}</th>
                                <th>
                                    @if($user->suspect)
                                        Suspect
                                    @else
                                        Active
                                    @endif
                                </th>
                                
                                
                                <td>
                                    
                                    <button class="btn btn-xs btn-primary" title="Delete" data-toggle="modal" data-target="#user{{$user->id}}"><i class="fa fa-trash"></i></button>
                                    <div class="modal fade" id="user{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="user{{$user->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete User</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <form class="needs-validation" action="{{route('admin.users.delete')}}" method="POST" enctype="multipart/form-data">@csrf
                                                    <div class="modal-body">
                                                        <h5>Are you sure you want to delete user: <br>{{$user->name}} </h5>
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
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
