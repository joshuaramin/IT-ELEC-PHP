<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $userRole = Auth::user()->role;

        // Define role-based redirections
        $roleRedirects = [
            'users' => '/mybooking',
            'admins' => '/dashboard',
        ];

        // Redirect if the user's role matches one in the redirects array
        if (array_key_exists($userRole, $roleRedirects)) {
            return redirect($roleRedirects[$userRole]);
        }

        // Deny access if roles do not match
        if ($userRole !== $role) {
            return redirect('/');
        }

        return $next($request);
    }
}
