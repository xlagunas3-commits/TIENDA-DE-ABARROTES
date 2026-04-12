<?php
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');






use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
})->name('prueba');

Route::get('/prueba2', function () {
    return view('prueba2');
});


