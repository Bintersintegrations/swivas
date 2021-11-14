<?php

namespace App;

use App\AtributeOption;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Atribute extends Model
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
        return $this->hasMany(AtributeOption::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    
}
