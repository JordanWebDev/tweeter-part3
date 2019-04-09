<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUserAgent
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
        $ip = '127.0.0.1';//$request->ip();
        if($ip == '127.0.0.1'){

            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
