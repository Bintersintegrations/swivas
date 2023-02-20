<?php
namespace App\Http\Traits;

use App\City;
use App\State;
use App\Country;
use App\Visitor;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Cache;

trait GeoLocationTrait
{
    protected function getLocation(){
        $ip = request()->ip() == '::1'|| request()->ip() == '127.0.0.1'? '197.211.58.12' : request()->ip();
        if($visitor = Visitor::where('ipAddress',$ip)->first()){
            return $visitor->city;
        }
        $result = Curl::to('http://www.geoplugin.net/php.gp?ip='.$ip)->get();
        $location =  unserialize($result);   
        if($location && $location['geoplugin_region']){
            $state = State::where('name','LIKE','%'.$location['geoplugin_region'].'%')->first();               
            $city = City::where('state_id',$state->id)->where('name','LIKE','%'.$location['geoplugin_city'].'%')->first();
            $visitor = Visitor::create(['ipAddress'=> $ip,'state_id'=> $state->id,'city_id'=> $city->id]);
            return $visitor->city;
        } 
        $state = State::find(25);
        $city = City::find(825);
        $visitor = Visitor::updateOrCreate(['ipAddress'=> $ip,'state_id'=> $state->id,'city_id'=> $city->id]);
        return $visitor->city;
    }

}


