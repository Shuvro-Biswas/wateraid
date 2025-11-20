<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Participant::query();

        // Date filtering
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $participants = $query->latest()->paginate(20);

        // Statistics
        $weeklyCount = Participant::where('created_at', '>=', now()->subWeek())->count();
        $recentCount = Participant::where('created_at', '>=', now()->subDay())->count();
        $withOrganization = Participant::whereNotNull('organization')->count();

        return view('admin', compact('participants', 'weeklyCount', 'recentCount', 'withOrganization'));
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:participants,id',
        ]);

        Participant::whereIn('id', $request->ids)->delete();

        return response()->json(['success' => true]);
    }

    // Keep your existing destroy and update methods
    public function destroy(Participant $participant)
    {
        $participant->delete();
        return back()->with('success', 'Participant deleted successfully.');
    }

    public function update(Request $request, Participant $participant)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:participants,email,' . $participant->id,
            'phone' => 'nullable|string|max:20',
            'organization' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ]);

        $participant->update($request->all());
        return redirect()->route('admin')->with('success', 'Participant updated successfully!');
    }
}
