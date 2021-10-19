<?php

namespace App\Http\Middleware;

use Closure;

class CountryFilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->user()->country->status) abort(403,'Service Not Yet Available in your country');
        return $next($request);
    }
}
