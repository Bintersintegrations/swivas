<?php

namespace App;

use App\Product;
use App\Atribute;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Http\Traits\RecursiveRelationships;

class Category extends Model
{
    use Sluggable,RecursiveRelationships;
    protected $fillable = [
        'name','parent_id','image','grand_id'
    ];
    protected $casts = ['categories'=> 'array'];

    public function sluggable()
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

    public function atributes(){
        return $this->belongsToMany(Atribute::class,'atribute_categories');
    }
    public function products(){
        return $this->hasMany(Product::class,'categories');
    }
    public function getGrand(){
        return \App\Category::where('id',$this->grand_id)->first();
    }
    public function getParent(){
        return \App\Category::where('id',$this->parent_id)->first();
    }
    public function getChildren(){
        return \App\Category::where('parent_id',$this->id)->get();
    }

    public function firstDescendant(){
        return \App\Category::where('parent_id',$this->id)->get();
    }
    public function secondDescendant(){
        
    }
}
