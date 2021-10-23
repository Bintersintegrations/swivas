<?php

namespace App;


use App\City;

use App\Post;
use App\Role;

use App\State;

use App\Country;
use App\Message;
use App\Payment;
use App\PasswordHistory;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,Sluggable;

    public function sluggable()
    {
        return [
            'username' => [
                'source' => ['surname','firstame'],
                'separator' => '_'
            ]
        ];
    }

    protected $fillable = [
        'firstname','surname','email','mobile','password','timezone','currency_id','country_id','state_id','city_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime','dob' => 'datetime', 'documents'=> 'array'
    ];

    public function routeNotificationForNexmo($notification)
    {
        return $this->mobile;
    }
    public function getNameAttribute()
    {
        return ucwords($this->firstname.' '.$this->surname);
    }
    public function receivesBroadcastNotificationsOn(){
        return 'users.'.$this->id;
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    
    public function roles(){
        return $this->belongsToMany(Role::class,'user_roles');
    }
    public function isAdmin(){
        if(in_array('admin',$this->roles->pluck('name')->toArray()))
        return true;
    }
    
    public function hasAnyRole($values){
        $exist = false;
        foreach($this->roles->pluck('name')->toArray() as $role){
            if(in_array($role,$values)){
                $exist = true;
                break;
            } 
        }
        return $exist;
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    public function password_histories(){
        return $this->hasMany(PasswordHistory::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
 
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
}
