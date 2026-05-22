@extends('layouts.app')

@section('title', 'Features - TripLodge Universe')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden py-20" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background: radial-gradient(circle at 30% 50%, #E69500 0%, transparent 50%);"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Powerful <span style="color: #E69500;">Features</span> for Your Hotel</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">Everything you need to manage, grow, and optimize your hotel business</p>
    </div>
</section>

<!-- All Features Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Feature 1 - AI Revenue Management -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4" style="border-bottom-color: #E69500;">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-robot text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">AI Revenue Management</h3>
                <p class="text-gray-600 leading-relaxed">Dynamic pricing based on real-time demand, occupancy, and competitor rates. Auto-adjust prices for maximum revenue.</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Real-time demand forecasting</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Competitor rate tracking</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Automated price optimization</li>
                </ul>
            </div>

            <!-- Feature 2 - Real-Time OTA Sync -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4" style="border-bottom-color: #E69500;">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-sync-alt text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Real-Time OTA Sync</h3>
                <p class="text-gray-600 leading-relaxed">Instant inventory and rate sync across 50+ OTAs. Never face overbooking or pricing mismatch again.</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Two-way synchronization</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Automatic retry on failure</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Real-time inventory updates</li>
                </ul>
            </div>

            <!-- Feature 3 - Central Reservation System -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4" style="border-bottom-color: #E69500;">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-calendar-alt text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Central Reservation System</h3>
                <p class="text-gray-600 leading-relaxed">All bookings from all channels in one dashboard. Manage reservations, check-ins, and check-outs seamlessly.</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Unified booking management</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Drag-drop calendar</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Automated invoicing</li>
                </ul>
            </div>

            <!-- Feature 4 - Guest CRM -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-users text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Guest CRM Automation</h3>
                <p class="text-gray-600 leading-relaxed">Automated pre-arrival, check-in, post-stay communication, and loyalty management.</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Guest profiles & history</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Automated WhatsApp messages</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Loyalty program management</li>
                </ul>
            </div>

            <!-- Feature 5 - Rate Parity Protection -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-shield-alt text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Rate Parity Protection</h3>
                <p class="text-gray-600 leading-relaxed">24/7 automated monitoring and instant fixing of rate mismatches across all connected OTAs.</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Automated rate monitoring</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Instant mismatch alerts</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Auto-fix capabilities</li>
                </ul>
            </div>

            <!-- Feature 6 - Analytics & Reports -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-chart-line text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Advanced Analytics</h3>
                <p class="text-gray-600 leading-relaxed">AI-powered forecasts for demand, occupancy, and revenue with 95% accuracy.</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Revenue analytics dashboard</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Occupancy predictions</li>
                    <li class="flex items-center gap-2 text-sm text-gray-600"><i class="fas fa-check-circle text-green-500"></i> Custom report generation</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Feature Comparison Table -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="color: #111111;">Compare <span style="color: #E69500;">Features</span></h2>
            <p class="text-gray-600 text-lg">See how TripLodge Universe stands out</p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-xl shadow-lg overflow-hidden">
                <thead style="background: #111111;">
                    <tr>
                        <th class="p-4 text-left text-white">Feature</th>
                        <th class="p-4 text-center text-white">Basic</th>
                        <th class="p-4 text-center text-white" style="background: #E69500;">Professional</th>
                        <th class="p-4 text-center text-white">Enterprise</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr class="hover:bg-gray-50"><td class="p-4 font-semibold">Room Inventory</td><td class="p-4 text-center">Up to 20</td><td class="p-4 text-center text-[#E69500] font-semibold">Unlimited</td><td class="p-4 text-center">Unlimited</td></tr>
                    <tr class="hover:bg-gray-50"><td class="p-4 font-semibold">OTA Channels</td><td class="p-4 text-center">5 Channels</td><td class="p-4 text-center text-[#E69500] font-semibold">50+ Channels</td><td class="p-4 text-center">All Channels</td></tr>
                    <tr class="hover:bg-gray-50"><td class="p-4 font-semibold">AI Pricing Engine</td><td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td><td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td><td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td></tr>
                    <tr class="hover:bg-gray-50"><td class="p-4 font-semibold">Guest CRM</td><td class="p-4 text-center">Basic</td><td class="p-4 text-center text-[#E69500] font-semibold">Advanced</td><td class="p-4 text-center">Enterprise</td></tr>
                    <tr class="hover:bg-gray-50"><td class="p-4 font-semibold">WhatsApp Automation</td><td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td><td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td><td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td></tr>
                    <tr class="hover:bg-gray-50"><td class="p-4 font-semibold">Priority Support</td><td class="p-4 text-center">Email Only</td><td class="p-4 text-center text-[#E69500] font-semibold">24/7 Priority</td><td class="p-4 text-center">Dedicated Manager</td></tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('pricing') }}" class="inline-block px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                View Pricing Plans →
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16" style="background: #111111;">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to Transform Your Hotel?</h2>
        <p class="text-gray-300 mb-8">Join 5000+ hotels already using TripLodge Universe</p>
        <a href="{{ route('register') }}" class="inline-block px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
            Start Free Trial
        </a>
    </div>
</section>
@endsection
