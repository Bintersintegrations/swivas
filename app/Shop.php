<?php

namespace App;

use App\City;
use App\User;
use App\State;
use App\Country;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;

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
    public function routeNotificationForNexmo($notification)
    {
        return $this->mobile;
    }
    public function getRouteKeyName(){
        return 'slug';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    
}
