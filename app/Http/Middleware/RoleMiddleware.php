<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $requiredRoleId
     * @return mixed
     */
    public function handle(Request $request, Closure $next, int $requiredRoleId)
    {
        // Memeriksa apakah pengguna saat ini ada dan memiliki peran (role) yang sesuai dengan yang dibutuhkan.
        if (auth()->check() && auth()->user()->role_id !== $requiredRoleId) {
            abort(403);
        }

        if (!auth()->check()) {
            abort(403, 'Silakan login untuk mengakses halaman ini.');
        }
    
        return $next($request);
    }
}