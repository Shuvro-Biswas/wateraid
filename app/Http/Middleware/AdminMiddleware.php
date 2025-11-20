<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            Session::flash('error', 'Please login first to access Admin Area! 🔐');
            return redirect()->route('login');
        }

        if (!Auth::user()->isAdmin()) {
            Session::flash('error', 'Access Denied! Admin Only Area 🚫');
            return redirect()->route('home');
        }

        return $next($request);
    }
}