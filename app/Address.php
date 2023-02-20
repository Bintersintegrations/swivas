<?php

namespace App;

use App\City;
use App\State;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id','description','state_id','city_id','street','contact_name','contact_number','contact_email'];
    
    
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
}
