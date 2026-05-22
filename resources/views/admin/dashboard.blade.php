@extends('layouts.admin')

@section('title', 'Admin Dashboard - TripLodge Universe')
@section('header_title', 'Dashboard Overview')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto">

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Hotels</p>
                        <p class="text-3xl font-bold" style="color: #111111;">{{ $stats['total_hotels'] ?? 1284 }}</p>
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
                        <p class="text-3xl font-bold" style="color: #111111;">{{ $stats['total_users'] ?? 5672 }}</p>
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
                        <p class="text-3xl font-bold" style="color: #111111;">{{ $stats['total_bookings'] ?? 24891 }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-calendar-check text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Pending Hotels</p>
                        <p class="text-3xl font-bold" style="color: #111111;">{{ $stats['pending_hotels'] ?? 12 }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#E69500]/10 flex items-center justify-center">
                        <i class="fas fa-clock text-xl" style="color: #E69500;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Users -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-semibold text-lg" style="color: #111111;">Recent Users</h3>
                <a href="{{ url('/admin/users') }}" class="text-sm text-[#E69500] hover:underline">View All →</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="border-b">
                        <tr><th class="text-left py-3">Name</th><th class="text-left py-3">Email</th><th class="text-left py-3">Role</th><th class="text-left py-3">Status</th><th class="text-left py-3">Joined</th></tr>
                    </thead>
                    <tbody>
                        @foreach($recent_users ?? [] as $user)
                        <tr class="border-b">
                            <td class="py-2">{{ $user->name }}</td>
                            <td class="py-2">{{ $user->email }}</td>
                            <td class="py-2">{{ ucfirst($user->role) }}</td>
                            <td class="py-2"><span class="px-2 py-1 rounded-full text-xs {{ $user->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ ucfirst($user->status) }}</span></td>
                            <td class="py-2">{{ $user->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
