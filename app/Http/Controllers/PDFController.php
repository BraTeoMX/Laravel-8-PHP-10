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
        $reportes = Reporte::all();

        $pdf = PDF::loadView('reportes_pdf', compact('reportes'));
        return $pdf->download('reporte.pdf');
    }
}
