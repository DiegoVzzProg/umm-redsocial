<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    use HasFactory;

    protected $table = 'publicaciones';  // Nombre de la tabla
    protected $fillable = ['id_usuario', 'contenido', 'imagen', 'likes'];  // Campos masivos

    // Relación: Una publicación pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }
}
