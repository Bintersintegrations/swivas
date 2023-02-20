<?php

namespace App\Listeners;

use App\Cart;
use App\Http\Traits\CartTrait;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogSuccessfulLogin implements ShouldQueue
{
    use CartTrait;
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = Auth::user();
        $dbcarts = Cart::where('user_id',$user->id)->get();
        if($dbcarts->isNotEmpty()){
            foreach($dbcarts as $dbcart){
               $cart =  $this->addToCartSession($dbcart->product);
            }
        }
    }
}
