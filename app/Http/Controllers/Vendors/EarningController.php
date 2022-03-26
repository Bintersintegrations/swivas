<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bank;
use App\Shop;

class EarningController extends Controller
{
    public function transactions(Shop $shop){
        return view('frontend.inside.shop.transactions',compact('shop'));
    }
    public function withdrawals(Shop $shop){
        $banks = Bank::all();
        return view('frontend.inside.shop.withdrawals',compact('shop','banks'));
    }
    public function withdrawal_request(Shop $shop,Request $request){
        return redirect()->back();
    }
}
