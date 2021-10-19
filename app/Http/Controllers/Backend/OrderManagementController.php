<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderManagementController extends Controller
{
    public function listorders(){
        return view('backend.market.orders.list');
    }
    public function vieworder(){
        return view('backend.market.orders.view');
    }
    public function refunds(){
        return view('backend.market.orders.refund');
    }
    
}
