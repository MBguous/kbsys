<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserStatus
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
        if ( ! $request->user()->is_enabled == 1)
        {
            abort(401);
        }

        return $next($request);
    }
}
