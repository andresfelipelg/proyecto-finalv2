<?php

namespace App\Models\Comites;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = "cargos";

    protected $fillable = [
        'id', 
        'nom_cargo',                    
        'created_at',
        'updated_at',
    ];
}
