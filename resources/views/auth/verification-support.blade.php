@extends('layouts.app')

@section('title', 'Need Help? - Email Verification')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">

    <!-- Background Decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
    </div>

    <!-- Support Card -->
    <div class="max-w-md w-full bg-[#E69500]/20 rounded-2xl shadow-2xl overflow-hidden animate-fadeInUp backdrop-blur-sm">

        <div class="p-8">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-500/20 mb-4">
                    <i class="fas fa-headset text-3xl text-red-400"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Need Help Verifying?</h2>
                <p class="text-gray-300 text-sm mt-2">We're here to help you verify your account</p>
            </div>

            @if(session('success'))
                <div class="mb-4 p-3 rounded-lg bg-green-500/20 border border-green-500/30 text-green-200 text-sm">
                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 p-3 rounded-lg bg-red-500/20 border border-red-500/30 text-red-200 text-sm">
                    <i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 p-3 rounded-lg bg-red-500/20 border border-red-500/30">
                    @foreach($errors->all() as $error)
                        <p class="text-red-200 text-sm"><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Resend OTP Option -->
            <div class="mb-6 p-4 bg-blue-500/20 rounded-lg border border-blue-500/30">
                <div class="flex items-center gap-3 mb-2">
                    <i class="fas fa-envelope text-blue-400"></i>
                    <h3 class="font-semibold text-blue-300">Didn't receive OTP?</h3>
                </div>
                <p class="text-sm text-blue-200 mb-3">Click below to resend the verification code to your email.</p>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                        <i class="fas fa-paper-plane mr-2"></i> Resend OTP
                    </button>
                </form>
            </div>

            <!-- Contact Support Option -->
            <div class="mb-6 p-4 bg-purple-500/20 rounded-lg border border-purple-500/30">
                <div class="flex items-center gap-3 mb-2">
                    <i class="fas fa-headset text-purple-400"></i>
                    <h3 class="font-semibold text-purple-300">Still having issues?</h3>
                </div>
                <p class="text-sm text-purple-200 mb-3">Contact our support team for manual verification assistance.</p>

                <form method="POST" action="{{ route('verification.manual.request') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <div class="mb-3">
                        <textarea name="message" rows="3" class="w-full px-3 py-2 bg-[#E69500]/20 border border-[#E69500]/30 rounded-lg focus:border-purple-500 focus:outline-none text-white placeholder-gray-400" placeholder="Describe your issue..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition">
                        <i class="fas fa-ticket-alt mr-2"></i> Request Support
                    </button>
                </form>
            </div>

            <!-- Alternative Login -->
            <div class="text-center">
                <p class="text-sm text-gray-300">
                    <a href="{{ route('login') }}" class="text-[#E69500] hover:underline transition">
                        <i class="fas fa-arrow-left mr-1"></i> Back to Login
                    </a>
                </p>
            </div>

            <div class="mt-6 pt-4 border-t border-[#E69500]/20 text-center">
                <p class="text-xs text-gray-400">
                    Need immediate help? Call us at <strong class="text-[#E69500]">+91 1800 123 4567</strong>
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
