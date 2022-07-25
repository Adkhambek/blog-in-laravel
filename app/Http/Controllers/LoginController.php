<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('admin.login.index');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
           'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'password' => 'Given password does not match'
            ]);
        }

        return redirect('/admin/dashboard')->with('success', 'Welcome ' . Auth::user()['username'] . ' !');
    }

    public function destroy() {
        Auth::logout();

        return redirect('/login')->with('success', 'You have been logged out');
    }

}
