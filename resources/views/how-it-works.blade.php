@extends('layouts.app')

@section('title', 'How It Works - TripLodge Universe')

@section('content')
<!-- Modern Hero Section -->
<section class="relative overflow-hidden min-h-[60vh] flex items-center" style="background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-96 h-96 bg-[#E69500] rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#E69500] rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 border border-[#E69500]/10 rounded-full animate-spin-slow"></div>
            <div class="absolute top-1/3 left-1/3 w-96 h-96 border border-[#E69500]/5 rounded-full animate-spin-slower"></div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#E69500]/10 backdrop-blur-sm mb-6" data-aos="fade-up">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#E69500] opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#E69500]"></span>
            </span>
            <span class="text-[#E69500] text-sm font-semibold tracking-wide">Simple Integration Process</span>
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
            Get Started in
            <span class="bg-gradient-to-r from-[#E69500] to-[#FFA726] bg-clip-text text-transparent">4 Simple Steps</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            From signup to revenue optimization - we make it effortless
        </p>
    </div>
</section>

<!-- Interactive Timeline Steps -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative">
            <!-- Vertical Line (Desktop) -->
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-gradient-to-b from-[#E69500] via-[#E69500]/50 to-transparent"></div>

            <!-- Step 1 -->
            <div class="relative mb-20" data-aos="fade-up">
                <div class="lg:grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Content -->
                    <div class="text-center lg:text-right lg:pr-12">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#E69500] to-[#FFA726] text-white text-2xl font-bold mb-6 shadow-xl">1</div>
                        <h3 class="text-2xl font-bold mb-3">Create Your Account</h3>
                        <p class="text-gray-600 mb-4">Sign up in under 2 minutes with your email. Choose your role and start your 14-day free trial instantly.</p>
                        <div class="flex flex-wrap gap-3 justify-center lg:justify-end">
                            <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-semibold">No Credit Card</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-semibold">14-Day Trial</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-semibold">Role-Based Access</span>
                        </div>
                    </div>
                    <!-- Visual -->
                    <div class="mt-6 lg:mt-0">
                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-xl border border-gray-100 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-user-plus text-4xl text-[#E69500] mb-3"></i>
                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                <i class="fas fa-clock"></i>
                                <span>2-minute setup</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Connector Dot -->
                <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-1/2 w-4 h-4 bg-[#E69500] rounded-full border-4 border-white shadow-lg"></div>
            </div>

            <!-- Step 2 -->
            <div class="relative mb-20" data-aos="fade-up" data-aos-delay="100">
                <div class="lg:grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Visual -->
                    <div class="lg:order-2 text-center lg:text-left lg:pl-12">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#E69500] to-[#FFA726] text-white text-2xl font-bold mb-6 shadow-xl">2</div>
                        <h3 class="text-2xl font-bold mb-3">Complete Hotel Onboarding</h3>
                        <p class="text-gray-600 mb-4">Add your hotel details, upload required documents, and complete KYC verification for approval.</p>
                        <div class="flex flex-wrap gap-3 justify-center lg:justify-start">
                            <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-semibold">GST Verification</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-semibold">PAN Verification</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-semibold">Bank Details</span>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="lg:order-1 mt-6 lg:mt-0">
                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-xl border border-gray-100 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-hotel text-4xl text-[#E69500] mb-3"></i>
                            <div class="flex items-center gap-2 text-sm text-gray-500">
                                <i class="fas fa-check-circle text-green-500"></i>
                                <span>Auto-approval workflow</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-1/2 w-4 h-4 bg-[#E69500] rounded-full border-4 border-white shadow-lg"></div>
            </div>

            <!-- Step 3 -->
            <div class="relative mb-20" data-aos="fade-up" data-aos-delay="200">
                <div class="lg:grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Content -->
                    <div class="text-center lg:text-right lg:pr-12">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#E69500] to-[#FFA726] text-white text-2xl font-bold mb-6 shadow-xl">3</div>
                        <h3 class="text-2xl font-bold mb-3">Connect Your OTAs</h3>
                        <p class="text-gray-600 mb-4">Integrate with 50+ OTAs including Booking.com, MakeMyTrip, Agoda, and Airbnb with one click.</p>
                        <div class="flex flex-wrap gap-3 justify-center lg:justify-end">
                            <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-semibold">Real-Time Sync</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-semibold">50+ Channels</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-semibold">Auto-Retry</span>
                        </div>
                    </div>
                    <!-- Visual -->
                    <div class="mt-6 lg:mt-0">
                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-xl border border-gray-100 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-plug text-4xl text-[#E69500] mb-3"></i>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs px-2 py-1 bg-gray-100 rounded">Booking.com</span>
                                <span class="text-xs px-2 py-1 bg-gray-100 rounded">MakeMyTrip</span>
                                <span class="text-xs px-2 py-1 bg-gray-100 rounded">Agoda</span>
                                <span class="text-xs px-2 py-1 bg-gray-100 rounded">Airbnb</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-1/2 w-4 h-4 bg-[#E69500] rounded-full border-4 border-white shadow-lg"></div>
            </div>

            <!-- Step 4 -->
            <div class="relative" data-aos="fade-up" data-aos-delay="300">
                <div class="lg:grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Visual -->
                    <div class="lg:order-2 text-center lg:text-left lg:pl-12">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-gradient-to-br from-[#E69500] to-[#FFA726] text-white text-2xl font-bold mb-6 shadow-xl">4</div>
                        <h3 class="text-2xl font-bold mb-3">Start Earning More</h3>
                        <p class="text-gray-600 mb-4">AI automatically optimizes your pricing based on demand and maximizes your revenue.</p>
                        <div class="flex flex-wrap gap-3 justify-center lg:justify-start">
                            <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-semibold">AI Pricing</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-semibold">Demand Forecast</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-600 rounded-full text-xs font-semibold">Revenue Insights</span>
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="lg:order-1 mt-6 lg:mt-0">
                        <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-xl border border-gray-100 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                            <i class="fas fa-chart-line text-4xl text-[#E69500] mb-3"></i>
                            <div class="text-2xl font-bold text-[#E69500]">+35%</div>
                            <div class="text-sm text-gray-500">Average Revenue Increase</div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-1/2 w-4 h-4 bg-[#E69500] rounded-full border-4 border-white shadow-lg"></div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Highlight Section -->
<section class="py-16 bg-gradient-to-r from-[#E69500] to-[#FFA726]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="text-white">
                <div class="text-4xl font-bold">5000+</div>
                <div class="text-sm opacity-90">Hotels Onboarded</div>
            </div>
            <div class="text-white">
                <div class="text-4xl font-bold">50+</div>
                <div class="text-sm opacity-90">OTA Integrations</div>
            </div>
            <div class="text-white">
                <div class="text-4xl font-bold">2Cr+</div>
                <div class="text-sm opacity-90">Bookings Processed</div>
            </div>
            <div class="text-white">
                <div class="text-4xl font-bold">35%</div>
                <div class="text-sm opacity-90">Avg Revenue Growth</div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Highlights -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Hotels <span class="text-[#E69500]">Love Us</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Join thousands of hotels already maximizing their revenue</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300" data-aos="fade-up">
                <div class="w-16 h-16 mx-auto rounded-full bg-[#E69500]/10 flex items-center justify-center mb-4">
                    <i class="fas fa-bolt text-2xl text-[#E69500]"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Lightning Fast Setup</h3>
                <p class="text-gray-500 text-sm">Get your hotel online in minutes, not days</p>
            </div>
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 mx-auto rounded-full bg-[#E69500]/10 flex items-center justify-center mb-4">
                    <i class="fas fa-headset text-2xl text-[#E69500]"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">24/7 Support</h3>
                <p class="text-gray-500 text-sm">Dedicated support team always ready to help</p>
            </div>
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 mx-auto rounded-full bg-[#E69500]/10 flex items-center justify-center mb-4">
                    <i class="fas fa-chart-line text-2xl text-[#E69500]"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Proven Results</h3>
                <p class="text-gray-500 text-sm">35% average revenue increase for our partners</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden" style="background: #111111;">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background: radial-gradient(circle at center, #E69500 0%, transparent 70%);"></div>
    </div>
    <div class="max-w-4xl mx-auto text-center px-4 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Get Started?</h2>
        <p class="text-gray-400 text-lg mb-8">Join thousands of hotels already using TripLodge Universe</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 bg-[#E69500] text-white hover:shadow-xl">
                <i class="fas fa-rocket"></i> Start Free Trial
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 rounded-lg font-semibold transition-all duration-300 border-2 border-[#E69500] text-[#E69500] hover:bg-[#E69500] hover:text-white">
                <i class="fas fa-headset"></i> Contact Sales
            </a>
        </div>
        <p class="text-gray-500 text-sm mt-6">No credit card required | Cancel anytime</p>
    </div>
</section>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes float-delayed {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(20px); }
    }

    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes spin-slower {
        from { transform: rotate(0deg); }
        to { transform: rotate(-360deg); }
    }

    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float-delayed { animation: float-delayed 8s ease-in-out infinite; }
    .animate-spin-slow { animation: spin-slow 20s linear infinite; }
    .animate-spin-slower { animation: spin-slower 30s linear infinite; }
</style>
@endsection
