<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsActive
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
        if (Auth::user()->active == 0){
            header("Location: http://o6ucs2016.alshahen.me/success_registration");
            exit;
        }
        return $next($request);
    }
}
