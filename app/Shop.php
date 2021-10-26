<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use Notifiable,Sluggable;
    
    public function sluggable()
    {
        return [
            'username' => [
                'source' => 'name',
                'separator' => '_'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
