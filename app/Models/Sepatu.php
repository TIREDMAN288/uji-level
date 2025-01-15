<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    protected $table = 'sepatu'; // Tentukan nama tabel sesuai yang diinginkan
    protected $fillable = ['nama', 'alamat', 'nomor', 'catatan'];
}
