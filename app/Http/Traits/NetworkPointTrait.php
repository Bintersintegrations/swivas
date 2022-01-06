<?php
namespace App\Http\Traits;
use App\Payment;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\NetworkPointTrait;

trait NetworkPointTrait
{

    protected function pointPayment(Payment $payment){
        $user = Auth::user();
        $response = true;
        if($user->wallet >= $payment->amount){
            $user->wallet = $user->wallet - $payment->amount;
            $user->save();
            $payment->method = 'Network Points';
            $payment->status = 'success';
            $payment->save();
            return true;
        }
        else return false;
    }

    
   
}