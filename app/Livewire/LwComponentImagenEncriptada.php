<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use Livewire\Component;

class LwComponentImagenEncriptada extends Component
{

    public $filename;
    public $photoUrl;

    public function mount($filename)
    {
        $this->filename = $filename;
        $this->photoUrl = ControllerGeneral::ObtenerFotoURL($filename);
    }

    public function render()
    {
        return view('livewire.lw-component-imagen-encriptada');
    }
}
