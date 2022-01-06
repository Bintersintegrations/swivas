<?php

namespace App\Observers;

use App\Shop;
use App\Notifications\ShopEarningNotification;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function updating(Shop $shop)
    {
        if($shop->isDirty('wallet') && $shop->wallet > $shop->getOriginal('wallet')){
            $shop->notify(new ShopEarningNotification($shop->wallet,$user->getOriginal('wallet')));
        }

    }
    public function updated(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "restored" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function restored(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "force deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function forceDeleted(Shop $shop)
    {
        //
    }
}
