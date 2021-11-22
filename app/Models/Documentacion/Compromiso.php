<?php

namespace App\Models\Documentacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compromiso extends Model
{
    use HasFactory;

    protected $table = "compromisos";

    protected $fillable = [
        'id', 
        'user_id',
        'role_id',
        'ind_compromiso',
        'ruta_compromiso',                    
        'created_up',
        'updated_at',
    ];

    public function getUser(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function getRole(){
        return $this->belongsTo(Role::class, 'role_id');
    }
}

