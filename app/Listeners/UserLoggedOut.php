<?php

namespace App\Listeners;

use App\Cart;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserLoggedOut implements ShouldQueue
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        //give session cart to database
        $cart = request()->session()->get('cart');
        if($cart){
            $user = Auth::user();
            foreach($cart as $key => $value){
                $dbcart = Cart::firstOrCreate(['user_id' => $user->id,'product_id' => $key],['quantity' => $value['quantity']]);
            }
        }
    }
}
