<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'BukuID';

    protected $fillable = [
        'Judul',
        'Penulis',
        'Penerbit',
        'TahunTerbit',
        'img',
    ];

    public function kategoris()
    {
        return $this->belongsToMany(KategoriBuku::class, 'kategoribuku_relasi', 'BukuID', 'KategoriID');
    }
}
