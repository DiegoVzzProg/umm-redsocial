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
        $foto_perfil = session('foto_perfil');
        $archivo_foto_portada = session('archivo_foto_portada');
        $nombre_completo = session('nombre_completo');
        $usuario = session('usuario');
        $biografia = session('biografia');
        // dd($archivo_foto_perfil);
        $response = Usuario::where('id_usuario', $this->id_usuario)->first();

        $estadisticas = [
            ["titulo" => "seguidores", "valor" => ControllerGeneral::simplificar_num($response->seguidores)],
            ["titulo" => "sigues", "valor" => ControllerGeneral::simplificar_num($response->sigue_a)],
            ["titulo" => "publicaciones", "valor" => ControllerGeneral::simplificar_num($response->publicaciones)],
        ];
        return view('livewire.lw-perfil', compact('foto_perfil', 'usuario', 'estadisticas', 'biografia', 'nombre_completo', 'archivo_foto_portada'));
    }
}
