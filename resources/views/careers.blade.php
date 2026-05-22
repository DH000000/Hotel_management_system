@extends('layouts.app')

@section('title', 'Careers - TripLodge Universe')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">
    <div class="max-w-7xl mx-auto px-4 py-16 relative z-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Join Our <span style="color: #E69500;">Team</span></h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">Help us revolutionize the hospitality industry with cutting-edge technology</p>
        </div>
    </div>
</section>

<!-- Why Join Us -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4" style="color: #111111;">Why Work at <span style="color: #E69500;">TripLodge</span>?</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">We're building India's most advanced hotel technology platform</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6 border rounded-xl hover:shadow-lg transition">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-rocket text-2xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Fast-Growing Startup</h3>
                <p class="text-gray-500">Be part of India's fastest-growing hotel tech company</p>
            </div>
            <div class="text-center p-6 border rounded-xl hover:shadow-lg transition">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-brain text-2xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Cutting-Edge Tech</h3>
                <p class="text-gray-500">Work with AI, Machine Learning & Cloud technologies</p>
            </div>
            <div class="text-center p-6 border rounded-xl hover:shadow-lg transition">
                <div class="w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4" style="background: rgba(230, 149, 0, 0.1);">
                    <i class="fas fa-chart-line text-2xl" style="color: #E69500;"></i>
                </div>
                <h3 class="font-bold text-lg mb-2">Growth Opportunities</h3>
                <p class="text-gray-500">Rapid career growth and learning opportunities</p>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4" style="color: #111111;">Open <span style="color: #E69500;">Positions</span></h2>
            <p class="text-gray-600 text-lg">Join our mission to transform hotel management</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition cursor-pointer group">
                <div class="flex flex-wrap justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold group-hover:text-primary transition">Senior Software Engineer</h3>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <span class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-primary mr-1"></i> Gurugram</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-briefcase text-primary mr-1"></i> Full-time</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-code text-primary mr-1"></i> Engineering</span>
                        </div>
                        <p class="text-gray-600 mt-3">Looking for an experienced backend engineer with expertise in Laravel, Node.js, and database design.</p>
                    </div>
                    <a href="#" class="mt-4 md:mt-0 px-6 py-2 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">Apply Now</a>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition cursor-pointer group">
                <div class="flex flex-wrap justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold group-hover:text-primary transition">AI/ML Engineer</h3>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <span class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-primary mr-1"></i> Bangalore</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-briefcase text-primary mr-1"></i> Full-time</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-brain text-primary mr-1"></i> AI/ML</span>
                        </div>
                        <p class="text-gray-600 mt-3">Build and optimize pricing prediction models using machine learning algorithms.</p>
                    </div>
                    <a href="#" class="mt-4 md:mt-0 px-6 py-2 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">Apply Now</a>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition cursor-pointer group">
                <div class="flex flex-wrap justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold group-hover:text-primary transition">Product Manager</h3>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <span class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-primary mr-1"></i> Gurugram</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-briefcase text-primary mr-1"></i> Full-time</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-tasks text-primary mr-1"></i> Product</span>
                        </div>
                        <p class="text-gray-600 mt-3">Drive product strategy and feature development for our hotel operating system.</p>
                    </div>
                    <a href="#" class="mt-4 md:mt-0 px-6 py-2 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">Apply Now</a>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition cursor-pointer group">
                <div class="flex flex-wrap justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold group-hover:text-primary transition">Sales Executive</h3>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <span class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-primary mr-1"></i> Mumbai</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-briefcase text-primary mr-1"></i> Full-time</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-chart-line text-primary mr-1"></i> Sales</span>
                        </div>
                        <p class="text-gray-600 mt-3">Drive business growth by acquiring new hotel partners across India.</p>
                    </div>
                    <a href="#" class="mt-4 md:mt-0 px-6 py-2 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">Apply Now</a>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 hover:shadow-lg transition cursor-pointer group">
                <div class="flex flex-wrap justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold group-hover:text-primary transition">Customer Success Manager</h3>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <span class="text-sm text-gray-500"><i class="fas fa-map-marker-alt text-primary mr-1"></i> Remote</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-briefcase text-primary mr-1"></i> Full-time</span>
                            <span class="text-sm text-gray-500"><i class="fas fa-headset text-primary mr-1"></i> Support</span>
                        </div>
                        <p class="text-gray-600 mt-3">Ensure our hotel partners succeed with our platform and maximize their revenue.</p>
                    </div>
                    <a href="#" class="mt-4 md:mt-0 px-6 py-2 border-2 border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-gray-500">Don't see the right fit? <a href="#" class="text-primary font-semibold">Send us your resume</a></p>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4" style="color: #111111;">Perks & <span style="color: #E69500;">Benefits</span></h2>
            <p class="text-gray-600 text-lg">We take care of our team members</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6">
            <div class="text-center">
                <i class="fas fa-medal text-4xl text-primary mb-3"></i>
                <h3 class="font-semibold">Competitive Salary</h3>
                <p class="text-sm text-gray-500">Best in industry</p>
            </div>
            <div class="text-center">
                <i class="fas fa-heartbeat text-4xl text-primary mb-3"></i>
                <h3 class="font-semibold">Health Insurance</h3>
                <p class="text-sm text-gray-500">Family coverage</p>
            </div>
            <div class="text-center">
                <i class="fas fa-laptop text-4xl text-primary mb-3"></i>
                <h3 class="font-semibold">Work from Home</h3>
                <p class="text-sm text-gray-500">Flexible options</p>
            </div>
            <div class="text-center">
                <i class="fas fa-chart-line text-4xl text-primary mb-3"></i>
                <h3 class="font-semibold">Stock Options</h3>
                <p class="text-sm text-gray-500">Ownership mindset</p>
            </div>
        </div>
    </div>
</section>

@endsection
