<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AtributeOption extends Model
{
    use Sluggable;

    protected $fillable = [
        'atribute_id','name','description'
    ];
    
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'name',
                'separator' => '_'
            ]
        ];
    }

}
