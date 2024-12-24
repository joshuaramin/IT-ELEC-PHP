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
            return redirect("/");
        }
        $userRole = Auth::user()->role;

        if ($userRole === 'user') {
            return redirect("/user/dashboard");
        } elseif ($userRole === 'admin') {
            return redirect("/admin/dashboard");
        }

        // Allow access to other roles if required
        if ($userRole !== $role) {
            return redirect("/");
        }
        return $next($request);
    }
}
