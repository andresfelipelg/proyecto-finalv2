<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresas";

    protected $fillable = [
        'id', 
        'nom_empresa',
        'val_latitud',
        'val_longitud',
        'actiEco_id',
        'ind_natJurid',
        'tel_contacto1',
        'correo',
        'tipo_empresa_id',
        'created_up',
        'updated_at',
    ];
     

    //relacion para pedir el tipo de actividad economica de la empresa
    public function getActiEco(){
        return $this->belongsTo(Actividad_economica::class, 'actiEco_id');
    }

    //relacion para pedir el tipo de empresa

    public function getTipoEmpresa(){
        return $this->belongsTo(Tipo_empresa::class, 'tipo_empresa_id');
    }
}
