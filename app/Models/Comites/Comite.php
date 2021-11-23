<?php

namespace App\Models\Comites;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    use HasFactory;

    protected $table = "comites";

    protected $fillable = [
        'id', 
        'nom_comite',                    
        'created_at',
        'updated_at',
    ];
}
