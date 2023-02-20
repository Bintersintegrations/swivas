<?php

namespace App;

use App\User;
use App\Media;
use App\Comment;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use Sluggable,SoftDeletes;

    
    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title',
                'separator' => '_'
            ]
        ];
    }
    
    protected $casts = ['categories'=> 'array','publish_at'=> 'datetime'];
    
    public function getRouteKeyName(){
        return 'slug';
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tags');
    }
    public function media(){
        return $this->morphToMany(Media::class, 'mediable');
    }
}
