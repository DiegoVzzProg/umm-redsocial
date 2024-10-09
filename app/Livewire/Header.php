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
        $response = ControllerLista::sp_obtener_info_usuario_estadisticas($id_usuario);

        $publicaciones = $this->simplificar_num($response[0]->publicaciones);
        $seguidores = $this->simplificar_num($response[0]->seguidores);
        $sigue_a = $this->simplificar_num($response[0]->sigue_a);

        $imagen_perfil = Usuario::where('id_usuario', $id_usuario)->first()->foto_perfil;

        return view('livewire.header', compact('publicaciones', 'seguidores', 'sigue_a', 'imagen_perfil'));
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
