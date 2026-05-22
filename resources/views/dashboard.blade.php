@extends('layouts.app')

@section('title', 'Dashboard - TripLodge Universe')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Welcome Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold" style="color: #111111;">Dashboard</h1>
            <p class="text-gray-500 mt-1">Welcome back, <strong style="color: #E69500;">{{ auth()->user()->name }}</strong>! Here's an overview of your activity.</p>
        </div>

        <!-- Role Badge -->
        <div class="mb-6">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold"
                  style="background: rgba(230, 149, 0, 0.1); color: #E69500;">
                <i class="fas fa-user-tag mr-2"></i>
                {{ ucfirst(str_replace('_', ' ', auth()->user()->role)) }}
            </span>
        </div>

        <!-- ==================== SUPER ADMIN / ADMIN DASHBOARD ==================== -->
        @if(auth()->user()->role === 'super_admin' || auth()->user()->role === 'admin')

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Hotels</p>
                        <p class="text-3xl font-bold" style="color: #111111;">1,284</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +24 this month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-hotel text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Users</p>
                        <p class="text-3xl font-bold" style="color: #111111;">5,672</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +156 this week</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-users text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Bookings</p>
                        <p class="text-3xl font-bold" style="color: #111111;">24,891</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +18% vs last month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-calendar-check text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Revenue</p>
                        <p class="text-3xl font-bold" style="color: #111111;">₹8.5Cr</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +32% YoY</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-rupee-sign text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">Revenue Overview</h3>
                <canvas id="adminRevenueChart" height="200"></canvas>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">Hotels Onboarded</h3>
                <canvas id="hotelsChart" height="200"></canvas>
            </div>
        </div>

        <!-- Recent Hotels & Pending Approvals -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-lg" style="color: #111111;">Recent Hotels</h3>
                    <a href="{{ url('/admin/hotels') }}" class="text-sm text-[#E69500] hover:underline">View All →</a>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-semibold">Grand Hyatt</p><p class="text-xs text-gray-500">Mumbai</p></div>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-semibold">The Leela Palace</p><p class="text-xs text-gray-500">Delhi</p></div>
                        <span class="text-green-600 text-sm">Active</span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-semibold">Radisson Blu</p><p class="text-xs text-gray-500">Bangalore</p></div>
                        <span class="text-yellow-600 text-sm">Pending</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-lg" style="color: #111111;">Pending Approvals</h3>
                    <a href="{{ url('/admin/hotels/pending') }}" class="text-sm text-[#E69500] hover:underline">View All →</a>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 bg-yellow-50 rounded-lg">
                        <div><p class="font-semibold">JW Marriott</p><p class="text-xs text-gray-500">Pune - KYC Pending</p></div>
                        <button class="text-xs bg-[#E69500] text-white px-3 py-1 rounded">Review</button>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-yellow-50 rounded-lg">
                        <div><p class="font-semibold">Taj Hotel</p><p class="text-xs text-gray-500">Chennai - Documents Pending</p></div>
                        <button class="text-xs bg-[#E69500] text-white px-3 py-1 rounded">Review</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- ==================== HOTEL OWNER DASHBOARD ==================== -->
        @elseif(auth()->user()->role === 'hotel_owner')

        <!-- Hotel Owner Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Rooms</p>
                        <p class="text-3xl font-bold" style="color: #111111;">42</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-bed text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Today's Bookings</p>
                        <p class="text-3xl font-bold" style="color: #111111;">8</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-calendar-check text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Occupancy Rate</p>
                        <p class="text-3xl font-bold" style="color: #111111;">78%</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-chart-line text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
                <div class="mt-2"><div class="w-full bg-gray-200 rounded-full h-2"><div class="h-2 rounded-full" style="width: 78%; background: #E69500;"></div></div></div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Revenue Today</p>
                        <p class="text-3xl font-bold" style="color: #111111;">₹1,24,500</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-rupee-sign text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <a href="{{ url('/hotel/rooms') }}" class="bg-white rounded-xl shadow-sm p-4 text-center hover:shadow-md transition">
                <i class="fas fa-plus-circle text-2xl text-[#E69500] mb-2"></i>
                <p class="text-sm font-semibold">Add Room</p>
            </a>
            <a href="{{ url('/hotel/bookings/create') }}" class="bg-white rounded-xl shadow-sm p-4 text-center hover:shadow-md transition">
                <i class="fas fa-calendar-plus text-2xl text-[#E69500] mb-2"></i>
                <p class="text-sm font-semibold">New Booking</p>
            </a>
            <a href="{{ url('/hotel/ota-channels') }}" class="bg-white rounded-xl shadow-sm p-4 text-center hover:shadow-md transition">
                <i class="fas fa-plug text-2xl text-[#E69500] mb-2"></i>
                <p class="text-sm font-semibold">Sync OTAs</p>
            </a>
            <a href="{{ url('/hotel/reports') }}" class="bg-white rounded-xl shadow-sm p-4 text-center hover:shadow-md transition">
                <i class="fas fa-chart-bar text-2xl text-[#E69500] mb-2"></i>
                <p class="text-sm font-semibold">View Reports</p>
            </a>
        </div>

        <!-- Recent Bookings -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-lg" style="color: #111111;">Recent Bookings</h3>
                <a href="{{ url('/hotel/bookings') }}" class="text-sm text-[#E69500] hover:underline">View All →</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="border-b"><tr><th class="text-left py-2">Guest</th><th class="text-left py-2">Room</th><th class="text-left py-2">Check In</th><th class="text-left py-2">Amount</th><th class="text-left py-2">Status</th></tr></thead>
                    <tbody>
                        <tr class="border-b"><td class="py-2">Rajesh Sharma</td><td>Deluxe King</td><td>Today</td><td>₹8,500</td><td><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Confirmed</span></td></tr>
                        <tr class="border-b"><td class="py-2">Priya Verma</td><td>Suite Room</td><td>Tomorrow</td><td>₹15,000</td><td><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Pending</span></td></tr>
                        <tr><td class="py-2">Amit Singh</td><td>Standard Room</td><td>Today</td><td>₹5,000</td><td><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Confirmed</span></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- OTA Sync Status & AI Pricing -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">OTA Sync Status</h3>
                <div class="space-y-3">
                    <div class="flex justify-between"><span><i class="fab fa-booking-com"></i> Booking.com</span><span class="text-green-600">✓ Synced</span></div>
                    <div class="flex justify-between"><span><i class="fas fa-building"></i> MakeMyTrip</span><span class="text-green-600">✓ Synced</span></div>
                    <div class="flex justify-between"><span><i class="fas fa-plane"></i> Goibibo</span><span class="text-green-600">✓ Synced</span></div>
                    <div class="flex justify-between"><span><i class="fas fa-globe"></i> Expedia</span><span class="text-yellow-600">⟳ Syncing...</span></div>
                </div>
            </div>

            <div class="bg-gradient-to-r from-[#E69500] to-[#FFA726] rounded-xl shadow-sm p-6 text-white">
                <h3 class="font-semibold text-lg mb-2">AI Pricing Recommendation</h3>
                <p class="text-sm opacity-90 mb-4">Based on current demand & competition</p>
                <div class="space-y-2">
                    <div class="flex justify-between"><span>Deluxe Room</span><span>₹5,000 → <strong class="text-green-200">₹5,800</strong> ↑16%</span></div>
                    <div class="flex justify-between"><span>Suite Room</span><span>₹12,000 → <strong class="text-green-200">₹14,500</strong> ↑21%</span></div>
                </div>
                <button class="w-full mt-4 bg-white text-[#E69500] py-2 rounded-lg font-semibold">Apply AI Pricing</button>
            </div>
        </div>


        <!-- ==================== STAFF DASHBOARD ==================== -->
        @elseif(auth()->user()->role === 'staff')

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 text-center">
                <i class="fas fa-user-check text-4xl text-[#E69500] mb-2"></i>
                <p class="text-2xl font-bold">8</p>
                <p class="text-gray-500 text-sm">Check-ins Today</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 text-center">
                <i class="fas fa-user-clock text-4xl text-[#E69500] mb-2"></i>
                <p class="text-2xl font-bold">6</p>
                <p class="text-gray-500 text-sm">Check-outs Today</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 text-center">
                <i class="fas fa-bell text-4xl text-[#E69500] mb-2"></i>
                <p class="text-2xl font-bold">3</p>
                <p class="text-gray-500 text-sm">Pending Requests</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4">Today's Check-ins</h3>
                <div class="space-y-2">
                    <div class="flex justify-between p-2 bg-gray-50 rounded"><span>Rajesh Sharma</span><span>Deluxe 401</span><button class="text-[#E69500] text-sm">Check-in</button></div>
                    <div class="flex justify-between p-2 bg-gray-50 rounded"><span>Priya Verma</span><span>Suite 502</span><button class="text-[#E69500] text-sm">Check-in</button></div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4">Maintenance Requests</h3>
                <div class="space-y-2">
                    <div class="flex justify-between p-2 bg-gray-50 rounded"><span>Room 305 - AC not working</span><span class="text-red-500">Urgent</span></div>
                    <div class="flex justify-between p-2 bg-gray-50 rounded"><span>Room 108 - TV issue</span><span class="text-yellow-500">Normal</span></div>
                </div>
            </div>
        </div>


        <!-- ==================== GUEST DASHBOARD ==================== -->
        @elseif(auth()->user()->role === 'guest')

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4">Your Upcoming Stays</h3>
                <div class="border rounded-lg p-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-semibold">Grand Hyatt Mumbai</p>
                            <p class="text-sm text-gray-500">May 20 - May 25, 2025 (5 nights)</p>
                            <p class="text-sm text-gray-500">Deluxe King Room</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-[#E69500]">₹42,500</p>
                            <span class="text-green-600 text-sm">Confirmed</span>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4"><a href="#" class="text-[#E69500]">Browse more hotels →</a></div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4">Your Profile</h3>
                <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Member Since:</strong> {{ auth()->user()->created_at->format('d M Y') }}</p>
                <hr class="my-3">
                <p class="text-sm text-gray-500"><i class="fas fa-gift text-[#E69500]"></i> You have <strong>250</strong> loyalty points</p>
            </div>
        </div>

        @endif

    </div>
</div>

<!-- Charts Script for Admin -->
@if(auth()->user()->role === 'super_admin' || auth()->user()->role === 'admin')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('adminRevenueChart'), {
        type: 'line',
        data: { labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], datasets: [{ label: 'Revenue (Cr)', data: [5.2, 5.8, 6.5, 7.2, 8.0, 8.5], borderColor: '#E69500', tension: 0.4 }] },
        options: { responsive: true }
    });
    new Chart(document.getElementById('hotelsChart'), {
        type: 'bar',
        data: { labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], datasets: [{ label: 'Hotels', data: [980, 1050, 1120, 1180, 1240, 1284], backgroundColor: '#E69500' }] },
        options: { responsive: true }
    });
</script>
@endif
@endsection
