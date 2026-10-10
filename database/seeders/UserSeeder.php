<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'Username'     => 'admin',
            'Password'     => Hash::make('admin123'),
            'Email'        => 'admin@gmail.com',
            'NamaLengkap'  => 'Administrator',
            'Alamat'       => 'Kantor Pusat BookNest',
            'Role'         => 'admin',
        ]);

        User::create([
            'Username'     => 'petugas',
            'Password'     => Hash::make('petugas123'),
            'Email'        => 'petugas@gmail.com',
            'NamaLengkap'  => 'Petugas Perpustakaan',
            'Alamat'       => 'Kantor BookNest',
            'Role'         => 'petugas',
        ]);

        User::create([
            'Username'     => 'user',
            'Password'     => Hash::make('user123'),
            'Email'        => 'user@gmail.com',
            'NamaLengkap'  => 'Anggota Perpustakaan',
            'Alamat'       => 'Jl. Contoh No. 1',
            'Role'         => 'user',
        ]);
    }
}
