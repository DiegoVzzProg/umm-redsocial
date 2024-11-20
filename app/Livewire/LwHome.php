<?php

namespace App\Livewire;

use App\Http\Controllers\ParamPublicacionesController;
use App\Http\Controllers\SpPublicacionesController;
use Livewire\Component;

class LwHome extends Component
{
    protected $listeners = ['datoInsertado' => 'cargarDatos'];
    public $TablaPublicaciones;
    public $TablaPublicacionesRecientes;
    public function render()
    {
        $fotoPerfil = session('fotoPerfil');

        $parametros = new ParamPublicacionesController();
        $parametros->p_id_usuario = session('id_usuario');
        $parametros->p_perfil = false;
        $this->TablaPublicaciones = SpPublicacionesController::sp_get_publicaciones_usuarios($parametros);

        $this->cargarDatos();
        return view('livewire.lw-home', compact('fotoPerfil'));
    }

    public function cargarDatos($datos = null)
    {
        $parametros = new ParamPublicacionesController();
        $parametros->p_id_usuario = session('id_usuario');

        $this->TablaPublicacionesRecientes = SpPublicacionesController::sp_get_publicaciones_reciente_usuario($parametros);
        if ($datos) {
            session()->flash('mensaje', $datos['mensaje']);
        }
    }
}
