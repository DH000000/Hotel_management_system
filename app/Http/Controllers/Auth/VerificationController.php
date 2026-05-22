<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmailVerification;
use App\Models\SupportTicket;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function showVerificationForm()
    {
        $email = session('verification_email');

        if (!$email) {
            return redirect()->route('login')->with('error', 'Please login or register first.');
        }

        return view('auth.verify-otp', compact('email'));
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|string|size:6'
        ]);

        $verification = EmailVerification::where('email', $request->email)
            ->where('otp', $request->otp)
            ->first();

        if (!$verification) {
            return back()->withErrors(['otp' => 'Invalid OTP. Please try again.'])->withInput();
        }

        if ($verification->expires_at < now()) {
            return back()->withErrors(['otp' => 'OTP has expired. Please request a new one.']);
        }

        // Mark as verified
        $verification->update(['is_verified' => true]);

        // Update user
        $user = User::where('email', $request->email)->first();
        $user->update([
            'is_verified' => true,
            'email_verified_at' => now(),
            'status' => 'active'
        ]);

        // Clear session
        session()->forget('verification_email');

        // Send welcome email
        $this->emailService->sendWelcomeEmail($user->email, $user->name);

        // Auto login after verification
        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Email verified successfully! Welcome to TripLodge Universe.');
    }

    public function resendOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user->is_verified) {
            return redirect()->route('login')->with('success', 'Email already verified. Please login.');
        }

        $otp = $this->emailService->generateOTP(6);

        EmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'otp' => $otp,
                'expires_at' => now()->addMinutes(10),
                'is_verified' => false
            ]
        );

        $result = $this->emailService->sendOTPEmail($user->email, $user->name, $otp);

        if ($result['success']) {
            return back()->with('success', 'A new OTP has been sent to your email. Valid for 10 minutes.');
        } else {
            return back()->with('error', 'Failed to send OTP. Error: ' . $result['message']);
        }
    }

    public function showContactSupport()
    {
        $email = session('verification_email');

        if (!$email) {
            return redirect()->route('login');
        }

        return view('auth.verification-support', compact('email'));
    }

    // Add this method
    public function requestManualVerification(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'message' => 'required|string|min:10'
        ]);

        $user = User::where('email', $request->email)->first();

        // Create support ticket for manual verification
        $ticket = SupportTicket::create([
            'ticket_number' => SupportTicket::generateTicketNumber(),
            'user_id' => $user->id,
            'subject' => 'Manual Verification Request',
            'message' => $request->message,
            'category' => 'verification',
            'priority' => 'high',
            'status' => 'open',
        ]);

        // Send notification to admin (you can implement email notification here)

        return back()->with('success', 'Your verification request has been submitted. Our support team will contact you soon.');
    }
}
