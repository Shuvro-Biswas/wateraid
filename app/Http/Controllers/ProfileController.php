<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Participant;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $participant = Participant::where('email', $user->email)->first();
        
        return view('profile.show', compact('user', 'participant'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        // Update User table
        $user->update([
            'name' => $request->name,
        ]);

        // Update Participant table
        Participant::updateOrCreate(
            ['email' => $user->email],
            [
                'name' => $request->name,
                'organization' => $request->organization,
                'phone' => $request->phone,
                'notes' => $request->notes,
            ]
        );

        return back()->with('success', 'Profile updated successfully!');
    }

    public function password()
    {
        return view('profile.password');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password is incorrect!');
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', 'Password changed successfully!');
    }
}
