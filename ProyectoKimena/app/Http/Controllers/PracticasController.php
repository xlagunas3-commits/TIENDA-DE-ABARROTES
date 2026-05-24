<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticasController extends Controller
{
    public function ver_practicas(){
        return view('practicas');
    }
}
