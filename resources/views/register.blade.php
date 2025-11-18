@extends('layouts.app')
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
@endsection
