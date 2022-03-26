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
                                    <h3>Transactions</h3>
                                    {{-- <a href="#" class="btn btn-sm btn-solid">make withdrawal</a> --}}
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order id</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($shop->orders->whereIn('status',['processing','completed','ready']) as $order)
                                        <tr>
                                            <th scope="row"><a href="#">#{{$order->id}}</a></th>
                                            <td>{{$order->updated_at->format('d M')}}</td>
                                            <td>{{$order->currency}} {{$order->subtotal}}</td>
                                            
                                        </tr>
                                        @endforeach
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

@endsection

@push('scripts')
    
@endpush