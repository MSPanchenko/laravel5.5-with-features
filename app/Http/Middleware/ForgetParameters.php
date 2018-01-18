<?php

namespace App\Http\Middleware;

use Closure;
use Config;

class ForgetParameters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        Config::set('route_version', $request->routeVersion);

        $request->route()->forgetParameter('routeVersion');

        return $next($request);
    }
}
