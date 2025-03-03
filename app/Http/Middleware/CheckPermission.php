<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
{

    public function handle($request, Closure $next, $permission = null)
    {
        // if ($permission && (!auth()->user() || !auth()->user()->can($permission))) {
        //     abort(403, 'Unauthorized action.');
        // }
    
        return $next($request);
    }
    

}
