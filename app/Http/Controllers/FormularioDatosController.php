<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioDatosController extends Controller
{
    //normalmente es usado 
    public function create()
    {
        
        return view('formularios.datos');
    }

    public function store(Request $request)
    {
        // Procesar los datos enviados desde el formulario
    }
}
