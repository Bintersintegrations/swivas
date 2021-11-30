<?php

namespace App\Http\Controllers\Vendors;

use Illuminate\Http\Request;
use App\Shop;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function list(Shop $shop){
        return view('frontend.inside.shop.order.list',compact('shop'));
    }
}
