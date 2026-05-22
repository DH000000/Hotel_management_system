@extends('layouts.app')

@section('title', 'My Profile - TripLodge Universe')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold" style="color: #111111;">My Profile</h1>
            <p class="text-gray-500 mt-1">Manage your account settings and preferences</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

            <!-- Sidebar Menu -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden sticky top-24">
                    <div class="p-6 text-center border-b">
                        <div class="w-24 h-24 rounded-full mx-auto flex items-center justify-center text-3xl font-bold text-white mb-3" style="background: #E69500;">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <h3 class="font-semibold text-lg">{{ auth()->user()->name }}</h3>
                        <p class="text-sm text-gray-500">{{ ucfirst(str_replace('_', ' ', auth()->user()->role)) }}</p>
                        <span class="inline-block px-2 py-1 rounded-full text-xs mt-2 {{ auth()->user()->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ ucfirst(auth()->user()->status) }}
                        </span>
                    </div>
                    <div class="p-2">
                        <nav class="space-y-1">
                            <a href="#profile-info" class="profile-tab flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 transition active" data-tab="profile-info">
                                <i class="fas fa-user text-[#E69500] w-5"></i> Profile Information
                            </a>
                            <a href="#security" class="profile-tab flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 transition" data-tab="security">
                                <i class="fas fa-shield-alt text-[#E69500] w-5"></i> Security
                            </a>
                            <a href="#activity" class="profile-tab flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 transition" data-tab="activity">
                                <i class="fas fa-history text-[#E69500] w-5"></i> Activity Log
                            </a>
                            <a href="#notifications" class="profile-tab flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 transition" data-tab="notifications">
                                <i class="fas fa-bell text-[#E69500] w-5"></i> Notifications
                            </a>
                            @if(auth()->user()->role === 'hotel_owner')
                            <a href="#hotels" class="profile-tab flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 transition" data-tab="hotels">
                                <i class="fas fa-hotel text-[#E69500] w-5"></i> My Hotels
                            </a>
                            @endif
                            <a href="#billing" class="profile-tab flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-50 transition" data-tab="billing">
                                <i class="fas fa-credit-card text-[#E69500] w-5"></i> Billing
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="lg:col-span-3">

                <!-- Profile Information Tab -->
                <div id="profile-info" class="tab-content active">
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold" style="color: #111111;">Profile Information</h2>
                            <p class="text-gray-500 text-sm mt-1">Update your personal information</p>
                        </div>

                        @if(session('profile_success'))
                            <div class="m-6 p-3 bg-green-50 border border-green-200 rounded-lg text-green-600">
                                <i class="fas fa-check-circle mr-2"></i> {{ session('profile_success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/profile/update') }}" class="p-6">
                            @csrf
                            @method('PUT')
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                                    <input type="text" name="name" value="{{ auth()->user()->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                                    <input type="email" name="email" value="{{ auth()->user()->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Phone Number *</label>
                                    <input type="tel" name="phone" value="{{ auth()->user()->phone }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Alternate Phone</label>
                                    <input type="tel" name="alternate_phone" value="{{ auth()->user()->alternate_phone }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Language</label>
                                    <select name="language" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                        <option value="en" {{ auth()->user()->language == 'en' ? 'selected' : '' }}>English</option>
                                        <option value="hi" {{ auth()->user()->language == 'hi' ? 'selected' : '' }}>Hindi</option>
                                        <option value="fr" {{ auth()->user()->language == 'fr' ? 'selected' : '' }}>French</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Time Zone</label>
                                    <select name="timezone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none">
                                        <option value="Asia/Kolkata" {{ auth()->user()->timezone == 'Asia/Kolkata' ? 'selected' : '' }}>IST (India)</option>
                                        <option value="America/New_York" {{ auth()->user()->timezone == 'America/New_York' ? 'selected' : '' }}>EST (USA)</option>
                                        <option value="Europe/London" {{ auth()->user()->timezone == 'Europe/London' ? 'selected' : '' }}>GMT (UK)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="px-6 py-2 rounded-lg text-white font-semibold transition hover:opacity-90" style="background: #E69500;">
                                    <i class="fas fa-save mr-2"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Security Tab -->
                <div id="security" class="tab-content hidden">
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold" style="color: #111111;">Change Password</h2>
                            <p class="text-gray-500 text-sm mt-1">Update your password to keep your account secure</p>
                        </div>

                        @if(session('password_success'))
                            <div class="m-6 p-3 bg-green-50 border border-green-200 rounded-lg text-green-600">
                                <i class="fas fa-check-circle mr-2"></i> {{ session('password_success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/profile/change-password') }}" class="p-6">
                            @csrf
                            @method('PUT')
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Current Password *</label>
                                    <input type="password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">New Password *</label>
                                    <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none" required>
                                    <p class="text-xs text-gray-500 mt-1">Minimum 8 characters with at least one uppercase, one lowercase, one number</p>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Confirm New Password *</label>
                                    <input type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#E69500] focus:outline-none" required>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="px-6 py-2 rounded-lg text-white font-semibold transition hover:opacity-90" style="background: #E69500;">
                                    <i class="fas fa-key mr-2"></i> Update Password
                                </button>
                            </div>
                        </form>

                        <!-- Two Factor Authentication -->
                        <div class="p-6 border-t">
                            <h3 class="font-semibold text-lg mb-3">Two-Factor Authentication</h3>
                            <p class="text-gray-500 text-sm mb-3">Add an extra layer of security to your account</p>
                            <button class="px-4 py-2 border border-[#E69500] text-[#E69500] rounded-lg hover:bg-[#E69500] hover:text-white transition">
                                <i class="fas fa-mobile-alt mr-2"></i> Enable 2FA
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Activity Log Tab -->
                <div id="activity" class="tab-content hidden">
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold" style="color: #111111;">Recent Activity</h2>
                            <p class="text-gray-500 text-sm mt-1">Your account activity and login history</p>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                                    <i class="fas fa-sign-in-alt text-green-500 mt-1"></i>
                                    <div class="flex-1">
                                        <p class="font-semibold">Login</p>
                                        <p class="text-sm text-gray-500">Logged in from Chrome on Windows</p>
                                        <p class="text-xs text-gray-400">{{ now()->format('d M Y h:i A') }}</p>
                                    </div>
                                    <span class="text-xs text-gray-400">IP: 127.0.0.1</span>
                                </div>
                                <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                                    <i class="fas fa-edit text-blue-500 mt-1"></i>
                                    <div class="flex-1">
                                        <p class="font-semibold">Profile Updated</p>
                                        <p class="text-sm text-gray-500">Changed profile information</p>
                                        <p class="text-xs text-gray-400">{{ now()->subDays(2)->format('d M Y h:i A') }}</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                                    <i class="fas fa-key text-yellow-500 mt-1"></i>
                                    <div class="flex-1">
                                        <p class="font-semibold">Password Changed</p>
                                        <p class="text-sm text-gray-500">Password was updated successfully</p>
                                        <p class="text-xs text-gray-400">{{ now()->subDays(7)->format('d M Y h:i A') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <button class="text-sm text-[#E69500] hover:underline">View Full Activity Log →</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notifications Tab -->
                <div id="notifications" class="tab-content hidden">
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold" style="color: #111111;">Notification Preferences</h2>
                            <p class="text-gray-500 text-sm mt-1">Choose what notifications you want to receive</p>
                        </div>
                        <form method="POST" action="{{ url('/profile/notification-settings') }}" class="p-6">
                            @csrf
                            @method('PUT')
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="font-semibold">Email Notifications</p>
                                        <p class="text-sm text-gray-500">Receive updates and alerts via email</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="email_notifications" class="sr-only peer" {{ auth()->user()->email_notifications ? 'checked' : '' }}>
                                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-[#E69500] peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="font-semibold">WhatsApp Notifications</p>
                                        <p class="text-sm text-gray-500">Receive booking alerts on WhatsApp</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="whatsapp_notifications" class="sr-only peer" {{ auth()->user()->whatsapp_notifications ? 'checked' : '' }}>
                                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-[#E69500] peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all"></div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div>
                                        <p class="font-semibold">SMS Notifications</p>
                                        <p class="text-sm text-gray-500">Receive critical alerts via SMS</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" name="sms_notifications" class="sr-only peer" {{ auth()->user()->sms_notifications ? 'checked' : '' }}>
                                        <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-[#E69500] peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="px-6 py-2 rounded-lg text-white font-semibold transition hover:opacity-90" style="background: #E69500;">
                                    <i class="fas fa-save mr-2"></i> Save Preferences
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- My Hotels Tab (Hotel Owners Only) -->
                @if(auth()->user()->role === 'hotel_owner')
                <div id="hotels" class="tab-content hidden">
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold" style="color: #111111;">My Hotels</h2>
                            <p class="text-gray-500 text-sm mt-1">Manage your hotel properties</p>
                        </div>
                        <div class="p-6">
                            <div class="border rounded-lg p-4 mb-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h3 class="font-semibold text-lg">Grand Hyatt Mumbai</h3>
                                        <p class="text-sm text-gray-500">Mumbai, Maharashtra</p>
                                        <div class="flex items-center gap-2 mt-2">
                                            <span class="text-xs px-2 py-1 bg-green-100 text-green-800 rounded-full">Active</span>
                                            <span class="text-xs px-2 py-1 bg-blue-100 text-blue-800 rounded-full">42 Rooms</span>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="px-3 py-1 border border-[#E69500] text-[#E69500] rounded-lg text-sm hover:bg-[#E69500] hover:text-white transition">Manage</button>
                                        <button class="px-3 py-1 bg-[#E69500] text-white rounded-lg text-sm hover:opacity-90 transition">View Dashboard</button>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full py-2 border-2 border-dashed border-gray-300 rounded-lg text-gray-500 hover:border-[#E69500] hover:text-[#E69500] transition">
                                <i class="fas fa-plus mr-2"></i> Add New Hotel
                            </button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Billing Tab -->
                <div id="billing" class="tab-content hidden">
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-6 border-b">
                            <h2 class="text-xl font-semibold" style="color: #111111;">Billing & Subscription</h2>
                            <p class="text-gray-500 text-sm mt-1">Manage your subscription and payment methods</p>
                        </div>
                        <div class="p-6">
                            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <p class="text-sm text-gray-500">Current Plan</p>
                                        <p class="text-2xl font-bold" style="color: #111111;">Professional Plan</p>
                                        <p class="text-sm text-gray-500">Billed Monthly</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-2xl font-bold" style="color: #E69500;">₹2,999</p>
                                        <p class="text-sm text-gray-500">per month</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="h-2 rounded-full" style="width: 65%; background: #E69500;"></div>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">12 days remaining in billing cycle</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <button class="flex-1 px-4 py-2 border border-[#E69500] text-[#E69500] rounded-lg hover:bg-[#E69500] hover:text-white transition">
                                    <i class="fas fa-credit-card mr-2"></i> Update Payment
                                </button>
                                <button class="flex-1 px-4 py-2 bg-[#E69500] text-white rounded-lg hover:opacity-90 transition">
                                    <i class="fas fa-file-invoice mr-2"></i> View Invoices
                                </button>
                            </div>
                            <div class="mt-4 pt-4 border-t">
                                <p class="text-xs text-gray-400 text-center">Need help? <a href="{{ url('/contact') }}" class="text-[#E69500]">Contact Support</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // Tab switching functionality
    document.querySelectorAll('.profile-tab').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove active class from all tabs
            document.querySelectorAll('.profile-tab').forEach(t => {
                t.classList.remove('active', 'bg-gray-50');
            });

            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
                content.classList.remove('active');
            });

            // Add active class to clicked tab
            this.classList.add('active', 'bg-gray-50');

            // Show selected tab content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.remove('hidden');
            document.getElementById(tabId).classList.add('active');
        });
    });

    // Style for active tab
    const style = document.createElement('style');
    style.textContent = `
        .profile-tab.active {
            background-color: #f3f4f6;
            color: #E69500;
        }
        .profile-tab.active i {
            color: #E69500;
        }
    `;
    document.head.appendChild(style);
</script>
@endsection
