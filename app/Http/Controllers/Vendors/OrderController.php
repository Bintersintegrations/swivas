<?php

namespace App\Http\Controllers\Vendors;

use App\Shop;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function list(Shop $shop){
        return view('frontend.inside.shop.order.list',compact('shop'));
    }

    public function view(Shop $shop,Order $order){ 

        return view('frontend.inside.shop.order.details',compact('shop','order'));
    }

    public function status(Order $order,Request $request){
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }

}
