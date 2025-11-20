<?php

// namespace App\Http\Controllers;

// use App\Models\Participant;

// class AdminController extends Controller
// {
//     public function index()
//     {
//         $participants = Participant::latest()->paginate(20);
//         return view('admin', compact('participants'));
//     }

//     public function destroy(Participant $participant)
//     {
//         $participant->delete();
//         return back()->with('success', 'Participant deleted successfully.');
//     }
// }

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

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
