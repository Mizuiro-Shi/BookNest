<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Menampilkan form registrasi anggota baru.
     */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.registrasi');
    }

    /**
     * Memproses pendaftaran anggota baru.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,Username',
            'email'    => 'required|email|unique:users,Email',
            'address'  => 'required|string',
            'password' => 'required|confirmed|min:6',
        ], [
            'name.required'     => 'Nama lengkap wajib diisi.',
            'username.required' => 'Username wajib diisi.',
            'username.unique'   => 'Username sudah digunakan, silakan pilih yang lain.',
            'email.required'    => 'Email wajib diisi.',
            'email.email'       => 'Format email tidak valid.',
            'email.unique'      => 'Email sudah terdaftar.',
            'address.required'  => 'Alamat wajib diisi.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.confirmed'=> 'Konfirmasi kata sandi tidak cocok.',
            'password.min'      => 'Kata sandi minimal 6 karakter.',
        ]);

        $user = User::create([
            'NamaLengkap' => $request->name,
            'Username'    => $request->username,
            'Email'       => $request->email,
            'Alamat'      => $request->address,
            'Password'    => $request->password,
            'Role'        => 'user',
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->NamaLengkap);
    }
}
