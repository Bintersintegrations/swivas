<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
class Coupon extends Model
{
    use SoftDeletes,Sluggable;
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
                'separator' => '_'
            ]
        ];
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    protected $fillable = ['name','user_id','is_global','code','start_at','end_at','quantity','available','is_percentage','value','free_shipping',
                        'category_limit','product_limit','limit_per_user','status'];
    
    protected $casts = ['start_at'=> 'datetime','end_at'=> 'datetime','category_limit'=> 'array','item_limit'=> 'array'];

    
}
