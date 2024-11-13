<?php

namespace App\View\Components;

use App\Http\Controllers\ControllerGeneral;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppRecursoEncrypt extends Component
{
    /**
     * Create a new component instance.
     */

    public $filename;
    public $photoUrl;
    public $css_formato;
    public $opcion_recurso;
    public function __construct($filename, $opcion_recurso = 1, $cssFormato = 1, $carpeta = '')
    {
        $this->filename = $filename;
        $this->opcion_recurso = $opcion_recurso;

        switch ($cssFormato) {
            case 1:
                $this->css_formato = 'object-fit';
                break;
            case 2:
                $this->css_formato = 'object-cover';
                break;
        }
        $this->photoUrl = ControllerGeneral::ObtenerFotoURL($filename, $carpeta);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-recurso-encrypt');
    }
}
