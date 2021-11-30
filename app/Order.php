<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','shop_id','payment_id','currency','subtotal','vat','total'];
}
