@extends('layouts.app')

@section('title', ' - Admin Portal')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-bold mb-6 text-blue-800">Admin Portal – Registered Participants</h2>

        @if ($participants->count() == 0)
            <p class="text-gray-600">No participants registered yet.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Organization</th>
                            <th class="px-4 py-2 text-left">Phone</th>
                            <th class="px-4 py-2 text-left">Registered At</th>
                            <th class="px-4 py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $p)
                            <tr class="border-t">
                                <td class="px-4 py-3">{{ $p->name }}</td>
                                <td class="px-4 py-3">{{ $p->email }}</td>
                                <td class="px-4 py-3">{{ $p->organization ?: '-' }}</td>
                                <td class="px-4 py-3">{{ $p->phone ?: '-' }}</td>
                                <td class="px-4 py-3">{{ $p->created_at->format('d M Y H:i') }}</td>
                                <td class="px-4 py-3">
                                    <form action="{{ route('admin.destroy', $p) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Delete this participant?')"
                                            class="text-red-600 hover:underline text-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $participants->links() }}
            </div>
        @endif
    </div>
@endsection
