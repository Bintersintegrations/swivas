<?php

namespace App;

use App\Shop;
use App\Order;
use App\Atribute;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{   
    use Sluggable;
    protected $casts = ['images'=> 'array','categories'=> 'array', 'atributes'=> 'array', 'grouped_products'=> 'array','bought_together'=> 'array','related'=> 'array'];
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
    public function onSale(){
        if($this->sale_price && $this->sale_from < now() && $this->sale_to > now())
        return true;
        else return false;
    }
    // public function atributes(){
    //     $atributes = collect([]);
    //     dd($this->atributes);
    //     foreach($this->atributes as $atribute){
    //         $atributes->push(Atribute::where('slug',$atribute_id)->get());
    //     }
    //     return $atributes;
    // }

}
