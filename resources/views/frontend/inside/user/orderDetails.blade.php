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
                <div class="card dashboard-table">
                    <div class="card-body bg-light">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row order-success-sec p-0">
                                    <div class="col-sm-6">
                                        <h4>Order Details</h4>
                                        <ul class="order-detail">
                                            <li>order ID: {{$order->id}}</li>
                                            <li>Order Date: {{$order->created_at->format('F d, Y')}}</li>
                                            <li>Order Total: {{Auth::user()->'₦'.number_format($order->total)}}</li>
                                            <li>order Status: 
                                                @switch($order->status)
                                                    @case('reported')
                                                            <span class="badge badge-md badge-danger"> {{$order->status}}</span>
                                                        @break
                                                    @case('pending_payment')
                                                        <span class="badge badge-md badge-info"> {{$order->status}}</span>
                                                        @break
                                                    @case('processing')
                                                        <span class="badge badge-md badge-primary"> {{$order->status}}</span>
                                                        @break
                                                    @case('ready')
                                                        <span class="badge badge-md badge-success"> {{$order->status}}</span>
                                                        @break
                                                    @case('completed')
                                                        <span class="badge badge-md badge-dark"> {{$order->status}}</span>
                                                        @break
                                                @endswitch
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4>Payment Details</h4>
                                        <ul class="order-detail">
                                            <li>Amount: {{$order->payment->amount}}</li>
                                            <li>Method: {{$order->payment->method}}</li>
                                            <li>Date: {{$order->payment->created_at->format('d-M-Y')}}</li>
                                            <li>Payment Status: {{$order->payment->status}}</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="delivery-sec">
                                            @if($order->status == 'processing')
                                                <h3>expected date of pickup</h3>
                                                <h2>october 22, 2018</h2>  
                                            @elseif($order->status == 'ready')
                                                <h2>Ready for Pickup</h2>
                                            @elseif($order->status == 'completed')
                                                <h2>Order is Complete</h2>
                                            @elseif($order->status == 'reported')
                                                <h3>A customer care operative will call you shortly. You can also reach us via any of our <a href="{{route('contact')}}">contact channels</a></h3>
                                                <h2>Order Reported</h2> 
                                            @endif
                                        </div>
                                    </div>
                                    @if($order->status == 'ready')
                                    <div class=" col-sm-6">
                                        
                                        <form action="{{route('user.order.status',$order)}}" method="POST" class="mt-4">@csrf
                                            <div class="form-group">
                                                <input type="hidden" name="status" value="completed">
                                                <button type="submit" class="btn btn-primary">Mark Order Received</button>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="status" value="reported">
                                                <button type="submit" class="btn btn-primary">Report Order</button>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                    @if($order->status == 'completed' && $order->reviews->count() < $order->details->count() )
                                    <div class=" col-sm-12">
                                        
                                        <form action="{{route('user.order.review',$order)}}" method="POST" class="mt-4">@csrf
                                            <div class="form-group">
                                                <textarea name="body" class="form-control" placeholder="Give short review"></textarea>
                                            </div>
                                            <div class="input-group">
                                                <select name="product_id" id="" class="form-control">
                                                    <option value="all">All Items</option>
                                                    @foreach ($order->details as $item)
                                                        <option value="{{$item->product->id}}">{{$item->product->name}}</option>
                                                    @endforeach
                                                </select>
                                                <select name="rating" id="" class="form-control">
                                                    <option value="0" disabled selected>Select Rating</option>
                                                    @foreach ($order->details as $item)
                                                        <option value="5">Excellent</option>
                                                        <option value="4">Very Good</option>
                                                        <option value="3">OK</option>
                                                        <option value="2">Bad</option>
                                                        <option value="1">Very Bad</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary">Submit Review</button>
                                            </div>
                                            
                                        </form>
                                        
                                    
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-order">
                                    <h3 class="mt-3">order details</h3>
                                    
                                        @foreach ($order->details as $item)
                                            <div class="row product-order-detail">
                                                <div class="col-3">
                                                    <img src="{{$item->product->images[0]}}" alt=""
                                                        class="img-fluid blur-up lazyload">
                                                </div>
                                                <div class="col-3 order_detail">
                                                    <div>
                                                        <h4>product name</h4>
                                                        <h5>{{$item->product->name}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3 order_detail">
                                                    <div>
                                                        <h4>quantity</h4>
                                                        <h5>{{$item->quantity}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-3 order_detail">
                                                    <div>
                                                        <h4>price</h4>
                                                        <h5>₦{{$item->unit_price}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    
                                    <div class="total-sec">
                                        <ul>
                                            <li>subtotal <span>₦{{number_format($order->subtotal)}}</span></li>
                                            {{-- <li>shipping <span>$12.00</span></li> --}}
                                            <li>tax(VAT) <span>₦{{$order->vat}}</span></li>
                                        </ul>
                                    </div>
                                    <div class="final-total">
                                        <h3>total <span>₦{{number_format($order->total)}}</span></h3>
                                    </div>
                                </div>
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