<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------- ----------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('productos/create', function () {
    return "Formulario creacion productos";
});


Route::get('productos/{id}', function ($id) {
    return "El nombre del producto es $id";
});


Route::get('productos/{id}/{cat}', function ($id,$cat) {
    return "El nombre del producto es $id, $cat";
});
