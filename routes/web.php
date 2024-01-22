<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwalController;


Route::get('/', [AwalController::class, 'index']);


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/buku', [BookController::class, 'index'])->name('buku');
    Route::get('/buku/tambah', [BookController::class, 'create'])->name('buku.create');
    Route::post('/buku/store', [BookController::class, 'store'])->name('buku.store');
});

require __DIR__.'/auth.php';
