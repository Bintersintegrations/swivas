@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3>
                            </div>
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
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    {{-- {{dd($checkout)}} --}}
                                    <ul class="qty">
                                        @foreach($checkout as $variation)
                                            <li>{{$variation['product']->name}} × {{$variation['quantity']}} <span>{{$currency}}{{$variation['price'] * $variation['quantity']}}</span></li>
                                        @endforeach
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">{{$currency.''.$total}}</span></li>
                                        
                                        <li>
                                            <h5>Delivery</h5>
                                            <div class="shopping-option">
                                                <div class="d-inline">
                                                    <input type="radio" name="delivery" id="self-pickup">
                                                    <label for="self-pickup">Self Pickup</label>
                                                </div>
                                                <span class="count">0</span>
                                            </div>
                                            <div class="shopping-option">
                                                <div class="d-inline">
                                                    <input type="radio" name="delivery" id="home-delivery">
                                                    <label for="home-delivery">Home Delivery</label>
                                                </div>
                                                <span class="count">0</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">{{$currency.''.$total}}</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>Payment Options</li>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-1" checked="checked">
                                                        <label for="payment-1">Bank Transfer
                                                            {{-- <span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State /
                                                                County, Store Postcode.
                                                            </span> --}}
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2">
                                                        <label for="payment-2">Pay with 
                                                            
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="#" class="btn-solid btn">Place Order</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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