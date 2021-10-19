<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['owner_id','owner_type','country_id','state_id','city_id','address','type'];
}
