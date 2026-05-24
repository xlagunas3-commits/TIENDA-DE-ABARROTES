<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function ver_contacto()
    {
        return view('contacto');
    }

    public function ver_nosotros()
    {
        return view('nosotros');
    }

    public function ver_contenido()
    {
        return view('contenido');
    }

    public function ver_categoria()
    {
        return view('categoria');
    }

    public function ver_productos()
    {
        $products = Product::with('category')->orderBy('name')->get();

        return view('productos', compact('products'));
    }

    public function ver_proveedores()
    {
        return view('proveedores');
    }
}
