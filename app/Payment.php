<?php

namespace App;

use App\User;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['reference','discount','currency','user_id','coupon_id','description','amount'];
    
    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\PaymentObserver);
    }

    public function getRouteKeyName(){
        return 'reference';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
