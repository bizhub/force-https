<?php

namespace Bizhub\ForceHttps\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ForceHttps
{
    public function handle(Request $request, Closure $next)
    {
        if ( ! $request->secure() && App::isProduction()) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
