<?php

namespace App\Models\Comites;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $table = "participantes";

    protected $fillable = [
        'id',
        'user_id', 
        'acta_id',
        'cargo_id',
        'nom_usuario',
        'firma',                         
        'created_at',
        'updated_at',
    ];

    public function getUsu(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getActa(){
        return $this->belongsTo(Acta::class, 'acta_id');
    }

    public function getCargo(){
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }
}
