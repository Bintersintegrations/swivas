<?php

namespace App\Http\Controllers;

use App\City;
use App\Order;
use App\State;
use App\Review;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Traits\CartTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;


class SalesController extends Controller
{
    use CartTrait;

    public function __construct(){
        $this->middleware('auth')->only(['checkout','orders','orderDetails']);
    }
    
    public function cart(){
        $cart = request()->session()->get('cart');
        $order = $this->getOrder();  //subtotal, vat, vat_percent, grandtotal
        // dd($order);
        return view('frontend.outside.sale.cart',compact('cart','order'));
    }
    
    public function checkout(){
        // dd(request()->all());
        // $subtotal = 0;
        // $checkout = [];
        // dd($request->input('items'));
        if(request()->input('items')){
            foreach(request()->items as $items){
                $item = json_decode($items);
                $product = Product::find($item->id);
                $cart = $this->addToCartSession($product,$item->quantity,true);
                if(Auth::check())
                $this->addToCartDb($product,$item->quantity,true);
                // $checkout[] = array('product'=> $product,"quantity" => $item->quantity,'price'=> $product->amount);
                // $subtotal+= $product->amount * $item->quantity; 
            }
        }
        else{
            $cart = request()->session()->get('cart');
        }
        $subtotal = $this->getSubtotal($cart);
        $vat = ['value'=> $this->getVat() * $subtotal / 100,'percent'=> $this->getVat()];
        $states = State::where('status',true)->get();
        $cities = City::whereIn('state_id',$states->pluck('id')->toArray())->get();
        $currency = Cache::get(request()->ip())['currency_symbol'];
        return view('frontend.outside.sale.checkout',compact('cart','subtotal','vat','currency','states','cities'));
    }

    public function wishlist(){
        return view('frontend.outside.sale.wishlist');
    }
    public function orders(){
        $user = Auth::user();
        $orders = $user->orders;
        return view('frontend.inside.user.orders',compact('orders'));
    }
    public function orderDetails(Order $order){
        return view('frontend.inside.user.orderDetails',compact('order'));
    }
    public function orderStatus(Order $order,Request $request){
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }
    public function review(Order $order,Request $request){
        if($request->product_id == 'all'){
            foreach($order->details as $detail){
                $this->createReview($order->user_id,$request->body,$request->rating,$detail->product->id,$order->id);
            }
        }else{
            $this->createReview($order->user_id,$request->body,$request->rating,$request->product_id,$order->id);
        }
        return redirect()->back();
    }
    public function createReview($user,$body,$rating,$product,$order){
        $review = Review::create(['user_id'=> $user,'body'=> $body,'product_id'=> $product,'order_id'=> $order]);
    }

}
