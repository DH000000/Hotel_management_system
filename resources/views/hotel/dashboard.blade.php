@extends('layouts.app')

@section('title', 'Hotel Dashboard - TripLodge Universe')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Welcome Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold" style="color: #111111;">Hotel Dashboard</h1>
            <p class="text-gray-500 mt-1">Welcome back, <strong style="color: #E69500;">{{ auth()->user()->name }}</strong>! Here's what's happening with your hotel today.</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Rooms -->
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500] hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Rooms</p>
                        <p class="text-3xl font-bold" style="color: #111111;">42</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +2 this month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-bed text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <!-- Today's Bookings -->
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500] hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Today's Bookings</p>
                        <p class="text-3xl font-bold" style="color: #111111;">8</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +3 from yesterday</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-calendar-check text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <!-- Occupancy Rate -->
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500] hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Occupancy Rate</p>
                        <p class="text-3xl font-bold" style="color: #111111;">78%</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +5% vs last week</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-chart-line text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="h-2 rounded-full" style="width: 78%; background: #E69500;"></div>
                    </div>
                </div>
            </div>

            <!-- Revenue Today -->
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500] hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Revenue Today</p>
                        <p class="text-3xl font-bold" style="color: #111111;">₹1,24,500</p>
                        <p class="text-green-600 text-xs mt-1"><i class="fas fa-arrow-up"></i> +12% from yesterday</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-rupee-sign text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- ADR -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Average Daily Rate (ADR)</p>
                        <p class="text-2xl font-bold" style="color: #111111;">₹5,187</p>
                    </div>
                    <i class="fas fa-chart-simple text-gray-400 text-xl"></i>
                </div>
            </div>

            <!-- RevPAR -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">RevPAR</p>
                        <p class="text-2xl font-bold" style="color: #111111;">₹4,046</p>
                    </div>
                    <i class="fas fa-chart-line text-gray-400 text-xl"></i>
                </div>
            </div>

            <!-- Cancellation Rate -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Cancellation Rate</p>
                        <p class="text-2xl font-bold" style="color: #111111;">8.5%</p>
                    </div>
                    <i class="fas fa-ban text-gray-400 text-xl"></i>
                </div>
            </div>

            <!-- Average Stay -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Avg. Stay Duration</p>
                        <p class="text-2xl font-bold" style="color: #111111;">2.4 nights</p>
                    </div>
                    <i class="fas fa-clock text-gray-400 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Revenue Chart -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-lg" style="color: #111111;">Revenue Overview (Last 7 Days)</h3>
                    <select class="text-sm border rounded-lg px-2 py-1">
                        <option>This Week</option>
                        <option>Last Week</option>
                        <option>This Month</option>
                    </select>
                </div>
                <canvas id="revenueChart" height="200"></canvas>
            </div>

            <!-- Occupancy Chart -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-lg" style="color: #111111;">Occupancy Trend</h3>
                    <select class="text-sm border rounded-lg px-2 py-1">
                        <option>This Week</option>
                        <option>Last Week</option>
                        <option>This Month</option>
                    </select>
                </div>
                <canvas id="occupancyChart" height="200"></canvas>
            </div>
        </div>

        <!-- Recent Bookings & OTA Sync Status -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

            <!-- Recent Bookings -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold text-lg" style="color: #111111;">Recent Bookings</h3>
                    <a href="{{ url('/hotel/bookings') }}" class="text-sm text-[#E69500] hover:underline">View All →</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="border-b">
                            <tr><th class="text-left py-2">Guest</th><th class="text-left py-2">Room</th><th class="text-left py-2">Check In</th><th class="text-left py-2">Amount</th><th class="text-left py-2">Status</th></tr>
                        </thead>
                        <tbody>
                            <tr class="border-b"><td class="py-2">Rajesh Sharma</td><td>Deluxe King</td><td>Today</td><td>₹8,500</td><td><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Confirmed</span></td></tr>
                            <tr class="border-b"><td class="py-2">Priya Verma</td><td>Suite Room</td><td>Tomorrow</td><td>₹15,000</td><td><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Pending</span></td></tr>
                            <tr class="border-b"><td class="py-2">Amit Singh</td><td>Standard Room</td><td>Today</td><td>₹5,000</td><td><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Confirmed</span></td></tr>
                            <tr class="border-b"><td class="py-2">Neha Gupta</td><td>Deluxe Twin</td><td>May 15</td><td>₹7,200</td><td><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Checked In</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- OTA Sync Status -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">OTA Sync Status</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span><i class="fab fa-booking-com text-blue-600"></i> Booking.com</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Synced</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-building text-orange-500"></i> MakeMyTrip</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Synced</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-plane text-blue-500"></i> Goibibo</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Synced</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-globe text-red-500"></i> Expedia</span>
                        <span class="text-yellow-600"><i class="fas fa-sync-alt"></i> Syncing...</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-umbrella-beach text-green-600"></i> Agoda</span>
                        <span class="text-green-600"><i class="fas fa-check-circle"></i> Synced</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t">
                    <div class="flex justify-between text-sm">
                        <span>Last Sync:</span>
                        <span class="text-gray-600">2 minutes ago</span>
                    </div>
                    <button class="w-full mt-3 text-center text-sm text-[#E69500] hover:underline">Sync Now</button>
                </div>
            </div>
        </div>

        <!-- AI Pricing Suggestions & Room Status -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

            <!-- AI Pricing Suggestions -->
            <div class="bg-gradient-to-r from-[#E69500] to-[#FFA726] rounded-xl shadow-sm p-6 text-white">
                <div class="flex items-center gap-2 mb-3">
                    <i class="fas fa-robot text-2xl"></i>
                    <h3 class="font-semibold text-lg">AI Pricing Suggestions</h3>
                </div>
                <p class="text-sm opacity-90 mb-4">Based on current demand and competitor rates</p>
                <div class="space-y-3">
                    <div class="flex justify-between items-center bg-white/10 rounded-lg p-3">
                        <span>Deluxe Room</span>
                        <span>Current: ₹5,000</span>
                        <span class="bg-green-600 px-2 py-1 rounded text-xs">Suggested: ₹5,800 ↑16%</span>
                    </div>
                    <div class="flex justify-between items-center bg-white/10 rounded-lg p-3">
                        <span>Suite Room</span>
                        <span>Current: ₹12,000</span>
                        <span class="bg-green-600 px-2 py-1 rounded text-xs">Suggested: ₹14,500 ↑21%</span>
                    </div>
                    <div class="flex justify-between items-center bg-white/10 rounded-lg p-3">
                        <span>Standard Room</span>
                        <span>Current: ₹3,500</span>
                        <span class="bg-yellow-600 px-2 py-1 rounded text-xs">Suggested: ₹3,800 ↑9%</span>
                    </div>
                </div>
                <button class="w-full mt-4 bg-white text-[#E69500] py-2 rounded-lg font-semibold hover:bg-opacity-90 transition">Apply AI Pricing</button>
            </div>

            <!-- Room Status -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">Room Status Today</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-bed text-green-500"></i> Available</span>
                        <span class="font-semibold">12 rooms</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2"><div class="h-2 rounded-full bg-green-500" style="width: 29%"></div></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-user-check text-blue-500"></i> Occupied</span>
                        <span class="font-semibold">28 rooms</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2"><div class="h-2 rounded-full bg-blue-500" style="width: 67%"></div></div>
                    </div>
                    <div class="flex justify-between items-center">
                        <span><i class="fas fa-tools text-red-500"></i> Maintenance</span>
                        <span class="font-semibold">2 rooms</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2"><div class="h-2 rounded-full bg-red-500" style="width: 5%"></div></div>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t">
                    <div class="flex justify-between text-sm text-gray-600">
                        <span>Check-ins Today:</span>
                        <span class="font-semibold">8</span>
                    </div>
                    <div class="flex justify-between text-sm text-gray-600 mt-1">
                        <span>Check-outs Today:</span>
                        <span class="font-semibold">6</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Reservations & Rate Alerts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Upcoming Reservations -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">Upcoming Reservations</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-semibold">Vikram Mehta</p><p class="text-xs text-gray-500">Deluxe Room</p></div>
                        <div class="text-right"><p class="text-sm">May 15 - May 17</p><p class="text-xs text-gray-500">2 nights</p></div>
                        <span class="text-[#E69500] font-semibold">₹5,000</span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-semibold">Sneha Reddy</p><p class="text-xs text-gray-500">Suite Room</p></div>
                        <div class="text-right"><p class="text-sm">May 16 - May 18</p><p class="text-xs text-gray-500">2 nights</p></div>
                        <span class="text-[#E69500] font-semibold">₹12,000</span>
                    </div>
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                        <div><p class="font-semibold">Amit Kumar</p><p class="text-xs text-gray-500">Standard Room</p></div>
                        <div class="text-right"><p class="text-sm">May 17 - May 19</p><p class="text-xs text-gray-500">2 nights</p></div>
                        <span class="text-[#E69500] font-semibold">₹3,500</span>
                    </div>
                </div>
            </div>

            <!-- Rate Parity Alerts -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-lg mb-4" style="color: #111111;">Rate Parity Alerts</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 p-3 bg-red-50 rounded-lg border-l-4 border-red-500">
                        <i class="fas fa-exclamation-triangle text-red-500"></i>
                        <div class="flex-1">
                            <p class="text-sm font-semibold">MakeMyTrip showing lower rate</p>
                            <p class="text-xs text-gray-500">Deluxe Room - ₹4,800 vs ₹5,000</p>
                        </div>
                        <button class="text-xs text-[#E69500]">Fix</button>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-yellow-50 rounded-lg border-l-4 border-yellow-500">
                        <i class="fas fa-info-circle text-yellow-500"></i>
                        <div class="flex-1">
                            <p class="text-sm font-semibold">Inventory mismatch detected</p>
                            <p class="text-xs text-gray-500">Booking.com showing 5 rooms, you have 3</p>
                        </div>
                        <button class="text-xs text-[#E69500]">Sync</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Revenue (₹)',
                data: [85000, 92000, 78000, 95000, 110000, 135000, 124500],
                borderColor: '#E69500',
                backgroundColor: 'rgba(230, 149, 0, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: { legend: { position: 'bottom' } }
        }
    });

    // Occupancy Chart
    const occupancyCtx = document.getElementById('occupancyChart').getContext('2d');
    new Chart(occupancyCtx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Occupancy (%)',
                data: [65, 70, 68, 72, 78, 85, 82],
                backgroundColor: '#E69500',
                borderRadius: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: { legend: { position: 'bottom' } },
            scales: { y: { max: 100, beginAtZero: true } }
        }
    });
</script>
@endsection
