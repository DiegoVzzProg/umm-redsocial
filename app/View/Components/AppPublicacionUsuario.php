<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppPublicacionUsuario extends Component
{
    /**
     * Create a new component instance.
     */
    public $fotoPerfil;
    public $nombre;
    public $usuario;
    public $contenido;
    public $imagen;
    public $fechaCreacion;

    public function __construct(
        $fotoPerfil = null,
        $nombre = '',
        $usuario = '',
        $contenido = '',
        $imagen = null,
        $fechaCreacion = ''
    ) {
        $this->fotoPerfil = $fotoPerfil;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contenido = $contenido;
        $this->imagen = $imagen;
        $this->fechaCreacion = $fechaCreacion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-publicacion-usuario', ["fotoPerfil" => $this->fotoPerfil, "nombre" => $this->nombre, "usuario" => $this->usuario, "contenido" => $this->contenido, "imagen" => $this->imagen, "fechaCreacion" => $this->fechaCreacion]);
    }
}
