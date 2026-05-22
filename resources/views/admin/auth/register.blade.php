<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration - TripLodge Universe</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#E69500',
                        'primary-dark': '#CC8400',
                        'dark': '#111111',
                    }
                }
            }
        }
    </script>

    <style>
        * { font-family: 'Inter', sans-serif; }
        body { background: linear-gradient(135deg, #111111 0%, #1a1a1a 100%); min-height: 100vh; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeInUp { animation: fadeInUp 0.6s ease-out; }
    </style>
</head>
<body class="flex items-center justify-center p-4">

    <div class="max-w-md w-full animate-fadeInUp">

        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-white shadow-2xl mb-4">
                <i class="fas fa-user-shield text-4xl" style="color: #E69500;"></i>
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">Admin <span style="color: #E69500;">Registration</span></h1>
            <p class="text-gray-400">Create an admin account</p>
        </div>

        <!-- Registration Card -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-8">
                @if($errors->any())
                    <div class="mb-4 p-3 rounded-lg bg-red-50 border border-red-200">
                        @foreach($errors->all() as $error)
                            <p class="text-red-600 text-sm"><i class="fas fa-exclamation-circle mr-2"></i> {{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.register.submit') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-user mr-2" style="color: #E69500;"></i> Full Name
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-envelope mr-2" style="color: #E69500;"></i> Email Address
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-phone mr-2" style="color: #E69500;"></i> Phone Number
                        </label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-lock mr-2" style="color: #E69500;"></i> Password
                        </label>
                        <div class="relative">
                            <input type="password" name="password" id="password" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                            <button type="button" onclick="togglePassword('password', 'toggleIcon1')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary">
                                <i class="fas fa-eye" id="toggleIcon1"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-lock mr-2" style="color: #E69500;"></i> Confirm Password
                        </label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition">
                            <button type="button" onclick="togglePassword('password_confirmation', 'toggleIcon2')" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-primary">
                                <i class="fas fa-eye" id="toggleIcon2"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">
                            <i class="fas fa-key mr-2" style="color: #E69500;"></i> Admin Secret Key
                        </label>
                        <input type="password" name="admin_secret" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary transition"
                               placeholder="Enter the admin secret key">
                        <p class="text-xs text-gray-500 mt-1">Contact super admin to get the secret key</p>
                    </div>

                    <input type="hidden" name="role" value="admin">

                    <div class="mb-6">
                        <label class="flex items-start cursor-pointer">
                            <input type="checkbox" name="terms" required class="mt-1 w-4 h-4 rounded border-gray-300 focus:ring-primary" style="accent-color: #E69500;">
                            <span class="ml-2 text-sm text-gray-600">
                                I agree to the <a href="{{ url('/terms-of-service') }}" class="hover:underline" style="color: #E69500;">Terms of Service</a> and
                                <a href="{{ url('/privacy-policy') }}" class="hover:underline" style="color: #E69500;">Privacy Policy</a>
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="w-full py-3 rounded-lg font-semibold transition transform hover:scale-105" style="background: #E69500; color: white;">
                        <i class="fas fa-user-plus mr-2"></i> Register as Admin
                    </button>
                </form>

                <div class="mt-6 pt-4 border-t text-center">
                    <p class="text-sm text-gray-500">
                        Already have an admin account?
                        <a href="{{ route('admin.login') }}" class="font-semibold hover:underline" style="color: #E69500;">
                            Login here
                        </a>
                    </p>
                    <p class="text-xs text-gray-400 mt-3">
                        <a href="{{ url('/') }}" class="hover:text-[#E69500]">← Back to Website</a>
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
</body>
</html>
