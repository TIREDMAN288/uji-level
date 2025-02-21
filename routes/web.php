<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TambahProdukController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\Admin\AdminRatingController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\MessagesController;

// Load route autentikasi bawaan Breeze (otomatis termasuk logout)
require __DIR__.'/auth.php';

// Route untuk halaman utama
Route::get('/', function () {
    return redirect()->route('user.home'); // Langsung arahkan ke halaman Home
});


// Dashboard Admin (dengan middleware auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // **Perbaikan error $products** (Dashboard User)
    Route::get('/dashboard/user', [UserHomeController::class, 'index'])->name('user.dashboard');

});

// Route untuk halaman "About"
Route::get('/about', function () {
    return view('user.about');
})->name('user.about');

// Route untuk kategori pria & wanita
Route::get('/kategori-pria', function () {
    return view('user.kategoriPria');
})->name('user.kategoriPria');

Route::get('/kategori-wanita', function () {
    return view('user.kategoriWanita');
})->name('user.kategoriWanita');

// Route untuk halaman chat
Route::get('/pesan', function () {
    return view('user.pesan');
})->name('user.pesan');

// Route untuk detail produk
Route::get('/detail-produk', function () {
    return view('user.DetailProduk');
})->name('user.detailProduk');

// Route untuk halaman pesanan (Keranjang)
Route::get('/pesanan', function () {
    return view('user.pesanan');
})->name('user.pesanan');

// Route untuk halaman detailproduk
Route::get('/detailproduk', function () {
    return view('user.detailproduk');
})->name('user.detailproduk');


// Menampilkan halaman login (GET)
Route::get('/auth/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Proses login (POST)
Route::post('/auth/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/chat/{id?}', [MessagesController::class, 'index'])->name('chat');

// Route untuk halaman home user
Route::get('/home', [UserHomeController::class, 'index'])->name('user.home');

// Route untuk profile user (hanya bisa diakses jika login)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk produk admin
Route::resource('admin/tambahproduk', TambahProdukController::class)->middleware('auth');

// Route untuk sepatu
Route::resource('sepatu', SepatuController::class);
Route::get('/sepatu/histori/{id}', [SepatuController::class, 'histori'])->name('sepatu.histori');

// Route untuk admin coupons
Route::get('/admin/coupons', [HomeController::class, 'coupons'])->name('admin.coupons');
