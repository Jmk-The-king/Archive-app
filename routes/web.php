<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/add/archive', function () {
    return view('add-archive');
})->middleware(['auth', 'verified'])->name('add-archive');
Route::get('/statistique', function () {
    return view('statistique');
})->middleware(['auth', 'verified'])->name('statistique');
Route::get('/stats', function () {
    return view('stats');
})->middleware(['auth', 'verified'])->name('stats');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
