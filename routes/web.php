<?php

/**
 * en este fichero vamos a crear el enrutamiento, donde vamos a poder indicarle a la aplicacion
 * que página queremos en funcion de la ruta esecificada
 */

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

/** indico que la ruta base nos devuelva por defecto el fichero de plantillaje de index.blade.php
 * Estoy utilizando una funcion anónima puesto que es es mucho mas cómodo, sencillo y limpio.
 * Podemos pasar tambien por aquí parámetros, junto a la vista, pero no tiene sentido hacerlo aquí.
 * Para pasar parámetros normalmetne utilizaremos un controlador.
 *
 * Para crear un controlador, utilizaremos el siguiente comando: php artisan make:controller [nombre-controlador]
 *
 * El resto de rutas seguirán la misma línea.
 */
Route::get('/', [\App\Http\Controllers\MainController::class, "index"]);
