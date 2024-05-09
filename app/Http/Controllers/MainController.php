<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Controlador generado mediante artisan
 */
class MainController extends Controller
{
    //dentro del controlador, nos vamos a crear una nueva funcion pública con el nombre de nuestra página
    public function index(){
        /**Probablemente debamos generar aqui una pantalla de login por la vista */
        return view('index');
    }
    // public function estudiantes(){
    //     return view('estudiantes.index');
    // }
    // public function profesores(){
    //     return view('profesores');
    // }
    // public function clases(){
    //     return view('clases');
    // }
}
