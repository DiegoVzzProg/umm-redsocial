<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Models\Usuario;
use Livewire\Component;
use Illuminate\Support\Str;

class LwPreviewPerfilUsuario extends Component
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

        return view('livewire.lw-preview-perfil-usuario', compact('imagen_perfil', 'estadisticas', 'usuario'));
    }
    public function GoToPerfil($id_usuario)
    {

        $uuid = Str::uuid()->toString();
        session()->put($uuid, $id_usuario);

        return redirect()->route('perfil.usuario', ['usuario' => $uuid]);
    }
}
