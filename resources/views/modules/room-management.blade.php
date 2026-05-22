@extends('layouts.app')

@section('title', 'Room & Inventory Management - TripLodge Universe')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-8">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-bed text-3xl" style="color: #E69500;"></i>
                <h1 class="text-3xl font-bold" style="color: #111111;">Room & Inventory Management</h1>
            </div>
            <p class="text-gray-600">Room type creation, bed type management, occupancy rules, and inventory calendar</p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6"><p class="text-gray-500 text-sm">Total Rooms</p><p class="text-2xl font-bold">12,847</p></div>
            <div class="bg-white rounded-xl shadow-sm p-6"><p class="text-gray-500 text-sm">Room Types</p><p class="text-2xl font-bold">156</p></div>
            <div class="bg-white rounded-xl shadow-sm p-6"><p class="text-gray-500 text-sm">Occupied Today</p><p class="text-2xl font-bold text-green-600">8,234</p></div>
            <div class="bg-white rounded-xl shadow-sm p-6"><p class="text-gray-500 text-sm">Available Today</p><p class="text-2xl font-bold text-blue-600">3,287</p></div>
        </div>

        <!-- Room Types -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b"><h2 class="text-xl font-semibold">Room Types</h2></div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6">
                <div class="border rounded-lg p-4 hover:shadow-md transition"><i class="fas fa-crown text-2xl text-[#E69500] mb-2"></i><h3 class="font-bold">Suite Room</h3><p class="text-sm text-gray-500">Max Adults: 4 | Max Children: 2</p><p class="text-sm text-gray-500">Total: 124 rooms</p><button class="mt-2 text-sm text-[#E69500]">Manage →</button></div>
                <div class="border rounded-lg p-4 hover:shadow-md transition"><i class="fas fa-bed text-2xl text-[#E69500] mb-2"></i><h3 class="font-bold">Deluxe King</h3><p class="text-sm text-gray-500">Max Adults: 2 | Max Children: 1</p><p class="text-sm text-gray-500">Total: 342 rooms</p><button class="mt-2 text-sm text-[#E69500]">Manage →</button></div>
                <div class="border rounded-lg p-4 hover:shadow-md transition"><i class="fas fa-bed text-2xl text-[#E69500] mb-2"></i><h3 class="font-bold">Standard Room</h3><p class="text-sm text-gray-500">Max Adults: 2 | Max Children: 0</p><p class="text-sm text-gray-500">Total: 568 rooms</p><button class="mt-2 text-sm text-[#E69500]">Manage →</button></div>
            </div>
        </div>
    </div>
</div>
@endsection
