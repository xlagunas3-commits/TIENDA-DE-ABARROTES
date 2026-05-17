<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function ver_contacto(){
        return view('contacto');
    }

public function  ver_nosotros(){
        return view('nosotros');

    }
        
public function ver_contenido(){
        return view('contenido');

    } 

public function ver_categoria(){
        return view('categoria');

    }

public function ver_productos(){
        return view('productos');

    }

public function ver_proveedores(){
        return view('proveedores');

    }

}
