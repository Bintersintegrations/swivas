<?php

namespace App;

use App\User;
use App\City;
use App\State;
use App\Currency;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['iso_code','name','dialing_code','flag'];
    public function currency(){
        return $this->hasOne(Currency::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function states(){
        return $this->hasMany(State::class);
    }
    public function cities(){
        return $this->hasManyThrough(City::class, State::class);
    }

}
