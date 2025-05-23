<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return "Hola Mundo";
});

Route::get('/hola',function(){
    return "Esta es mi ruta hola";
});

Route::get('/persona',function(){
    return "Esta es la ruta PERSONA";
});

Route::get('/persona/{nombre}',function($nombre){
    return "Sub-Ruta persona ".$nombre;
});

Route::get('/empresa',function(Request $request){
    $a = $request->input('a');
    return "La variable a es: ".$a;
});