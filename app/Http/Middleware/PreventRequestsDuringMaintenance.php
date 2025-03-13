<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PreventRequestsDuringMaintenance
{
    public function handle(Request $request, Closure $next)
    {
        if (app()->isDownForMaintenance()) {
            throw new HttpException(503, 'Site is under maintenance.');
        }

        return $next($request);
    }
}
