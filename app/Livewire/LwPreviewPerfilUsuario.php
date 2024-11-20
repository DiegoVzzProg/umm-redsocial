<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ControllerLista;
use App\Http\Controllers\ParamUsuariosController;
use App\Http\Controllers\SpUsuariosController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;
use Illuminate\Support\Str;

class LwPreviewPerfilUsuario extends Component
{
    public function render()
    {
        $imagen_perfil = session('foto_perfil');
        $usuario = session('usuario');

        $id_usuario = session('id_usuario');

        $parametros = new ParamUsuariosController();
        $parametros->id_usuario = $id_usuario == null ? 0 : $id_usuario;

        $estadisticas = SpUsuariosController::sp_obtener_estadisticas_usuario($parametros);
        $sugerencias_amistades = SpUsuariosController::sp_get_sugerencias_amistad($parametros);

        return view('livewire.lw-preview-perfil-usuario', compact('imagen_perfil', 'estadisticas', 'usuario', 'sugerencias_amistades'));
    }

    public function GoToPerfil($validarUsuario, $id_usuario)
    {
        if ($validarUsuario)
            ControllerGeneral::GoToPerfil($id_usuario);
        else
            return redirect()->route('login');
    }
}
