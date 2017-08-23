<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticatePartner
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
       if (! Auth::guard('web_partner')->check()) {
           return redirect('/partner_login');
       }

       return $next($request);
    }
}
