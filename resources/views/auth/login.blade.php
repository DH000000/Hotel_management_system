@extends('layouts.app')

@section('title', 'Login - TripLodge Universe')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">

<canvas id="animation-bg"></canvas>
    <!-- Background Decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
    </div>

    <!-- Login Card -->
    <div class="max-w-md w-full bg-[#E69500]/20 rounded-2xl shadow-2xl overflow-hidden animate-fadeInUp">

        <!-- Header Tabs -->
        <div class="flex border-b">
            <a href="{{ route('login') }}" class="flex-1 text-center py-4 font-semibold transition relative" style="color: #E69500; border-bottom: 3px solid #E69500;">
                Login
            </a>
            <a href="{{ route('register') }}" class="flex-1 text-center py-4 font-semibold text-gray-100 hover:text-gray-300 transition">
                Sign Up
            </a>
        </div>

        <!-- Form Body -->
        <div class="p-8">
            @if(session('error'))
                <div class="mb-4 p-3 rounded-lg bg-red-50 border border-red-200 text-red-600 text-sm">
                    <i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="mb-4 p-3 rounded-lg bg-green-50 border border-green-200 text-green-600 text-sm">
                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <div class="mb-5">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-envelope mr-2" style="color: #E69500;"></i>
                        Email Address
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                           placeholder="Enter your email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label class="block text-gray-100 font-semibold mb-2">
                        <i class="fas fa-lock mr-2" style="color: #E69500;"></i>
                        Password
                    </label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                               class="w-full bg-[#E69500]/40 px-4 py-3 border border-[#E69500]/20 rounded-lg focus:outline-none focus:border-primary transition focus:ring-2 focus:ring-primary/20"
                               placeholder="Enter your password">
                        <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary transition">
                            <i class="fas fa-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 focus:ring-primary" style="accent-color: #E69500;">
                        <span class="ml-2 text-sm text-gray-100">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm hover:underline transition" style="color: #E69500;">
                        Forgot Password?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </button>
            </form>

            <!-- Demo Credentials -->
            <div class="mt-6 p-4 bg-[#E69500]/40 border border-[#E69500]/20 rounded-lg">
                <p class="text-xs text-gray-200  mb-2">Demo Credentials (For Testing)</p>
                <div class="text-xs text-gray-200 space-y-1">
                    <p><span class="font-semibold">Hotel Owner:</span> hotel@triplodge.com / password</p>
                    <p><span class="font-semibold">Admin:</span> admin@triplodge.com / password</p>
                </div>
            </div>

            <!-- Sign Up Link -->
            <p class="text-center text-gray-100 mt-6">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold hover:underline" style="color: #E69500;">
                    Sign up now
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
    function togglePassword() {
        const password = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');
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
