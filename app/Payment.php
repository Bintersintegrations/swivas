<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'reference',
        'discount',
        'currency',
        'user_id','coupon_id',
        'description',
        'amount',
        ];
    
    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function beneficiary(){
        return $this->belongsTo(User::class,'beneficiary_id');
    }

    public function paymentable(){
        return $this->morphTo();
    }
}
