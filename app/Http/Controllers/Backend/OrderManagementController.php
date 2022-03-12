<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Order;
use App\Http\Controllers\Controller;

class OrderManagementController extends Controller
{
    public function listorders(){
        $orders = Order::orderBy('created_at','desc')->get();
        return view('backend.orders.list',compact('orders'));
    }

    public function vieworder(Order $order){
        $shop = $order->shop;
        return view('frontend.inside.shop.order.details',compact('order','shop'));
    }

    public function refunds(){
        return view('backend.orders.refund');
    }
    
}
