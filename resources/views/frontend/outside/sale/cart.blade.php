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
                                <tr class="item" data-price="{{$item['product']->amount}}" data-amount="{{$item['product']->amount * $item['quantity']}}" data-qty="{{$item['quantity']}}">
                                    <td>
                                        <a href="{{route('product.view',$item['product'])}}"><img src="{{$item['product']->images[0]}}" alt=""></a>
                                    </td>
                                    <td><a href="{{route('product.view',$item['product'])}}">{{$item['product']->name}}</a>
                                        <div class="mobile-cart-content row">
                                            <div class="col-xs-3">
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <input type="text" name="quantity" class="form-control input-number quantity"
                                                            value="{{$item['quantity']}}" slug="product{{$item['product']->id}}">
                                                        
                                                    </div>
                                                </div><span class="text-danger">@if($item['product']->quantity) {{$item['product']->quantity}} remaining @else Out of Stock @endif</span>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color">{{Cache::get(request()->ip())['currency_symbol']}}{{$item['product']->amount}}</h2>
                                            </div>
                                            <div class="col-xs-3">
                                                <h2 class="td-color"><a href="javascript:void(0)" class="icon remove-from-cart" data-item_id="{{$item['product']->id}}" data-slug="product{{$item['product']->id}}"><i class="ti-close"></i></a>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2>{{Cache::get(request()->ip())['currency_symbol']}}{{$item['product']->amount}}</h2>
                                    </td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number quantity"
                                                    value="{{$item['quantity']}}" slug="product{{$item['product']->id}}">
                                            </div>
                                        </div>
                                        <span class="text-danger">@if($item['product']->quantity) {{$item['product']->quantity}} remaining @else Out of Stock @endif</span>
                                    </td>
                                    <td>
                                        <h2 class="td-color" >{{Cache::get(request()->ip())['currency_symbol']}} <span class="total" data-slug="product{{$item['product']->id}}">{{$item['product']->amount * $item['quantity']}}</span></h2>
                                    </td>
                                    <td><a href="javascript:void(0)" class="icon remove-from-cart" data-item_id="{{$item['product']->id}}" data-slug="product{{$item['product']->id}}"><i class="ti-close"></i></a></td>
                                    
                                </tr>
                            @endforeach 
                        @else
                            <tr><td colspan="6">No Items in your cart</td></tr>
                        @endif
                    </tbody>
                    
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h2>{{Cache::get(request()->ip())['currency_symbol']}}<span class="subtotal">{{number_format($order['subtotal'])}}</span></h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="{{route('products')}}" class="btn btn-solid">continue shopping</a></div>

            <div class="col-6">
                {{-- <a href="#" class="btn btn-solid">check out</a> --}}
                <form action="{{route('checkout')}}" class="d-inline" method="POST">
                    @csrf
                    <input type="hidden" name="grandtotal" id="grandtotal" value="{{$order['grandtotal']}}">
                    <input type="hidden" name="subtotal" id="subtotal" value="{{$order['subtotal']}}">
                    <input type="hidden" name="vat" id="vat" value="{{$order['vat']}}">
                    <input type="hidden" name="vat_percent" id="vat_percent" value="{{$order['vat_percent']}}">
                    @if($cart)
                        @foreach($cart as $id => $item)
                            <input type="hidden" name="items[]" id="product{{$item['product']->id}}" value="{{ json_encode( $array = ['id' => $id,'quantity'=> $item['quantity'] ]  ) }}" >
                        @endforeach
                        <button type="submit" class="btn btn-solid">checkout</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>
<!--section end-->
@endsection
@push('scripts')
<script>
    function grandtotal(){
        var subtotal = $('#subtotal').val();
        var vat = $('#vat').val();
        // var discount = $('#discount').val();
        var grandtotal = 0;
        // grandtotal = parseInt(subtotal) + parseInt(vat) + parseInt(discount);
        grandtotal = parseInt(subtotal) + parseInt(vat);
        $('.grandtotal').html(grandtotal);
        $('#grandtotal').val(grandtotal);
    }
    function subtotal(){
        var subtotal = 0;
        var cart_count = 0
        $('.item').each(function(index){
            subtotal += parseInt($(this).attr('data-amount'));
            cart_count += parseInt($(this).attr('data-qty'));
        });
        $('.subtotal').html(subtotal);
        $('#subtotal').val(subtotal);
        $('.cart_count').html(cart_count);
    }
    function vat(){
        var subtotal = $('#subtotal').val();
        var vat_percent = $('#vat_percent').val();
        var vat = vat_percent/100 *subtotal;
        $('#vat').val(vat)
    }
    
    $(document).on('input','.quantity',function(){
        var qty = $(this).val(); //get the quantity
        var slug = $(this).attr('slug'); //get slug of the quantities 
        $('input[slug="'+slug+'"]').val(qty); //give quantity to all quantity input box
        $(this).closest('tr').attr('data-qty',qty); //place the quantity on the item row attribute
        var input = $('input[id="'+slug+'"]').val(); //get input of item
        input = JSON.parse(input);
        input.quantity = qty; //replace quantity in the input
        $('input[id="'+slug+'"]').val(JSON.stringify(input)); // return the new input
        var amount = parseInt($(this).closest('tr').attr('data-price')) * parseInt(qty); //calculate new amount
        $(this).closest('tr').attr('data-amount',amount); //place the amount on the item row attribute
        $('.total[data-slug="'+slug+'"]').html(amount); //place the amount on the item row
        subtotal();
        vat();
        grandtotal();
    })

</script>
<script>
    $(document).on('click','.remove-from-cart',function(){
        var item_id = parseInt($(this).attr('data-item_id'));
        var clicked = $(this).closest('tr');
        var slug = $(this).attr('data-slug');
        $.ajax({
            type:'POST',
            dataType: 'json',
            url: "{{route('product.removefromcart')}}",
            data:{
                '_token' : $('meta[name="csrf-token"]').attr('content'),
                'product_id': item_id,
            },
            success:function(data) {
                $('.cart_qty_cls').html(data.cart_count);
                $('.cart_qty_cls,.shopping-cart').show();
                var cart_total = 0;
                var listing;
                $('#shopping_list').html('');
                $.each( data.cart, function( key, value ) {
                    listing =  `<li id="cartlist`+key+`">
                                    <div class="media">
                                        <a href="#">
                                            <img alt="" class="mr-3"
                                                src="`+value.product.images[0]+`">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>`+value.product.name+`</h4>
                                            </a>
                                            <h4><span>`+value['quantity']+` x `+value['amount']+`</span></h4>
                                        </div>
                                    </div>
                                    <div class="close-circle">
                                        <a href="javascript:void(0)" class="remove-from-cart" data-product="`+key+`product"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </li>`;
                    cart_total += parseInt(value['quantity']) * parseInt(value['amount']);
                    $('#shopping_list').prepend(listing);
                });
                $('#cart_total').html(cart_total);
                //remove product from html
                clicked.remove();
                //remove product from input
                $('input[id="'+slug+'"]').remove();
                subtotal();
                vat();
                grandtotal();
            },
            error: function (data, textStatus, errorThrown) {
            console.log(data);
            },
        });
    });
</script>
@endpush