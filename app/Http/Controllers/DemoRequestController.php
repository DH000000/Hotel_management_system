<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DemoRequestController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function index()
    {
        return view('demo-request');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:15',
            'hotel_name' => 'required|string|max:255',
            'hotel_type' => 'required|string',
            'number_of_rooms' => 'nullable|integer|min:1',
            'city' => 'required|string|max:255',
            'message' => 'nullable|string|min:10',
            'preferred_date' => 'nullable|date',
            'preferred_time' => 'nullable|string',
            'g-recaptcha-response' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Save demo request
        $demoRequest = DemoRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'hotel_name' => $request->hotel_name,
            'hotel_type' => $request->hotel_type,
            'number_of_rooms' => $request->number_of_rooms,
            'city' => $request->city,
            'message' => $request->message,
            'preferred_date' => $request->preferred_date,
            'preferred_time' => $request->preferred_time,
            'ip_address' => $request->ip(),
            'status' => 'pending'
        ]);

        // Send confirmation email to user
        $this->sendConfirmationEmail($demoRequest);

        // Send notification to admin
        $this->sendAdminNotification($demoRequest);

        return redirect()->route('demo-request')
            ->with('success', 'Demo request submitted successfully! Our team will contact you within 24 hours.');
    }

    private function sendConfirmationEmail($demoRequest)
    {
        $htmlBody = '
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: "Inter", Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #E69500, #CC8400); color: white; padding: 30px; text-align: center; border-radius: 15px 15px 0 0; }
                .content { background: #f9fafb; padding: 30px; border-radius: 0 0 15px 15px; }
                .button { background: #E69500; color: white; padding: 12px 30px; text-decoration: none; border-radius: 8px; display: inline-block; }
                .footer { text-align: center; padding: 20px; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Demo Request Confirmation</h2>
                </div>
                <div class="content">
                    <p>Dear <strong>' . htmlspecialchars($demoRequest->name) . '</strong>,</p>
                    <p>Thank you for requesting a demo of TripLodge Universe. We have received your request and our team will contact you shortly.</p>
                    <p><strong>Your Request Details:</strong></p>
                    <ul>
                        <li>Hotel: ' . htmlspecialchars($demoRequest->hotel_name) . '</li>
                        <li>Email: ' . htmlspecialchars($demoRequest->email) . '</li>
                        <li>Phone: ' . htmlspecialchars($demoRequest->phone) . '</li>
                    </ul>
                    <p>Our sales team will reach out to you within 24 hours to schedule the demo at your preferred time.</p>
                    <div style="text-align: center;">
                        <a href="' . env('APP_URL') . '" class="button">Visit Our Website</a>
                    </div>
                </div>
                <div class="footer">
                    <p>&copy; ' . date('Y') . ' TripLodge Universe. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>';

        $this->emailService->sendEmail($demoRequest->email, "Demo Request Confirmation - TripLodge Universe", $htmlBody);
    }

    private function sendAdminNotification($demoRequest)
    {
        $adminEmail = env('ADMIN_EMAIL', 'admin@triplodge.com');

        $htmlBody = '
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: "Inter", Arial, sans-serif; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #E69500; color: white; padding: 20px; text-align: center; }
                .content { background: #f9fafb; padding: 20px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>New Demo Request</h2>
                </div>
                <div class="content">
                    <p><strong>Name:</strong> ' . $demoRequest->name . '</p>
                    <p><strong>Email:</strong> ' . $demoRequest->email . '</p>
                    <p><strong>Phone:</strong> ' . $demoRequest->phone . '</p>
                    <p><strong>Hotel:</strong> ' . $demoRequest->hotel_name . '</p>
                    <p><strong>Hotel Type:</strong> ' . $demoRequest->hotel_type . '</p>
                    <p><strong>City:</strong> ' . $demoRequest->city . '</p>
                    <p><strong>Message:</strong> ' . nl2br(htmlspecialchars($demoRequest->message)) . '</p>
                    <p><a href="' . env('APP_URL') . '/admin/demo-requests" style="background: #E69500; color: white; padding: 10px 20px; text-decoration: none;">View Request</a></p>
                </div>
            </div>
        </body>
        </html>';

        $this->emailService->sendEmail($adminEmail, "New Demo Request - " . $demoRequest->hotel_name, $htmlBody);
    }
}
