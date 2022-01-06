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
                @if($payment->status == 'success')
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    <p>Payment is successfully processsed and your order is ready for pickup</p>
                    <p>Transaction ID:{{$payment->reference}}</p>
                </div>
                @else
                <div class="success-text"><i class="text-danger fa fa-times" aria-hidden="true"></i>
                    <h2>Sorry</h2>
                    <p>Payment for orders has failed. You can re-attempt to make the payment again here</p>
                    <p>Transaction ID:{{$payment->reference}}</p>
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
            <div class="col-lg-7">
                <div class="product-order">
                    <h3 class="mb-5">your order details</h3>
                    @foreach ($payment->orders as $order)
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
                        
                    @endforeach
                    
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span>{{Cache::get(request()->ip())['currency_symbol']}}{{number_format($payment->orders->sum('subtotal'))}}</span></li>
                            {{-- <li>shipping <span>$12.00</span></li> --}}
                            <li>tax(VAT) <span>{{Cache::get(request()->ip())['currency_symbol']}}{{$payment->orders->sum('vat')}}</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>{{Cache::get(request()->ip())['currency_symbol']}}{{number_format($payment->orders->sum('total'))}}</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                @if($payment->status == 'success')
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>Order</h4>
                        <ul class="order-detail">
                            <li>Shop: Jendor Supermarket</li>
                            <li>order ID: 5563853658932</li>
                            <li>Order Date: October 22, 2018</li>
                            <li>Order Total: $907.28</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>Pick Up Address & Time</h4>
                        <ul class="order-detail">
                            <li>gerg harvell</li>
                            <li>568, suite ave.</li>
                            <li>Yaba, 235153</li>
                            <li>Contact No. 987456321</li>
                            <li>Pickup Date: Friday 6th Dec , 4:00PM</li>
                        </ul>
                    </div>
                    
                </div>
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>Order</h4>
                        <ul class="order-detail">
                            <li>order ID: 5563853658932</li>
                            <li>Order Date: October 22, 2018</li>
                            <li>Order Total: $907.28</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4>Pick Up Address & Time</h4>
                        <ul class="order-detail">
                            <li>gerg harvell</li>
                            <li>568, suite ave.</li>
                            <li>Agege, Lagos</li>
                            <li>Pickup Date: Friday 6th Dec , 4:00PM</li>
                        </ul>
                    </div>
                    
                </div>
                @else
                <div class="row order-success-sec">
                    <div class="col-sm-12">
                        
                        <form action="{{route('pay')}}" method="POST">@csrf
                            <input type="hidden" name="payment_id" value="{{$payment->id}}">
                            <div class="payment-box">
                                <div class="upper-box">
                                    <div class="payment-options">
                                        <ul>
                                            <li><h3>RETRY</h3></li>
                                            @if(Auth::user()->wallet > $payment->amount)
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-option" value="points" id="payment-1" @if(Auth::user()->wallet >= $subtotal) checked @endif>
                                                    <label for="payment-1">Pay with Point
                                                        <span class="small d-block">Balance:  {{Auth::user()->wallet}}  </span>
                                                    </label>
                                                </div>
                                            </li>
                                            @endif
                                            <li>
                                                <div class="radio-option">
                                                    <input type="radio" name="payment-option" value="online" id="payment-2" @if(Auth::user()->wallet < $payment->amount) checked @endif>
                                                    <label for="payment-2">Pay Online 
                                                        <span class="small d-block">You will have the option to use card, bank transfer, ussd </span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                @foreach ($payment->orders as $order)
                                    @foreach ($order->details as $detail)
                                     <input type="hidden" name="items[]" id="product{{$detail->product_id}}" value="{{ json_encode( $array = ['id' => $detail->product_id,'quantity'=> $detail->quantity,'price'=> $detail->unit_price,'amount'=> $detail->quantity * $detail->unit_price,'shop_id'=> $detail->order->shop_id ] ) }}" >
                                    @endforeach
                                @endforeach
                                    
                                <div class="text-left">
                                    <button type="submit" class="btn-solid btn">Pay Now</button>  
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
@endsection
@push('scripts')
    
@endpush