<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.signup', ['title' => 'Daftar Sebagai Pelaku UMKM']);
    }

    public function register(SignupRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        event(new Registered($user));
        Auth::login($user);
        return redirect(route('signup-success'))->with('success', "Kamu sudah berhasil terdaftar bersama kami. Let's grow up now.");
    }

    public function signin()
    {
        return view('auth.signin', ['title' => "Sign In"]);
    }

    public function authenticate(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Selamat datang, ' . auth()->user()->nama . '!');
        }
        return back()->with('failed', 'Email atau Password Salah. Silakan Coba Lagi!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Anda Telah Logout');
    }
}
