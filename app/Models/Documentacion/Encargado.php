<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;

    protected $table = "encargados";

    protected $fillable = [
        'id', 
        'nom_encargado',
        'ape_encargado',
        'nivel_estudio',
        'ruta_hv',
        'ruta_diploma',
        'ruta_certi50h',
        'ruta_certiSalud',
        'created_up',
        'updated_at',
    ];
}
