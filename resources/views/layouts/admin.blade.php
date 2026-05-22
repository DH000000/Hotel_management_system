<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel - TripLodge Universe')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS -->
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
        .sidebar { transition: all 0.3s ease; }
        .gradient-text { background: linear-gradient(135deg, #E69500 0%, #FFA726 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-100">

    <!-- Admin Sidebar -->
    <aside class="sidebar fixed left-0 top-0 w-64 h-full bg-[#111111] text-white z-50">
        <div class="p-6 border-b border-gray-800">
            <div class="flex items-center gap-2">
                <i class="fas fa-hotel text-2xl text-[#E69500]"></i>
                <span class="font-bold text-xl">TripLodge <span style="color: #E69500;">Admin</span></span>
            </div>
        </div>

        <nav class="p-4">
            <div class="mb-6">
                <p class="text-xs text-gray-500 uppercase tracking-wider mb-3">Main Menu</p>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 text-[#E69500]' : 'text-gray-300' }}">
                            <i class="fas fa-tachometer-alt w-5"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/hotels') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-hotel w-5"></i> Hotels
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/users') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-users w-5"></i> Users
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/bookings') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-calendar-check w-5"></i> Bookings
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/ota-monitoring') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-plug w-5"></i> OTA Monitoring
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/settlements') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-rupee-sign w-5"></i> Settlements
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/reports') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-chart-bar w-5"></i> Reports
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/settings') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                            <i class="fas fa-cog w-5"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-gray-800">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 w-full px-4 py-3 rounded-lg hover:bg-gray-800 transition text-gray-300">
                    <i class="fas fa-sign-out-alt w-5"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="ml-64">
        <!-- Admin Header -->
        <header class="bg-white shadow-sm sticky top-0 z-40">
            <div class="flex justify-between items-center px-6 py-4">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">@yield('header_title', 'Admin Dashboard')</h1>
                </div>
                <div class="flex items-center gap-4">
                    <!-- Notifications -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-gray-600 hover:text-[#E69500] relative">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1">3</span>
                        </button>
                    </div>

                    <!-- Admin User Menu -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center gap-2 focus:outline-none">
                            <div class="w-8 h-8 rounded-full bg-[#E69500] flex items-center justify-center text-white font-bold">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                            <span class="text-gray-700">{{ auth()->user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50 border">
                            <a href="{{ url('/profile') }}" class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center gap-2 w-full px-4 py-2 text-red-600 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('scripts')
</body>
</html>
