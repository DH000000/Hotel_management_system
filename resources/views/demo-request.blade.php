@extends('layouts.app')

@section('title', 'Request a Demo - TripLodge Universe')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden py-16" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Request a <span style="color: #E69500;">Demo</span></h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">See how TripLodge Universe can transform your hotel business</p>
    </div>
</section>

<!-- Demo Request Form -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <div class="p-8">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#E69500]/10 mb-4">
                        <i class="fas fa-calendar-alt text-2xl text-[#E69500]"></i>
                    </div>
                    <h2 class="text-2xl font-bold" style="color: #111111;">Schedule Your Free Demo</h2>
                    <p class="text-gray-500 mt-2">Fill out the form and our team will contact you within 24 hours</p>
                </div>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-600">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        @foreach($errors->all() as $error)
                            <p class="text-red-600 text-sm"><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('demo-request.submit') }}">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number *</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Hotel Name *</label>
                            <input type="text" name="hotel_name" value="{{ old('hotel_name') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Hotel Type *</label>
                            <select name="hotel_type" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                <option value="">Select Hotel Type</option>
                                <option value="hotel" {{ old('hotel_type') == 'hotel' ? 'selected' : '' }}>Hotel</option>
                                <option value="resort" {{ old('hotel_type') == 'resort' ? 'selected' : '' }}>Resort</option>
                                <option value="homestay" {{ old('hotel_type') == 'homestay' ? 'selected' : '' }}>Homestay</option>
                                <option value="villa" {{ old('hotel_type') == 'villa' ? 'selected' : '' }}>Villa</option>
                                <option value="hostel" {{ old('hotel_type') == 'hostel' ? 'selected' : '' }}>Hostel</option>
                                <option value="apartment" {{ old('hotel_type') == 'apartment' ? 'selected' : '' }}>Apartment</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Number of Rooms</label>
                            <input type="number" name="number_of_rooms" value="{{ old('number_of_rooms') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">City *</label>
                            <input type="text" name="city" value="{{ old('city') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Preferred Date</label>
                            <input type="date" name="preferred_date" value="{{ old('preferred_date') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 font-semibold mb-2">Message / Requirements</label>
                        <textarea name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none"
                            placeholder="Tell us about your requirements...">{{ old('message') }}</textarea>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                            <i class="fas fa-paper-plane mr-2"></i> Submit Demo Request
                        </button>
                    </div>

                    <p class="text-center text-gray-500 text-xs mt-4">
                        <i class="fas fa-lock text-[#E69500] mr-1"></i> Your information is safe with us. We'll never share your data.
                    </p>
                </form>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="grid md:grid-cols-3 gap-6 mt-12">
            <div class="text-center p-6 bg-gray-50 rounded-xl">
                <i class="fas fa-clock text-3xl text-[#E69500] mb-3"></i>
                <h3 class="font-semibold">30-Minute Demo</h3>
                <p class="text-sm text-gray-500">Comprehensive overview of all features</p>
            </div>
            <div class="text-center p-6 bg-gray-50 rounded-xl">
                <i class="fas fa-users text-3xl text-[#E69500] mb-3"></i>
                <h3 class="font-semibold">Expert Guidance</h3>
                <p class="text-sm text-gray-500">Get answers from our product experts</p>
            </div>
            <div class="text-center p-6 bg-gray-50 rounded-xl">
                <i class="fas fa-chart-line text-3xl text-[#E69500] mb-3"></i>
                <h3 class="font-semibold">ROI Analysis</h3>
                <p class="text-sm text-gray-500">See potential revenue increase</p>
            </div>
        </div>
    </div>
</section>
@endsection
