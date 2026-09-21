<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect('/admin')->with(
                    'success',
                    'Je bent succesvol ingelogd.'
                );
            }

            Auth::logout();

            return back()->withErrors([
                'email' => 'Je hebt geen toegang tot het admin gedeelte.',
            ]);
        }

        return back()->withErrors([
            'email' => 'De ingevoerde gegevens zijn onjuist.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with(
            'success',
            'Je bent succesvol uitgelogd.'
        );
    }
}
