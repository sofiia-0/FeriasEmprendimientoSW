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

    // Ruta para mostrar todas las ferias
    Route::get('/ferias', [FeriaController::class, 'index'])->name('ferias.index');
    // Ruta para mostrar el formulario de creación de feria
    Route::get('ferias/create', [FeriaController::class, 'create'])->name('ferias.create');
    // Ruta para almacenar la nueva feria
    Route::post('ferias', [FeriaController::class, 'store'])->name('ferias.store');

    // Rutas para actualizar las ferias
    Route::get('ferias/{feria}/edit', [FeriaController::class, 'edit'])->name('ferias.edit');
    Route::put('ferias/{feria}', [FeriaController::class, 'update'])->name('ferias.update');

    // Ruta para eliminar las ferias
    Route::delete('ferias/{feria}', [FeriaController::class, 'destroy'])->name('ferias.destroy');

});

require __DIR__.'/auth.php';
