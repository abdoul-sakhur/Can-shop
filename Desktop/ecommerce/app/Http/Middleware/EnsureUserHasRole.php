<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, \Closure $next, string $role)
    {
        if ($request->user()->role == $role) {
            return $next($request);
        }
        abort(403);
    }
}
