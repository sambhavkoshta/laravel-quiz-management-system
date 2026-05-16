<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Random\Engine\Secure;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Session)
        return $next($request);
    }
}
