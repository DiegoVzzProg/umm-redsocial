<?php

namespace App\Livewire;

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
        return view('livewire.header');
    }
}
