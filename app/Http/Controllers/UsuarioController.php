<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function inicioUsuario()
    {
        // Aquí puedes agregar la lógica necesaria para cargar datos o realizar acciones relacionadas con el perfil.
        return view('usuario.inicioUsuario'); // La ruta se especifica como "usuario.inicioUsuario"
    }

}
