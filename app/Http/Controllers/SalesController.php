<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Traits\CartTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class SalesController extends Controller
{
    use CartTrait;

    public function __construct(){
        $this->middleware('auth')->only(['orders','orderDetails']);
    }
    
    public function cart(){
        $cart = request()->session()->get('cart');
        $order = $this->getOrder();
        // dd( Cache::get(request()->ip())['currency_symbol']);
        return view('frontend.outside.sale.cart',compact('cart','order'));
    }
    
    public function checkout(Request $request){
        // dd($request->all());
        // $total = 0;
        // $currency = '';
        // for($i = 0; $i < count($request->variant) ; $i++){
        //     $product = Product::find($request->variant[$i]);
        //     $currency = $product->shop->country->currency_symbol;
        //     $price = $product->onSale() ? $product->sale_price : $product->price;
        //     $checkout[] = array('product'=> $product,"quantity" => $request->quantity[$i],'price'=> $price);
        //     $total+= $price * $request->quantity[$i];
        // }
        //dd($checkout);
        $cart = request()->session()->get('cart');
        $order = $this->getOrder();
        $deliveries = $this->getDeliveries();
        $states = State::where('status',true)->get();
        $cities = City::whereIn('state_id',$states->pluck('id')->toArray())->get();
        return view('frontend.outside.sale.checkout',compact('cart','order','deliveries','states','cities'));
        // return view('frontend.outside.sale.checkout',compact('checkout','total','currency'));
    }

    public function wishlist(){
        return view('frontend.outside.sale.wishlist');
    }
    public function orders(){
        return view('frontend.inside.user.orders');
    }
    public function orderDetails(){
        return view('frontend.inside.user.orderDetails');
    }

}
