<?php

namespace App;

use App\City;
use App\State;
use App\Country;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id','description','country_id','state_id','city_id','street','contact_name','contact_number','contact_email'];
    
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
}
