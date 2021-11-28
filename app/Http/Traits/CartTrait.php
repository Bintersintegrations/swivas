<?php
namespace App\Http\Traits;
use App\Cart;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use App\Http\Traits\OrderTrait;
use Illuminate\Support\Facades\Auth;

trait CartTrait
{
    use OrderTrait;
    protected function addToCartSession(Product $product){
        $cart = request()->session()->get('cart');
        // if cart is empty then this is the first product
        if(!$cart) {
            $cart = [
                    $product->id => [
                        "name" => $product->name,
                        "quantity" => request()->quantity ? request()->quantity :1,
                        "amount" => $product->onSale() ? $product->sale_price : $product->price,
                        "image" => $product->images[0]
                    ]
            ];
            request()->session()->put('cart', $cart);
        }else{
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$product->id])) {
                $cart[$product->id]['quantity']++;
                request()->session()->put('cart', $cart);
            }else{
                // if item not exist in cart then add to cart with quantity = 1
                $cart[$product->id] = [
                    "name" => $product->name,
                    "quantity" => request()->quantity ? request()->quantity : 1,
                    "amount" => $product->onSale() ? $product->sale_price : $product->price,
                    "image" => $product->images[0]
                ];
                request()->session()->put('cart', $cart);
            }
        }
        return $cart;
    }


    protected function removeFromCartSession(Product $product){
        $oldcart = request()->session()->get('cart');
        $cart = Arr::except($oldcart, ["$product->id"]);
        request()->session()->put('cart', $cart);
        return $cart;
    }

    protected function addToCartDb(Product $product){
        $user = Auth::user();
        $dbcart = Cart::firstOrNew(['user_id' => $user->id,'product_id' => $product->id]);
        $dbcart->quantity = $dbcart->quantity + 1;
        $dbcart->save();
    }
    
    protected function removeFromCartDb(Product $product){
        $user = Auth::user();
        $dbcart = Cart::where('user_id',$user->id)->where('product_id',$product->id)->delete();
    }
}

