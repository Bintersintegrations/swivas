<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
