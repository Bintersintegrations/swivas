@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--section start-->
<section class="wishlist-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">availability</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($wishlists as $wishlist)
                            <tr>
                                <td>
                                    <a href="{{route('product.view',$wishlist->product)}}"><img src="{{$wishlist->product->images[0]}}" alt=""></a>
                                </td>
                                <td><a href="{{route('product.view',$wishlist->product)}}">{{$wishlist->product->name}}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <p>@if($wishlist->product->quantity) in stock @else out of stock @endif</p>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">{{Cache::get(request()->ip())['currency_symbol']}}{{$wishlist->product->amount}}</h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="#" class="icon mr-1"><i class="ti-close"></i>
                                                </a><a href="#" class="cart"><i class="ti-shopping-cart"></i></a></h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2>{{Cache::get(request()->ip())['currency_symbol']}}{{$wishlist->product->amount}}</h2>
                                </td>
                                <td>
                                    <p>@if($wishlist->product->quantity) in stock @else out of stock @endif</p>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="remove-from-wish icon mr-3" data-product="{{$wishlist->product->id}}product"><i class="ti-close"></i> </a>
                                    <a href="javascript:void(0)" class="add-to-cart cart" data-product="{{$wishlist->product->id}}product"><i class="ti-shopping-cart"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5">No saved wishes</td></tr>
                        @endforelse
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
        <div class="row wishlist-buttons">
            <div class="col-12">
                <a href="{{route('products')}}" class="btn btn-solid">continue shopping</a> 
                {{-- <a href="#" class="btn btn-solid">check out</a> --}}
            </div>
        </div>
    </div>
</section>
<!--section end-->

@endsection
@push('scripts')
<script>
    $(document).on('click','.add-to-cart',function(){
        var product_id = parseInt($(this).attr('data-product'));
        $.ajax({
            type:'POST',
            dataType: 'json',
            url: "{{route('product.addtocart')}}",
            data:{
                '_token' : $('meta[name="csrf-token"]').attr('content'),
                'product_id': product_id
            },
            success:function(data) {
                $('.cart_qty_cls').html(data.cart_count);
                $('.cart_qty_cls,.shopping-cart').show();
                var cart_total = 0;
                var listing;
                $('#shopping_list').html('');
                {{-- $.each( data.cart, function( key, value ) {
                    listing =  `<li  id="cartlist`+key+`">
                                    <div class="media">
                                        <a href="#">
                                            <img alt="" class="mr-3"
                                                src="`+value.product.images[0] +`">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>`+value.product.name +`</h4>
                                            </a>
                                            <h4><span>`+value['quantity']+` x `+value['amount'] +`</span></h4>
                                        </div>
                                    </div>
                                    <div class="close-circle">
                                        <a href="javascript:void(0)" class="remove-from-cart" data-product="`+key+`product"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </li>`;
                    cart_total += parseInt(value['quantity']) * parseInt(value['amount']);
                    $('#shopping_list').prepend(listing);
                });
                $('#cart_total').html(cart_total); --}}
            },
            error: function (data, textStatus, errorThrown) {
            console.log(data);
            },
        });
    }); 

    $(document).on('click','.remove-from-wish',function(){
    var product_id = parseInt($(this).attr('data-product'));
    var row = $(this).closest('tr');
        $.ajax({
            type:'POST',
            dataType: 'json',
            url: "{{route('product.removefromwish')}}",
            data:{
                '_token' : $('meta[name="csrf-token"]').attr('content'),
                'product_id': product_id
            },
            success:function(data) {
                $('#wish_counter').html(data.wish_count);
                $('#wish_counter').show();
                row.remove();
            },
            error: function (data, textStatus, errorThrown) {
            console.log(data);
            },
        });
    });
</script>

@endpush