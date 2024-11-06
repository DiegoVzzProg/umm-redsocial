<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public $guid_usuario;
    public $abrir_formulario = false;
    public $id_usuario;
    public function Init($IdUsuarioParametro)
    {
        if (!session()->has('id_usuario')) {
            return redirect()->route('login');
        }

        $this->id_usuario = session($IdUsuarioParametro);

        $response = Usuario::where('id_usuario', $this->id_usuario)->first();

        if ($this->id_usuario  == session('id_usuario')) {
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

        $estadisticas = [
            ["titulo" => "seguidores", "valor" => ControllerGeneral::simplificar_num($response->seguidores)],
            ["titulo" => "sigues", "valor" => ControllerGeneral::simplificar_num($response->sigue_a)],
            ["titulo" => "publicaciones", "valor" => ControllerGeneral::simplificar_num($response->publicaciones)],
        ];
        $id_usuario = $this->id_usuario;
        $abrir_formulario = $this->abrir_formulario;
        return view('frontend.perfil', compact('foto_perfil', 'usuario', 'estadisticas', 'biografia', 'nombre_completo', 'archivo_foto_portada', 'matricula', 'id_usuario'));
    }
}
