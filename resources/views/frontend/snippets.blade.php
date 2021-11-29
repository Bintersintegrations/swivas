<script>
$(document).on('click','.remove-from-cart',function(){
    var product_id = parseInt($(this).attr('data-product'));
    $.ajax({
        type:'POST',
        dataType: 'json',
        url: "{{route('product.removefromcart')}}",
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
        },
        error: function (data, textStatus, errorThrown) {
        console.log(data);
        },
    });
});
</script>