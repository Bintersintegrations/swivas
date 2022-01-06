use App\Shop;
@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!-- thank-you section start -->
<section class="section-b-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($order->status == 'ready')
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>Order Finished</h2>
                    <p>Thank you for fulfilling this order, the items should be picked up anytime from now. </p>
                    <p>Order ID:{{$order->id}}</p>
                </div>
                @endif
                @if($order->status == 'complete')
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>Order Complete</h2>
                    <p>Congratulations, this order has been completed and the payment has been deposited into your wallet.</p>
                    <p>Order ID:{{$order->id}}</p>
                </div>
                @endif
                @if($order->status == 'processing')
                <div class="success-text"><i class="text-warning fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
                    <h2>Order Processing</h2>
                    <p>Your customer has paid and is waiting for your products. Make sure to wow them to satisfaction</p>
                    <p>Order ID:{{$order->id}}</p>
                </div>
                @endif
                @if($order->status == 'reported')
                <div class="success-text"><i class="text-danger fa fa-warning" aria-hidden="true"></i>
                    <h2>Order Reported</h2>
                    <p>This order has been reported. The management will contact you shortly to solve the outstanding issue</p>
                    <p>Order ID:{{$order->id}}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3 class="mb-5">order details</h3>
                    <h6 class="text-center">From {{$order->shop->name}}</h6>
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
                                        <h5>{{Cache::get(request()->ip())['currency_symbol']}}{{$item->unit_price}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span>{{Cache::get(request()->ip())['currency_symbol']}}{{number_format($order->subtotal)}}</span></li>
                            {{-- <li>shipping <span>$12.00</span></li> --}}
                            <li>tax(VAT) <span>{{Cache::get(request()->ip())['currency_symbol']}}{{$order->vat}}</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>{{Cache::get(request()->ip())['currency_symbol']}}{{number_format($order->total)}}</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>Order Details</h4>
                        <ul class="order-detail">
                            <li>order ID: 5563853658932</li>
                            <li>Order Date: October 22, 2018</li>
                            <li>Order Total: $907.28</li>
                            <li>Number of Items: 7</li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>User Details</h4>
                        <ul class="order-detail">
                            <li>{{$order->user->name}}</li>
                            <li>568, suite ave. Australia, Pub State</li>
                            <li>Contact No. 987456321</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode mt-4">
                        <h4>payment method</h4>
                        <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking
                            acceptance subject to device availability.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                            @if($order->status == 'processing')
                                <h3>expected date of pickup</h3>
                                <h2>october 22, 2018</h2>
                                <div class="row">
                                    <div class="col-8">
                                        <form action="{{route('shop.order.status',[$shop,$order])}}" method="POST">
                                            <div class="input-group">
                                                <select class="form-control" name="status">
                                                    <option selected value="processing">Processing</option>
                                                    <option value="ready">Ready</option>
                                                </select>
                                                <button type="submit" class="btn btn-primary">Change Order Status</button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                    
                                </div>
                                
                            @elseif($order->status == 'ready')
                                <h2>Expecting Customer Pickup</h2>
                            @elseif($order->status == 'completed')
                                <h2>Order has been picked</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection
@push('scripts')
    
@endpush