<?php

namespace App\Observers;

use App\Events\ShopPaymentEvent;
use App\Notifications\OrderReadyNotification;
use App\Notifications\OrderReportedNotification;

class OrderObserver
{
    public function created(Order $order)
    {
        // $order->shop->notify(new OrderNotification($order));
    }

    
    public function updated(Order $order)
    {
        if($order->isDirty('status') && $order->status == 'processing'){
            $order->shop->notify(new NewOrderNotification($order));
        }
        if($order->isDirty('status') && $order->status == 'ready'){
            $order->user->notify(new OrderReadyNotification($order));
        }
        if($order->isDirty('status') && $order->status == 'completed'){
            event(new ShopPaymentEvent($order));
        }
        if($order->isDirty('status') && $order->status == 'reported'){
            $order->shop->notify(new OrderReportedNotification($order));
        }

    }

    
    public function deleted(Order $order)
    {
        //
    }

    
    public function restored(Order $order)
    {
        //
    }

    
    public function forceDeleted(Order $order)
    {
        //
    }
}
