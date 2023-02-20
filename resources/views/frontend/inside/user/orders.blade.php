@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
<style>
    .select2-container{
        width: 100% !important;
    }
</style>
@endpush
@section('main')
<!-- section start -->
<section class="section-b-space">
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
                                    <h3>My Orders   </h3>
                                    {{-- <a href="#" class="btn btn-sm btn-solid">add product</a> --}}
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Order details</th>
                                            <th scope="col">Shop details</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td scope="row">{{$order->created_at->format('d-M-Y')}}</td>
                                                <th scope="row">
                                                    <a href="{{route('user.order.details',$order)}}">
                                                        #{{$order->id.' - '.$order->details->count().' '.\Illuminate\Support\Str::plural('item',$order->details->count())}}
                                                    </a>
                                                </th>
                                                    
                                                <td>{{$order->shop->name}}</td>
                                                
                                                <td>{{'₦'.number_format($order->total)}}</td>
                                                <td>{{\Illuminate\Support\Str::replaceFirst('_',' ',$order->status)}}</td>
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
<!-- section end -->
@endsection

@push('scripts')

@endpush