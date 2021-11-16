<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_empresa extends Model
{
    use HasFactory;

    protected $table = "tipo_empresas";

    protected $fillable = [
        'id', 
        'nom_tipo',
        'created_up',
        'updated_at',
    ];
}
