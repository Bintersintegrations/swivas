<?php

namespace App;

use App\Shop;
use App\Order;
use App\Attribute;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{   
    use Sluggable;
    protected $fillable = [
        'item_id','quantity','available','image','amount','attributes','slug'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['name'],
                'separator' => '_'
            ]
        ];
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    
    public function attributes(){
        return $this->hasMany(Attribute::class)->withPivot('result');
    }
    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
