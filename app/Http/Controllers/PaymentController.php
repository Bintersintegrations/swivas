<?php

namespace App\Http\Controllers;

use App\Order;
use App\Payment;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Traits\OrderTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\FlutterWaveTrait;
use App\Http\Traits\NetworkPointTrait;

class PaymentController extends Controller
{
    use FlutterWaveTrait,OrderTrait,NetworkPointTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pay(Request $request){
        $coupon_id = null;
        $user = Auth::user();
        $items = collect([]);
        foreach($request->items as $item){
            $temp = json_decode($item,TRUE);
            $items->push($temp);
        } 
        // dd($items->sum('amount') + $request->vat);
        if($request->payment_id){
            $payment = Payment::find($request->payment_id);
        }
        else{
            $payment = Payment::create(['user_id'=> $user->id,'coupon_id' => $coupon_id,'reference'=> uniqid('swivas'.Auth::id()),'description'=> 'payment for orders','discount'=> $request->discount,'currency'=> $user->country->currency_iso,'amount'=> $request->vat + $items->sum('amount')]);
            foreach($items->groupBy('shop_id') as $key => $shopOrder){
                $subtotal = $shopOrder->sum('amount');
                $vat = $this->getVat() * $subtotal / 100;
                $total = $subtotal + $vat;
                $order = Order::create(['user_id'=> $user->id,'shop_id'=> $key,'payment_id'=> $payment->id,'currency'=> $user->country->currency_iso,'subtotal'=> $subtotal,'vat'=> $vat,'total'=> $total ]);
                foreach($shopOrder as $product){
                    $details = OrderDetail::create(['order_id'=> $order->id,'product_id'=> $product['id'],'quantity'=> $product['quantity'],'unit_price'=> $product['price'],'amount'=> $product['amount'] ]);
                }
            }
        }
        
        if($request->input('payment-option') == 'online'){
            $response = $this->initializePayment($payment);
            if($response->status == 'success')
                return redirect()->to($response->data->link);
            else return redirect()->route('payment.status',$payment);
        }
        else{
            $response = $this->pointPayment($payment);
            return redirect()->route('payment.status',$payment);
        }
    }

    public function verification(){
        if(!request()->query() || !request()->query('transaction_id') || !request()->query('tx_ref'))
        \abort(404);
        $trans_id = request()->query('transaction_id');
        $trans_ref = request()->query('tx_ref');
        $trans_status = request()->query('status');
        $response = $this->verifyPayment($trans_id);
        // dd($response);
        $payment = Payment::where('reference',$trans_ref)->first();
        if($trans_status == 'successful' && $response->status == 'success' && $payment && $response && $payment->reference == $response->data->tx_ref  && $response->data->currency == $payment->currency && $response->data->amount >= $payment->amount){
            $payment->method = $response->data->payment_type;
            $payment->status = 'success';
            $payment->save();
        }else{
            $payment->status = 'failed';
            $payment->save();
        }
        // else mark payment failed
        return redirect()->route('payment.status',$payment);
    }

    public function status(Payment $payment){
        return view('frontend.outside.sale.paymentstatus',compact('payment'));
    }

    // public function transactions(){
    //     $user = Auth::user();
    //     $user->unreadNotifications->where('type','App\Notifications\PaymentTransactionNotification')->markAsRead();
    //     $user->unreadNotifications->where('type','App\Notifications\PenaltyChargeNotification')->markAsRead();
    //     $payments = Payment::where('user_id',$user->id);
    //     if(request()->query()){
    //         if(request()->query('currency'))
    //         $payments = $payments->where('currency_id',request()->query('currency'));
    //         if(request()->query('type')  != null)
    //         $payments = $payments->where('type','=',request()->query('type'));
    //         if(request()->query('status')  != null)
    //         $payments = $payments->where('status',request()->query('status'));
    //         if(request()->query('order')  != null)
    //         $payments = $payments->orderBy('created_at',request()->query('order'));
    //     }
    //     $transactions = $payments->get();
    //     //dd($transactions);
    //     return view('user.payment.transactions',compact('transactions'));
    // }

    // public function wallet(){
    //     $user = Auth::user();
    //     $user->unreadNotifications->where('type','App\Notifications\FreezeWalletsNotification')->markAsRead();
    //     $user->unreadNotifications->where('type','App\Notifications\LockedWalletNotification')->markAsRead();
    //     $user->unreadNotifications->where('type','App\Notifications\SettlementNotification')->markAsRead();
    //     $charge_set = Setting::where('name','charge_type')->first()->value;
    //     $currencies = Currency::all();
    //     $wallets = Wallet::where('user_id',$user->id)->get();
    //     $enable_withdrawal = Setting::where('name','enable_wallet_withdrawal')->first()->value;
    //     $enable_upload = Setting::where('name','enable_wallet_deposit')->first()->value;
    //     return view('user.payment.wallet',compact('charge_set','currencies','wallets','enable_withdrawal','enable_upload'));
    // }

}
