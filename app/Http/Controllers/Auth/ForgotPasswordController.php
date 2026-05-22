<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmailVerification;
use App\Services\EmailService;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $user = User::where('email', $request->email)->first();

        // Generate OTP for password reset
        $otp = $this->emailService->generateOTP(6);

        // Store OTP in database
        EmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'otp' => $otp,
                'expires_at' => now()->addMinutes(10),
                'is_verified' => false
            ]
        );

        // Send password reset OTP email
        $result = $this->emailService->sendPasswordResetOTP($user->email, $user->name, $otp);

        if ($result['success']) {
            // Store email in session for password reset
            session(['reset_email' => $user->email]);

            return redirect()->route('password.reset.form')
                ->with('success', 'We have sent a password reset OTP to ' . $user->email);
        } else {
            return back()->with('error', 'Failed to send OTP. Please try again.');
        }
    }
}
