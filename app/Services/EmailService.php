<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EmailService
{
    protected $apiKey;
    protected $senderEmail;
    protected $senderName;

    public function __construct()
    {
        $this->apiKey = env('BREVO_API_KEY');
        $this->senderEmail = env('MAIL_FROM_ADDRESS');
        $this->senderName = env('MAIL_FROM_NAME');
    }

    /**
     * Send email using Brevo API
     */
    public function sendEmail($to, $subject, $htmlBody, $altBody = '')
    {
        $data = [
            "sender" => [
                "email" => $this->senderEmail,
                "name" => $this->senderName
            ],
            "to" => [
                ["email" => $to]
            ],
            "subject" => $subject,
            "htmlContent" => $htmlBody,
            "textContent" => $altBody ?: strip_tags($htmlBody)
        ];

        try {
            Log::info('Attempting to send email to: ' . $to);
            Log::info('Using sender: ' . $this->senderEmail);

            $response = Http::withHeaders([
                'accept' => 'application/json',
                'api-key' => $this->apiKey,
                'content-type' => 'application/json'
            ])->post('https://api.brevo.com/v3/smtp/email', $data);

            Log::info('Brevo API Response Status: ' . $response->status());
            Log::info('Brevo API Response Body: ' . $response->body());

            if ($response->successful()) {
                Log::info('Email sent successfully to: ' . $to);
                return ['success' => true, 'message' => 'Email sent successfully'];
            } else {
                Log::error('Email failed: ' . $response->body());
                return ['success' => false, 'message' => $response->body()];
            }
        } catch (\Exception $e) {
            Log::error('Email exception: ' . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    /**
     * Generate random OTP
     */
    public function generateOTP($length = 6)
    {
        return sprintf("%0" . $length . "d", mt_rand(0, pow(10, $length) - 1));
    }

    /**
     * Send OTP verification email (Same design as login/register pages)
     */
    public function sendOTPEmail($to, $name, $otp)
    {
        $htmlBody = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Verify Your Email - TripLodge Universe</title>
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap");
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                body {
                    font-family: "Inter", Arial, sans-serif;
                    background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);
                    min-height: 100vh;
                    padding: 20px;
                }
                .container {
                    max-width: 560px;
                    margin: 0 auto;
                    background: rgba(230, 149, 0, 0.08);
                    border-radius: 24px;
                    overflow: hidden;
                    backdrop-filter: blur(10px);
                    border: 1px solid rgba(230, 149, 0, 0.2);
                }
                .header {
                    background: linear-gradient(135deg, #E69500, #CC8400);
                    padding: 32px;
                    text-align: center;
                }
                .logo {
                    font-size: 28px;
                    font-weight: 800;
                    color: white;
                }
                .logo span {
                    color: #FFD700;
                }
                .header-title {
                    font-size: 20px;
                    color: rgba(255,255,255,0.9);
                    margin-top: 8px;
                }
                .content {
                    padding: 40px 32px;
                    background: rgba(255,255,255,0.05);
                }
                .greeting {
                    color: white;
                    font-size: 18px;
                    margin-bottom: 16px;
                }
                .greeting strong {
                    color: #E69500;
                }
                .message {
                    color: #cbd5e1;
                    font-size: 14px;
                    line-height: 1.6;
                    margin-bottom: 24px;
                }
                .otp-box {
                    background: rgba(230, 149, 0, 0.15);
                    border: 2px dashed #E69500;
                    border-radius: 16px;
                    padding: 24px;
                    text-align: center;
                    margin: 24px 0;
                }
                .otp-label {
                    color: #94a3b8;
                    font-size: 12px;
                    letter-spacing: 1px;
                    margin-bottom: 12px;
                }
                .otp-code {
                    font-size: 42px;
                    font-weight: 800;
                    color: #E69500;
                    letter-spacing: 12px;
                    font-family: monospace;
                }
                .validity {
                    color: #64748b;
                    font-size: 12px;
                    text-align: center;
                    margin: 16px 0;
                }
                .warning-box {
                    background: rgba(239, 68, 68, 0.1);
                    border-left: 3px solid #ef4444;
                    padding: 12px 16px;
                    border-radius: 8px;
                    margin: 24px 0;
                }
                .warning-text {
                    color: #fca5a5;
                    font-size: 12px;
                }
                .button {
                    display: inline-block;
                    background: linear-gradient(135deg, #E69500, #CC8400);
                    color: white;
                    padding: 12px 28px;
                    text-decoration: none;
                    border-radius: 8px;
                    font-weight: 600;
                    margin: 16px 0;
                }
                .footer {
                    padding: 24px 32px;
                    text-align: center;
                    border-top: 1px solid rgba(230, 149, 0, 0.1);
                }
                .footer-text {
                    color: #64748b;
                    font-size: 12px;
                }
                .footer-link {
                    color: #E69500;
                    text-decoration: none;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <div class="logo">TripLodge <span>Universe</span></div>
                    <div class="header-title">Email Verification</div>
                </div>
                <div class="content">
                    <div class="greeting">Hello <strong>' . htmlspecialchars($name) . '</strong>,</div>
                    <div class="message">
                        Thank you for registering with TripLodge Universe. Please use the following OTP to verify your email address and activate your account.
                    </div>
                    <div class="otp-box">
                        <div class="otp-label">Your Verification Code</div>
                        <div class="otp-code">' . $otp . '</div>
                    </div>
                    <div class="validity">
                        ⏱️ This OTP is valid for <strong>10 minutes</strong>
                    </div>
                    <div class="warning-box">
                        <div class="warning-text">
                            ⚠️ <strong>Security Alert:</strong> Never share this OTP with anyone, including TripLodge Universe support team.
                        </div>
                    </div>
                    <div class="message" style="text-align: center;">
                        If you didn\'t create an account with TripLodge Universe, please ignore this email.
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-text">
                        &copy; ' . date('Y') . ' TripLodge Universe. All rights reserved.<br>
                        India\'s most advanced hotel operating system<br>
                        <a href="' . env('APP_URL', 'http://localhost:8000') . '" class="footer-link">' . env('APP_URL', 'http://localhost:8000') . '</a>
                    </div>
                </div>
            </div>
        </body>
        </html>';

        $altBody = "Your OTP for email verification is: $otp\n\nThis OTP is valid for 10 minutes.\n\nNever share this OTP with anyone.\n\nTripLodge Universe - India's most advanced hotel operating system";

        return $this->sendEmail($to, "🔐 Verify Your Email - TripLodge Universe", $htmlBody, $altBody);
    }

    /**
     * Send welcome email after verification
     */
    public function sendWelcomeEmail($to, $name)
    {
        $htmlBody = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap");
                body {
                    font-family: "Inter", Arial, sans-serif;
                    background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);
                    padding: 20px;
                }
                .container { max-width: 560px; margin: 0 auto; background: rgba(230, 149, 0, 0.08); border-radius: 24px; overflow: hidden; border: 1px solid rgba(230, 149, 0, 0.2); }
                .header { background: linear-gradient(135deg, #E69500, #CC8400); padding: 32px; text-align: center; }
                .logo { font-size: 28px; font-weight: 800; color: white; }
                .logo span { color: #FFD700; }
                .content { padding: 40px 32px; background: rgba(255,255,255,0.05); }
                .greeting { color: white; font-size: 18px; margin-bottom: 16px; }
                .greeting strong { color: #E69500; }
                .message { color: #cbd5e1; font-size: 14px; line-height: 1.6; margin-bottom: 24px; }
                .feature-list { list-style: none; padding: 0; margin: 24px 0; }
                .feature-list li { color: #cbd5e1; padding: 8px 0; border-bottom: 1px solid rgba(230, 149, 0, 0.1); }
                .button { display: inline-block; background: linear-gradient(135deg, #E69500, #CC8400); color: white; padding: 12px 28px; text-decoration: none; border-radius: 8px; font-weight: 600; }
                .footer { padding: 24px 32px; text-align: center; border-top: 1px solid rgba(230, 149, 0, 0.1); }
                .footer-text { color: #64748b; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <div class="logo">TripLodge <span>Universe</span></div>
                    <div class="header-title">Welcome Aboard! 🎉</div>
                </div>
                <div class="content">
                    <div class="greeting">Hello <strong>' . htmlspecialchars($name) . '</strong>,</div>
                    <div class="message">
                        Your email has been successfully verified! Welcome to TripLodge Universe.
                    </div>
                    <div class="message">
                        You can now:
                    </div>
                    <ul class="feature-list">
                        <li>🏨 Register your hotel property</li>
                        <li>📊 Access your analytics dashboard</li>
                        <li>🔌 Connect to 50+ OTAs</li>
                        <li>🤖 Use AI-powered dynamic pricing</li>
                        <li>📱 Manage bookings on the go</li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="' . env('APP_URL', 'http://localhost:8000') . '/login" class="button">Login to Your Account</a>
                    </div>
                    <div class="message" style="text-align: center; margin-top: 24px;">
                        Start managing your hotel like never before!
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-text">
                        &copy; ' . date('Y') . ' TripLodge Universe. All rights reserved.<br>
                        Need help? <a href="' . env('APP_URL', 'http://localhost:8000') . '/contact" style="color: #E69500;">Contact Support</a>
                    </div>
                </div>
            </div>
        </body>
        </html>';

        return $this->sendEmail($to, "🎉 Welcome to TripLodge Universe, " . $name . "!", $htmlBody);
    }

    /**
     * Send password reset OTP
     */
    public function sendPasswordResetOTP($to, $name, $otp)
    {
        $htmlBody = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap");
                body {
                    font-family: "Inter", Arial, sans-serif;
                    background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);
                    padding: 20px;
                }
                .container { max-width: 560px; margin: 0 auto; background: rgba(230, 149, 0, 0.08); border-radius: 24px; overflow: hidden; border: 1px solid rgba(230, 149, 0, 0.2); }
                .header { background: linear-gradient(135deg, #E69500, #CC8400); padding: 32px; text-align: center; }
                .logo { font-size: 28px; font-weight: 800; color: white; }
                .logo span { color: #FFD700; }
                .content { padding: 40px 32px; background: rgba(255,255,255,0.05); }
                .greeting { color: white; font-size: 18px; margin-bottom: 16px; }
                .greeting strong { color: #E69500; }
                .message { color: #cbd5e1; font-size: 14px; line-height: 1.6; margin-bottom: 24px; }
                .otp-box { background: rgba(230, 149, 0, 0.15); border: 2px dashed #E69500; border-radius: 16px; padding: 24px; text-align: center; margin: 24px 0; }
                .otp-code { font-size: 42px; font-weight: 800; color: #E69500; letter-spacing: 12px; font-family: monospace; }
                .validity { color: #64748b; font-size: 12px; text-align: center; margin: 16px 0; }
                .warning-box { background: rgba(239, 68, 68, 0.1); border-left: 3px solid #ef4444; padding: 12px 16px; border-radius: 8px; margin: 24px 0; }
                .warning-text { color: #fca5a5; font-size: 12px; }
                .button { display: inline-block; background: linear-gradient(135deg, #E69500, #CC8400); color: white; padding: 12px 28px; text-decoration: none; border-radius: 8px; font-weight: 600; }
                .footer { padding: 24px 32px; text-align: center; border-top: 1px solid rgba(230, 149, 0, 0.1); }
                .footer-text { color: #64748b; font-size: 12px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <div class="logo">TripLodge <span>Universe</span></div>
                    <div class="header-title">Password Reset Request</div>
                </div>
                <div class="content">
                    <div class="greeting">Hello <strong>' . htmlspecialchars($name) . '</strong>,</div>
                    <div class="message">
                        We received a request to reset your password. Use the following OTP to proceed with password reset.
                    </div>
                    <div class="otp-box">
                        <div class="otp-code">' . $otp . '</div>
                    </div>
                    <div class="validity">
                        ⏱️ This OTP is valid for <strong>10 minutes</strong>
                    </div>
                    <div class="warning-box">
                        <div class="warning-text">
                            ⚠️ If you didn\'t request this, please ignore this email. Your password will remain unchanged.
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-text">
                        &copy; ' . date('Y') . ' TripLodge Universe. All rights reserved.
                    </div>
                </div>
            </div>
        </body>
        </html>';

        return $this->sendEmail($to, "🔑 Reset Your Password - TripLodge Universe", $htmlBody);
    }
}
