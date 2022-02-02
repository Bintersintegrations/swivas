<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    public function withdrawable(){
        return $this->morphTo();
        
    }
}
