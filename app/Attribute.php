<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Category;
class Attribute extends Model
{
    use Sluggable;
    protected $fillable = [
        'name','label','description','options',
    ];
    protected $casts = ['options'=> 'array'];

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
    
}
