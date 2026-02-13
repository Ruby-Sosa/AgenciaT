<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TravelController;

/* Página principal */
Route::get('/', [TravelController::class, 'inicio']);

/* Inicio */
Route::get('/inicio', [TravelController::class, 'inicio']);

/* Destinos */
Route::get('/destinos', [TravelController::class, 'destinos']);

/* Paquetes */
Route::get('/paquetes', [TravelController::class, 'paquetes']);

/* Contacto */
Route::get('/contacto', [TravelController::class, 'contacto']);

Route::get('/destino/{nombre}', [TravelController::class, 'destino']);


Route::get('/principal', function () {
    return "Bienvenido a Horizonte Viajero";
});


Route::get('/destino/{id}', function ($id = null) {
    return "Destino seleccionado en Horizonte Viajero: {$id}";
})->where('id', '[0-9]+');


Route::get('/destino/nombre/{nombre}', function ($nombre = null) {
    return "Destino seleccionado: {$nombre}";
})->where('nombre', '\w+');


Route::get('/paquete/{nombre?}', function ($nombre = null) {

    if (($nombre == null) || empty($nombre)) {
        return "No se seleccionó ningún paquete turístico";
    }

    return "Paquete seleccionado: {$nombre}";
});
