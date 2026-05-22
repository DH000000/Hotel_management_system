<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmailVerification;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Check if user exists
        if (!$user) {
            return back()->withErrors(['email' => 'No account found with this email.'])->onlyInput('email');
        }

        // Check if email is verified
        if (!$user->is_verified) {
            // Generate new OTP
            $otp = $this->emailService->generateOTP(6);

            EmailVerification::updateOrCreate(
                ['email' => $user->email],
                [
                    'otp' => $otp,
                    'expires_at' => now()->addMinutes(10),
                    'is_verified' => false
                ]
            );

            // Send OTP email
            $this->emailService->sendOTPEmail($user->email, $user->name, $otp);

            // Store email in session for verification
            session(['verification_email' => $user->email]);

            return redirect()->route('verification.show')
                ->with('warning', 'Please verify your email address first. We have sent a verification OTP to ' . $user->email);
        }

        // Check account status
        if ($user->status !== 'active') {
            return back()->withErrors(['email' => 'Your account is ' . $user->status . '. Please contact support.']);
        }

        // Attempt login
        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();

            // Update last login info
            $user->update([
                'last_login_at' => now(),
                'last_login_ip' => $request->ip(),
                'login_count' => $user->login_count + 1
            ]);

            $request->session()->regenerate();

            // Redirect based on role
            if ($user->role === 'super_admin' || $user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'hotel_owner') {
                return redirect()->route('hotel.dashboard');
            }

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
