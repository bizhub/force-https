<?php

namespace Bizhub\ForceHttps\Middleware;

use Closure;

class ForceHttps
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
        if ( ! $request->secure() && env('APP_ENV') === 'production') {
            $url = $request->getRequestUri();

            return redirect()->secure($url);
        }

        return $next($request);
    }
}
