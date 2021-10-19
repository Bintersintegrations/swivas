<?php

namespace App;

use App\Item;
use App\Media;
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
                'source' => ['item.name','id'],
                'separator' => '_'
            ]
        ];
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    
    
    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function attributes(){
        return $this->morphToMany(Attribute::class, 'attributable')->withPivot('result');
    }
    public function image(){
        return $this->belongsTo(Media::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
