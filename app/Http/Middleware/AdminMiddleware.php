<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        // Check if user has admin role
        if (!in_array(Auth::user()->role, ['super_admin', 'admin'])) {
            abort(403, 'Unauthorized access. Admin only area.');
        }

        // Check if account is active
        if (Auth::user()->status !== 'active') {
            Auth::logout();
            return redirect()->route('admin.login')->with('error', 'Your account is inactive.');
        }

        return $next($request);
    }
}
