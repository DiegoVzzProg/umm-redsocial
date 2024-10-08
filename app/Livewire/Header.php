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
        $publicaciones = $this->simplificar_num($response[0]->publicaciones);
        $seguidores = $this->simplificar_num($response[0]->seguidores);
        $sigue_a = $this->simplificar_num($response[0]->sigue_a);

        return view('livewire.header', compact('publicaciones', 'seguidores', 'sigue_a'));
    }

    public function simplificar_num($numero)
    {
        // Definir los sufijos para simplificar el número
        $sufijos = ['', 'K', 'M', 'B', 'T'];  // K: Miles, M: Millones, B: Billones, T: Trillones
        $index = 0;

        // Mientras el número sea mayor o igual a 1000, divídelo y aumenta el índice
        while ($numero >= 1000 && $index < count($sufijos) - 1) {
            $numero /= 1000;
            $index++;
        }

        // Retornar el número con un máximo de una cifra decimal y el sufijo correspondiente
        return round($numero, 1) . $sufijos[$index];
    }
}
