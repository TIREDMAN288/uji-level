<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\TambahProdukController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\BelanjaController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Route untuk dashboard user
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/user', function () {
        return view('user.Home');
    })->name('user.dashboard');
});

// Route untuk halaman "About"
Route::get('/about', function () {
    return view('user.About');
})->name('user.About');

// Route untuk kategori pria
Route::get('/kategori-pria', function () {
    return view('user.kategoriPria');
})->name('user.kategoriPria');

// Route untuk kategori wanita
Route::get('/kategori-wanita', function () {
    return view('user.kategoriWanita');
})->name('user.kategoriWanita');

// Chat
Route::get('/chat', function () {
    return view('user.pesan');
})->name('user.pesan');

// Route untuk halaman "Home"
Route::get('/home', function () {
    return view('user.Home');
})->name('user.Home');

// Route untuk profile dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk otentikasi
require __DIR__.'/auth.php';

// Route untuk admin dashboard dengan middleware admin
Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::resource('admin/tambahproduk', TambahProdukController::class)->middleware(['auth', 'admin']);

Route::resource('sepatu', SepatuController::class);
Route::get('/sepatu/histori/{id}', [SepatuController::class, 'histori'])->name('sepatu.histori');

Route::get('/belanja', [BelanjaController::class, 'showList'])->name('belanja.list');
