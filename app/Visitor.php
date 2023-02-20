<?php

namespace App;

use App\City;
use App\User;
use App\State;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['ipAddress','user_id','state_id','city_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}
