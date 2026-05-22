@extends('layouts.app')

@section('title', 'TripLodge Universe - AI-Powered Hotel Operating System & Channel Manager')

@section('content')


<!-- Hero Section -->
<section class="min-h-screen flex items-center relative overflow-hidden" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">

    <canvas id="animation-bg"></canvas>

    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 border border-primary/20 rounded-full animate-spin-slow"></div>
            <div class="absolute top-1/3 left-1/3 w-96 h-96 border border-primary/10 rounded-full animate-spin-slower"></div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-6 animate-fadeInUp" style="background: rgba(230, 149, 0, 0.15); border: 1px solid rgba(230, 149, 0, 0.3); backdrop-filter: blur(10px);">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    <span class="text-sm font-medium" style="color: #E69500;">✨ AI-Powered Hotel Operating System</span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6 animate-fadeInUp">
                    One Dashboard to Control Your
                    <span class="gradient-text">Hotel Empire</span>
                </h1>

                <p class="text-xl text-gray-300 mb-8 leading-relaxed animate-fadeInUp animation-delay-200">
                    The most advanced AI-powered hotel revenue, inventory and OTA automation platform.
                    Manage everything from a single dashboard and boost revenue by up to 35%.
                </p>

                <div class="flex flex-wrap gap-4 animate-fadeInUp animation-delay-400">
                    <a href="{{ route('register') }}" class="group px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 flex items-center gap-2 shadow-lg hover:shadow-xl" style="background: #E69500; color: white;">
                        <i class="fas fa-rocket group-hover:translate-x-1 transition"></i> Start Free Trial
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </a>
                    <a href="#demo" class="px-8 py-4 rounded-xl font-semibold transition-all duration-300 border-2 hover:bg-primary/10 flex items-center gap-2" style="border-color: #E69500; color: #E69500;">
                        <i class="fas fa-play"></i> Watch Demo
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap items-center gap-6 mt-8 pt-8 border-t border-gray-800 animate-fadeInUp animation-delay-600">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-shield-alt text-primary"></i>
                        <span class="text-gray-400 text-sm">99.9% Uptime</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-lock text-primary"></i>
                        <span class="text-gray-400 text-sm">Bank-Grade Security</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-headset text-primary"></i>
                        <span class="text-gray-400 text-sm">24/7 Support</span>
                    </div>
                </div>
            </div>


            <div class="relative animate-fadeInRight">
                <div class="bg-[#E69500]/20 rounded-2xl shadow-2xl p-6 relative z-10 transform hover:scale-105 transition duration-500">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-semibold text-lg" style="color: rgba(248, 248, 248, 0.7);">Live Dashboard Preview</h3>
                        <span class="text-xs px-2 py-1 rounded-full flex items-center gap-1" style="background: #E69500; color: white;">
                            <span class="relative flex h-2 w-2 mr-1">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                            </span>
                            LIVE
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-3 bg-[#E69500]/40 rounded-lg hover:bg-primary/5 transition">
                            <span class="text-sm text-white"><i class="fas fa-calendar-check text-primary mr-2"></i> Today's Bookings</span>
                            <span class="font-bold text-xl" style="color: #E69500;">24</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-[#E69500]/40    rounded-lg hover:bg-primary/5 transition">
                            <span class="text-sm text-white"><i class="fas fa-percent text-primary mr-2"></i> Occupancy Rate</span>
                            <span class="font-bold text-xl" style="color: #E69500;">78%</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-[#E69500]/40 rounded-lg hover:bg-primary/5 transition">
                            <span class="text-sm text-white"><i class="fas fa-rupee-sign text-primary mr-2"></i> Revenue Today</span>
                            <span class="font-bold text-xl" style="color: #E69500;">₹1,24,500</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-[#E69500]/40 rounded-lg">
                            <span class="text-sm text-white"><i class="fas fa-chart-line text-primary mr-2"></i> ADR (Avg Daily Rate)</span>
                            <span class="font-bold" style="color: #E69500;">₹5,187</span>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <div class="flex justify-between text-sm">
                            <span class="text-white"><i class="fas fa-plug text-primary mr-1"></i> OTA Sync Status</span>
                            <span class="text-green-500"><i class="fas fa-check-circle"></i> All 50+ Channels Connected</span>
                        </div>
                        <div class="mt-2 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full rounded-full" style="width: 100%; background: #E69500;"></div>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 w-64 h-64 rounded-full blur-3xl opacity-20 animate-pulse" style="background: #E69500;"></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-64 h-64 bg-[#E69500] rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#E69500] rounded-full filter blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <!-- Section Title -->
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-[#E69500] font-semibold text-sm uppercase tracking-wider">Our Impact</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2" style="color: #111111;">
                Trusted by <span style="color: #E69500;">Industry Leaders</span>
            </h2>
            <p class="text-gray-500 mt-3 max-w-2xl mx-auto">Real numbers that speak for themselves</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
            <!-- Stat 1 - Hotels -->
            <div class="stats-card group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#E69500]/0 to-[#E69500]/0 group-hover:from-[#E69500]/5 group-hover:to-[#E69500]/10 transition-all duration-500"></div>
                <div class="relative z-10">

                    <div class="counter-wrapper">
                        <span class="stat-number text-4xl md:text-5xl font-extrabold mb-2 inline-block" style="color: #E69500;" data-target="5000">0</span>
                        <span class="text-4xl md:text-5xl font-extrabold" style="color: #E69500;">+</span>
                    </div>
                    <div class="text-gray-800 font-semibold text-lg mt-2">Hotels Trust Us</div>
                    <div class="text-sm text-gray-400 mt-1">Across India</div>
                    <div class="mt-3 flex items-center justify-center gap-1 text-green-500 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-arrow-up"></i>
                        <span>+24% this year</span>
                    </div>
                </div>
            </div>

            <!-- Stat 2 - OTA Integrations -->
            <div class="stats-card group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#E69500]/0 to-[#E69500]/0 group-hover:from-[#E69500]/5 group-hover:to-[#E69500]/10 transition-all duration-500"></div>
                <div class="relative z-10">

                    <div class="counter-wrapper">
                        <span class="stat-number text-4xl md:text-5xl font-extrabold mb-2 inline-block" style="color: #E69500;" data-target="50">0</span>
                        <span class="text-4xl md:text-5xl font-extrabold" style="color: #E69500;">+</span>
                    </div>
                    <div class="text-gray-800 font-semibold text-lg mt-2">OTA Integrations</div>
                    <div class="text-sm text-gray-400 mt-1">Booking.com, MMT, Agoda + more</div>
                    <div class="mt-3 flex flex-wrap items-center justify-center gap-1 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="px-2 py-0.5 bg-green-100 text-green-600 rounded-full">Booking.com</span>
                        <span class="px-2 py-0.5 bg-blue-100 text-blue-600 rounded-full">MakeMyTrip</span>
                    </div>
                </div>
            </div>

            <!-- Stat 3 - Bookings Processed -->
            <div class="stats-card group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#E69500]/0 to-[#E69500]/0 group-hover:from-[#E69500]/5 group-hover:to-[#E69500]/10 transition-all duration-500"></div>
                <div class="relative z-10">

                    <div class="counter-wrapper">
                        <span class="stat-number text-4xl md:text-5xl font-extrabold mb-2 inline-block" style="color: #E69500;" data-target="200">0</span>
                        <span class="text-2xl md:text-3xl font-extrabold" style="color: #E69500;">Lacs+</span>
                    </div>
                    <div class="text-gray-800 font-semibold text-lg mt-2">Bookings Processed</div>
                    <div class="text-sm text-gray-400 mt-1">Annually</div>
                    <div class="mt-3 flex items-center justify-center gap-1 text-green-500 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-chart-line"></i>
                        <span>89% growth YoY</span>
                    </div>
                </div>
            </div>

            <!-- Stat 4 - Revenue Growth -->
            <div class="stats-card group text-center p-6 rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-[#E69500]/0 to-[#E69500]/0 group-hover:from-[#E69500]/5 group-hover:to-[#E69500]/10 transition-all duration-500"></div>
                <div class="relative z-10">

                    <div class="counter-wrapper">
                        <span class="stat-number text-4xl md:text-5xl font-extrabold mb-2 inline-block" style="color: #E69500;" data-target="35">0</span>
                        <span class="text-4xl md:text-5xl font-extrabold" style="color: #E69500;">%</span>
                    </div>
                    <div class="text-gray-800 font-semibold text-lg mt-2">Revenue Growth</div>
                    <div class="text-sm text-gray-400 mt-1">Average Increase</div>
                    <div class="mt-3 flex items-center justify-center gap-1 text-green-500 text-xs opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <i class="fas fa-trophy"></i>
                        <span>Industry best</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<style>
    /* Stats Card Hover Effects */
    .stats-card {
        position: relative;
        overflow: hidden;
    }

    .stats-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(230, 149, 0, 0.1), transparent);
        transition: left 0.5s ease;
    }

    .stats-card:hover::before {
        left: 100%;
    }

    /* Counter Animation */
    @keyframes countUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .stat-number {
        display: inline-block;
        animation: countUp 0.6s ease-out;
    }
</style>

<script>
    // Counter Animation on Scroll
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            let count = 0;
            const increment = target / speed;

            const updateCount = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.floor(count);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        };

        // Intersection Observer for scroll animation
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number');
                    counters.forEach(counter => animateCounter(counter));
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.grid');
        if (statsSection) {
            observer.observe(statsSection);
        }
    });
