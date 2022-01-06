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
    protected function addToCartSession(Product $product,$quantity = 1,$update = false){
        $cart = request()->session()->get('cart');
        // if cart is empty then this is the first product
        if(!$cart) {
            $cart = [
                    $product->id => [
                        "product" => $product,
                        "quantity" => $quantity,
                        "amount" => $product->amount,
                    ]
            ];
            request()->session()->put('cart', $cart);
        }else{
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$product->id])) {
                if($update)
                    $cart[$product->id]['quantity'] = $quantity;
                else
                    $cart[$product->id]['quantity'] = $cart[$product->id]['quantity'] + $quantity;
                request()->session()->put('cart', $cart);
            }else{
                // if item not exist in cart then add to cart with quantity = 1
                $cart[$product->id] = [
                    "product" => $product,
                    "quantity" => $quantity,
                    "amount" => $product->amount,
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

    protected function addToCartDb(Product $product,$quantity = 1,$update = false){
        $user = Auth::user();
        $dbcart = Cart::firstOrNew(['user_id' => $user->id,'product_id' => $product->id]);
        if($update)
            $dbcart->quantity = $quantity;
        else 
            $dbcart->quantity = $dbcart->quantity + $quantity;
        $dbcart->save();
    }
    
    protected function removeFromCartDb(Product $product){
        $user = Auth::user();
        $dbcart = Cart::where('user_id',$user->id)->where('product_id',$product->id)->delete();
    }
}

