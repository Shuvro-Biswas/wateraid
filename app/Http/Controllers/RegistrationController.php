<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|unique:participants,email',
            'password' => 'required|min:6|confirmed',
            'organization' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'notes' => 'nullable|string',
        ]);

        // Create User
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create Participant Record
        Participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'organization' => $request->organization,
            'phone' => $request->phone,
            'notes' => $request->notes,
        ]);

        return redirect()->route('login')
            ->with('success', 'Registration successful! Please login.');
    }
}