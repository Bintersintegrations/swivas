<?php

namespace App;

use App\Bid;
use App\City;
use App\Item;
use App\Post;
use App\Role;
use App\Shop;
use App\Media;
use App\State;
use App\Giving;
use App\Auction;
use App\Company;
use App\Country;
use App\Message;
use App\Payment;
use App\Product;
use App\Currency;
use App\GivingRequest;
use App\PasswordHistory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function products(){
        return $this->hasManyThrough(Product::class, Item::class);
    }

    public function givings(){
        return $this->hasManyThrough(Giving::class, Item::class);
    }
    public function giving_requests(){
        return $this->hasMany(GivingRequest::class);
    }

    public function requestedGiving($value){
        return $this->giving_requests->where('giving_id',$value)->isNotEmpty();
    }

    public function auctions(){
        return $this->hasManyThrough(Auction::class, Item::class);
    }

    public function bids(){
        return $this->hasMany(Bid::class); 
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
    public function employer(){
        return $this->hasOne(Company::class);
    }

    public function media(){
        return $this->hasMany(Media::class);
    }
    public function currency(){
        return $this->belongsTo(Currency::class);
    }
    public function shop(){
        return $this->hasOne(Shop::class);
    }
  
    
}
