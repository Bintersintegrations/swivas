<?php

namespace App;

use App\Shop;
use App\Order;
use App\Attribute;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{   
    use Sluggable;
    protected $casts = ['images'=> 'array','categories'=> 'array', 'grouped_products'=> 'array','bought_together'=> 'array','related'=> 'array'];
    protected $fillable = [
        'shop_id','quantity','images','price','slug'
    ];

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\ProductObserver);
    }
    
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

    public function categories(){
        $categories = collect([]);
        foreach($this->categories as $category_id){
            $categories->push(Category::find($category_id));
        }
        return $categories;
    }

}
