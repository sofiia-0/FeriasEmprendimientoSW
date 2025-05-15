<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeriaController;
use Illuminate\Support\Facades\Route;

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

    Route::resource('ferias', FeriaController::class);
    Route::post('/ferias/{feria}/register', [FeriaController::class, 'register'])->name('ferias.register');
    Route::get('/mis-ferias', [FeriaController::class, 'misFerias'])->name('ferias.mis');



});

require __DIR__.'/auth.php';
