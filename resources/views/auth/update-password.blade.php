@extends('layouts.app')

@section('title', 'Set New Password - TripLodge Universe')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8" style="background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%);">

    <!-- Background Decor -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-pulse delay-1000"></div>
    </div>

    <!-- Update Password Card -->
    <div class="max-w-md w-full bg-[#E69500]/20 rounded-2xl shadow-2xl overflow-hidden animate-fadeInUp backdrop-blur-sm">

        <div class="p-8">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-[#E69500]/20 mb-4">
                    <i class="fas fa-lock text-3xl text-[#E69500]"></i>
                </div>
                <h2 class="text-2xl font-bold text-white">Set New Password</h2>
                <p class="text-gray-300 text-sm mt-2">Create a new strong password for your account</p>
            </div>

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

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">

                <div class="mb-4">
                    <label class="block text-gray-200 font-semibold mb-2">
                        <i class="fas fa-lock mr-2" style="color: #E69500;"></i>
                        New Password
                    </label>
                    <div class="relative">
                        <input type="password" name="password" id="password" required
                               class="w-full bg-[#E69500]/20 px-4 py-3 border border-[#E69500]/30 rounded-lg focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition text-white placeholder-gray-400"
                               placeholder="Enter new password">
                        <button type="button" onclick="togglePassword('password', 'toggleIcon1')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary transition">
                            <i class="fas fa-eye" id="toggleIcon1"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-200 font-semibold mb-2">
                        <i class="fas fa-lock mr-2" style="color: #E69500;"></i>
                        Confirm Password
                    </label>
                    <div class="relative">
                        <input type="password" name="password_confirmation" id="confirm_password" required
                               class="w-full bg-[#E69500]/20 px-4 py-3 border border-[#E69500]/30 rounded-lg focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition text-white placeholder-gray-400"
                               placeholder="Confirm new password">
                        <button type="button" onclick="togglePassword('confirm_password', 'toggleIcon2')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary transition">
                            <i class="fas fa-eye" id="toggleIcon2"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="w-full py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                    <i class="fas fa-save mr-2"></i> Update Password
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
