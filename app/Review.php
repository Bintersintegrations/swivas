<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id','body','product_id','order_id'];
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
