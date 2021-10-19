<?php

namespace App;
use App\City;
use App\Country;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name','code','country_id'];

    public function cities(){
        return $this->hasMany(City::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
