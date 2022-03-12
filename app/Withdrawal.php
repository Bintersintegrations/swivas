<?php

namespace App;

use App\Bank;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    public function withdrawable(){
        return $this->morphTo();
        
    }
    public function bank(){
        return $this->belongsTo(Bank::class);
    }
}
