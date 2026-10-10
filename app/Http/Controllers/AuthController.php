<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            $role = Auth::user()->Role;
            return match ($role) {
                'admin', 'petugas' => redirect()->route('admin.dashboard'),
                default            => redirect('/'),
            };
        }

        return view('auth.login');
    }

    /**
     * Memproses otentikasi login pengguna.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        $loginInput = $request->input('email');
        $field = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'Email' : 'Username';

        $credentials = [
            $field     => $loginInput,
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $role = Auth::user()->Role;

            return match ($role) {
                'admin', 'petugas' => redirect()->route('admin.dashboard'),
                default            => redirect()->intended('/'),
            };
        }

        return back()
            ->withErrors(['email' => 'Email atau kata sandi salah.'])
            ->withInput($request->only('email', 'remember'));
    }

    /**
     * Menampilkan form registrasi pengguna baru.
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.registrasi');
    }

    /**
     * Memproses pendaftaran pengguna baru.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'                  => 'required|string|max:255',
            'username'              => 'required|string|max:255|unique:users,Username',
            'email'                 => 'required|email|unique:users,Email',
            'address'               => 'required|string',
            'password'              => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'NamaLengkap' => $request->name,
            'Username'    => $request->username,
            'Email'       => $request->email,
            'Alamat'      => $request->address,
            'Password'    => Hash::make($request->password),
            'Role'        => 'user',
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    /**
     * Memproses logout pengguna.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
