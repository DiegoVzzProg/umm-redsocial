<?php

namespace App\Livewire;

use App\Http\Controllers\ParamPublicacionesController;
use App\Http\Controllers\SpPublicacionesController;
use Livewire\Component;

class LwComponentTextPublicacion extends Component
{

    public $text_publicacion = '';
    public $bgColor;
    public function mount($bgColor = "#E9ECEF")
    {
        $this->bgColor = $bgColor;
    }
    public function render()
    {
        return view('livewire.lw-component-text-publicacion', ["bgColor" => $this->bgColor]);
    }

    public function AgregarPublicacion()
    {
        $parametros = new ParamPublicacionesController();
        $parametros->p_id_usuario = session('id_usuario');
        $parametros->p_contenido = $this->text_publicacion;
        $parametros->p_imagen = "";

        SpPublicacionesController::sp_a_publicaiones_usuario($parametros);
        $this->text_publicacion = '';

        $this->dispatch('datoInsertado',  ['mensaje' => 'Publicación agregada']);
    }
}
