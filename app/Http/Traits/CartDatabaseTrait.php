<?php
namespace App\Http\Traits;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;

trait CartDatabaseTrait
{
    protected function addProductToCartDb(Product $product){
        $user = Auth::user();
        $dbcart = Cart::firstOrNew(['user_id' => $user->id,'product_id' => $product->id]);
        $dbcart->quantity = $dbcart->quantity + 1;
        $dbcart->save();
    }
    
    protected function removeProductFromCartDb(Product $product){
        $user = Auth::user();
        $dbcart = Cart::where('user_id',$user->id)->where('product_id',$product->id)->delete();
    }
}

