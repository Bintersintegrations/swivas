<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id','shop_id','order_id','products'];
    protected $casts = ['products'=> 'array'];
}
