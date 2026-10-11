<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Carbon\Carbon;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriKomputer = KategoriBuku::firstOrCreate(['NamaKategori' => 'Komputer']);
        $kategoriSelfHelp = KategoriBuku::firstOrCreate(['NamaKategori' => 'Pengembangan Diri']);
        $kategoriFiksi    = KategoriBuku::firstOrCreate(['NamaKategori' => 'Fiksi']);
        $kategoriSains    = KategoriBuku::firstOrCreate(['NamaKategori' => 'Sains & Edukasi']);

        $bukuData = [
            [
                'Judul' => 'Designing Data-Intensive Applications',
                'Penulis' => 'Martin Kleppmann',
                'Penerbit' => "O'Reilly Media",
                'TahunTerbit' => 2017,
                'img' => null,
                'kategori_id' => $kategoriKomputer->KategoriID,
                'created_at' => Carbon::now()->subMonths(1),
            ],
            [
                'Judul' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'Penulis' => 'Robert C. Martin',
                'Penerbit' => 'Prentice Hall',
                'TahunTerbit' => 2008,
                'img' => null,
                'kategori_id' => $kategoriKomputer->KategoriID,
                'created_at' => Carbon::now()->subMonths(2),
            ],
            [
                'Judul' => 'Atomic Habits',
                'Penulis' => 'James Clear',
                'Penerbit' => 'Gramedia Pustaka Utama',
                'TahunTerbit' => 2018,
                'img' => null,
                'kategori_id' => $kategoriSelfHelp->KategoriID,
                'created_at' => Carbon::now()->subDays(5),
            ],
            [
                'Judul' => 'Filosofi Teras',
                'Penulis' => 'Henry Manampiring',
                'Penerbit' => 'Kompas',
                'TahunTerbit' => 2019,
                'img' => null,
                'kategori_id' => $kategoriSelfHelp->KategoriID,
                'created_at' => Carbon::now()->subDays(2),
            ],
            [
                'Judul' => 'Laskar Pelangi',
                'Penulis' => 'Andrea Hirata',
                'Penerbit' => 'Bentang Pustaka',
                'TahunTerbit' => 2005,
                'img' => null,
                'kategori_id' => $kategoriFiksi->KategoriID,
                'created_at' => Carbon::now()->subDays(1),
            ],
            [
                'Judul' => 'Bumi Manusia',
                'Penulis' => 'Pramoedya Ananta Toer',
                'Penerbit' => 'Hasta Mitra',
                'TahunTerbit' => 1980,
                'img' => null,
                'kategori_id' => $kategoriFiksi->KategoriID,
                'created_at' => Carbon::now(),
            ],
        ];

        foreach ($bukuData as $data) {
            $kategoriId = $data['kategori_id'];
            unset($data['kategori_id']);

            $buku = Buku::firstOrCreate(
                ['Judul' => $data['Judul']],
                $data
            );

            if (!$buku->kategoris()->where('kategoribuku.KategoriID', $kategoriId)->exists()) {
                $buku->kategoris()->attach($kategoriId);
            }
        }
    }
}
