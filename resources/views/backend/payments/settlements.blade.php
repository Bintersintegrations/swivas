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
                    <h3>Settlements
                        <small>Binters Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Payment</li>
                    <li class="breadcrumb-item active">Settlements</li>
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
                    <h5>Manage Settlements</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display table" id="basic-1">
                        <thead>
                            <tr>
                                <th>Beneficiary</th>
                                <th>Amount</th>
                                <th>Action</th>   
                                <th>Payment Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($settlements as $settlement)
                                <tr>
                                    <td>{{$settlement->created_at->format('M d,y')}}</td>
                                    <td>@if($settlement->withdrawable_type =='App\User') User: @else Shop: @endif {{$settlement->withdrawable->name}}</td>
                                    <td>N{{$settlement->amount}}</td>
                                    <td>
                                        {{$settlement->bank->name.': '.$settlement->account_number}} <br>
                                        {{$settlement->account_name}}
                                    </td>
                                    <td>

                                        @switch($settlement->status)
                                            @case('waiting')
                                                <span class="badge badge-secondary">Request</span>
                                                @break
                                            
                                            @case('paid')
                                            <span class="badge badge-success">Paid</span>
                                                @break
                                            @case('cancelled')
                                            <span class="badge badge-danger">Cancelled</span>
                                                @break
                                            @default
                                                
                                        @endswitch
                                        
                                    </td>
                                    <td>
                                        <button 
                                            @switch($settlement->status)
                                                @case('waiting')
                                                    class="btn btn-xs btn-primary" title="request"
                                                    @break
                                                
                                                @case('paid')
                                                    class="btn btn-xs btn-success" title="paid"
                                                    @break
                                                @case('cancelled')
                                                    class="btn btn-xs btn-danger" title="cancelled"
                                                    @break
                                                @default
                                                
                                            @endswitch
                                            
                                            data-toggle="modal" data-target="#status{{$settlement->id}}">
                                            @switch($settlement->status)
                                                @case('waiting')
                                                <i class="fa fa-bar"></i> 
                                                    @break
                                                
                                                @case('paid')
                                                <i class="fa fa-check"></i> 
                                                    @break
                                                @case('cancelled')
                                                <i class="fa fa-times"></i> 
                                                    @break
                                                @default
                                                
                                            @endswitch
                                            
                                        </button>
                                        <div class="modal fade" id="status{{$settlement->id}}" tabindex="-1" role="dialog" aria-labelledby="status{{$settlement->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel"> 
                                                            Manage Settlements</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <form class="needs-validation" action="{{route('admin.payment.settlements')}}" method="POST" enctype="multipart/form-data">@csrf
                                                        <div class="modal-body">
                                                            <h5>Are you sure you want to @if($settlement->approved) Disapprove @else Approve  @endif product: <br>{{$settlement->name}} </h5>
                                                            <input type="hidden" name="product_id" value="{{$settlement->id}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger" type="submit">Yes, @if($settlement->approved) Disapproved @else Approved @endif</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        No Settlements
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
