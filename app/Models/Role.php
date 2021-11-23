<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";

    protected $fillable = [
        'id', 'nom_rol','des_rol','created_at','updated_at'
    ];

    public function rol(){
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function getStatus(){
        return $this->belongsTo(Status::class, 'status_id');
    }
}

