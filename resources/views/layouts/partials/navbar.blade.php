<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /* Header Container */
    .hero-header {
        position: relative;
        position: relative;
        width: 100%;
        height: 80vh; /* Adjust height as needed */
        background: linear-gradient(135deg, #0f172a, #1e293b); /* Elegant dark luxury palette */
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Background Canvas */
    #animation-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none; /* Let mouse events pass through if needed, though JS tracks it */
    }

    /* Foreground Content */
    .header-content {
        position: relative;
        z-index: 2; /* Keeps text above the animation */
        text-align: center;
        color: #ffffff;
        padding: 20px;
        max-width: 800px;
    }

    .header-content h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .header-content p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        color: #cbd5e1;
    }

    /* Simple Luxury Booking Bar */
    .search-bar {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 15px;
        border-radius: 50px;
        display: flex;
        gap: 10px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .search-bar input, .search-bar button {
        padding: 12px 20px;
        border: none;
        border-radius: 25px;
        outline: none;
    }

    .search-bar input {
        flex: 1;
        background: rgba(255, 255, 255, 0.9);
    }

    .search-bar button {
        background: #d4af37; /* Luxury Gold tone */
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .search-bar button:hover {
        background: #f3ce56;
    }
</style>


<nav class="bg-white/80 shadow-lg sticky top-0 z-50 transition-all duration-300" style="border-bottom: 3px solid #E69500;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-[#E69500]">
                        <img src="/logo.png" alt="TripLodge Universe Logo" class="h-8 w-auto">
                    </span>
                    <span class="hidden md:inline font-bold text-xl transition-colors" style="color: #111111;">
                        TripLodge <span style="color: #E69500;">Universe</span>
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex ml-10 space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">
                            Dashboard
                        </a>
                        @if(auth()->user()->role === 'hotel_owner')
                            <a href="{{ url('/hotel/dashboard') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">
                                Hotel Panel
                            </a>
                        @elseif(auth()->user()->role === 'super_admin' || auth()->user()->role === 'admin')
                            <a href="{{ url('/admin/dashboard') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">
                                Admin Panel
                            </a>
                        @endif
                        <a href="{{ url('/modules') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">
                            Modules
                        </a>
                    @else
                        <a href="{{ url('/') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">Home</a>
                        <a href="{{ url('/features') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">Features</a>
                        <a href="{{ url('/pricing') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">Pricing</a>
                        <a href="{{ url('/how-it-works') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">How It Works</a>
                        <a href="{{ url('/modules') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">Modules</a>
                        <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-[#E69500] px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:translate-y-[-2px]">Contact</a>
                    @endauth
                </div>
            </div>

            <div class="flex items-center space-x-2 sm:space-x-4">
                @auth
                    <!-- Notifications Dropdown - Mobile Friendly -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @keydown.escape.window="open = false" class="text-gray-600 hover:text-[#E69500] relative transition-colors duration-300 group p-2 rounded-full hover:bg-gray-100">
                            <i class="fas fa-bell text-xl group-hover:scale-110 transition-transform"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 text-center min-w-[18px] h-[18px] flex items-center justify-center animate-pulse">3</span>
                        </button>

                        <!-- Dropdown - Responsive width -->
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             @click.away="open = false"
                             class="absolute right-0 mt-2 bg-white rounded-lg shadow-xl z-50 border-t-4 overflow-hidden w-screen max-w-[calc(100vw-2rem)] sm:max-w-sm md:w-80"
                             style="border-top-color: #E69500; right: -0.5rem;"
                             :class="{
                                'sm:right-0 sm:-translate-x-0': true,
                                'right-0': true
                             }">
                            <div class="p-3 border-b bg-gray-50">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-sm sm:text-base" style="color: #111111;">Notifications</h3>
                                    <button class="text-xs text-[#E69500] hover:underline">Mark all read</button>
                                </div>
                            </div>
                            <div class="max-h-96 overflow-y-auto divide-y">
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition-all">
                                    <div class="flex gap-3">
                                        <i class="fas fa-calendar-check text-green-500 mt-1 flex-shrink-0"></i>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold truncate">New booking received</p>
                                            <p class="text-xs text-gray-500 truncate">Booking from Booking.com - Deluxe Room</p>
                                            <small class="text-gray-400 text-xs">2 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition-all">
                                    <div class="flex gap-3">
                                        <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 flex-shrink-0"></i>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold truncate">Rate parity issue detected</p>
                                            <p class="text-xs text-gray-500 truncate">MakeMyTrip showing lower rate for Suite</p>
                                            <small class="text-gray-400 text-xs">1 hour ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition-all">
                                    <div class="flex gap-3">
                                        <i class="fas fa-robot text-[#E69500] mt-1 flex-shrink-0"></i>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold truncate">AI pricing updated</p>
                                            <p class="text-xs text-gray-500 truncate">15 rates updated based on demand</p>
                                            <small class="text-gray-400 text-xs">3 hours ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 hover:bg-gray-50 cursor-pointer transition-all">
                                    <div class="flex gap-3">
                                        <i class="fas fa-chart-line text-blue-500 mt-1 flex-shrink-0"></i>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold truncate">Weekly report ready</p>
                                            <p class="text-xs text-gray-500 truncate">Revenue up 15% vs last week</p>
                                            <small class="text-gray-400 text-xs">Yesterday</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border-t text-center bg-gray-50">
                                <a href="#" class="text-xs text-[#E69500] hover:underline">View all notifications →</a>
                            </div>
                        </div>
                    </div>

                    <!-- User Profile Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @keydown.escape.window="open = false" class="flex items-center space-x-1 sm:space-x-2 focus:outline-none group p-1 rounded-full hover:bg-gray-100 transition-colors">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-white font-bold transition-all duration-300 group-hover:scale-105 group-hover:shadow-md" style="background: #E69500;">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <span class="text-gray-700 hidden md:inline group-hover:text-[#E69500] transition-colors text-sm">{{ auth()->user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs text-gray-500 hidden md:inline transition-transform duration-300" :class="{'rotate-180': open}"></i>
                        </button>

                        <!-- Dropdown Menu - Mobile Friendly -->
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-2"
                             @click.away="open = false"
                             class="absolute right-0 mt-2 bg-white rounded-lg shadow-xl z-50 border-t-4 overflow-hidden w-screen max-w-[calc(100vw-2rem)] sm:max-w-sm md:w-64"
                             style="border-top-color: #E69500; right: -0.5rem;">

                            <!-- User Info -->
                            <div class="p-4 border-b bg-gradient-to-r from-gray-50 to-white">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-lg flex-shrink-0" style="background: #E69500;">
                                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-semibold text-gray-800 truncate">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                                        <span class="inline-block mt-1 px-2 py-0.5 rounded-full text-xs bg-green-100 text-green-700">{{ ucfirst(auth()->user()->role) }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Items -->
                            <div class="py-2">
                                <a href="{{ url('/profile') }}" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 hover:bg-gray-50 transition-colors group">
                                    <i class="fas fa-user-circle w-5 text-gray-400 group-hover:text-[#E69500]"></i>
                                    <span class="text-sm">My Profile</span>
                                </a>
                                <a href="{{ url('/profile/settings') }}" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 hover:bg-gray-50 transition-colors group">
                                    <i class="fas fa-sliders-h w-5 text-gray-400 group-hover:text-[#E69500]"></i>
                                    <span class="text-sm">Account Settings</span>
                                </a>
                                <a href="{{ url('/billing') }}" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 hover:bg-gray-50 transition-colors group">
                                    <i class="fas fa-credit-card w-5 text-gray-400 group-hover:text-[#E69500]"></i>
                                    <span class="text-sm">Billing & Subscription</span>
                                </a>
                                <hr class="my-1">
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-700 hover:bg-gray-50 transition-colors group">
                                    <i class="fas fa-question-circle w-5 text-gray-400 group-hover:text-[#E69500]"></i>
                                    <span class="text-sm">Help & Support</span>
                                </a>
                                <form method="POST" action="{{ url('/logout') }}" class="block">
                                    @csrf
                                    <button type="submit" class="flex items-center gap-3 px-4 py-2.5 text-red-600 hover:bg-red-50 transition-colors w-full">
                                        <i class="fas fa-sign-out-alt w-5"></i>
                                        <span class="text-sm">Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="text-gray-700 hover:text-[#E69500] px-2 sm:px-3 py-2 transition-all duration-300 hover:translate-y-[-2px] text-sm sm:text-base">Login</a>
                    <a href="{{ url('/register') }}" class="hidden sm:inline-block text-white px-4 sm:px-5 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-sm sm:text-base" style="background: #E69500;">
                        Start Free Trial
                    </a>
                @endauth

                <!-- Mobile Menu Button with Animation -->
                <div class="md:hidden ml-2">
                    <button id="mobile-menu-btn" class="relative w-10 h-10 rounded-lg flex items-center justify-center focus:outline-none transition-all duration-300 hover:bg-gray-100">
                        <div class="relative w-6 h-5">
                            <span class="hamburger-line top-0"></span>
                            <span class="hamburger-line top-1/2 -translate-y-1/2"></span>
                            <span class="hamburger-line bottom-0"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t shadow-lg max-h-[calc(100vh-64px)] overflow-y-auto">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @auth
                <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                    <i class="fas fa-tachometer-alt w-5"></i> Dashboard
                </a>
                @if(auth()->user()->role === 'hotel_owner')
                    <a href="{{ url('/hotel/dashboard') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                        <i class="fas fa-hotel w-5"></i> Hotel Panel
                    </a>
                @elseif(auth()->user()->role === 'super_admin' || auth()->user()->role === 'admin')
                    <a href="{{ url('/admin/dashboard') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                        <i class="fas fa-crown w-5"></i> Admin Panel
                    </a>
                @endif
                <a href="{{ url('/modules') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                    <i class="fas fa-cubes w-5"></i> Modules
                </a>
                <a href="{{ url('/profile') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                    <i class="fas fa-user w-5"></i> Profile
                </a>
                <a href="{{ url('/billing') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                    <i class="fas fa-credit-card w-5"></i> Billing
                </a>
                <hr class="my-2">
                <form method="POST" action="{{ url('/logout') }}" class="block">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 w-full text-left text-red-600 hover:bg-red-50 px-3 py-3 rounded-md text-base font-medium transition-all">
                        <i class="fas fa-sign-out-alt w-5"></i> Logout
                    </button>
                </form>
            @else
                <a href="{{ url('/') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-home w-5"></i> Home
                </a>
                <a href="{{ url('/features') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-star w-5"></i> Features
                </a>
                <a href="{{ url('/pricing') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-tag w-5"></i> Pricing
                </a>
                <a href="{{ url('/how-it-works') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-play-circle w-5"></i> How It Works
                </a>
                <a href="{{ url('/modules') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-cubes w-5"></i> Modules
                </a>
                <a href="{{ url('/contact') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-envelope w-5"></i> Contact
                </a>
                <hr class="my-2">
                <a href="{{ url('/login') }}" class="flex items-center gap-3 text-gray-700 hover:text-[#E69500] hover:bg-gray-50 px-3 py-3 rounded-md text-base font-medium">
                    <i class="fas fa-sign-in-alt w-5"></i> Login
                </a>
                <a href="{{ url('/register') }}" class="flex items-center gap-3 text-white px-3 py-3 rounded-md text-base font-medium" style="background: #E69500;">
                    <i class="fas fa-user-plus w-5"></i> Sign Up
                </a>
            @endauth
        </div>
    </div>
</nav>

<style>
    /* Hamburger Menu Animation */
    .hamburger-line {
        position: absolute;
        display: block;
        width: 100%;
        height: 2px;
        background-color: #4a5568;
        transition: all 0.3s ease;
        border-radius: 2px;
    }

    #mobile-menu-btn.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg);
        top: 50%;
        margin-top: -1px;
    }

    #mobile-menu-btn.active .hamburger-line:nth-child(2) {
        opacity: 0;
        transform: translateX(-10px);
    }

    #mobile-menu-btn.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg);
        bottom: 50%;
        margin-bottom: -1px;
    }

    /* Mobile Menu Animation */
    #mobile-menu {
        transition: all 0.3s ease;
    }

    #mobile-menu:not(.hidden) {
        animation: slideDown 0.3s ease forwards;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Custom Scrollbar for dropdowns */
    .max-h-96::-webkit-scrollbar {
        width: 4px;
    }

    .max-h-96::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .max-h-96::-webkit-scrollbar-thumb {
        background: #E69500;
        border-radius: 10px;
    }

    /* Mobile view improvements */
    @media (max-width: 640px) {
        .w-screen {
            width: calc(100vw - 1rem);
        }
    }
</style>

<script>
    // Mobile menu toggle with animation
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('hidden');
            document.body.style.overflow = mobileMenu.classList.contains('hidden') ? '' : 'hidden';
        });
    }

    // Close mobile menu on window resize if screen becomes desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
            mobileMenuBtn?.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        // Close mobile menu if clicking outside
        if (mobileMenu && !mobileMenu.classList.contains('hidden') &&
            !mobileMenuBtn?.contains(event.target) &&
            !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            mobileMenuBtn?.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
</script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>






