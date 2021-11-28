<?php

namespace App;

use App\Bank;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    public function bank(){
        return $this->belongsTo(Bank::class);
    }
    public function owner(){
        return $this->morphTo();
    }
}
