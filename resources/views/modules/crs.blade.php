@extends('layouts.app')
@section('title', 'Central Reservation System')
@section('content')
<div class="py-12"><div class="max-w-7xl mx-auto px-4"><h1 class="text-3xl font-bold">Central Reservation System</h1><p class="text-gray-600 mt-2">All OTA bookings in one dashboard. Manage check-ins, check-outs, and cancellations.</p><div class="grid md:grid-cols-3 gap-4 mt-6"><div class="bg-white p-4 rounded shadow"><p class="font-bold">Today's Bookings</p><p class="text-2xl text-[#E69500]">24</p></div><div class="bg-white p-4 rounded shadow"><p class="font-bold">Check-ins</p><p class="text-2xl text-[#E69500]">18</p></div><div class="bg-white p-4 rounded shadow"><p class="font-bold">Check-outs</p><p class="text-2xl text-[#E69500]">12</p></div></div></div></div>
@endsection
