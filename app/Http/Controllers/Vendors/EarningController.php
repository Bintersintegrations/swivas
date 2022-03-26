<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bank;
use App\Withdrawal;
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
        $withdrawal = new Withdrawal;
        $withdrawal->withdrawable_id = $shop->id;
        $withdrawal->withdrawable_type = "App\Shop";
        $withdrawal->currency = $shop->country->currency_iso;
        $withdrawal->amount = $request->amount;
        $withdrawal->bank_id = $request->bank_id;
        $withdrawal->account_number = $request->account_number;
        $withdrawal->account_name = $request->account_name;
        $withdrawal->save();
        return redirect()->back();
    }
}