</script>


<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4" style="color: #111111;">Complete Hotel <span style="color: #E69500;">Operating System</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Everything you need to manage, grow, and optimize your hotel business</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4" style="border-bottom-color: #E69500;">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-robot text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">AI Revenue Management</h3>
                <p class="text-gray-600 leading-relaxed">Dynamic pricing based on real-time demand, occupancy, and competitor rates. Auto-adjust prices for maximum revenue.</p>
                <div class="mt-4 flex items-center text-primary text-sm font-semibold">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4" style="border-bottom-color: #E69500;">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-sync-alt text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Real-Time OTA Sync</h3>
                <p class="text-gray-600 leading-relaxed">Instant inventory and rate sync across 50+ OTAs. Never face overbooking or pricing mismatch again.</p>
                <div class="mt-4 flex items-center text-primary text-sm font-semibold">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-b-4" style="border-bottom-color: #E69500;">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-chart-line text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Predictive Analytics</h3>
                <p class="text-gray-600 leading-relaxed">AI-powered forecasts for demand, occupancy, and revenue with 95% accuracy to optimize pricing.</p>
                <div class="mt-4 flex items-center text-primary text-sm font-semibold">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-shield-alt text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Rate Parity Protection</h3>
                <p class="text-gray-600 leading-relaxed">24/7 automated monitoring and instant fixing of rate mismatches across all connected OTAs.</p>
                <div class="mt-4 flex items-center text-primary text-sm font-semibold">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-users text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Guest CRM Automation</h3>
                <p class="text-gray-600 leading-relaxed">Automated pre-arrival, check-in, post-stay communication, and loyalty management.</p>
                <div class="mt-4 flex items-center text-primary text-sm font-semibold">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 rounded-xl flex items-center justify-center mb-6 transition group-hover:scale-110" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-credit-card text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #111111;">Smart Settlements</h3>
                <p class="text-gray-600 leading-relaxed">Auto-reconciliation of OTA commissions, GST calculations, and automated hotel payouts.</p>
                <div class="mt-4 flex items-center text-primary text-sm font-semibold">
                    Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- All 15 Modules Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Powerful Modules</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4" style="color: #111111;">15 Integrated <span style="color: #E69500;">Modules</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Everything you need in one unified platform</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-hotel text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Hotel Onboarding</h4>
                <p class="text-xs text-gray-500 mt-1">Auto KYC & Verification</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-bed text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Room Management</h4>
                <p class="text-xs text-gray-500 mt-1">Inventory & Occupancy</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-chart-line text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">AI Pricing Engine</h4>
                <p class="text-xs text-gray-500 mt-1">Dynamic Rates</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-plug text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">OTA Integration</h4>
                <p class="text-xs text-gray-500 mt-1">50+ Channels</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-bolt text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Real-Time Sync</h4>
                <p class="text-xs text-gray-500 mt-1">Instant Updates</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-calendar-alt text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Central Reservation</h4>
                <p class="text-xs text-gray-500 mt-1">CRS System</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-chart-pie text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Analytics</h4>
                <p class="text-xs text-gray-500 mt-1">Revenue Insights</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-user-friends text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Guest CRM</h4>
                <p class="text-xs text-gray-500 mt-1">Automation</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-globe text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Booking Engine</h4>
                <p class="text-xs text-gray-500 mt-1">Direct Bookings</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-star text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Review Manager</h4>
                <p class="text-xs text-gray-500 mt-1">Reputation</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-shield-virus text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Fraud Detection</h4>
                <p class="text-xs text-gray-500 mt-1">Risk Scoring</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-balance-scale text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Rate Parity</h4>
                <p class="text-xs text-gray-500 mt-1">Auto Protection</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-file-invoice-dollar text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Settlements</h4>
                <p class="text-xs text-gray-500 mt-1">Auto Reconciliation</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-magic text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">AI Content</h4>
                <p class="text-xs text-gray-500 mt-1">Auto Generate</p>
            </div>
            <div class="group text-center p-4 rounded-xl hover:shadow-lg transition-all cursor-pointer">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-crown text-2xl" style="color: #E69500;"></i>
                </div>
                <h4 class="font-semibold text-sm" style="color: #111111;">Admin Panel</h4>
                <p class="text-xs text-gray-500 mt-1">Super Control</p>
            </div>
        </div>
    </div>
