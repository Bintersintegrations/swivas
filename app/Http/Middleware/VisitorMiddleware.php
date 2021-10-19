<?php

namespace App\Http\Middleware;

use Closure;
use App\Visitor;
use Soumen\Agent\Agent;
use Illuminate\Support\Str;
use Ixudra\Curl\Facades\Curl;
use App\Http\Traits\GeoLocationTrait;

class VisitorMiddleware
{
    use GeoLocationTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( !(Str::contains($request->path(), ['css', 'font','js']))){
            $location = $this->getLocation();
            $visitor = Visitor::firstOrNew(
                [
                'user_id'=> request()->user() ? request()->user()->id : 0,
                'ipAddress' => Agent::ip(),
                'country_id'=> $location['country_id'],
                'state_id'=> $location['state_id'],
                'city_id'=> $location['city_id'],
                'timezone'=> $location['timezone'],
                'device_type'=> Agent::device()->getType(),
                'device_name'=> Agent::device('family').','.Agent::device('model'),
                'platform'=> Agent::platform('name'),
                'browser'=> Agent::browser('name'),
                'language' => substr(Agent::header('accept-language'),0,2),
                'url' => Agent::server('httpHost').Agent::server('requestUri'),
                'method' => Agent::server('requestMethod')
                ]);
            $visitor->visit = $visitor->visit + 1;
            $visitor->save();

        }
        return $next($request);
    }
}
