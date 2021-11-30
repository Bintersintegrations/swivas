<?php

namespace App\Http\Controllers;

use App\Order;
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
        // dd($request->all());
        $coupon_id = '';
        $user = Auth::user();
        $items = collect([]);
        foreach($request->items as $item){
            $temp = json_decode($item,TRUE);
            $items->push($temp);
        } 
        // dd($items->sum('amount') + $request->vat);
        $payment = Payment::create(['user_id'=> $user->id,coupon_id => $coupon_id,'description'=> 'payment for orders '.$items->unique('shop_id')->implode('shop_id',','),'discount'=> $request->discount,'currency'=> $user->country->currency_iso,'amount'=> $request->vat + $items->sum('amount')]);
        foreach($items->groupBy('shop_id') as $key=> $shopOrder){
            $subtotal = $shopOrder->sum('amount');
            $vat = $this->getVat() * $subtotal / 100;
            $total = $subtotal + $vat;
            $order = Order::create(['user_id'=> $user->id,'shop_id'=> $key,'payment_id'=> $payment->id,'currency'=> $user->country->currency_iso,'subtotal'=> $subtotal,'vat'=> $vat,'total'=> $total ]);
            foreach($shopOrder as $product){
                $details = OrderDetail::create(['order_id'=> $order->id,'product_id'=> $product['id'],'quantity'=> $product['quantity'],'unit_price'=> $product['price'],'amount'=> $product['amount'] ]);
            }
        }
        if($request->input('payment-option') == 'online'){
            $response = $this->initializePayment($payment);
            return redirect()->to($response->data->link);
        }
        else
        $response = $this->processPayment($payment);
        return redirect()->route('user.orders');
        
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

    


}
