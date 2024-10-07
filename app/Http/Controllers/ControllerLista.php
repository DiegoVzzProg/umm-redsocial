<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class ControllerLista extends Controller
{
    public function fn_inicio_sesion(Request $request)
    {
        $request->validate([
            'usuario' => 'required|max:50',
            'contraseña' => 'required|string|max:20|min:13',
        ], [
            'usuario.required' => 'Este campo es obligatorio.',
            'contraseña.required' => 'Este campo es obligatorio.',
            'usuario.max' => 'Sólo permite un máximo de 50 caracteres.',
            'contraseña.max' => 'Sólo permite un máximo de 20 caracteres.',
            'contraseña.min' => 'Sólo permite un mínimo de 13 caracteres.'
        ]);

        $usuario = Usuario::where('usuario', $request->input('usuario'))->first();

        if ($usuario && $usuario->contraseña == $request->input('contraseña')) {
            return redirect()->route('inicio')->with('data', ['message' => '', 'status' => 200]);
        } else {
            return redirect()->route('login')->with('data', ['message' => 'Credenciales Incorrectas', 'status' => 599]);
        }
    }
}
