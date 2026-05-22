@extends('layouts.app')

@section('title', 'Contact Us - TripLodge Universe')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">
    <div class="max-w-7xl mx-auto px-4 py-16 relative z-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Contact <span style="color: #E69500;">Us</span></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">We're here to help and answer any question you might have</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-12">

            <!-- Contact Info -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-2xl p-8 sticky top-24">
                    <h2 class="text-2xl font-bold mb-6" style="color: #111111;">Get in Touch</h2>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: rgba(230, 149, 0, 0.1);">
                                <i class="fas fa-map-marker-alt text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Visit Us</h3>
                                <p class="text-gray-600 text-sm">WeWork, 5th Floor, MG Road,<br>Gurugram, Haryana - 122001</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: rgba(230, 149, 0, 0.1);">
                                <i class="fas fa-phone-alt text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Call Us</h3>
                                <p class="text-gray-600 text-sm">+91 1800 123 4567 (Toll Free)</p>
                                <p class="text-gray-600 text-sm">+91 98765 43210 (Sales)</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: rgba(230, 149, 0, 0.1);">
                                <i class="fas fa-envelope text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Email Us</h3>
                                <p class="text-gray-600 text-sm">support@triplodge.com</p>
                                <p class="text-gray-600 text-sm">sales@triplodge.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: rgba(230, 149, 0, 0.1);">
                                <i class="fas fa-clock text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Support Hours</h3>
                                <p class="text-gray-600 text-sm">Monday - Friday: 9 AM - 8 PM</p>
                                <p class="text-gray-600 text-sm">Saturday: 10 AM - 6 PM</p>
                                <p class="text-gray-600 text-sm">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t">
                        <h3 class="font-semibold mb-3">Follow Us</h3>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white border rounded-2xl p-8 shadow-lg">
                    <h2 class="text-2xl font-bold mb-2" style="color: #111111;">Send us a Message</h2>
                    <p class="text-gray-600 mb-6">Fill out the form below and we'll get back to you within 24 hours.</p>

                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-600">
                            <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mt-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                                <input type="tel" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Subject *</label>
                                <select name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                                    <option value="">Select Subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="sales">Sales & Pricing</option>
                                    <option value="support">Technical Support</option>
                                    <option value="partnership">Partnership</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                            <textarea name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition" placeholder="Tell us how we can help..."></textarea>
                        </div>

                        <button type="submit" class="mt-6 px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.0000000000005!2d77.00000000000001!3d28.000000000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v0000000000000!5m2!1sen!2sin"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

@endsection
