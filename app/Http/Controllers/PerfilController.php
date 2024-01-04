<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    //
    public function mostrarPerfil()
    {
        // Aquí puedes agregar la lógica necesaria para cargar datos o realizar acciones relacionadas con el perfil.
        return view('perfil.perfil'); // La ruta se especifica como "perfil.perfil"
    }

}
