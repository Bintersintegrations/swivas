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
                                    <h3>orders</h3>
                                    <a href="#" class="btn btn-sm btn-solid">add product</a>
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">order id</th>
                                            <th scope="col">order date</th>
                                            <th scope="col">no of items</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($shop->orders->where('status','!=','pending_payment') as $order)
                                        <tr>
                                            <th scope="row"><a href="{{route('shop.order.view',[$shop,$order])}}">#{{$order->id}}</a></th>
                                            <td>{{$order->created_at->format('d M')}}</td>
                                            <td>{{$order->details->count()}}</td>
                                            <td>{{$order->subtotal}}</td>
                                            <td>{{$order->status}}</td>
                                           
                                            
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
    <!-- dare picker js -->
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <!-- chart js -->
    <script src="{{asset('assets/js/chart/apex/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex/custom-chart.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endpush