<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Models\Usuario;
use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class PerfilUsuario extends Component
{
    public function render()
    {
        $id_usuario = session()->has('id_usuario');
        $response = Usuario::where('id_usuario', $id_usuario)->first();

        $imagen_perfil = $response->foto_perfil;
        $usuario = $response->usuario;

        $estadisticas = [
            ["titulo" => "seguidores", "valor" => ControllerGeneral::simplificar_num($response->seguidores)],
            ["titulo" => "sigues", "valor" => ControllerGeneral::simplificar_num($response->sigue_a)],
            ["titulo" => "publicaciones", "valor" => ControllerGeneral::simplificar_num($response->publicaciones)],
        ];
        $encryptedUser = Crypt::encrypt(value: route(name: 'perfil.usuario'));
        return view('livewire.perfil-usuario', compact('imagen_perfil', 'estadisticas', 'usuario', 'encryptedUser'));
    }
}
