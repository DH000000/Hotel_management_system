@extends('layouts.app')

@section('title', 'All Modules - TripLodge Universe')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4" style="color: #111111;">All <span style="color: #E69500;">15 Modules</span></h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Complete hotel operating system with everything you need</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="{{ route('modules.hotel-onboarding') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-hotel text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Hotel Onboarding</h3>
                </div>
                <p class="text-gray-500 text-sm">Auto registration, KYC verification, document upload, AI profile scoring</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.room-management') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-bed text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Room Management</h3>
                </div>
                <p class="text-gray-500 text-sm">Room types, inventory calendar, occupancy rules, bed type management</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.ai-pricing') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-chart-line text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">AI Rate & Revenue Engine</h3>
                </div>
                <p class="text-gray-500 text-sm">Dynamic pricing, demand forecasting, competitor monitoring</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.ota-integration') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-plug text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">OTA Integration Hub</h3>
                </div>
                <p class="text-gray-500 text-sm">Connect to 50+ OTAs, room mapping, rate mapping, commission tracking</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.real-time-sync') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-sync-alt text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Real-Time Sync Engine</h3>
                </div>
                <p class="text-gray-500 text-sm">Prevent overbooking, real-time inventory sync, retry queue</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.crs') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Central Reservation System</h3>
                </div>
                <p class="text-gray-500 text-sm">All bookings in one dashboard, modify/cancel, voucher generation</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.booking-calendar') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-calendar-week text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Booking Calendar</h3>
                </div>
                <p class="text-gray-500 text-sm">Daily/weekly/monthly views, color-coded status, drag-drop allocation</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.rate-parity') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Rate Parity Protection</h3>
                </div>
                <p class="text-gray-500 text-sm">Auto-detect and fix rate mismatches across all OTAs</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.payment-settlement') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-rupee-sign text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Payment & Settlement</h3>
                </div>
                <p class="text-gray-500 text-sm">Commission calculation, GST invoice, hotel payout statement</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.guest-crm') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-users text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Guest CRM Automation</h3>
                </div>
                <p class="text-gray-500 text-sm">Guest profiles, stay history, loyalty points, automated messaging</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.booking-engine') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-globe text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Hotel Website Booking Engine</h3>
                </div>
                <p class="text-gray-500 text-sm">Direct booking widget, hotel microsite, payment gateway integration</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.ai-content') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-magic text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">AI Content Optimizer</h3>
                </div>
                <p class="text-gray-500 text-sm">AI hotel descriptions, SEO optimization, multilingual content</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.review-manager') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-star text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Review & Reputation Manager</h3>
                </div>
                <p class="text-gray-500 text-sm">Collect reviews, sentiment analysis, auto-reply drafts</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.fraud-detection') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-shield-virus text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Fraud & Risk Detection</h3>
                </div>
                <p class="text-gray-500 text-sm">Fake booking detection, risk scoring, blacklisted guest alert</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

            <a href="{{ route('modules.admin-panel') }}" class="group bg-white rounded-xl p-6 shadow-sm hover:shadow-xl transition transform hover:-translate-y-1 border-l-4 border-[#E69500]">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-lg bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-crown text-xl text-[#E69500]"></i>
                    </div>
                    <h3 class="font-bold text-lg">Admin Super Panel</h3>
                </div>
                <p class="text-gray-500 text-sm">Hotel approval, OTA monitoring, revenue tracking, fraud dashboard</p>
                <span class="inline-block mt-3 text-[#E69500] text-sm group-hover:translate-x-1 transition">Learn More →</span>
            </a>

        </div>
    </div>
</div>
@endsection
