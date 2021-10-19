<?php

namespace App;

use App\Item;
use App\Country;
use App\Payment;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['iso','name','country_id'];
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function products(){
        return $this->hasManyThrough(Product::class, Item::class);
    }
}
