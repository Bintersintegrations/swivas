<?php

namespace App;

use App\Shop;
use App\User;
use App\Review;
use App\Payment;
use App\OrderDetail;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','shop_id','payment_id','subtotal','vat','total','expected_at'];
    protected $casts = ['expected_at'=> 'datetime'];
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function details(){
        return $this->hasMany(OrderDetail::class);
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
