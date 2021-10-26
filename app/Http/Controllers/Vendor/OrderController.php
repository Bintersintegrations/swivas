<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function list(){
        return view('frontend.inside.shop.order.purchase');
    }
}
