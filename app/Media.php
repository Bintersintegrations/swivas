<?php

namespace App;


use App\Item;
use App\Post;
use App\User;
use App\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id','format','name','external'];
    
    public function posts(){
        return $this->morphedByMany(Post::class, 'mediable');
    }
    public function items(){
        return $this->morphedByMany(Item::class, 'mediable');
    }
    public function messages(){
        return $this->morphedByMany(Message::class, 'mediable');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
