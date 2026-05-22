<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\EmailVerification;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|min:10|max:10|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:hotel_owner,staff,guest',
            'terms' => 'accepted',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'unique_id' => 'USR' . strtoupper(Str::random(8)),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => 'pending',
            'is_verified' => false,
        ]);

        // Generate OTP using EmailService
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

        // Send OTP email
        $emailResult = $this->emailService->sendOTPEmail($user->email, $user->name, $otp);

        // Store email in session for verification
        session(['verification_email' => $user->email]);

        if ($emailResult['success']) {
            return redirect()->route('verification.show')
                ->with('success', 'Registration successful! We have sent a verification OTP to ' . $user->email);
        } else {
            return redirect()->route('verification.show')
                ->with('warning', 'Registration successful but we could not send OTP. Please use "Resend OTP" option. Error: ' . $emailResult['message']);
        }
    }
}
