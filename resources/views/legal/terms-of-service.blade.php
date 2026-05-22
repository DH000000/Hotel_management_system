@extends('layouts.app')

@section('title', 'Terms of Service - TripLodge Universe')

@section('content')

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: #111111;">Terms of <span style="color: #E69500;">Service</span></h1>
            <p class="text-gray-600">Last updated: January 1, 2025</p>
        </div>

        <div class="prose prose-lg max-w-none">
            <div class="bg-gray-50 p-6 rounded-xl mb-8">
                <p class="text-gray-700">Welcome to TripLodge Universe. By using our platform, you agree to these terms. Please read them carefully.</p>
            </div>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">1. Acceptance of Terms</h2>
            <p class="text-gray-600 mb-4">By accessing or using TripLodge Universe's services, you agree to be bound by these Terms of Service and all applicable laws and regulations.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">2. Description of Service</h2>
            <p class="text-gray-600 mb-4">TripLodge Universe provides a hotel operating system including channel management, AI pricing, booking engine, guest CRM, and related services.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">3. User Accounts</h2>
            <p class="text-gray-600 mb-4">You must create an account to use our services. You are responsible for maintaining the confidentiality of your account credentials.</p>
            <ul class="list-disc pl-6 text-gray-600 mb-4">
                <li>You must be at least 18 years old</li>
                <li>You must provide accurate information</li>
                <li>You are responsible for all activity under your account</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">4. Subscription & Payments</h2>
            <p class="text-gray-600 mb-4">Our services are available on a subscription basis. Fees are billed in advance on a monthly or annual basis.</p>
            <ul class="list-disc pl-6 text-gray-600 mb-4">
                <li>All fees are non-refundable except as required by law</li>
                <li>We may change our fees with 30 days notice</li>
                <li>You are responsible for all taxes applicable to your subscription</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">5. Cancellation & Termination</h2>
            <p class="text-gray-600 mb-4">You may cancel your subscription at any time. Cancellation will take effect at the end of your current billing period.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">6. Data Privacy</h2>
            <p class="text-gray-600 mb-4">Your privacy is important to us. Please review our Privacy Policy to understand how we collect and use your data.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">7. Limitation of Liability</h2>
            <p class="text-gray-600 mb-4">To the maximum extent permitted by law, TripLodge Universe shall not be liable for any indirect, incidental, or consequential damages.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">8. Governing Law</h2>
            <p class="text-gray-600 mb-4">These terms shall be governed by the laws of India. Any disputes shall be subject to the exclusive jurisdiction of courts in Gurugram, Haryana.</p>

            <div class="bg-gray-50 p-6 rounded-xl mt-8">
                <h3 class="font-bold text-lg mb-2">Contact Us</h3>
                <p class="text-gray-600">If you have any questions about these Terms, please contact us at legal@triplodge.com</p>
            </div>
        </div>
    </div>
</section>

@endsection
