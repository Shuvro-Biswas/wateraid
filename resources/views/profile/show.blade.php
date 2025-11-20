@extends('layouts.app')
@section('title', ' - My Profile')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8">
        <h2 class="text-3xl font-bold text-blue-800 mb-8 text-center">My Profile</h2>

        {{-- @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif --}}

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Profile Info -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 flex items-center">
                    <span class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-3">
                        {{ substr($user->name, 0, 1) }}
                    </span>
                    {{ $user->name }}
                    @if ($user->is_admin)
                        <span class="ml-3 bg-yellow-400 text-black px-3 py-1 rounded-full text-sm font-bold">ADMIN</span>
                    @else
                        <span class="ml-3 bg-green-600 text-white px-3 py-1 rounded-full text-sm">Participant</span>
                    @endif
                </h3>
                <p class="text-gray-600"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="text-gray-600"><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p>
            </div>

            <!-- Update Form -->
            <div>
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="space-y-4">
                        <div>
                            <label class="block font-medium">Full Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" required
                                class="w-full px-4 py-2 border rounded-lg mt-1">
                        </div>
                        <div>
                            <label class="block font-medium">Organization</label>
                            <input type="text" name="organization" value="{{ $participant?->organization }}"
                                class="w-full px-4 py-2 border rounded-lg mt-1">
                        </div>
                        <div>
                            <label class="block font-medium">Phone</label>
                            <input type="text" name="phone" value="{{ $participant?->phone }}"
                                class="w-full px-4 py-2 border rounded-lg mt-1">
                        </div>
                        <div>
                            <label class="block font-medium">Notes / Dietary Requirements</label>
                            <textarea name="notes" rows="3" class="w-full px-4 py-2 border rounded-lg mt-1">{{ $participant?->notes }}</textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit"
                                class="bg-blue-800 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-900">
                                Update Profile
                            </button>
                            <a href="{{ route('profile.password') }}" class="ml-4 text-blue-600 hover:underline">
                                Change Password →
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
