<?php

namespace App\Listeners;

use App\Cart;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CartSessionTrait;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogSuccessfulLogin implements ShouldQueue
{
    use CartSessionTrait;
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
               $cart =  $this->addProductToCartSession($dbcart->product);
            }
        }
    }
}
