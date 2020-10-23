<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param int $age
     * @return mixed
     */
    public function handle(Request $request, Closure $next, int $age)
    {
        if (auth()->check() and auth()->user()->age > $age) {
            return $next($request);
        }
        abort(403, 'Too young.');
    }
}
