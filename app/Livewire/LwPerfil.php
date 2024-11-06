<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ControllerLista;
use App\Models\Seguidores;
use App\Models\Usuario;
use Livewire\Component;

class LwPerfil extends Component
{
    public $id_usuario;
    public $guid_usuario;
    public $abrir_formulario = false;

    public function mount($guid)
    {
        $this->id_usuario = session($guid);
        $this->guid_usuario = $guid;
    }

    public function render()
    {
        $response = Usuario::where('id_usuario', $this->id_usuario)->first();

        if ($this->id_usuario == session('id_usuario')) {
            $foto_perfil = session('foto_perfil');
            $archivo_foto_portada = session('archivo_foto_portada');
            $nombre_completo = session('nombre_completo');
            $usuario = session('usuario');
            $biografia = session('biografia');
            $matricula = session('matricula');
        } else {
            $foto_perfil = $response->foto_perfil;
            $archivo_foto_portada = $response->archivo_foto_portada;
            $nombre_completo = $response->nombre_completo;
            $usuario = $response->usuario;
            $biografia = $response->biografia;
            $matricula = $response->matricula;
        }

        $estadisticas = ControllerLista::sp_obtener_estadisticas_usuario($this->id_usuario);

        $responseSeguidores = Seguidores::where('id_seguidor', session('id_usuario'))
            ->where('id_seguido', $this->id_usuario)
            ->where('borrado', false)
            ->first();

        return view('livewire.lw-perfil', compact('foto_perfil', 'usuario', 'estadisticas', 'biografia', 'nombre_completo', 'archivo_foto_portada', 'matricula', 'responseSeguidores'));
    }

    public function AbrirFormulario()
    {
        $this->abrir_formulario = !$this->abrir_formulario;
    }

    public function AgregarAmigo()
    {
        Seguidores::create([
            'id_seguidor' => session('id_usuario'),
            'id_seguido' => $this->id_usuario,
        ]);
    }

    public function EliminarAmigo()
    {
        Seguidores::where('id_seguidor', session('id_usuario'))
            ->where('id_seguido', $this->id_usuario)
            ->update([
                'borrado' => true,
            ]);

        // ControllerGeneral::GoToPerfil($this->id_usuario);
    }
}
