<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/databarang', [BarangController::class, 'index'])->name('databarang');
Route::get('/databarang/databarang-create', [BarangController::class, 'create'])->name('databarang.create');
Route::post('/databarang', [BarangController::class, 'store'])->name('databarang.store');
Route::get('/databarang/edit/{id}', [BarangController::class, 'edit'])->name('databarang.edit');
Route::put('/databarang/update/{id}', [BarangController::class, 'update'])->name('databarang.update');
Route::delete('/databarang/delete/{id}', [BarangController::class, 'destroy'])->name('databarang.destroy');
Route::get('/databarang/{id}', [BarangController::class, 'show'])->name('databarang.show');

// Route::get('/', [PricingController::class, 'welcome'])->name('welcome.show');
// Route::get('/', [BarangController::class, 'welcome'])->name('welcome.show');
Route::get('/', [BarangController::class, 'welcome'])->name('welcome.show');


require __DIR__.'/auth.php';
