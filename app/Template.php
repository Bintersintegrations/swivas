<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Template extends Model
{
    use Sluggable;
    
    protected $casts = ['categories'=> 'array','images'=>'array'];

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

    public function categories(){
        $categories = collect([]);
        foreach($this->categories as $category_id){
            $categories->push(Category::find($category_id));
        }
        return $categories;
    }
    

}
