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

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600">This Week</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $weeklyCount }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600">With Organization</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $withOrganization }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600">Recent (24h)</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $recentCount }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filters -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <div class="flex flex-col lg:flex-row gap-4">
                    <!-- Search -->
                    <div class="flex-1">
                        <div class="relative">
                            <input type="text" id="searchInput" placeholder="Search by name, email, or organization..."
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Date Filter -->
                    <div class="flex gap-4">
                        <input type="date" id="dateFrom"
                            class="border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                        <input type="date" id="dateTo"
                            class="border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                        <button onclick="applyFilters()"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Apply
                        </button>
                        <button onclick="resetFilters()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">
                            Reset
                        </button>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="flex flex-wrap gap-2 mt-4">
                    <button onclick="exportToCSV()"
                        class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700 transition-colors">
                        Export CSV
                    </button>
                    <button onclick="selectAll()"
                        class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700 transition-colors">
                        Select All
                    </button>
                    <button onclick="deselectAll()"
                        class="bg-gray-600 text-white px-3 py-1 rounded text-sm hover:bg-gray-700 transition-colors">
                        Deselect All
                    </button>
                    <button onclick="bulkDelete()"
                        class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700 transition-colors">
                        Bulk Delete
                    </button>
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
                                        <input type="checkbox" id="selectAll" onchange="toggleSelectAll(this)">
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                        onclick="sortTable('name')">
                                        Participant
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                        onclick="sortTable('email')">
                                        Contact
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                        onclick="sortTable('organization')">
                                        Organization
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                        onclick="sortTable('created_at')">
                                        Registration Date
                                    </th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="participantsTable">
                                @foreach ($participants as $participant)
                                    <tr class="hover:bg-gray-50 transition-colors participant-row"
                                        data-participant='@json($participant)'>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="checkbox" class="participant-checkbox"
                                                value="{{ $participant->id }}">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-10 w-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                                    {{ strtoupper(substr($participant->name, 0, 1)) }}
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $participant->name }}
                                                    </div>
                                                    <div class="text-xs text-gray-500">ID: {{ $participant->id }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $participant->email }}</div>
                                            <div class="text-sm text-gray-500">{{ $participant->phone ?: 'No phone' }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $participant->organization ?: '-' }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $participant->created_at->format('M j, Y') }}
                                            <div class="text-xs text-gray-400">
                                                {{ $participant->created_at->format('g:i A') }}</div>
                                            <div class="text-xs text-green-600">
                                                {{ $participant->created_at->diffForHumans() }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex items-center space-x-2">
                                                <button onclick="openDetailsModal({{ $participant->id }})"
                                                    class="text-blue-600 hover:text-blue-900 transition-colors p-2 rounded hover:bg-blue-50"
                                                    title="View Details">
                                                    👁️
                                                </button>
                                                <button onclick="openEditModal({{ $participant->id }})"
                                                    class="text-green-600 hover:text-green-900 transition-colors p-2 rounded hover:bg-green-50"
                                                    title="Edit">
                                                    ✏️
                                                </button>
                                                <button onclick="quickEmail('{{ $participant->email }}')"
                                                    class="text-purple-600 hover:text-purple-900 transition-colors p-2 rounded hover:bg-purple-50"
                                                    title="Send Email">
                                                    📧
                                                </button>
                                                <form action="{{ route('admin.destroy', $participant) }}" method="POST"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        onclick="confirmDelete('{{ $participant->name }}', this.form)"
                                                        class="text-red-600 hover:text-red-900 transition-colors p-2 rounded hover:bg-red-50"
                                                        title="Delete">
                                                        🗑️
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
                    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6 flex justify-between items-center">
                        <div class="text-sm text-gray-700">
                            Showing <span class="font-medium">{{ $participants->firstItem() }}</span> to
                            <span class="font-medium">{{ $participants->lastItem() }}</span> of
                            <span class="font-medium">{{ $participants->total() }}</span> results
                        </div>
                        <div>
                            {{ $participants->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

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
        // Enhanced JavaScript functionality

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.participant-row');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Filter by date
        function applyFilters() {
            const dateFrom = document.getElementById('dateFrom').value;
            const dateTo = document.getElementById('dateTo').value;

            if (dateFrom || dateTo) {
                window.location.href = `{{ route('admin') }}?date_from=${dateFrom}&date_to=${dateTo}`;
            }
        }

        function resetFilters() {
            document.getElementById('searchInput').value = '';
            document.getElementById('dateFrom').value = '';
            document.getElementById('dateTo').value = '';
            window.location.href = '{{ route('admin') }}';
        }

        // Bulk operations
        function toggleSelectAll(checkbox) {
            const checkboxes = document.querySelectorAll('.participant-checkbox');
            checkboxes.forEach(cb => cb.checked = checkbox.checked);
        }

        function selectAll() {
            document.querySelectorAll('.participant-checkbox').forEach(cb => cb.checked = true);
            document.getElementById('selectAll').checked = true;
        }

        function deselectAll() {
            document.querySelectorAll('.participant-checkbox').forEach(cb => cb.checked = false);
            document.getElementById('selectAll').checked = false;
        }

        function getSelectedParticipants() {
            const selected = [];
            document.querySelectorAll('.participant-checkbox:checked').forEach(cb => {
                selected.push(cb.value);
            });
            return selected;
        }

        function bulkDelete() {
            const selected = getSelectedParticipants();
            if (selected.length === 0) {
                alert('Please select participants to delete.');
                return;
            }

            if (confirm(`Are you sure you want to delete ${selected.length} participant(s)?`)) {
                // Implement bulk delete API call
                fetch('/admin/participants/bulk-delete', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            ids: selected
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            location.reload();
                        }
                    });
            }
        }

        // Export to CSV
        function exportToCSV() {
            const rows = [
                ['Name', 'Email', 'Phone', 'Organization', 'Registration Date', 'Notes']
            ];

            document.querySelectorAll('.participant-row').forEach(row => {
                const participant = JSON.parse(row.dataset.participant);
                rows.push([
                    participant.name,
                    participant.email,
                    participant.phone || '',
                    participant.organization || '',
                    participant.created_at,
                    participant.notes || ''
                ]);
            });

            let csvContent = "data:text/csv;charset=utf-8,";
            rows.forEach(row => {
                csvContent += row.map(field => `"${field}"`).join(",") + "\r\n";
            });

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "participants.csv");
            document.body.appendChild(link);
            link.click();
        }

        // Quick email
        function quickEmail(email) {
            window.location.href = `mailto:${email}?subject=Rainwater Convention 2025&body=Dear Participant,%0D%0A%0D%0A`;
        }

        // Simple client-side sorting
        function sortTable(column) {
            const tbody = document.getElementById('participantsTable');
            const rows = Array.from(tbody.querySelectorAll('.participant-row'));

            rows.sort((a, b) => {
                const aData = JSON.parse(a.dataset.participant);
                const bData = JSON.parse(b.dataset.participant);

                let aValue = aData[column] || '';
                let bValue = bData[column] || '';

                if (column === 'created_at') {
                    aValue = new Date(aValue);
                    bValue = new Date(bValue);
                }

                return aValue.toString().localeCompare(bValue.toString());
            });

            // Clear and re-append sorted rows
            rows.forEach(row => tbody.appendChild(row));
        }

        // Keep your existing modal functions
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
        document.getElementById('detailsModal')?.addEventListener('click', function(e) {
            if (e.target.id === 'detailsModal') closeDetailsModal();
        });

        document.getElementById('editModal')?.addEventListener('click', function(e) {
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
