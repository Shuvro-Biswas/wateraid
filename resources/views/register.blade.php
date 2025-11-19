{{-- @extends('layouts.app')
@section('title', ' - Register')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-10 rounded-xl shadow-xl">
        <h2 class="text-4xl font-bold text-center text-blue-800 mb-8">Register for Convention</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <div>
                    <label class="block font-medium">Full Name *</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 border rounded-lg mt-1">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 border rounded-lg mt-1">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium">Password *</label>
                    <input type="password" name="password" required class="w-full px-4 py-3 border rounded-lg mt-1">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium">Confirm Password *</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full px-4 py-3 border rounded-lg mt-1">
                </div>

                <div>
                    <label class="block font-medium">Organization</label>
                    <input type="text" name="organization" value="{{ old('organization') }}"
                        class="w-full px-4 py-3 border rounded-lg mt-1">
                </div>

                <div>
                    <label class="block font-medium">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone') }}"
                        class="w-full px-4 py-3 border rounded-lg mt-1">
                </div>

                <div>
                    <label class="block font-medium">Notes / Dietary Needs</label>
                    <textarea name="notes" rows="4" class="w-full px-4 py-3 border rounded-lg mt-1">{{ old('notes') }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-800 text-white px-10 py-4 rounded-lg text-xl hover:bg-blue-900">
                        Complete Registration
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection --}}

{{-- @extends('layouts.app')

@section('title', ' - Register')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-2xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-blue-800 mb-4">
                    Register for Convention
                </h1>
                <p class="text-gray-600 text-lg">
                    Join the International Rainwater Convention 2025
                </p>
            </div>

            <!-- Registration Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
                <form action="{{ route('register') }}" method="POST" class="space-y-8">
                    @csrf

                    <!-- Personal Information Section -->
                    <div class="form-section">
                        <h3 class="section-title">Personal Information</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div class="form-group md:col-span-2">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="form-input @error('name') border-red-500 @enderror"
                                    placeholder="Enter your full name">
                                @error('name')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group md:col-span-2">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="form-input @error('email') border-red-500 @enderror"
                                    placeholder="your.email@example.com">
                                @error('email')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-input"
                                    placeholder="+1 (555) 000-0000">
                            </div>

                            <!-- Organization -->
                            <div class="form-group">
                                <label class="form-label">Organization</label>
                                <input type="text" name="organization" value="{{ old('organization') }}"
                                    class="form-input" placeholder="Your company or institution">
                            </div>
                        </div>
                    </div>

                    <!-- Security Section -->
                    <div class="form-section">
                        <h3 class="section-title">Account Security</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Password -->
                            <div class="form-group">
                                <label class="form-label">Password *</label>
                                <input type="password" name="password" required
                                    class="form-input @error('password') border-red-500 @enderror"
                                    placeholder="Create a secure password">
                                @error('password')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label class="form-label">Confirm Password *</label>
                                <input type="password" name="password_confirmation" required class="form-input"
                                    placeholder="Repeat your password">
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="form-section">
                        <h3 class="section-title">Additional Information</h3>

                        <!-- Notes / Dietary Needs -->
                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea name="notes" rows="4" class="form-input resize-none"
                                placeholder="Dietary restrictions, accessibility needs, or other requirements">{{ old('notes') }}</textarea>
                            <p class="text-sm text-gray-500 mt-2">
                                Let us know if you have any special requirements
                            </p>
                        </div>
                    </div>

                    <!-- Submit Section -->
                    <div class="text-center pt-6">
                        <button type="submit" class="btn-primary w-full md:w-auto">
                            <span class="btn-text">Complete Registration</span>
                            <span class="btn-icon">→</span>
                        </button>

                        <p class="text-gray-600 text-sm mt-6">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                Sign in here
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Info Box -->
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mt-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <span class="text-blue-600 text-xl">ℹ️</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-blue-800 font-semibold">Registration Information</h4>
                        <p class="text-blue-700 text-sm mt-1">
                            Your registration gives you access to all conference sessions, materials, and networking events.
                            Fields marked with * are required.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .form-section {
        @apply border-b border-gray-200 pb-8 last:border-b-0 last:pb-0;
    }

    .section-title {
        @apply text-xl font-semibold text-gray-900 mb-6 flex items-center;
    }

    .section-title::before {
        content: '';
        @apply w-1 h-6 bg-blue-600 rounded mr-3;
    }

    .form-group {
        @apply space-y-2;
    }

    .form-label {
        @apply block text-sm font-medium text-gray-700;
    }

    .form-input {
        @apply w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400;
    }

    .form-error {
        @apply text-red-500 text-sm font-medium;
    }

    /* Button Styles */
    .btn-primary {
        @apply bg-blue-800 text-white px-12 py-4 rounded-lg text-lg font-semibold hover:bg-blue-900 transform hover:scale-105 transition-all duration-200 flex items-center justify-center space-x-3 shadow-lg;
    }

    .btn-text {
        @apply font-semibold;
    }

    .btn-icon {
        @apply text-xl;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-section {
            @apply pb-6;
        }

        .section-title {
            @apply text-lg mb-4;
        }

        .btn-primary {
            @apply w-full px-8 py-4;
        }
    }
</style> --}}



@extends('layouts.app')

@section('title', ' - Register')

@section('content')
    <div class="min-h-screen bg-gray-50 py-6">
        <div class="max-w-2xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-blue-800 mb-4">
                    Register for Convention
                </h1>
                <p class="text-gray-600 text-lg">
                    Join the International Rainwater Convention 2025
                </p>
            </div>

            <!-- Registration Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
                <form action="{{ route('register') }}" method="POST" class="space-y-8">
                    @csrf

                    <!-- Personal Information Section -->
                    <div class="form-section">
                        <h3 class="section-title">Personal Information</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div class="form-group md:col-span-2">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="form-input @error('name') border-red-500 @enderror"
                                    placeholder="Enter your full name">
                                @error('name')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group md:col-span-2">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="form-input @error('email') border-red-500 @enderror"
                                    placeholder="your.email@example.com">
                                @error('email')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-input"
                                    placeholder="+1 (555) 000-0000">
                            </div>

                            <!-- Organization -->
                            <div class="form-group">
                                <label class="form-label">Organization</label>
                                <input type="text" name="organization" value="{{ old('organization') }}"
                                    class="form-input" placeholder="Your company or institution">
                            </div>
                        </div>
                    </div>

                    <!-- Security Section -->
                    <div class="form-section">
                        <h3 class="section-title">Account Security</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Password -->
                            <div class="form-group">
                                <label class="form-label">Password *</label>
                                <input type="password" name="password" required
                                    class="form-input @error('password') border-red-500 @enderror"
                                    placeholder="Create a secure password">
                                @error('password')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label class="form-label">Confirm Password *</label>
                                <input type="password" name="password_confirmation" required class="form-input"
                                    placeholder="Repeat your password">
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="form-section">
                        <h3 class="section-title">Additional Information</h3>

                        <!-- Notes / Dietary Needs -->
                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea name="notes" rows="4" class="form-input resize-none"
                                placeholder="Dietary restrictions, accessibility needs, or other requirements">{{ old('notes') }}</textarea>
                            <p class="text-sm text-gray-500 mt-2">
                                Let us know if you have any special requirements
                            </p>
                        </div>
                    </div>

                    <!-- Submit Section -->
                    <div class="text-center pt-6">
                        <button type="submit" class="btn-primary w-full md:w-auto">
                            <span class="btn-text">Complete Registration</span>
                            <span class="btn-icon">→</span>
                        </button>

                        <p class="text-gray-600 text-sm mt-6">
                            Already have an account?
                            <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                Sign in here
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Info Box -->
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mt-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <span class="text-blue-600 text-xl">ℹ️</span>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-blue-800 font-semibold">Registration Information</h4>
                        <p class="text-blue-700 text-sm mt-1">
                            Your registration gives you access to all conference sessions, materials, and networking events.
                            Fields marked with * are required.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Form Sections */
        .form-section {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 2rem;
        }

        .form-section:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        /* Section Titles */
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .section-title::before {
            content: '';
            width: 0.25rem;
            height: 1.5rem;
            background: #2563eb;
            border-radius: 0.125rem;
            margin-right: 0.75rem;
        }

        /* Form Groups */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        /* Form Labels */
        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
        }

        /* Form Inputs */
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            font-size: 1rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        /* Error States */
        .form-error {
            color: #ef4444;
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Primary Button */
        .btn-primary {
            background: #1e40af;
            color: white;
            padding: 1rem 3rem;
            border-radius: 0.5rem;
            font-size: 1.125rem;
            font-weight: 600;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #1e3a8a;
            transform: scale(1.05);
        }

        .btn-text {
            font-weight: 600;
        }

        .btn-icon {
            font-size: 1.25rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-section {
                padding-bottom: 1.5rem;
            }

            .section-title {
                font-size: 1.125rem;
                margin-bottom: 1rem;
            }

            .btn-primary {
                width: 100%;
                padding: 1rem 2rem;
            }
        }
    </style>
@endsection
