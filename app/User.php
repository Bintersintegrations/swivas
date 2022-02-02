<?php

namespace App;


use App\City;
use App\Post;
use App\Role;
use App\Shop;
use App\Order;
use App\State;
use App\Address;
use App\Country;
use App\Wishlist;
use App\Withdrawal;
use App\Message;
use App\Payment;
use App\PasswordHistory;
use Illuminate\Notifications\Notifiable;
use App\Http\Traits\RecursiveRelationships;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes,RecursiveRelationships,Sluggable;
    protected $fillable = [
        'firstname','surname','email','mobile','password','timezone','currency_id','country_id','state_id','city_id','role_id','parent_id'
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

    public static function boot()
    {
        parent::boot();
        parent::observe(new \App\Observers\UserObserver);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['surname','firstname'],
                'separator' => '_'
            ]
        ];
    }

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

    public function addresses(){
        return $this->hasMany(Address::class);
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
    
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function hasAnyRole($values){
        if(in_array($this->role->name,$values))
            return true;
        else return false;
    }
    
    public function isAdmin(){
        if($this->role->name == 'admin')
            return true;
        else return false;
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
    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }
    public function shops(){
        return $this->hasMany(Shop::class);
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function withdrawals(){
        return $this->morphMany(Withdrawal, 'withdrawable');
    }
    
    
}
