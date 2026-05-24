<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\CartController;

// Rutas públicas
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contacto', [PaginasController::class, 'ver_contacto'])->name('contacto');
Route::get('/nosotros', [PaginasController::class, 'ver_nosotros'])->name('nosotros');
Route::get('/categoria', [PaginasController::class, 'ver_categoria'])->name('categoria');
Route::get('/productos', [PaginasController::class, 'ver_productos'])->name('productos.public');
Route::get('/proveedores', [PaginasController::class, 'ver_proveedores'])->name('proveedores.public');
Route::get('/provedores', [PaginasController::class, 'ver_proveedores'])->name('provedores.public');
Route::get('/carrito', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');

// Rutas del Admin - Sin autenticación
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Routes - Categories
    Route::resource('categories', CategoryController::class);

    // CRUD Routes - Products
    Route::resource('products', ProductController::class);

    // CRUD Routes - Suppliers
    Route::resource('suppliers', SupplierController::class);

    // CRUD Routes - Orders
    Route::resource('orders', OrderController::class);

    // CRUD Routes - Order Items
    Route::resource('order-items', OrderItemController::class);

    // CRUD Routes - Users
    Route::resource('users', UserController::class);
});
