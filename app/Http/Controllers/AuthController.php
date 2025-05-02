<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('mahasiswa.index');
        }

        return back()->with('error', 'Login failed. Please check your credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}