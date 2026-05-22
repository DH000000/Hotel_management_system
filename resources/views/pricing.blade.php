@extends('layouts.app')

@section('title', 'Pricing - TripLodge Universe')

@section('content')
<!-- Hero -->
<section class="relative overflow-hidden py-20" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Simple, <span style="color: #E69500;">Transparent</span> Pricing</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">Choose the perfect plan for your hotel business</p>
    </div>
</section>

<!-- Pricing Cards -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Starter -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-2">Starter</h3>
                    <p class="text-gray-500 mb-4">Perfect for small hotels</p>
                    <div class="mb-6"><span class="text-4xl font-bold" style="color: #E69500;">₹999</span><span class="text-gray-500">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Up to 20 Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> 5 OTA Channels</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Basic Analytics</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Email Support</li>
                        <li class="flex items-center gap-2"><i class="fas fa-times-circle text-gray-300"></i> AI Pricing Engine</li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center py-3 rounded-xl font-semibold border-2 transition" style="border-color: #E69500; color: #E69500;">Get Started</a>
                </div>
            </div>
            <!-- Professional (Popular) -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-105 relative">
                <div class="absolute top-0 right-0 bg-[#E69500] text-white px-4 py-1 rounded-bl-lg text-sm font-semibold">Most Popular</div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-2">Professional</h3>
                    <p class="text-gray-500 mb-4">Best for growing hotels</p>
                    <div class="mb-6"><span class="text-4xl font-bold" style="color: #E69500;">₹2,999</span><span class="text-gray-500">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Unlimited Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> 50+ OTA Channels</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Advanced Analytics</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Priority Support</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> AI Pricing Engine</li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center py-3 rounded-xl font-semibold transition" style="background: #E69500; color: white;">Start Free Trial</a>
                </div>
            </div>
            <!-- Enterprise -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                    <p class="text-gray-500 mb-4">For hotel chains</p>
                    <div class="mb-6"><span class="text-4xl font-bold" style="color: #E69500;">Custom</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Multi-Property</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Dedicated Manager</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Custom Integrations</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> 24/7 Phone Support</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> White-Label Solution</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="block text-center py-3 rounded-xl font-semibold border-2 transition" style="border-color: #E69500; color: #E69500;">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
