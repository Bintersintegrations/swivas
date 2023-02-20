<?php
namespace App\Http\Traits;
use App\Payment;
use Illuminate\Support\Facades\Auth;

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