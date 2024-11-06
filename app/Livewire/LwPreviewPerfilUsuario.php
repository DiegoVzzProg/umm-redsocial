<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ControllerLista;
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

        $estadisticas = ControllerLista::sp_obtener_estadisticas_usuario($id_usuario == null ? 0 : $id_usuario);

        return view('livewire.lw-preview-perfil-usuario', compact('imagen_perfil', 'estadisticas', 'usuario'));
    }

    public function GoToPerfil($id_usuario)
    {
        if ($id_usuario)
            ControllerGeneral::GoToPerfil($id_usuario);
        else
            return redirect()->route('login');
    }
}
