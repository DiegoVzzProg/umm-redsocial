<?php

namespace App\Livewire;

use App\Http\Controllers\ParamPublicacionesController;
use App\Http\Controllers\SpPublicacionesController;
use Livewire\Component;

class LwHome extends Component
{
    public function render()
    {
        $fotoPerfil = session('fotoPerfil');

        $parametros = new ParamPublicacionesController();
        $parametros->p_id_usuario = session('id_usuario');
        $parametros->p_perfil = false;

        $TablaPublicaciones = SpPublicacionesController::sp_get_publicaciones_usuarios($parametros);

        return view('livewire.lw-home', compact('fotoPerfil', 'TablaPublicaciones'));
    }
}
