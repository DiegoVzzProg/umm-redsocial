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

        $publicaciones = $this->simplificar_num($response->publicaciones);
        $seguidores = $this->simplificar_num($response->seguidores);
        $sigue_a = $this->simplificar_num($response->sigue_a);
        $imagen_perfil = $response->foto_perfil;

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
