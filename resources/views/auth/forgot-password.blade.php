@extends('layouts.app')

@section('title', 'Forgot Password - TripLodge Universe')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">

    <!-- Background Decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
    </div>

    <!-- Forgot Password Card -->
    <div class="max-w-md w-full bg-[#E69500]/20 rounded-2xl shadow-2xl overflow-hidden animate-fadeInUp backdrop-blur-sm">

        <div class="p-8">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#E69500]/20 mb-4">
                    <i class="fas fa-key text-3xl text-[#E69500]"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Forgot Password?</h2>
                <p class="text-gray-300 text-sm mt-2">Enter your email to receive a password reset OTP</p>
            </div>

            @if(session('error'))
                <div class="mb-4 p-3 rounded-lg bg-red-500/20 border border-red-500/30 text-red-200 text-sm">
                    <i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="mb-4 p-3 rounded-lg bg-green-500/20 border border-green-500/30 text-green-200 text-sm">
                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-red-500/20 border border-red-500/30">
                    @foreach($errors->all() as $error)
                        <p class="text-red-200 text-sm"><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-6">
                    <label class="block text-gray-200 font-semibold mb-2">
                        <i class="fas fa-envelope mr-2" style="color: #E69500;"></i>
                        Email Address
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full bg-[#E69500]/20 px-4 py-3 border border-[#E69500]/30 rounded-lg focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition text-white placeholder-gray-400"
                           placeholder="Enter your email">
                </div>

                <button type="submit" class="w-full py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                    <i class="fas fa-paper-plane mr-2"></i> Send Reset OTP
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-300">
                    <a href="{{ route('login') }}" class="text-[#E69500] hover:underline transition">
                        <i class="fas fa-arrow-left mr-1"></i> Back to Login
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeInUp { animation: fadeInUp 0.6s ease-out; }
    @keyframes pulse {
        0%, 100% { opacity: 0.1; }
        50% { opacity: 0.2; }
    }
    .animate-pulse { animation: pulse 4s ease-in-out infinite; }
    .delay-1000 { animation-delay: 1s; }
</style>
@endsection
