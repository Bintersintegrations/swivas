@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">           
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="checkout-title">
                            <h3>Billing Details</h3>
                        </div>
                        <form id="billing-form" action="#">
                            <div class="row check-out">
                            
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last Name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country</div>
                                    <select>
                                        <option>India</option>
                                        <option>South Africa</option>
                                        <option>United State</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address</div>
                                    <input type="text" name="field-name" value="" placeholder="Street address">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Town/City</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">State / County</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <div class="field-label">Postal Code</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                    <label for="account-option">Create An Account?</label>
                                </div>
                            
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="checkout-details">
                            <div class="order-box">
                                <div class="title-box">
                                    <div>Product <span>Total</span></div>
                                </div>
                                {{-- {{dd($checkout)}} --}}
                                <ul class="qty">
                                    @foreach($cart as $item)
                                        <li>{{$item['product']->name}} × {{$item['quantity']}} <span>{{$currency}}{{number_format($item['amount'] * $item['quantity'])}}</span></li>
                                    @endforeach
                                </ul>
                                <ul class="sub-total">
                                    <li>Subtotal <span class="count">{{$currency.''.number_format($subtotal)}}</span></li>
                                    <li>Vat: ( {{$vat['percent']}} %) <span class="count">{{$currency.''.number_format($vat['value'])}}</span></li>
                                    
                                    <li>
                                        <h5>Delivery</h5>
                                        <div class="shopping-option">
                                            <div class="d-inline">
                                                <input type="radio" name="delivery" id="self-pickup">
                                                <label for="self-pickup">Self Pickup</label>
                                            </div>
                                            <span class="count">0</span>
                                        </div>
                                        {{-- <div class="shopping-option">
                                            <div class="d-inline">
                                                <input type="radio" name="delivery" id="home-delivery">
                                                <label for="home-delivery">Home Delivery</label>
                                            </div>
                                            <span class="count">0</span>
                                        </div> --}}
                                    </li>
                                </ul>
                                <ul class="total">
                                    <li>Total <span class="count">{{$currency.''.number_format($subtotal + $vat['value'])}}</span></li>
                                </ul>
                            </div>
                            <form action="{{route('pay')}}" method="POST">@csrf
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li><h3>Payment Options</h3></li>
                                                @if(Auth::user()->wallet >= ($subtotal + $vat['value']))
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-option" value="points" id="payment-1" @if(Auth::user()->wallet >= ($subtotal + $vat['value'])) checked @else disabled @endif>
                                                        <label for="payment-1">Pay with Point
                                                            <span class="small d-block">Balance:  {{Auth::user()->wallet}}  </span>
                                                        </label>
                                                    </div>
                                                </li>
                                                @endif
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-option" value="online" id="payment-2" @if(Auth::user()->wallet < $subtotal) checked @endif>
                                                        <label for="payment-2">Pay Online 
                                                            <span class="small d-block">You will have the option to use card, bank transfer, ussd </span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    @foreach($cart as $item)
                                        <input type="hidden" name="items[]" id="product{{$item['product']->id}}" value="{{ json_encode( $array = ['id' => $item['product']->id,'quantity'=> $item['quantity'],'price'=> $item['product']->amount,'amount'=> $item['quantity'] * $item['product']->amount,'shop_id'=> $item['product']->shop->id ] ) }}" >
                                    @endforeach
                                        <input type="hidden" name="discount" value="0">
                                        <input type="hidden" name="vat" value="{{$vat['value']}}">
                                    <div class="text-right">
                                        <button type="submit" class="btn-solid btn">Place Order</button>  
                                    </div>
                                </div>
                            </form>
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
<script type='text/javascript'>
    
</script> 
@endpush