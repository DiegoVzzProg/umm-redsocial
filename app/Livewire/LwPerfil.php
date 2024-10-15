<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Models\Usuario;
use Livewire\Component;

class LwPerfil extends Component
{
    public $id_usuario;
    public function mount($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function render()
    {
        $response = Usuario::where('id_usuario', $this->id_usuario)->first();

        $imagen_perfil = $response->foto_perfil;
        $usuario = '@' . $response->usuario;
        $nombre_completo = trim("{$response->nombre} {$response->paterno} {$response->materno}");
        $biografia = $response->biografia;
        $estadisticas = [
            ["titulo" => "seguidores", "valor" => ControllerGeneral::simplificar_num($response->seguidores)],
            ["titulo" => "sigues", "valor" => ControllerGeneral::simplificar_num($response->sigue_a)],
            ["titulo" => "publicaciones", "valor" => ControllerGeneral::simplificar_num($response->publicaciones)],
        ];
        return view('livewire.lw-perfil', compact('imagen_perfil', 'usuario', 'estadisticas', 'biografia', 'nombre_completo'));
    }
}
