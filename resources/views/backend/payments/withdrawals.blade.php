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
                    <h3>Withdrawals
                        <small>Swivas Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Payment</li>
                    <li class="breadcrumb-item active">Withdrawals</li>
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
                    <h5>Manage Withdrawals</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display table" id="basic-1">
                        <thead>
                            <tr>
                                <th>Request Date</th>
                                <th>User</th>
                                <th>Amount</th>
                                <th>Account</th>
                                <th>Action</th>
 
            
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($withdrawals as $withdrawal)
                                <tr>
                                    <td>{{$withdrawal->created_at->format('M d,y')}}</td>
                                    <td>@if($withdrawal->withdrawable_type =='App\User') User: @else Shop: @endif <br>{{$withdrawal->withdrawable->name}}</td>
                                    <td>
                                        
                                        @switch($withdrawal->status)
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
                                        N{{$withdrawal->amount}} 
                                    </td>
                                    <td>
                                        {{$withdrawal->bank->name}} -<br> {{$withdrawal->account_name}}
                                         <br>{{$withdrawal->account_number}}
                                       
                                    </td>
                                    
                                    <td>
                                        
                                        
                                        @if($withdrawal->status == 'waiting')
                                        <button class="btn btn-sm btn-info withdrawalpaid" title="request" data-toggle="modal" data-target="#status{{$withdrawal->id}}"><i class="fa fa-check"></i>  Mark Paid </button>
                                        <button class="btn btn-sm btn-warning m-1 withdrawalcancelled" title="request" data-toggle="modal" data-target="#status{{$withdrawal->id}}"><i class="fa fa-times"></i>   Cancel </button>
                                        @endif
                                        @if($withdrawal->status == 'paid')
                                        <span class="badge badge-success">Paid on {{$withdrawal->updated_at->format('M d')}}</span>
                                        @endif
                                            
                                        
                                        <div class="modal fade" id="status{{$withdrawal->id}}" tabindex="-1" role="dialog" aria-labelledby="status{{$withdrawal->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel"> 
                                                            Manage Withdrawals</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <form class="needs-validation" action="{{route('admin.withdrawal.response')}}" method="POST" enctype="multipart/form-data">@csrf
                                                        <div class="modal-body">
                                                            <h5>Are you sure you <span id="withdrawal_response"></span></h5>
                                                            <input type="hidden" name="withdrawal_id" value="{{$withdrawal->id}}">
                                                            <input type="hidden" name="status" id="withdrawal_status">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger" type="submit">Yes</button>
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
                                        No Withdrawals
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
<script>
    $('.withdrawalpaid').on('click',function(){
        $('#withdrawal_status').val('paid');
        $('#withdrawal_response').text('have paid this request');
    })
    $('.withdrawalcancelled').on('click',function(){
        $('#withdrawal_status').val('cancelled');
        $('#withdrawal_response').text('want to cancel this request');
    })
</script>
@endpush
