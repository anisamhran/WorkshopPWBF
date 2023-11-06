<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, int $requiredRoleId): Response
    {
        // Memeriksa apakah pengguna saat ini ada dan memiliki peran (role) yang sesuai dengan yang dibutuhkan.
        if (auth()->check() && auth()->user()->role_id !== $requiredRoleId) {
            abort(403);
        }

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Silakan login untuk mengakses halaman ini.');
        }
    
        return $next($request);
    }
    
}
