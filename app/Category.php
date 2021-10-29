<?php

namespace App;

use App\Item;
use App\Attribute;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Http\Traits\RecursiveRelationships;

class Category extends Model
{
    use Sluggable,RecursiveRelationships;
    protected $fillable = [
        'name','parent_id','image','grand_id'
    ];

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

    public function attributes(){
        return $this->belongsToMany(Attribute::class,'attribute_categories');
    }
    public function items(){
        return $this->hasMany(Item::class);
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
}
