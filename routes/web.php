<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Alumnos
    Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::get('alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
    Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

    // Profesores
    Route::get('profesores/create', [ProfesorController::class, 'create'])->name('profesores.create');
    Route::get('profesores/{profesor}/edit', [ProfesorController::class, 'edit'])->name('profesores.edit');
    Route::delete('profesores/{profesor}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [MainController::class, "index"])->name("main");
Route::resource('alumnos', AlumnoController::class)->except(['create', 'edit', 'delete']);
Route::resource('profesores', ProfesorController::class)->except(['create', 'edit', 'delete']);

