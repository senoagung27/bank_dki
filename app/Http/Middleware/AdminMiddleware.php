<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the logged-in user is an admin
         if (auth()->check() && auth()->user()->roles !== 'super_admin') {
            // Optionally, redirect or abort with a 403 error
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
