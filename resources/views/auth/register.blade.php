@extends('layouts.app')

@section('title', 'Sign Up - TripLodge Universe')

@section('content')

<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">

<canvas id="animation-bg"></canvas>

    <!-- Background Decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
    </div>

    <!-- Signup Card -->
    <div class="max-w-md w-full bg-[#E69500]/20 rounded-2xl shadow-2xl overflow-hidden animate-fadeInUp">

        <!-- Header Tabs -->
        <div class="flex border-b">
            <a href="{{ route('login') }}" class="flex-1 text-center py-4 font-semibold text-gray-100 hover:text-gray-300 transition">
                Login
            </a>
            <a href="{{ route('register') }}" class="flex-1 text-center py-4 font-semibold transition relative" style="color: #E69500; border-bottom: 3px solid #E69500;">
                Sign Up
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            @if($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-red-50 border border-red-200">
                    @foreach($errors->all() as $error)
                        <p class="text-red-600 text-sm"><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-user mr-2" style="color: #E69500;"></i>
                        Full Name
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20   rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                           placeholder="Enter your full name">
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-envelope mr-2" style="color: #E69500;"></i>
                        Email Address
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                           placeholder="Enter your email">
                </div>

                <!-- Phone Field -->
                <div class="mb-4">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-phone mr-2" style="color: #E69500;"></i>
                        Phone Number
                    </label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" required
                           class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                           placeholder="Enter your phone number">
                </div>

                <!-- Role Selection -->
                <div class="mb-4">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-briefcase mr-2" style="color: #E69500;"></i>
                        I am a
                    </label>
                    <select name="role" class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20">
                        <option value="hotel_owner">Hotel Owner / Manager</option>
                        <option value="staff">Hotel Staff</option>
                    </select>
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-lock mr-2" style="color: #E69500;"></i>
                        Password
                    </label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                               class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                               placeholder="Create a password">
                        <button type="button" onclick="togglePassword('password', 'toggleIcon1')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary">
                            <i class="fas fa-eye" id="toggleIcon1"></i>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-6">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-lock mr-2" style="color: #E69500;"></i>
                        Confirm Password
                    </label>
                    <div class="relative">
                        <input type="password" name="password_confirmation" id="confirm_password" required
                               class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                               placeholder="Confirm your password">
                        <button type="button" onclick="togglePassword('confirm_password', 'toggleIcon2')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary">
                            <i class="fas fa-eye" id="toggleIcon2"></i>
                        </button>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <label class="flex items-start cursor-pointer mb-6">
                    <input type="checkbox" name="terms" required class="mt-1 w-4 h-4 rounded border-gray-300 focus:ring-primary" style="accent-color: #E69500;">
                    <span class="ml-2 text-sm text-gray-100">
                        I agree to the <a href="{{ route('terms.service') }}" class="hover:underline" style="color: #E69500;">Terms of Service</a> and
                        <a href="{{ route('privacy.policy') }}" class="hover:underline" style="color: #E69500;">Privacy Policy</a>
                    </span>
                </label>

                <!-- Signup Button -->
                <button type="submit" class="w-full py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                    <i class="fas fa-user-plus mr-2"></i> Create Account
                </button>
            </form>

            <!-- Login Link -->
            <p class="text-center text-gray-100 mt-6">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold hover:underline" style="color: #E69500;">
                    Login here
                </a>
            </p>
        </div>
    </div>
</div>

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
    .animate-fadeInUp {
        animation: fadeInUp 0.6s ease-out;
    }
    @keyframes pulse {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.2; }
    }
    .animate-pulse {
        animation: pulse 4s ease-in-out infinite;
    }
    .delay-1000 {
        animation-delay: 1s;
    }
</style>

<script>
    function togglePassword(fieldId, iconId) {
        const password = document.getElementById(fieldId);
        const icon = document.getElementById(iconId);
        if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            password.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
@endsection
