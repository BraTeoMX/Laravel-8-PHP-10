<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatPuesto;
use App\Models\CatDepartamento;
use App\Models\CatPlanta;
use App\Models\Reporte;



class FormularioDatosController extends Controller
{
    //normalmente es usado 
    public function create()
    {

        $puestos = CatPuesto::all();
        $departamentos = CatDepartamento::all();
        $plantas = CatPlanta::all();
    
        return view('formularios.datos', compact('puestos', 'departamentos', 'plantas'));
    }
    //store = almacenar
    public function store(Request $request)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'puesto_id' => 'required|exists:cat_puestos,id',
            'departamento_id' => 'required|exists:cat_departamentos,id',
            'planta_id' => 'required|exists:cat_plantas,id',
            // Añade aquí otras validaciones necesarias
        ]);

        // Crear un nuevo reporte
        $reporte = new Reporte();
        $reporte->puesto_id = $validatedData['puesto_id'];
        $reporte->departamento_id = $validatedData['departamento_id'];
        $reporte->planta_id = $validatedData['planta_id'];
        // Añade aquí la asignación de otros campos necesarios

        // Guardar el reporte
        $reporte->save();

        // Redirigir a alguna ruta con un mensaje de éxito
        return back()->with('success', 'Reporte guardado con éxito');
    }
}
