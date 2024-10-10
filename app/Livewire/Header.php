<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerLista;
use App\Models\Usuario;
use Livewire\Component;

class Header extends Component
{
    public function salir()
    {
        session()->flush();
        return redirect()->route('login');
    }
    public function render()
    {
        $id_usuario = session()->has('id_usuario');
        $response = Usuario::where('id_usuario', $id_usuario)->first();

        $imagen_perfil = $response->foto_perfil;
        $usuario = $response->usuario;

        $estadisticas = [
            ["titulo" => "publicaciones", "valor" => $this->simplificar_num($response->publicaciones)],
            ["titulo" => "seguidores", "valor" => $this->simplificar_num($response->seguidores)],
            ["titulo" => "sigues", "valor" => $this->simplificar_num($response->sigue_a)],
        ];

        return view('livewire.header', compact('imagen_perfil', 'usuario', 'estadisticas'));
    }

    public function simplificar_num($numero)
    {
        $sufijos = ['', 'K', 'M'];
        $index = 0;

        while ($numero >= 1000 && $index < count($sufijos) - 1) {
            $numero /= 1000;
            $index++;
        }

        return round($numero, 1) . $sufijos[$index];
    }
}
