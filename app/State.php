<?php

namespace App;
use App\City;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['name','code'];

    public function cities(){
        return $this->hasMany(City::class);
    }

}
