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
        $this->middleware('auth')->only(['checkout','orders','orderDetails']);
    }
    
    public function cart(){
        $cart = request()->session()->get('cart');
        $order = $this->getOrder();  //subtotal, vat, vat_percent, grandtotal
        // dd($order);
        return view('frontend.outside.sale.cart',compact('cart','order'));
    }
    
    public function checkout(Request $request){
        // dd($request->all());
        
        $subtotal = 0;
        $checkout = [];
        $currency = Cache::get(request()->ip())['currency_symbol'];
        if($request->input('items')){
            for($i = 0; $i < count($request->items) ; $i++){
                $item = json_decode($request->items[$i]);
                $product = Product::find($item->id);
                $checkout[] = array('product'=> $product,"quantity" => $item->quantity,'price'=> $product->amount);
                $subtotal+= $product->amount * $item->quantity;
            }
        }else{
            $cart = request()->session()->get('cart');
            foreach($cart as $item){
                $checkout[] = array('product'=> $item['product'],"quantity" => $item['quantity'],'price'=> $item['product']->amount);
                $subtotal+= $item['product']->amount * $item['quantity'];
            }
            
        }
        
        $vat = ['value'=> $this->getVat() * $subtotal / 100,'percent'=> $this->getVat()];
        $states = State::where('status',true)->get();
        $cities = City::whereIn('state_id',$states->pluck('id')->toArray())->get();
        return view('frontend.outside.sale.checkout',compact('checkout','subtotal','vat','currency','states','cities'));
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
