<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        // check is admin allow full control
        if ( Auth::check() && Auth::user()->roles[0]->name=='administrator' )
        {
            return $next($request);
        }

        return redirect('/'); 
    }
}
