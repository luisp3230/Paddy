<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateCourier
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
       if (! Auth::guard('web_courier')->check()) {
           return redirect('/courier_login');
       }

       return $next($request);
    }
}
