@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>Withdrawals</h3>
                                    <a data-toggle="modal" data-original-title="test" data-target="#exampleModal" class="btn btn-sm btn-solid">request withdrawal</a>
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">withdrawal id</th>
                                            <th scope="col">withdrawal date</th>
                                            <th scope="col">bank details</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($shop->withdrawals as $withdrawal)
                                        <tr>
                                            <th scope="row"><a href="#">#{{$withdrawal->id}}</a></th>
                                            <td>{{$withdrawal->created_at->format('d M')}}</td>
                                            <td>{{$withdrawal->bank->name.' '.$withdrawal->account_name.' '.$withdrawal->account_number}}</td>
                                            <td>{{$withdrawal->currency}} {{$withdrawal->amount}}</td>
                                            <td>{{$withdrawal->status}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5">No withdrawals</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Request Withdrawal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form class="needs-validation" action="{{route('admin.atributes.save')}}" method="POST">@csrf
                <div class="modal-body">
                    <div class="form">
                        <div class="form-group mb-2">
                            <label for="atribute_name" class="mb-1">Amount</label>
                            <input class="form-control" id="atribute_name" type="number" name="amount" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="label" class="mb-1">Bank :</label>
                            <select class="form-control" id="element" name="bank" required>
                                @foreach ($banks as $bank)
                                    <option value="{{$bank->id}}">{{$bank->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="account_number" class="mb-1">Account number</label>
                            <input class="form-control" id="account_number" type="text" name="account_number" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="account_name" class="mb-1">Account name</label>
                            <input class="form-control" id="account_name" type="text" name="account_name" required>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
@endpush