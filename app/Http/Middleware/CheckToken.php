<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $token)
    {
        
        dump('CheckToken');

        if(!$request->token || $request->token != $token){
           
        return response('access denied');
    }

        return $next($request);
    
}
}
