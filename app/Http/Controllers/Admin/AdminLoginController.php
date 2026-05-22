<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminLoginController extends Controller
{
    // Show admin login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle admin login
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            // Check if user is admin or super admin
            if (!in_array($user->role, ['super_admin', 'admin'])) {
                Auth::logout();
                return back()->withErrors(['email' => 'You do not have admin access.'])->withInput();
            }

            // Check if account is active
            if ($user->status !== 'active') {
                Auth::logout();
                return back()->withErrors(['email' => 'Your account is ' . $user->status . '. Please contact support.']);
            }

            // Update last login info
            $user->update([
                'last_login_at' => now(),
                'last_login_ip' => $request->ip(),
                'login_count' => $user->login_count + 1
            ]);

            // Log activity
            UserActivityLog::create([
                'user_id' => $user->id,
                'action' => 'admin_login',
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')->with('success', 'Welcome back, ' . $user->name . '!');
        }

        return back()->withErrors(['email' => 'Invalid credentials provided.'])->onlyInput('email');
    }

    // Show admin registration form
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    // Handle admin registration
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|min:10|max:15|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'admin_secret' => 'required|in:' . env('ADMIN_SECRET_KEY', 'TripLodge@2025'),
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'unique_id' => 'ADM' . strtoupper(Str::random(8)),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        // Log activity
        UserActivityLog::create([
            'user_id' => $user->id,
            'action' => 'admin_registered',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->route('admin.login')->with('success', 'Admin account created successfully! Please login.');
    }

    // Admin logout
    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            UserActivityLog::create([
                'user_id' => $user->id,
                'action' => 'admin_logout',
                'ip_address' => $request->ip(),
            ]);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
