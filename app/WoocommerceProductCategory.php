<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WoocommerceProductCategory extends Model
{
    protected $casts = ['image'=> 'array'];
}
