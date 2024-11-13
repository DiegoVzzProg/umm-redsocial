<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerLista extends Controller
{

    public static function fn_buscar_usuario_x_valor_o_id_usuario($pvalor = '',  $id_usuario)
    {
        $query = Usuario::query();

        if (!empty($pvalor)) {

            $query->where('usuario', 'LIKE', '%' . $pvalor . '%');
        } else {
            if ($id_usuario && $id_usuario > 0) {
                $query->where('id_usuario', $id_usuario);
            }
        }
        return $query->get();
    }
}
