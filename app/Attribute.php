<?php

namespace App;

use App\AttributeOption;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Attribute extends Model
{
    use Sluggable;

    protected $fillable = [
        'name','status','description','element',
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

    public function options(){
        return $this->hasMany(AttributeOption::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    
}
