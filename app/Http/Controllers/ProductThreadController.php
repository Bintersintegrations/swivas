<?php

namespace App\Http\Controllers;

use App\Product;
use App\Atribute;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Traits\CartTrait;
use App\Http\Traits\WishlistTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ProductThreadController extends Controller
{
    use CartTrait,WishlistTrait;
    
    public function list(){
        // if(Auth::check()){
        //     $state_id = Auth::user()->state_id;
            
        // }else{
        //     $info = Cache::get(request()->ip());
        //     $state_id = $info['state_id'];
        // } 
        // $products = Product::whereHas('shop', function ($query) use($state_id) {
        //     $query->where('state_id', $state_id);
        // })->get();
        $products = Product::all();
        $category_ids = $products->pluck('categories')->collapse()->unique()->toArray();
        $categories = Category::whereIn('id',$category_ids)->get();
        return view('frontend.outside.product.list',compact('products','categories'));
    }

    public function view(Product $product){
        // dd($product);
        $atributes = Atribute::all();
        // dd($options);
        // dd(array_unique($atributes['color']));
        // $item['productid']= ['color','size']
        return view('frontend.outside.product.view',compact('product','atributes'));
    }

    public function addtocart(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $cart = $this->addToCartSession($product);
        if(Auth::check())
        $this->addToCartDb($product);
        return response()->json(['cart_count'=> count((array)$cart),'cart'=> $cart],200);
    }

    public function removefromcart(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $cart = $this->removeFromCartSession($product);
        if(Auth::check())
        $this->removeFromCartDb($product);
        return response()->json(['cart_count'=> count((array)$cart),'cart'=> $cart],200);
    }

    public function addtowish(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $wish = $this->addWishlist($product);
        return response()->json(['wish_count'=> $wish],200);
    }

    public function removefromwish(Request $request){
        $product = Product::find($request->product_id);
        if(!$product)
        abort(404);
        $wish = $this->removeWishlist($product);
        return response()->json(['wish_count'=> $wish],200);
    }
    
}
