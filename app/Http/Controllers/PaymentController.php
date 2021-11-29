<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\FlutterWaveTrait;

class PaymentController extends Controller
{
    use FlutterWaveTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function transactions(){
        $user = Auth::user();
        $user->unreadNotifications->where('type','App\Notifications\PaymentTransactionNotification')->markAsRead();
        $user->unreadNotifications->where('type','App\Notifications\PenaltyChargeNotification')->markAsRead();
        $payments = Payment::where('user_id',$user->id);
        if(request()->query()){
            if(request()->query('currency'))
            $payments = $payments->where('currency_id',request()->query('currency'));
            if(request()->query('type')  != null)
            $payments = $payments->where('type','=',request()->query('type'));
            if(request()->query('status')  != null)
            $payments = $payments->where('status',request()->query('status'));
            if(request()->query('order')  != null)
            $payments = $payments->orderBy('created_at',request()->query('order'));
        }
        $transactions = $payments->get();
        //dd($transactions);
        return view('user.payment.transactions',compact('transactions'));
    }
    public function wallet(){
        $user = Auth::user();
        $user->unreadNotifications->where('type','App\Notifications\FreezeWalletsNotification')->markAsRead();
        $user->unreadNotifications->where('type','App\Notifications\LockedWalletNotification')->markAsRead();
        $user->unreadNotifications->where('type','App\Notifications\SettlementNotification')->markAsRead();
        $charge_set = Setting::where('name','charge_type')->first()->value;
        $currencies = Currency::all();
        $wallets = Wallet::where('user_id',$user->id)->get();
        $enable_withdrawal = Setting::where('name','enable_wallet_withdrawal')->first()->value;
        $enable_upload = Setting::where('name','enable_wallet_deposit')->first()->value;
        return view('user.payment.wallet',compact('charge_set','currencies','wallets','enable_withdrawal','enable_upload'));
    }

    public function status(){
        $trans_id = 'query_from url';
        $payment = Payment::where('reference',$trans_id)->first();
        $response = $this->verifyPayment($trans_id);
        // if($response->status == 'success' && currency is && amount is )
        // mark payment successful
        // else mark payment failed
        return view('user.payment.status');
    }

    public function pay(Request $request){
        //create order
        $order = Order::create();
        // $payment = Payment::create(['user_id'=> Auth::id(),
        //                             'reference' => uniqid('pin'),
        //                             'order_id' => $order->id,
        //                             'coupon_id' => $request->coupon_id,
        //                             'description'=> "payment for ".$request->description,
        //                             'currency_id'=> $request->currency,
        //                             'amount'=> $request->amount,
        //                             'method' => $request->method,
        //                             'status'=>'pending',
                                    
        //                         ]);
        $response = $this->initializePayment($payment);
        return redirect()->to($response->data->link);
    }


}
