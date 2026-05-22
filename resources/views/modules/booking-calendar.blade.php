@extends('layouts.app')
@section('title', 'Booking Calendar')
@section('content')
<div class="py-12"><div class="max-w-7xl mx-auto px-4"><h1 class="text-3xl font-bold">Booking Calendar</h1><p class="text-gray-600 mt-2">Daily, weekly, and monthly views with color-coded booking status.</p><div class="flex gap-4 mt-4"><span class="px-3 py-1 bg-green-100 rounded">Confirmed</span><span class="px-3 py-1 bg-yellow-100 rounded">Pending</span><span class="px-3 py-1 bg-red-100 rounded">Cancelled</span><span class="px-3 py-1 bg-blue-100 rounded">OTA Booking</span><span class="px-3 py-1 bg-purple-100 rounded">Direct Booking</span></div></div></div>
@endsection
