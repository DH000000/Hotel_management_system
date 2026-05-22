@extends('layouts.app')

@section('title', 'AI Rate & Revenue Engine - TripLodge Universe')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-8">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-chart-line text-3xl" style="color: #E69500;"></i>
                <h1 class="text-3xl font-bold" style="color: #111111;">AI Rate & Revenue Engine</h1>
            </div>
            <p class="text-gray-600">AI-powered dynamic pricing, demand forecasting, and revenue optimization</p>
        </div>

        <!-- Revenue Impact -->
        <div class="bg-gradient-to-r from-[#E69500] to-[#FFA726] rounded-xl p-6 text-white mb-8">
            <p class="text-sm opacity-90">AI Revenue Impact</p>
            <p class="text-3xl font-bold">+35%</p>
            <p class="text-sm">Average revenue increase for hotels using AI pricing</p>
        </div>

        <!-- Pricing Suggestions -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
            <div class="p-6 border-b"><h2 class="text-xl font-semibold">AI Pricing Suggestions</h2></div>
            <div class="divide-y">
                <div class="p-4 flex justify-between items-center"><div><p class="font-semibold">Deluxe Room</p><p class="text-sm text-gray-500">Current: ₹5,000</p></div><div><span class="text-green-600 bg-green-50 px-3 py-1 rounded-full">Suggested: ₹5,800 ↑16%</span></div><button class="text-[#E69500]">Apply</button></div>
                <div class="p-4 flex justify-between items-center"><div><p class="font-semibold">Suite Room</p><p class="text-sm text-gray-500">Current: ₹12,000</p></div><div><span class="text-green-600 bg-green-50 px-3 py-1 rounded-full">Suggested: ₹14,500 ↑21%</span></div><button class="text-[#E69500]">Apply</button></div>
                <div class="p-4 flex justify-between items-center"><div><p class="font-semibold">Standard Room</p><p class="text-sm text-gray-500">Current: ₹3,500</p></div><div><span class="text-yellow-600 bg-yellow-50 px-3 py-1 rounded-full">Suggested: ₹3,800 ↑9%</span></div><button class="text-[#E69500]">Apply</button></div>
            </div>
        </div>
    </div>
</div>
@endsection
