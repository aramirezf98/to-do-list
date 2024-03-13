<?php

use App\Http\Controllers\Fase2Controller;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Rutas existentes para el TodoController
Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'store']);
Route::patch('/{todo}', [TodoController::class, 'update']);
Route::delete('/{todo}', [TodoController::class, 'destroy']);

// Ruta para la Fase2Controller
Route::get('/fase2', function () {
    return view('fase2');
});

Route::post('/fase2', [Fase2Controller::class, 'buscarCancion']);
