<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ParamPublicacionesController;
use App\Http\Controllers\ParamUsuariosController;
use App\Http\Controllers\SpPublicacionesController;
use App\Http\Controllers\SpUsuariosController;
use App\Models\Seguidores;
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
        if ((int) session('id_usuario') == $this->id_usuario) {
            $foto_perfil = session('foto_perfil');
            $archivo_foto_portada = session('archivo_foto_portada');
            $nombre_completo = session('nombre_completo');
            $usuario = session('usuario');
            $biografia = session('biografia');
            $matricula = session('matricula');
        } else {

            $parametros = new ParamUsuariosController();
            $parametros->p_usuario = '';
            $parametros->id_usuario = $this->id_usuario;
            $tablaUsuarios = SpUsuariosController::sp_buscar_usuario_x_valor_o_id_usuario($parametros);

            if (ControllerGeneral::$mensaje != '') {
                redirect()->route('inicio')->with('data', ['mensaje' => ControllerGeneral::$mensaje]);
            }

            $foto_perfil = $tablaUsuarios[0]['foto_perfil'];
            $archivo_foto_portada = $tablaUsuarios[0]['archivo_foto_portada'];
            $nombre_completo = $tablaUsuarios[0]['nombre_completo'];
            $usuario = $tablaUsuarios[0]['usuario'];
            $biografia = $tablaUsuarios[0]['biografia'];
            $matricula = $tablaUsuarios[0]['matricula'];
        }

        $parametros = new ParamUsuariosController();
        $parametros->id_usuario = $this->id_usuario;
        $estadisticas = SpUsuariosController::sp_obtener_estadisticas_usuario($parametros);

        if (ControllerGeneral::$mensaje != '') {
            redirect()->route('inicio')->with('data', ['mensaje' => ControllerGeneral::$mensaje]);
        }

        $parametros = new ParamPublicacionesController();
        $parametros->p_id_usuario = $this->id_usuario;
        $parametros->p_perfil = true;
        $tablaPublicaciones = SpPublicacionesController::sp_get_publicaciones_usuarios($parametros);
        if (ControllerGeneral::$mensaje != '') {
            redirect()->route('inicio')->with('data', ['mensaje' => ControllerGeneral::$mensaje]);
        }

        $responseSeguidores = Seguidores::where('id_seguidor', session('id_usuario'))
            ->where('id_seguido', $this->id_usuario)
            ->where('borrado', false)
            ->first();

        return view('livewire.lw-perfil', compact('foto_perfil', 'usuario', 'estadisticas', 'biografia', 'nombre_completo', 'archivo_foto_portada', 'matricula', 'responseSeguidores', 'tablaPublicaciones'));
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
