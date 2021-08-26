<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( auth()->guest() )  {
            abort(403, 'You are not authorized to access this page');
        } else if ( auth()->user()->username !== 'lazycoder' ) {
            abort(403, 'You are not authorized to access this page');
        }

        return $next($request);
    }
}
