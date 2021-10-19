<?php
namespace App\Http\Traits;
use App\Product;
use Illuminate\Support\Arr;

trait CartSessionTrait
{
    protected function addProductToCartSession(Product $product){
        $cart = request()->session()->get('cart');
        // if cart is empty then this is the first product
        if(!$cart) {
            $cart = [
                    $product->id => [
                        "name" => $product->item->name,
                        "quantity" => request()->quantity ? request()->quantity :1,
                        "amount" => $product->amount,
                        "image" => $product->image->name
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
                    "name" => $product->item->name,
                    "quantity" => request()->quantity ? request()->quantity : 1,
                    "amount" => $product->amount,
                    "image" => $product->image->name
                ];
                request()->session()->put('cart', $cart);
            }
        }
        return $cart;
    }

    protected function removeProductFromCartSession(Product $product){
        $oldcart = request()->session()->get('cart');
        $cart = Arr::except($oldcart, ["$product->id"]);
        request()->session()->put('cart', $cart);
        return $cart;
    }
}

