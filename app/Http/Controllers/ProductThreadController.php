<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Giving;
use App\Category;
use App\Product;
use App\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CartSessionTrait;
use Illuminate\Support\Facades\Cache;
use App\Http\Traits\CartDatabaseTrait;
use App\Http\Traits\WishlistSessionTrait;
use App\Http\Traits\WishlistDatabaseTrait;

class ProductThreadController extends Controller
{
    use CartSessionTrait,CartDatabaseTrait,WishlistSessionTrait,WishlistDatabaseTrait;
    
    public function list(){
        $currency = Currency::find(Cache::get(request()->ip())['country_currency']);
        $products = $currency->products;
        $categories = Category::where('grand_id','!=',null)->where('parent_id','!=',null)->get();
        return view('frontend.outside.shop.product.list',compact('products','categories'));
    }

    public function view(Product $product){
        // dd($product->amount);
        $item = $product->item;
        foreach($item->products->where('amount',$product->amount) as $productz){
            foreach($productz->attributes as $attrib){
                $options[$productz->id][] = $attrib->pivot->result;
                $attributes[$attrib->slug][] = $attrib->pivot->result;
            }
        }
        // dd($options);
        // dd(array_unique($attributes['color']));
        // $item['productid']= ['color','size']
        return view('frontend.outside.shop.product.view',compact('product','attributes','options'));
    }

    public function addtocart(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $cart = $this->addProductToCartSession($product);
        if(Auth::check())
        $this->addProductToCartDb($product);
        return response()->json(['cart_count'=> count((array)$cart),'cart'=> $cart],200);
    }

    public function removefromcart(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $cart = $this->removeProductFromCartSession($product);
        if(Auth::check())
        $this->removeProductFromCartDb($product);
        return response()->json(['cart_count'=> count((array)$cart),'cart'=> $cart],200);
    }

    public function addtowish(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $wish = $this->addProductToWishSession($product);
        if(Auth::check())
        $this->addProductToWishDb($product);
        return response()->json(['wish_count'=> count((array)$wish)],200);
    }

    public function cart(){
        return view('frontend.outside.sale.cart');
    }

    public function checkout(){
        return view('frontend.outside.sale.checkout');
    }
    
}
