<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthPemerintahRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthPemerintah extends Controller
{
    public function index()
    {
        return view('auth.pemerintah-signin', ['title' => 'Login Pemerintah']);
    }

    public function login(AuthPemerintahRequest $request)
    {
        $user = $request->validated();
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended('pemerintah/pelayanan');
        }
        return back()->with('failed', 'Email atau Password Salah. Silakan Coba Lagi!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('pemerintah/login')->with('success', 'Anda Berhasil Logout!');
    }
}
