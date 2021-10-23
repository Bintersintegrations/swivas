<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function cart(){
        return view('frontend.outside.sale.cart');
    }
    public function checkout(Request $request){
        //dd($request->all());
        $total = 0;
        for($i = 0; $i < count($request->variant) ; $i++){
            $product = Product::find($request->variant[$i]);
            $checkout[] = array('product'=> $product,"quantity" => $request->quantity[$i]);
            $total+= $product->amount * $request->quantity[$i];
        }
        //dd($checkout);
        return view('frontend.outside.sale.checkout',compact('checkout','total'));
    }

    public function wishlist(){
        return view('frontend.outside.sale.wishlist');
    }
    public function orders(){
        dd('hold');
    }

}
