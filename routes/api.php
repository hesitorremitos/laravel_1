<?php

use App\Http\Controllers\AutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/autores',[AutorController::class,'listar']);

Route::post('/autores',[AutorController::class,'crear']);

Route::delete('/autores/{ci}',[AutorController::class,'eliminar']);

Route::put('/autores/{ci}',[AutorController::class,'actualizar']);