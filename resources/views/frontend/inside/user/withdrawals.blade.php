@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>withdrawals</h3>
                                    <a href="#" data-toggle="modal" data-target="#asktowithdrawal" class="btn btn-sm btn-solid">request withdrawal</a>
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">date requested</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">account details</th>
                                            <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($withdrawals as $withdrawal)
                                        <tr>
                                            <td>{{$withdrawal->created_at->format('d M')}}</td>
                                            <td>{{$withdrawal->amount}}</td>
                                            <td>{{$withdrawal->account}}</td>
                                            <td>{{$withdrawal->status}}</td>
                                        </tr>
                                        @empty
                                        <tr><td colspan="4">No withdrawals</td></tr>
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
<!-- Modal start -->
<div class="modal logout-modal fade" id="asktowithdrawal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request Withdrawal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">@csrf
                    <div class="form-group">
                        <input type="number" class="form-control" name="amount" id="amount">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <a href="#" class="btn btn-solid btn-custom">Submit</a>
                        <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
                
            </div>
            <div class="modal-footer">
                
                
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
@endsection

@push('scripts')
    
@endpush