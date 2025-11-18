<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class AdminController extends Controller
{
    public function index()
    {
        $participants = Participant::latest()->paginate(20);
        return view('admin', compact('participants'));
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return back()->with('success', 'Participant deleted successfully.');
    }
}