</section>

<!-- OTA Integrations Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Integrations</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4" style="color: #111111;">Connect to <span style="color: #E69500;">50+ OTAs</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Seamless integration with all major booking platforms</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-hotel text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">TripLodge</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-building text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">MakeMyTrip</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-plane text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Goibibo</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-book text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Booking.com</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-globe-asia text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Expedia</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-umbrella-beach text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Agoda</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-home text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Airbnb</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-ticket-alt text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">EaseMyTrip</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-broom text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Cleartrip</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-church text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Yatra</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-mobile-alt text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Direct Booking</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center shadow hover:shadow-lg transition transform hover:-translate-y-1">
                <i class="fas fa-briefcase text-3xl text-primary mb-2"></i>
                <p class="font-semibold text-sm">Corporate Portal</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Simple Process</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4" style="color: #111111;">How <span style="color: #E69500;">TripLodge</span> Works</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Get started in 4 simple steps</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center text-2xl font-bold text-white mb-4 group-hover:scale-110 transition" style="background: #E69500;">1</div>
                <h3 class="font-bold text-lg mb-2">Sign Up Free</h3>
                <p class="text-gray-500 text-sm">Create your account in 2 minutes</p>
            </div>
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center text-2xl font-bold text-white mb-4 group-hover:scale-110 transition" style="background: #E69500;">2</div>
                <h3 class="font-bold text-lg mb-2">Add Your Hotel</h3>
                <p class="text-gray-500 text-sm">Complete onboarding & KYC</p>
            </div>
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center text-2xl font-bold text-white mb-4 group-hover:scale-110 transition" style="background: #E69500;">3</div>
                <h3 class="font-bold text-lg mb-2">Connect OTAs</h3>
                <p class="text-gray-500 text-sm">Link all your booking channels</p>
            </div>
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center text-2xl font-bold text-white mb-4 group-hover:scale-110 transition" style="background: #E69500;">4</div>
                <h3 class="font-bold text-lg mb-2">Start Earning</h3>
                <p class="text-gray-500 text-sm">AI optimizes your revenue</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Pricing</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4" style="color: #111111;">Simple, <span style="color: #E69500;">Transparent</span> Pricing</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Choose the perfect plan for your hotel business</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Starter Plan -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-2">Starter</h3>
                    <p class="text-gray-500 mb-4">Perfect for small hotels</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold" style="color: #E69500;">₹999</span>
                        <span class="text-gray-500">/month</span>
                    </div>
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

            <!-- Professional Plan (Popular) -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-105 relative">
                <div class="absolute top-0 right-0 bg-primary text-white px-4 py-1 rounded-bl-lg text-sm font-semibold">Most Popular</div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-2">Professional</h3>
                    <p class="text-gray-500 mb-4">Best for growing hotels</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold" style="color: #E69500;">₹2,999</span>
                        <span class="text-gray-500">/month</span>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Unlimited Rooms</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> 50+ OTA Channels</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Advanced Analytics</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Priority Support</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> AI Pricing Engine</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> WhatsApp Automation</li>
                    </ul>
                    <a href="{{ route('register') }}" class="block text-center py-3 rounded-xl font-semibold transition" style="background: #E69500; color: white;">Start Free Trial</a>
                </div>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="p-8">
                    <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                    <p class="text-gray-500 mb-4">For hotel chains</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold" style="color: #E69500;">Custom</span>
                    </div>
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

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Testimonials</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-2 mb-4" style="color: #111111;">Trusted by <span style="color: #E69500;">5000+</span> Hoteliers</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">What our customers say about us</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-700 mb-4">"TripLodge Universe increased our revenue by 42% in just 3 months. The AI pricing engine is a game-changer!"</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold">RS</div>
                    <div>
                        <h4 class="font-bold">Rajesh Sharma</h4>
                        <p class="text-sm text-gray-500">Owner, Grand Hyatt Mumbai</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-700 mb-4">"Real-time OTA sync saved us from overbooking multiple times. Best investment we made for our hotel."</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold">PV</div>
                    <div>
                        <h4 class="font-bold">Priya Verma</h4>
                        <p class="text-sm text-gray-500">Director, The Leela Palace</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition">
                <div class="flex items-center gap-1 mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-700 mb-4">"The guest CRM automation saved us 20+ hours weekly. Our response time improved by 80%."</p>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold">AS</div>
                    <div>
                        <h4 class="font-bold">Ankit Singh</h4>
                        <p class="text-sm text-gray-500">GM, Radisson Blu</p>
                    </div>
                </div>
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
        <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">Ready to Transform Your <span style="color: #E69500;">Hotel Business</span>?</h2>
        <p class="text-xl text-gray-300 mb-8">Join 5,000+ hotels already maximizing revenue with TripLodge Universe</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-semibold transition transform hover:scale-105 shadow-lg" style="background: #E69500; color: white;">
                <i class="fas fa-rocket"></i> Start Your 14-Day Free Trial
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-semibold transition border-2 text-white hover:bg-white/10" style="border-color: #E69500;">
                <i class="fas fa-headset"></i> Contact Sales
            </a>
        </div>
        <p class="text-gray-500 text-sm mt-6">No credit card required | Cancel anytime | 14-day free trial</p>
    </div>
</section>

<!-- Animation Styles -->
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes spin-slower {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(-360deg);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }

    .animate-spin-slower {
        animation: spin-slower 30s linear infinite;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .animation-delay-400 {
        animation-delay: 0.4s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .animation-delay-600 {
        animation-delay: 0.6s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .gradient-text {
        background: linear-gradient(135deg, #E69500 0%, #FFA726 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
    }
</style>

@endsection
