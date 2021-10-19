<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'reference',
        'beneficiary_id',
        'value',
        'charges',
        'paymentable_id',
        'paymentable_type',
        'status',
        'user_id',
        'amount',
        'currency_id',
        'type',
        'description'];
    
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
