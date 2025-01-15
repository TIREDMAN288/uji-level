<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tambah_produks', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('foto'); // Kolom untuk menyimpan path foto
            $table->string('judul'); // Kolom untuk judul produk
            $table->decimal('harga', 10, 2); // Kolom untuk harga produk
            $table->string('warna'); // Kolom untuk warna produk
            $table->decimal('rating', 3, 2); // Kolom untuk rating produk (0.00 - 5.00)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_produks');
    }
};
