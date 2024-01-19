<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    protected $table = 'reportes';

    //relacion con los modelos 
    public function catPuesto()
    {
        return $this->belongsTo(CatPuesto::class, 'puesto_id');
    }

    public function catDepartamento()
    {
        return $this->belongsTo(CatDepartamento::class, 'departamento_id');
    }

    public function catPlanta()
    {
        return $this->belongsTo(CatPlanta::class, 'planta_id');
    }

}
