<?php

namespace App\Observers;

use App\Order;
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

    
    public function deleting(Order $order)
    {
        $order->details->delete();
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
