<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TambahProduk extends Model
{
    // Nama tabel di database
    protected $table = 'tambah_produks';

    // Kolom yang dapat diisi
    protected $fillable = [
        'foto', 
        'judul', 
        'harga', 
        'warna', 
        'rating'
    ];
}
