{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainwater Convention @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    {{-- <nav class="bg-blue-800 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Rainwater Convention 2025</h1>
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('faqs') }}" class="hover:underline">FAQs</a>

                @auth
                    @if (auth()->user()->isAdmin())
                        <a href="{{ route('admin') }}" class="bg-yellow-500 px-4 py-2 rounded font-bold">Admin Portal</a>
                    @endif
                    <span class="font-medium">Hello, {{ auth()->user()->name }}</span>
                    <a href="{{ route('register') }}" class="hover:underline">My Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline-flex">
                        @csrf
                        <button type="submit" class="hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-white text-blue-800 px-5 py-2 rounded font-bold hover:bg-gray-200">Register</a>
                @endauth
            </div>
        </div>
    </nav> --}}

    <nav class="bg-blue-800 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo/Brand -->
            <h1 class="text-2xl font-bold">Rainwater Convention 2025</h1>

            <!-- Navigation Links -->
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('faqs') }}" class="hover:underline">FAQs</a>

                @auth
                    <!-- User Dropdown -->
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

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-xl py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <!-- User Info -->
                            <div class="px-4 py-3 border-b border-gray-100">
                                <p class="text-sm font-semibold text-gray-900">{{ auth()->user()->name }}</p>
                                <p class="text-sm text-gray-600 truncate">{{ auth()->user()->email }}</p>
                                <p class="text-xs text-blue-600 font-medium mt-1">
                                    {{ auth()->user()->isAdmin() ? 'Admin' : 'User' }}</p>
                            </div>

                            <!-- Admin Portal -->
                            @if (auth()->user()->isAdmin())
                                <a href="{{ route('admin') }}"
                                    class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
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

                            <!-- Profile -->
                            <a href="{{ route('register') }}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                View Profile
                            </a>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-100">
                                @csrf
                                <button type="submit"
                                    class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                    <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor"
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
                    <!-- Guest Links -->
                    <a href="{{ route('login') }}" class="hover:underline">Login</a>
                    <a href="{{ route('register') }}"
                        class="bg-white text-blue-800 px-5 py-2 rounded font-bold hover:bg-gray-200 transition-colors">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8 px-4">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>
    <footer class="bg-blue-950 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Column 1 -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-yellow-400">Rainwater Convention 2025</h3>
                    <p class="text-blue-200 text-sm">
                        International Conference on Rainwater Harvesting,<br>
                        Sustainable Water Management & Climate Resilience
                    </p>
                </div>

                <!-- Column 2 -->
                <div>
                    <h4 class="font-semibold mb-3">Quick Links</h4>
                    <ul class="space-y-2 text-blue-200 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-yellow-400 transition">Home</a></li>
                        <li><a href="{{ route('faqs') }}" class="hover:text-yellow-400 transition">FAQs</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-yellow-400 transition">Register</a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div>
                    <h4 class="font-semibold mb-3">Event Details</h4>
                    <p class="text-blue-200 text-sm">
                        📅 15–17 December 2025<br>
                        📍 KICC, Nairobi, Kenya<br>
                        ⏰ 9:00 AM – 5:00 PM EAT
                    </p>
                </div>

                <!-- Column 4 -->
                <div>
                    <h4 class="font-semibold mb-3">Contact</h4>
                    <p class="text-blue-200 text-sm">
                        ✉️ info@rainwaterconvention.org<br>
                        ☎️ +254 700 123 456<br>
                        <span class="block mt-3 text-xs">© 2025 Rainwater Convention. All rights reserved.</span>
                    </p>
                </div>
            </div>

            <div class="border-t border-blue-800 mt-8 pt-6 text-center text-blue-300 text-sm">
                Developed By Shuvro Biswas for sustainable water future
            </div>
        </div>
    </footer>
</body>

</html>
