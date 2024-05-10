<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ClaseController;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//obtengo los metodos de la clase estudiantes


Route::get('/', [MainController::class, "index"])->name("main");


Route::middleware("auth")->group(function () {
    Route::resource("estudiantes", EstudianteController::class);
    Route::resource("profesores", ProfesorController::class);
    Route::resource("clases", ClaseController::class);
});


require __DIR__ . '/auth.php';
