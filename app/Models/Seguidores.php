<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguidores extends Model
{
    use HasFactory;
    protected $table = 'seguidores';
    protected $primaryKey = 'id_seguidores';
    protected $fillable = [
        'id_seguidor',
        'id_seguido',
        'fecha',
        'borrado',
    ];
    public $timestamps = false;
}
