<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmailVerification;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function showResetForm()
    {
        $email = session('reset_email');

        if (!$email) {
            return redirect()->route('password.request')->with('error', 'Please request a password reset first.');
        }

        return view('auth.reset-password', compact('email'));
    }

    public function verifyResetOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|string|size:6'
        ]);

        $verification = EmailVerification::where('email', $request->email)
            ->where('otp', $request->otp)
            ->first();

        if (!$verification) {
            return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
        }

        if ($verification->expires_at < now()) {
            return back()->withErrors(['otp' => 'OTP has expired. Please request a new one.']);
        }

        // Mark as verified
        $verification->update(['is_verified' => true]);

        // Store in session that OTP is verified
        session(['otp_verified' => true, 'reset_email' => $request->email]);

        return redirect()->route('password.update.form')->with('success', 'OTP verified. Please enter your new password.');
    }

    public function showUpdatePasswordForm()
    {
        if (!session('otp_verified') || !session('reset_email')) {
            return redirect()->route('password.request')->with('error', 'Please verify your OTP first.');
        }

        $email = session('reset_email');
        return view('auth.update-password', compact('email'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (!session('otp_verified')) {
            return redirect()->route('password.request')->with('error', 'Please verify your OTP first.');
        }

        $user = User::where('email', $request->email)->first();
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        // Clear sessions
        session()->forget(['reset_email', 'otp_verified']);

        return redirect()->route('login')->with('success', 'Password reset successfully! Please login with your new password.');
    }
}
