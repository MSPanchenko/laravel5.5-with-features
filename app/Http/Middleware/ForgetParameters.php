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
        Config::set('method_version', $request->methodVersion);

        $request->route()->forgetParameter('methodVersion');

        return $next($request);
    }
}
