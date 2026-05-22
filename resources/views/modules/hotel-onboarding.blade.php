@extends('layouts.app')

@section('title', 'Hotel Onboarding Module - TripLodge Universe')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Module Header -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-hotel text-3xl" style="color: #E69500;"></i>
                <h1 class="text-3xl font-bold" style="color: #111111;">Hotel Onboarding Automation</h1>
            </div>
            <p class="text-gray-600">Auto hotel registration, KYC verification, property document upload, and AI profile quality scoring</p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-[#E69500]">
                <p class="text-gray-500 text-sm">Total Hotels Onboarded</p>
                <p class="text-2xl font-bold">5,284</p>
                <p class="text-green-600 text-xs"><i class="fas fa-arrow-up"></i> +124 this month</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
                <p class="text-gray-500 text-sm">Approved</p>
                <p class="text-2xl font-bold text-green-600">4,892</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-500">
                <p class="text-gray-500 text-sm">Pending Approval</p>
                <p class="text-2xl font-bold text-yellow-600">267</p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-red-500">
                <p class="text-gray-500 text-sm">Rejected</p>
                <p class="text-2xl font-bold text-red-600">125</p>
            </div>
        </div>

        <!-- Recent Onboarding Requests -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b">
                <h2 class="text-xl font-semibold">Pending Onboarding Requests</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr><th class="p-3 text-left">Hotel Name</th><th class="p-3 text-left">Owner</th><th class="p-3 text-left">Location</th><th class="p-3 text-left">AI Score</th><th class="p-3 text-left">Status</th><th class="p-3 text-left">Action</th></tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr><td class="p-3 font-semibold">Grand Hyatt Pune</td><td class="p-3">Rajesh Sharma</td><td class="p-3">Pune</td><td class="p-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">92%</span></td><td class="p-3"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Pending KYC</span></td><td class="p-3"><button class="text-[#E69500] hover:underline">Review</button></td></tr>
                        <tr><td class="p-3 font-semibold">JW Marriott Mumbai</td><td class="p-3">Priya Verma</td><td class="p-3">Mumbai</td><td class="p-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">88%</span></td><td class="p-3"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Documents Pending</span></td><td class="p-3"><button class="text-[#E69500] hover:underline">Review</button></td></tr>
                        <tr><td class="p-3 font-semibold">The Leela Palace</td><td class="p-3">Amit Singh</td><td class="p-3">Delhi</td><td class="p-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">95%</span></td><td class="p-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Auto-Approved</span></td><td class="p-3"><button class="text-[#E69500] hover:underline">View</button></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
