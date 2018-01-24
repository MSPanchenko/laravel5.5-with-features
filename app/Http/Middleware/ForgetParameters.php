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
        $routeVersion = Config::get('constants.DEFAULT_ROUTE_VERSION');

        if (preg_match('/' . Config::get('route.version_pattern') . '/', $request->routeVersion, $match)) {
            $routeVersion = doubleval($match[1]);
        }

        Config::set('route_version', $routeVersion);

        $request->route()->forgetParameter('routeVersion');

        return $next($request);
    }
}
