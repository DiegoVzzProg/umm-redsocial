<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'usuario',
        'contraseña',
        'email',
        'telefono',
        'fecha_nacimiento',
        'fecha_registro',
        'sexo',
        'biografia',
        'rol',
        'seguidores',
        'sigue_a',
        'token_verificacion',
        'foto_perfil',
        'publicaciones'
    ];
}
