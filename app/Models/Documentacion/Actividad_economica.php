<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad_economica extends Model
{
    use HasFactory;

    protected $table = "actividad_economica";

    protected $fillable = [
        'id', 
        'nom_actividad',
        'created_up',
        'updated_at',
    ];
}
