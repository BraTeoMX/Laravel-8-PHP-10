<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatPuesto;
use App\Models\CatDepartamento;
use App\Models\CatPlanta;
use App\Models\Reporte;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $datosReporte = Reporte::all();
        $datos = "..."; // Obtén los datos necesarios para el PDF

        
        $pdf = PDF::loadView('reporte_pdf', compact('datos'));
        return $pdf->download('reporte.pdf');
    }
}
