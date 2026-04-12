<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
})->name('prueba');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Rutas para la tienda de abarrotes
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('suppliers', SupplierController::class);

// Rutas protegidas para pedidos (requieren autenticación)
Route::middleware('auth')->group(function () {
    Route::resource('orders', OrderController::class);
});

Route::get('/prueba2', function () {
    return view('prueba2');
});


Route::get('/practicas', [PracticasController::class,'ver']);


Route::get('/contacto', [PaginasController::class, 'Ver_contacto']);