<?php

namespace App\Livewire;

use App\Models\Usuario;
use Livewire\Component;

class LwHome extends Component
{
    public function render()
    {
        $id_usuario = session('id_usuario');
        $response = Usuario::where('id_usuario', $id_usuario)->first();

        $imagen_perfil = $response == null ? null : $response->foto_perfil;

        return view('livewire.lw-home', compact('imagen_perfil'));
    }
}
