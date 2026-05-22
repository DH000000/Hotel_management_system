<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|min:10|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Store in database
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        // Optional: Send email notification
        try {
            // This will work after configuring mail
            /*
            Mail::send('emails.contact-notification', ['contact' => $contact], function ($mail) use ($contact) {
                $mail->to('admin@triplodge.com')
                     ->subject('New Contact Form Submission: ' . $contact->subject);
            });
            */
        } catch (\Exception $e) {
            // Log error but don't stop execution
            \Log::error('Email sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Thank you for contacting us! We will get back to you within 24 hours.');
    }
}
