<?php

namespace App\Observers;

use App\Payment;
use App\Events\PaymentSuccessful;
use App\Http\Traits\CartTrait;
use App\Http\Traits\WishlistTrait;
use App\Notifications\NewOrderNotification;
use App\Notifications\PaymentTransactionNotification;

class PaymentObserver
{
    use CartTrait,WishlistTrait;
    /**
     * Handle the payment "created" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function created(Payment $payment)
    {
        //
    }

    /**
     * Handle the payment "updated" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function updated(Payment $payment)
    {
        if($payment->isDirty('status') && $payment->status == 'success'){
            event(new PaymentSuccessful($payment));
            $payment->user->notify(new PaymentTransactionNotification($payment));
            foreach($payment->orders as $order){
                $order->status = 'processing';
                $order->save();
                $order->shop->notify(new NewOrderNotification($order));
                foreach($order->details as $detail){
                    $this->removeFromCartSession($detail->product);
                    $this->removeFromCartDb($detail->product);
                    $this->removeWishlist($detail->product);
                    
                }
            }
        }
    }

    /**
     * Handle the payment "deleted" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function deleted(Payment $payment)
    {
        //
    }

    /**
     * Handle the payment "restored" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function restored(Payment $payment)
    {
        //
    }

    /**
     * Handle the payment "force deleted" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function forceDeleted(Payment $payment)
    {
        //
    }
}
