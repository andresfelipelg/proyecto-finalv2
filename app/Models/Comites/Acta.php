<?php

namespace App\Models\Comites;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta extends Model
{
    use HasFactory;

    protected $table = "actas";

    protected $fillable = [
        'id',
        'comite_id', 
        'nom_citador',
        'lugar_acta',
        'fecha_acta',
        'hora_inicio',
        'hora_fin',
        'acta_votacion',                    
        'created_at',
        'updated_at',
    ];
    
    //funcion para relacionar tabla actas con tabla comites
    public function getComite(){
        return $this->belongsTo(Comite::class, 'comite_id');
    }
}
