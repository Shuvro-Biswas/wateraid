@extends('layouts.app')

@section('title', ' - FAQs')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-blue-800">Frequently Asked Questions</h2>

        <div class="space-y-6">
            <div>
                <h3 class="text-xl font-semibold">When and where is the convention?</h3>
                <p class="text-gray-700 mt-2">15–17 December 2025 at the International Convention Center, Nairobi.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">How much is registration?</h3>
                <p class="text-gray-700 mt-2">Registration is free for all participants.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">Will sessions be recorded?</h3>
                <p class="text-gray-700 mt-2">Yes, all keynote sessions will be recorded and made available after the event.
                </p>
            </div>
            <div>
                <h3 class="text-xl font-semibold">Is there a dress code?</h3>
                <p class="text-gray-700 mt-2">Business casual is recommended.</p>
            </div>
        </div>
    </div>
@endsection
