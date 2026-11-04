<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DatosController;


//Se generan todas las rutas asociadas al controlador CategoryController
Route::resource('categories', CategoryController::class);
//Se generan todas las rutas asociadas al controlador AuthorController
Route::resource('authors', AuthorController::class);
//Se generan todas las rutas asociadas al controlador BookController
Route::resource('books', BookController::class);

//Ruta para acceder al index de datos
Route::get('datos', [DatosController::class, 'index'])->name('datos.index');


Route::get('/', function () {
    return view('home');
})->name('home');