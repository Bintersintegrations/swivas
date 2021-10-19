<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'user_id','wishable_id','wishable_type'
    ];
    public function wishable(){
        return $this->morphTo();
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function giving(){

    }
    public function auction(){

    }
}
