<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'landing']);



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/buku', [BookController::class, 'index'])->name('buku');
    Route::get('/buku/tambah', [BookController::class, 'create'])->name('buku.create');
    Route::post('/buku/store', [BookController::class, 'store'])->name('buku.store');
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/tambah', [KategoriController::class,'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
    Route::get('/peminjaman/tambah', [PeminjamanController::class, 'tambahPeminjaman'])->name('peminjaman.tambah');
    Route::post('/peminjaman/store', [PeminjamanController::class, 'storePeminjaman'])->name('peminjaman.store');
    Route::post('/selesai/{id}', [PeminjamanController::class, 'kembalikanBuku'])->name('peminjaman.kembalikan');   
    Route::get('/report', [PeminjamanController::class, 'print']); 
});


require __DIR__.'/auth.php';
