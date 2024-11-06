<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerLista extends Controller
{

    public function fn_inicio_sesion(Request $request)
    {
        $request->validate([
            'usuario' => 'required|max:50',
            'contraseña' => 'required|string|max:20',
        ], [
            'usuario.required' => 'Este campo es obligatorio.',
            'contraseña.required' => 'Este campo es obligatorio.',
            'usuario.max' => 'Sólo permite un máximo de 50 caracteres.',
            'contraseña.max' => 'Sólo permite un máximo de 20 caracteres.'
        ]);

        $usuario = Usuario::where('usuario', $request->input('usuario'))->first();

        if ($usuario && $usuario->contraseña == $request->input('contraseña')) {

            session()->put('id_usuario', $usuario->id_usuario);

            return redirect()->route('inicio')->with('data', ['mensaje' => '']);
        } else {
            return redirect()->route('login')->with('data', ['mensaje' => 'Usuario y/o contraseña incorrecta']);
        }
    }

    public static function sp_obtener_estadisticas_usuario($id_usuario)
    {
        $response = new ControllerGeneral();
        return $response->ExecuteStoreProcedure(store: "sp_obtener_estadisticas_usuario", parameters: [$id_usuario]);
    }

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
