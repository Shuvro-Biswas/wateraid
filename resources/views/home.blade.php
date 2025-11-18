@extends('layouts.app')

@section('title', ' - Home')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-6 text-blue-800">Welcome to the Annual Rainwater Convention 2025</h2>
        <p class="text-lg text-gray-700 leading-relaxed text-center mb-8">
            Join industry leaders, researchers, and enthusiasts to explore the latest in rainwater harvesting,
            sustainable water management, and climate resilience.
        </p>

        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <div class="text-center">
                <h3 class="text-2xl font-semibold mb-4">Date & Venue</h3>
                <p class="text-gray-600">15-17 December 2025<br>International Convention Center, Nairobi</p>
            </div>
            <div class="text-center">
                <h3 class="text-2xl font-semibold mb-4">Key Topics</h3>
                <ul class="text-gray-600">
                    <li>• Rainwater Harvesting Technologies</li>
                    <li>• Policy & Regulation</li>
                    <li>• Urban Water Solutions</li>
                    <li>• Case Studies from Around the World</li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('register') }}"
                class="bg-blue-800 text-white px-8 py-4 rounded text-xl hover:bg-blue-900 inline-block">
                Register Now
            </a>
        </div>
    </div>
@endsection
