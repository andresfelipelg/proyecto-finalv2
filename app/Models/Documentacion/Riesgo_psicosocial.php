<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riesgo_psicosocial extends Model
{
    use HasFactory;

    protected $table = "riesgos_psicosociales";

    protected $fillable = [
        'id', 
        'ruta_docLegal',
        'created_at',
        'updated_at',
    ];
}
