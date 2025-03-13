<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SiteAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Uncomment and adjust the condition below if you want to enforce authentication.
        // For example, using a specific token or session check instead of user() may be appropriate:
        // if (! $request->user()) {
        //     abort(403, 'Unauthorized.');
        // }

        return $next($request);
    }
}