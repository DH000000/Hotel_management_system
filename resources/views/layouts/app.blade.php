<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TripLodge Universe - Hotel Operating System')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#E69500',
                        'primary-dark': '#CC8400',
                        'primary-light': '#FFA726',
                        'dark': '#111111',
                        'dark-soft': '#1A1A1A',
                        'dark-light': '#2A2A2A',
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    @stack('styles')

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #E69500 0%, #111111 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #E69500 0%, #FFA726 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: #E69500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #CC8400;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(230, 149, 0, 0.2);
        }

        .btn-outline-primary {
            border: 2px solid #E69500;
            color: #E69500;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: #E69500;
            color: white;
            transform: translateY(-2px);
        }

        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
            border-color: #E69500;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #E69500;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #CC8400;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Toast Container -->
    <div id="toast-container" class="toast-container"></div>

    <!-- Navbar -->
    @include('layouts.partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Toast Component -->
    <script>
        window.toast = function(message, type = 'success') {
            const container = document.getElementById('toast-container');
            const toast = document.createElement('div');
            const colors = {
                success: '#10b981',
                error: '#ef4444',
                warning: '#E69500',
                info: '#3b82f6'
            };
            toast.className = `text-white px-6 py-3 rounded-lg shadow-lg mb-3 transform transition-all duration-300`;
            toast.style.backgroundColor = colors[type] || colors.success;
            toast.innerHTML = `
                <div class="flex items-center gap-3">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
                    <span>${message}</span>
                </div>
            `;
            container.appendChild(toast);
            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        };

        window.toastSuccess = (msg) => toast(msg, 'success');
        window.toastError = (msg) => toast(msg, 'error');
        window.toastWarning = (msg) => toast(msg, 'warning');
        window.toastInfo = (msg) => toast(msg, 'info');
    </script>

    @stack('scripts')
</body>
</html>
