@extends('layouts.app')

@section('title', 'OTA Channel Integration - TripLodge Universe')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-8">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-plug text-3xl" style="color: #E69500;"></i>
                <h1 class="text-3xl font-bold" style="color: #111111;">OTA Channel Integration Hub</h1>
            </div>
            <p class="text-gray-600">Connect to 50+ OTAs including Booking.com, MakeMyTrip, Agoda, Airbnb</p>
        </div>

        <!-- Connected Channels -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-white rounded-xl p-4 text-center shadow-sm"><i class="fab fa-booking-com text-3xl text-blue-600 mb-2 block"></i><p class="font-semibold">Booking.com</p><span class="text-green-600 text-xs">Connected</span></div>
            <div class="bg-white rounded-xl p-4 text-center shadow-sm"><i class="fas fa-building text-3xl text-orange-500 mb-2 block"></i><p class="font-semibold">MakeMyTrip</p><span class="text-green-600 text-xs">Connected</span></div>
            <div class="bg-white rounded-xl p-4 text-center shadow-sm"><i class="fas fa-plane text-3xl text-blue-500 mb-2 block"></i><p class="font-semibold">Goibibo</p><span class="text-green-600 text-xs">Connected</span></div>
            <div class="bg-white rounded-xl p-4 text-center shadow-sm"><i class="fas fa-home text-3xl text-pink-500 mb-2 block"></i><p class="font-semibold">Airbnb</p><span class="text-green-600 text-xs">Connected</span></div>
        </div>

        <!-- Sync Status -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b"><h2 class="text-xl font-semibold">Sync Status</h2></div>
            <div class="divide-y">
                <div class="p-4 flex justify-between"><span><i class="fab fa-booking-com mr-2"></i> Booking.com</span><span class="text-green-600">✓ Synced 2 mins ago</span></div>
                <div class="p-4 flex justify-between"><span><i class="fas fa-building mr-2"></i> MakeMyTrip</span><span class="text-green-600">✓ Synced 5 mins ago</span></div>
                <div class="p-4 flex justify-between"><span><i class="fas fa-globe mr-2"></i> Expedia</span><span class="text-yellow-600">⟳ Syncing...</span></div>
            </div>
        </div>
    </div>
</div>
@endsection
