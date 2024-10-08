<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerLista;
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
        $response = ControllerLista::sp_obtener_info_usuario_estadisticas(session()->has('id_usuario'));

        $publicaciones = $response[0]->publicaciones;
        $seguidores = $response[0]->seguidores;
        $sigue_a = $response[0]->sigue_a;

        return view('livewire.header', compact('publicaciones', 'seguidores', 'sigue_a'));
    }
}
