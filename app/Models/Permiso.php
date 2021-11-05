<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = "permisos";

    protected $fillable = [
        'id','role_id', 'modulo_id','created_at','updated_at'
    ];

    //relacion con role
    public function permisoByRole(){
        return $this->belogsTo(Role::class, 'role_id');
    }

    //relacion con modulo
    public function permisoByModulo(){
        return $this->belongsTo(Modulo::class, 'modulo_id');
    }
}
