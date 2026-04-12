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

}
