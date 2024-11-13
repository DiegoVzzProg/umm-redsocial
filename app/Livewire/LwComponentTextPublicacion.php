<?php

namespace App\Livewire;

use Livewire\Component;

class LwComponentTextPublicacion extends Component
{
    public $bgColor;
    public function mount($bgColor = "#E9ECEF")
    {
        $this->bgColor = $bgColor;
    }
    public function render()
    {
        return view('livewire.lw-component-text-publicacion', ["bgColor" => $this->bgColor]);
    }

    public function AgregarPublicacion() {
        
    }
}
