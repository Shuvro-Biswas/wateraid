<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainwater Convention 2025 @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    <!-- Navigation-->
    <nav class="bg-blue-800 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Rainwater Convention 2025</h1>

            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('faqs') }}" class="hover:underline">FAQs</a>

                @auth
                    <div class="relative group">
                        <button
                            class="flex items-center space-x-2 hover:bg-blue-700 px-3 py-2 rounded-lg transition-colors">
                            <div
                                class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                {{ substr(auth()->user()->name, 0, 1) }}
                            </div>
                            <span class="font-medium">{{ auth()->user()->name }}</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div
                            class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-xl py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                                <p class="text-sm text-gray-600 truncate">{{ auth()->user()->email }}</p>
                                <p class="text-xs text-blue-600 font-medium mt-1">
                                    {{ auth()->user()->isAdmin() ? 'Admin' : 'Participant' }}
                                </p>
                            </div>

                            @if (auth()->user()->isAdmin())
                                <a href="{{ route('admin') }}"
                                    class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <svg class="w-4 h-4 mr-3 text-yellow-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Admin Portal
                                </a>
                            @endif

                            <a href="{{ route('profile.show') }}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                My Profile
                            </a>

                            <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-100">
                                @csrf
                                <button type="submit"
                                    class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <svg class="w-4 h-4 mr-3 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-white text-blue-800 px-5 py-2 rounded font-bold hover:bg-gray-200">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Floating Toast Notifications -->
    <div id="toast-container" class="fixed top-20 right-4 z-50 space-y-3">
        @if (session('success'))
            <div
                class="toast bg-green-600 text-white px-6 py-4 rounded-lg shadow-2xl flex items-center space-x-3 transform translate-x-full opacity-0 transition-all duration-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div
                class="toast bg-red-600 text-white px-6 py-4 rounded-lg shadow-2xl flex items-center space-x-3 transform translate-x-full opacity-0 transition-all duration-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="font-medium">{{ session('error') }}</span>
            </div>
        @endif
    </div>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-950 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow-400">Rainwater Convention 2025</h3>
                    <p class="text-blue-200 text-sm">
                        International Conference on Rainwater Harvesting,<br>
                        Sustainable Water Management & Climate Resilience
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Quick Links</h4>
                    <ul class="space-y-2 text-blue-200 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-yellow-400 transition">Home</a></li>
                        <li><a href="{{ route('faqs') }}" class="hover:text-yellow-400 transition">FAQs</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-yellow-400 transition">Register</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Event Details</h4>
                    <p class="text-blue-200 text-sm">
                        15–17 December 2025<br>
                        Banani, Dhaka<br>
                        9:00 AM – 5:00 PM EAT
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Contact</h4>
                    <p class="text-blue-200 text-sm">
                        info@rainwaterconvention.org<br>
                        +254 700 123 456<br>
                        <span class="block mt-3 text-xs">© 2025 Rainwater Convention. All rights reserved.</span>
                    </p>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-6 text-center text-blue-300 text-sm">
                Developed By Shuvro Biswas- YPL@ICT-wateraid
            </div>
        </div>
    </footer>

    <!-- Auto Hide Toast After 3 Seconds -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toasts = document.querySelectorAll('.toast');

            toasts.forEach(toast => {
                // Slide In
                setTimeout(() => {
                    toast.classList.remove('translate-x-full', 'opacity-0');
                    toast.classList.add('translate-x-0', 'opacity-100');
                }, 100);

                // Slide Out after 3 seconds
                setTimeout(() => {
                    toast.classList.remove('translate-x-0', 'opacity-100');
                    toast.classList.add('translate-x-full', 'opacity-0');
                    toast.addEventListener('transitionend', () => toast.remove());
                }, 3000);
            });
        });
    </script>
</body>

</html>
