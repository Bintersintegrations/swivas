<?php

namespace App\Http\Middleware;

use Closure;
class PermissionMiddleware
{
    public function handle($request, Closure $next,$permission,$ability)
    {
        if($request->user()->role->name != "super_admin")
        abort_if($request->user()->role->permissions()->where('name',$permission)->wherePivot($ability,true)->get()->isEmpty(),403);
        return $next($request);
    }
}
