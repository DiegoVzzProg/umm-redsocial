<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerLista extends Controller
{

    public static function limpiar_response_json($response)
    {
        return preg_replace('/^.*?\[/', '[', $response);
    }

    public function fn_inicio_sesion(Request $request)
    {
        $request->validate([
            'usuario' => 'required|max:50',
            'contraseña' => 'required|string|max:20|min:10',
        ], [
            'usuario.required' => 'Este campo es obligatorio.',
            'contraseña.required' => 'Este campo es obligatorio.',
            'usuario.max' => 'Sólo permite un máximo de 50 caracteres.',
            'contraseña.max' => 'Sólo permite un máximo de 20 caracteres.',
            'contraseña.min' => 'Sólo permite un mínimo de 10 caracteres.'
        ]);

        $usuario = Usuario::where('usuario', $request->input('usuario'))->first();

        if ($usuario && $usuario->contraseña == $request->input('contraseña')) {

            session()->put('id_usuario', $usuario->id_usuario);

            return redirect()->route('inicio')->with('data', ['mensaje' => '']);
        } else {
            return redirect()->route('login')->with('data', ['mensaje' => 'Usuario y/o contraseña incorrecta']);
        }
    }

    public static function sp_obtener_info_usuario_estadisticas($id_usuario)
    {
        try {
            return DB::select('CALL sp_obtener_info_usuario_estadisticas(?)', [$id_usuario]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se pudo obtener la información.'], 500);
        }
    }
}
