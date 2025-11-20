@extends('layouts.app')

@section('title', ' - Login')

@section('content')
    <div class="min-h-screen bg-gray-50 flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full">
            <!-- Login Card -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <!-- Header -->
                <div class="text-center mb-8">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900">Welcome Back</h1>
                    <p class="text-gray-600 mt-1">Sign in to your account</p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                                placeholder="Enter your email">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="text-sm font-medium text-gray-700">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-sm text-blue-600 hover:text-blue-800">Forgot password?</a>
                            @endif
                        </div>
                        <div class="relative">
                            <input type="password" name="password" required
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror"
                                placeholder="Enter your password">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" name="remember"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors flex items-center justify-center gap-2">
                        Sign In
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>

                <!-- Registration Link -->
                <div class="text-center mt-6 pt-6 border-t border-gray-200">
                    <p class="text-gray-600 text-sm">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-medium ml-1">Create
                            one here</a>
                    </p>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-4">
                <p class="text-gray-500 text-xs">
                    By signing in, you agree to our
                    <a href="#" class="text-blue-600 hover:text-blue-800">Terms</a> and
                    <a href="#" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
@endsection
