<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
public function showRegister()
{
    if (Auth::check()) {
        return redirect()->route('welcome');
    }

    return view('auth.register');
}

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
<
        $request->session()->regenerate();

        return redirect()->route('welcome');
    }

    public function showLogin()
{
    if (Auth::check()) {
        return redirect()->route('welcome');
    }

    return view('auth.login');
}

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

    $request->session()->regenerate();

    return redirect()->intended(route('welcome'));
}

        return back()
            ->withErrors(['email' => 'Neispravni podaci.'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}

