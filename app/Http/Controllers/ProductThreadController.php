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
        // dd(request()->query());
        if(Auth::check()){
            $state_id = Auth::user()->state_id;
            
        }else{
            $info = Cache::get(request()->ip());
            $state_id = $info['state_id'];
        }
        $per_page = (request()->query() && request()->query('per_page')) ?? 24;
        $products = Product::whereHas('shop', function ($query) use($state_id) {
            $query->where('state_id', $state_id);
        })->paginate($per_page);
        // $products = Product::all();
        // dd($products);
        if(request()->query() && request()->query('categories')){
            $cats = request()->query('categories');
            // $products = $products->whereIn('categories', request()->query('categories'));
            $products = $products->filter(function($value) use($cats){ 
                return count(array_intersect($value->categories, $cats)); 
            });
        }
        if(request()->query() && request()->query('price')){
            $products = $products->whereBetween('price', explode(';',request()->query('price')));
        }
        $price['max'] = $products->max('price');
        $price['min'] = $products->min('price');
        
        $category_ids = $products->pluck('categories')->collapse()->unique()->toArray();
        $categories = Category::whereIn('id',$category_ids)->get();
        // dd($products);
        return view('frontend.outside.product.list',compact('products','categories','price'));
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
