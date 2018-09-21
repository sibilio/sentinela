<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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
        return $next($request)
                ->header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS')
                //->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'))
                ->header('Access-Control-Allow-Origin', '*');
                /*
            ->header('Access-Control-Allow-Headers', "Origin, X-Requested-With, Content-Type, Accept")
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Credentials', true);
                 * */
        
        
    
    }
}
