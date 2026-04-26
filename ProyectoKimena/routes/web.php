<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contacto', [PaginasController::class, 'ver_contacto']);

Route::get('/nosotros', [PaginasController::class, 'ver_nosotros']);

