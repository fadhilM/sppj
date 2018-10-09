<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\auth;

class checkLevel
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
        if(auth::user()->level=='0'){
            return $next($request);
        } else{
            return redirect('/home');
        }
 
    }
}
