<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin / petugas.
     */
    public function dashboard()
    {
        return view('admin.dashbord');
    }
}
