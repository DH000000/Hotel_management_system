@extends('layouts.app')

@section('title', 'About Us - TripLodge Universe')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background: radial-gradient(circle at 30% 50%, #E69500 0%, transparent 50%);"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-20 relative z-10">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 animate-fadeInUp">About <span style="color: #E69500;">TripLodge Universe</span></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto animate-fadeInUp animation-delay-200">India's most advanced AI-powered hotel revenue, inventory and OTA automation platform.</p>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeInRight">
                <span class="text-primary font-semibold text-sm uppercase tracking-wider">Our Mission</span>
                <h2 class="text-4xl font-bold mt-2 mb-4" style="color: #111111;">Revolutionizing Hotel Management with <span style="color: #E69500;">AI Technology</span></h2>
                <p class="text-gray-600 leading-relaxed mb-6">Founded in 2020, TripLodge Universe has grown to become India's leading hotel operating system, serving over 5,000+ hotels across the country. Our mission is to empower hoteliers with cutting-edge technology that simplifies operations, maximizes revenue, and delivers exceptional guest experiences.</p>
                <p class="text-gray-600 leading-relaxed mb-6">We believe that hotel technology should be intelligent, intuitive, and accessible to all. That's why we've built an all-in-one platform that combines AI-driven pricing, real-time OTA synchronization, guest CRM, and powerful analytics.</p>
                <div class="flex gap-4">
                    <div>
                        <div class="text-3xl font-bold" style="color: #E69500;">5,000+</div>
                        <div class="text-gray-500 text-sm">Hotels Trust Us</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold" style="color: #E69500;">50+</div>
                        <div class="text-gray-500 text-sm">Team Members</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold" style="color: #E69500;">4.9</div>
                        <div class="text-gray-500 text-sm">Customer Rating</div>
                    </div>
                </div>
            </div>
            <div class="relative animate-fadeInLeft">
                <div class="bg-gray-100 rounded-2xl p-8 relative">
                    <i class="fas fa-quote-left text-4xl text-primary/30 mb-4"></i>
                    <p class="text-gray-700 italic text-lg">"We started TripLodge Universe with a simple vision - to help hoteliers focus on what they do best: providing exceptional hospitality, while we handle the technology."</p>
                    <div class="flex items-center gap-3 mt-6">
                        <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold">TK</div>
                        <div>
                            <h4 class="font-bold">Tarun Kumar</h4>
                            <p class="text-sm text-gray-500">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-4 -right-4 w-32 h-32 rounded-full blur-2xl opacity-20" style="background: #E69500;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Our Values</span>
            <h2 class="text-4xl font-bold mt-2 mb-4" style="color: #111111;">What Drives <span style="color: #E69500;">Us</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Core principles that guide everything we do</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-lightbulb text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Innovation</h3>
                <p class="text-gray-500 text-sm">Constantly pushing boundaries with AI technology</p>
            </div>
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-handshake text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Integrity</h3>
                <p class="text-gray-500 text-sm">Transparent pricing and honest partnerships</p>
            </div>
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-tachometer-alt text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Excellence</h3>
                <p class="text-gray-500 text-sm">Delivering best-in-class solutions</p>
            </div>
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-users text-3xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Customer First</h3>
                <p class="text-gray-500 text-sm">Our customers' success is our success</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <span class="text-primary font-semibold text-sm uppercase tracking-wider">Leadership</span>
            <h2 class="text-4xl font-bold mt-2 mb-4" style="color: #111111;">Meet Our <span style="color: #E69500;">Team</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Passionate experts dedicated to your success</p>
        </div>

        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-end justify-center overflow-hidden mb-4">
                    <i class="fas fa-user-circle text-7xl text-white mt-6"></i>
                </div>
                <h3 class="font-bold text-lg">Tarun Kumar</h3>
                <p class="text-primary text-sm">Founder & CEO</p>
                <p class="text-gray-500 text-sm mt-2">Ex-Google, IIT Delhi</p>
            </div>
            <div class="text-center group">
                <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-end justify-center overflow-hidden mb-4">
                    <i class="fas fa-user-circle text-7xl text-white mt-6"></i>
                </div>
                <h3 class="font-bold text-lg">Priya Sharma</h3>
                <p class="text-primary text-sm">CTO</p>
                <p class="text-gray-500 text-sm mt-2">Ex-Microsoft, IIT Bombay</p>
            </div>
            <div class="text-center group">
                <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-end justify-center overflow-hidden mb-4">
                    <i class="fas fa-user-circle text-7xl text-white mt-6"></i>
                </div>
                <h3 class="font-bold text-lg">Amit Patel</h3>
                <p class="text-primary text-sm">Head of Sales</p>
                <p class="text-gray-500 text-sm mt-2">15+ years experience</p>
            </div>
            <div class="text-center group">
                <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-r from-primary to-primary-dark flex items-end justify-center overflow-hidden mb-4">
                    <i class="fas fa-user-circle text-7xl text-white mt-6"></i>
                </div>
                <h3 class="font-bold text-lg">Neha Gupta</h3>
                <p class="text-primary text-sm">Customer Success</p>
                <p class="text-gray-500 text-sm mt-2">Ex-OYO, IIM Ahmedabad</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20" style="background: #111111;">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Join Us in <span style="color: #E69500;">Revolutionizing</span> Hospitality</h2>
        <p class="text-gray-300 text-lg mb-8">Be part of India's fastest-growing hotel technology platform</p>
        <a href="{{ route('careers') }}" class="inline-flex items-center gap-2 px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
            <i class="fas fa-briefcase"></i> View Open Positions
        </a>
    </div>
</section>

@endsection
