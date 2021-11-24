<?php

namespace App\Models\Documentacion;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politica extends Model
{
    use HasFactory;

    protected  $table = "politicas";

    protected  $fillable = [
        'id',
        'empresa_id',
        'nom_empresa',
        'ruta_compromiso',
        'ruta_requisitos',
        'ruta_objetivos',
        'ruta_documentacion',
        'firma',
        'fecha',

    ];

    public function getEmpresa(){
        return $this->belongsTo(Empresa::class , 'empresa_id');
    }


}
