<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentManagementController extends Controller
{
    public function transactions(){
        return view('backend.payments.transactions');
    }
    public function withdrawals(){
        return view('backend.payments.withdrawals.completed');
    }
    public function withdrawal_request(){
        return view('backend.payments.withdrawals.requests');
    }
    public function withdrawal_response(Request $request){
        return redirect()->back();
    }
}
