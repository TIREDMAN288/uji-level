<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\TambahProdukController;
use App\Http\Controllers\SepatuController;
use App\Models\HistoriSepatu;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard/user', function () {
        return view('user.Home');
    })->name('user.dashboard');
});
Route::get('/about', function () {
    return view('user.About');
})->name('user.About');

Route::get('/home', function () {
    return view('user.Home');
})->name('user.Home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth','admin']);


Route::prefix('admin')->group(function () {
    Route::resource('tambahproduk', TambahProdukController::class);
});

Route::resource('sepatu', SepatuController::class);
Route::get('/sepatu/histori/{id}', [SepatuController::class, 'histori'])->name('sepatu.histori');