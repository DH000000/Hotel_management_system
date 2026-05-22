@extends('layouts.app')

@section('title', 'Privacy Policy - TripLodge Universe')

@section('content')

<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: #111111;">Privacy <span style="color: #E69500;">Policy</span></h1>
            <p class="text-gray-600">Last updated: January 1, 2025</p>
        </div>

        <div class="prose prose-lg max-w-none">
            <div class="bg-gray-50 p-6 rounded-xl mb-8">
                <p class="text-gray-700">At TripLodge Universe, we take your privacy seriously. This policy describes how we collect, use, and protect your personal information.</p>
            </div>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">1. Information We Collect</h2>
            <p class="text-gray-600 mb-4">We collect information you provide directly to us, including:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-4">
                <li>Name, email address, phone number, and business details</li>
                <li>Hotel information, room types, rates, and availability</li>
                <li>Guest information for booking management</li>
                <li>Payment information for subscription billing</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">2. How We Use Your Information</h2>
            <p class="text-gray-600 mb-4">We use your information to:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-4">
                <li>Provide, maintain, and improve our services</li>
                <li>Process transactions and send related information</li>
                <li>Send technical notices, updates, and support messages</li>
                <li>Respond to your comments and questions</li>
                <li>Generate analytics and insights about service usage</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">3. Data Security</h2>
            <p class="text-gray-600 mb-4">We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">4. Data Retention</h2>
            <p class="text-gray-600 mb-4">We retain your personal information for as long as your account is active or as needed to provide you services. We may retain certain information as required by law.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">5. Sharing of Information</h2>
            <p class="text-gray-600 mb-4">We do not sell your personal information. We may share your information with:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-4">
                <li>OTA partners to sync your room inventory and rates</li>
                <li>Payment processors to handle transactions</li>
                <li>Service providers who assist in our operations</li>
                <li>Law enforcement when required by law</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">6. Your Rights</h2>
            <p class="text-gray-600 mb-4">You have the right to:</p>
            <ul class="list-disc pl-6 text-gray-600 mb-4">
                <li>Access your personal information</li>
                <li>Correct inaccurate information</li>
                <li>Request deletion of your information</li>
                <li>Opt-out of marketing communications</li>
            </ul>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">7. Cookies & Tracking</h2>
            <p class="text-gray-600 mb-4">We use cookies and similar technologies to enhance your experience, analyze usage, and personalize content.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">8. Children's Privacy</h2>
            <p class="text-gray-600 mb-4">Our services are not directed to children under 18. We do not knowingly collect information from children.</p>

            <h2 class="text-2xl font-bold mt-8 mb-4" style="color: #111111;">9. Changes to This Policy</h2>
            <p class="text-gray-600 mb-4">We may update this privacy policy from time to time. We will notify you of any material changes via email or through our platform.</p>

            <div class="bg-gray-50 p-6 rounded-xl mt-8">
                <h3 class="font-bold text-lg mb-2">Contact Us</h3>
                <p class="text-gray-600">If you have questions about this Privacy Policy, please contact us at privacy@triplodge.com</p>
            </div>
        </div>
    </div>
</section>

@endsection
