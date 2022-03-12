<?php

namespace App\Http\Controllers\Backend;

use App\Withdrawal;
use App\Settlement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentManagementController extends Controller
{
    public function transactions(){
        return view('backend.payments.transactions');
    }
    public function settlements(){
        $settlements = Settlement::orderBy('created_at','desc')->get();
        return view('backend.payments.settlements',compact('settlements'));
    }
    public function withdrawals(){
        $withdrawals = Withdrawal::orderBy('created_at','desc')->get();
        return view('backend.payments.withdrawals',compact('withdrawals'));
    }

    public function withdrawal_response(Request $request){
        $withdrawal = Withdrawal::find($request->withdrawal_id);
        $withdrawal->status = $request->status;
        $withdrawal->save();
        return redirect()->back();
    }
}
