<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MainController;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//obtengo los metodos de la clase estudiantes
Route::resource("estudiantes", EstudianteController::class);

Route::get('/', [MainController::class, "index"])->name("main");


Route::middleware("auth")->group(function () {
    Route::get('estudiantes', [MainController::class, "estudiantes"]);
    Route::get('profesores', [MainController::class, "profesores"]);
    Route::get('clases', [MainController::class, "clases"]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
