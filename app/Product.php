<?php

namespace App;

use App\Shop;
use App\OrderDetail;
use App\Atribute;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{   
    use Sluggable;
    protected $casts = ['images'=> 'array','categories'=> 'array', 'atributes'=> 'array', 
    'grouped_products'=> 'array','bought_together'=> 'array','related'=> 'array','sale_from'=> 'datetime','sale_to'=> 'datetime'];
    protected $fillable = [
        'shop_id','quantity','images','price','slug'
    ];
    protected $appends = ['amount'];

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\ProductObserver);
    }
    
    public function sluggable():array
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
        return $this->hasMany(OrderDetail::class);
    }

    public function categories(){
        $categories = collect([]);
        foreach($this->categories as $category_id){
            $categories->push(Category::find($category_id));
        }
        return $categories;
    }

    public function getAmountAttribute(){
        if($this->sale_price && $this->sale_from < now() && $this->sale_to > now()){
            return $this->sale_price;
        }
        else{
            return $this->price;
        }
    }
    public function onSale(){
        if($this->sale_price && $this->sale_from < now() && $this->sale_to > now())
        return true;
        else return false;
    }

}
