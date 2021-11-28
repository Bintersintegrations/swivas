@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--section start-->
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($cart) 
                            @foreach ($cart as $item)
                                <tr>
                                    <td>
                                        <a href="#"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                                    </td>
                                    <td><a href="#">cotton shirt</a>
                                        <div class="mobile-cart-content row">
                                            <div class="col-xs-3">
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <input type="text" name="quantity" class="form-control input-number"
                                                            value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color">$63.00</h2>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2>$63.00</h2>
                                    </td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number"
                                                    value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="td-color">$4539.00</h2>
                                    </td>
                                    <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                                    
                                </tr>
                            @endforeach 
                        @else
                            <tr><td colspan="6">No Items in your cart</td></tr>
                        @endif
                    </tbody>
                    {{-- <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                            </td>
                            <td><a href="#">cotton shirt</a>
                                <div class="mobile-cart-content row">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity"
                                                    class="form-control input-number" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$63.00</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                            value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">$4539.00</h2>
                            </td>
                            <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                            
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="../assets/images/pro3/1.jpg" alt=""></a>
                            </td>
                            <td><a href="#">cotton shirt</a>
                                <div class="mobile-cart-content row">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity"
                                                    class="form-control input-number" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$63.00</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                            value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">$4539.00</h2>
                            </td>
                            <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                            
                        </tr>
                    </tbody> --}}
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h2>$6935.00</h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="#" class="btn btn-solid">continue shopping</a></div>

            <div class="col-6">
                {{-- <a href="#" class="btn btn-solid">check out</a> --}}
                <form action="{{route('checkout')}}" class="d-inline" method="POST">
                    @csrf
                    @if($cart)
                        @foreach ($cart as $id => $cart)
                            <input type="hidden" name="variant[]" value="{{$id}}">
                            <input type="hidden" name="quantity[]" value="{{$cart['quantity']}}">
                        @endforeach
                    @endif
                    <button type="submit" class="btn btn-solid">checkout</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--section end-->
@endsection
@push('scripts')
    
@endpush