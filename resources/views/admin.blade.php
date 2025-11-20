@extends('layouts.app')

@section('title', ' - Admin Portal')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Admin Portal</h1>
                <p class="text-gray-600 mt-2">Manage registered participants</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600">Total Participants</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $participants->total() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Participants Table -->
            <div class="bg-white rounded-lg shadow-lg">
                @if ($participants->count() == 0)
                    <!-- Empty State -->
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No participants</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by registering participants.</p>
                    </div>
                @else
                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Participant</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Contact</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Organization</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Registration Date</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($participants as $participant)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <!-- Participant Info -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                                    {{ strtoupper(substr($participant->name, 0, 1)) }}
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $participant->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Contact Info -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $participant->email }}</div>
                                            <div class="text-sm text-gray-500">{{ $participant->phone ?: 'No phone' }}</div>
                                        </td>

                                        <!-- Organization -->
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $participant->organization ?: '-' }}</div>
                                        </td>

                                        <!-- Registration Date -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $participant->created_at->format('M j, Y') }}
                                            <div class="text-xs text-gray-400">
                                                {{ $participant->created_at->format('g:i A') }}</div>
                                        </td>

                                        <!-- Actions -->
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center space-x-3">
                                                <!-- View Details -->
                                                <button onclick="openDetailsModal({{ $participant->id }})"
                                                    class="text-blue-600 hover:text-blue-900 transition-colors p-1 rounded hover:bg-blue-50"
                                                    title="View Details">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>

                                                <!-- Edit -->
                                                <button onclick="openEditModal({{ $participant->id }})"
                                                    class="text-green-600 hover:text-green-900 transition-colors p-1 rounded hover:bg-green-50"
                                                    title="Edit">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>

                                                <!-- Delete -->
                                                <form action="{{ route('admin.destroy', $participant) }}" method="POST"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        onclick="confirmDelete('{{ $participant->name }}', this.form)"
                                                        class="text-red-600 hover:text-red-900 transition-colors p-1 rounded hover:bg-red-50"
                                                        title="Delete">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                        {{ $participants->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div id="detailsModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Participant Details</h3>
                    <button onclick="closeDetailsModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div id="modalContent" class="space-y-3">
                    <!-- Content loaded via JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900">Edit Participant</h3>
                    <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div id="editModalContent" class="space-y-4">
                        <!-- Edit form loaded via JavaScript -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Store participant data for JavaScript access
        const participants = {
            @foreach ($participants as $participant)
                {{ $participant->id }}: {
                    id: {{ $participant->id }},
                    name: "{{ addslashes($participant->name) }}",
                    email: "{{ addslashes($participant->email) }}",
                    phone: "{{ addslashes($participant->phone ?? '') }}",
                    organization: "{{ addslashes($participant->organization ?? '') }}",
                    notes: `{{ addslashes($participant->notes ?? '') }}`,
                    created_at: "{{ $participant->created_at }}"
                },
            @endforeach
        };

        // View Details Modal
        function openDetailsModal(participantId) {
            console.log('Opening details for participant:', participantId);

            const participant = participants[participantId];
            if (!participant) {
                alert('Participant data not found!');
                return;
            }

            const modalContent = document.getElementById('modalContent');

            modalContent.innerHTML = `
        <div class="space-y-4">
            <div class="flex items-center justify-center">
                <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-xl">
                    ${participant.name.charAt(0).toUpperCase()}
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div class="text-gray-600">Name:</div>
                <div class="font-medium">${participant.name}</div>
                
                <div class="text-gray-600">Email:</div>
                <div class="font-medium">${participant.email}</div>
                
                <div class="text-gray-600">Phone:</div>
                <div class="font-medium">${participant.phone || 'Not provided'}</div>
                
                <div class="text-gray-600">Organization:</div>
                <div class="font-medium">${participant.organization || 'Not provided'}</div>
                
                <div class="text-gray-600">Registration Date:</div>
                <div class="font-medium">${new Date(participant.created_at).toLocaleDateString()}</div>
                
                <div class="text-gray-600">Registration Time:</div>
                <div class="font-medium">${new Date(participant.created_at).toLocaleTimeString()}</div>
            </div>
            
            ${participant.notes ? `
                        <div class="border-t pt-3">
                            <div class="text-gray-600 text-sm mb-1">Additional Notes:</div>
                            <div class="text-sm bg-gray-50 p-3 rounded whitespace-pre-wrap">${participant.notes}</div>
                        </div>
                        ` : ''}
        </div>
    `;

            document.getElementById('detailsModal').classList.remove('hidden');
        }

        function closeDetailsModal() {
            document.getElementById('detailsModal').classList.add('hidden');
        }

        // Edit Modal
        function openEditModal(participantId) {
            console.log('Opening edit for participant:', participantId);

            const participant = participants[participantId];
            if (!participant) {
                alert('Participant data not found!');
                return;
            }

            const editContent = document.getElementById('editModalContent');
            const editForm = document.getElementById('editForm');

            // Set form action
            editForm.action = `/admin/participants/${participant.id}`;

            editContent.innerHTML = `
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Full Name *</label>
                <input type="text" name="name" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       value="${participant.name}">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Email Address *</label>
                <input type="email" name="email" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       value="${participant.email}">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" name="phone" 
                       class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       value="${participant.phone}" 
                       placeholder="Optional">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Organization</label>
                <input type="text" name="organization" 
                       class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       value="${participant.organization}" 
                       placeholder="Optional">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Additional Notes</label>
                <textarea name="notes" rows="3" 
                          class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-blue-500 focus:border-blue-500" 
                          placeholder="Dietary needs, special requirements...">${participant.notes}</textarea>
            </div>
            
            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" onclick="closeEditModal()" 
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition-colors">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-colors">
                    Save Changes
                </button>
            </div>
        </div>
    `;

            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        function confirmDelete(name, form) {
            if (confirm(`Are you sure you want to delete "${name}"? This action cannot be undone.`)) {
                form.submit();
            }
        }

        // Close modals when clicking outside
        document.getElementById('detailsModal').addEventListener('click', function(e) {
            if (e.target.id === 'detailsModal') closeDetailsModal();
        });

        document.getElementById('editModal').addEventListener('click', function(e) {
            if (e.target.id === 'editModal') closeEditModal();
        });

        // Escape key to close modals
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeDetailsModal();
                closeEditModal();
            }
        });
    </script>
@endsection
