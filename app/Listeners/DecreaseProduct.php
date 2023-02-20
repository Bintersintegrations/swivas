<?php

namespace App\Listeners;

use App\Events\PaymentSuccessful;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DecreaseProduct implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderPurchased  $event
     * @return void
     */
    public function handle(PaymentSuccessful $event)
    {
        foreach($event->payment->orders as $order){
            foreach($order->details as $item){
                $item->product->quantity -= $item->quantity;
                $item->product->save();
            }
            
        }

    }
}
