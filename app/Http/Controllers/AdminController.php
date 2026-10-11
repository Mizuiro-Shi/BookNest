<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin / petugas.
     */
    public function dashboard()
    {
        // Ambil 4 buku terbaru beserta kategorinya
        $bukuTerbaru = Buku::with('kategoris')
            ->orderBy('BukuID', 'desc')
            ->take(4)
            ->get();

        // Data grafik koleksi buku (6 bulan terakhir)
        $months = [];
        $counts = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthName = $date->translatedFormat('M'); // e.g. 'Mei', 'Jun'
            $months[] = $monthName;

            // Total buku yang terdaftar sampai akhir bulan tersebut
            $endOfMonth = $date->copy()->endOfMonth();
            $totalBuku = Buku::where('created_at', '<=', $endOfMonth)->count();
            $counts[] = $totalBuku;
        }

        return view('admin.dashbord', compact('bukuTerbaru', 'months', 'counts'));
    }
}
