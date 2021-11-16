<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan_emergencia extends Model
{
    use HasFactory;

    protected $table = "planes_emergencias";

    protected $fillable = [
        'id', 
        'ruta_planEmergencia',
        'created_at',
        'updated_at',
    ];
}
