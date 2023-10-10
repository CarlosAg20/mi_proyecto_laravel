<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos', [ProductController::class, 'listProducts']);

Route::get('detalle', [ProductController::class, 'detail']);
/*
Route::get('/producto-mi-categoria', function () {
     return "Hola";
});

Route::get('productos/{nombre}', function ($nombre) {
    return "El nombre del producto es $nombre";
});

Route::get('productos/create', function ($nombre) {
    return "Listado de formulario";
});

Route::get('productos/{id}', function ($id) {
    return "El id del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id, $categoria) {
    return "El id del producto es $id y la categoria es $categoria";
});*/