<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = "proveedores";

    protected $fillable = [
        'id', 
        'nom_proveedor',
        'arl_proveedor',
        'ruta_certARL',
        'ruta_segSocial',
        'ruta_fichaSegu',
        'created_at',
        'updated_at',
    ];
}
