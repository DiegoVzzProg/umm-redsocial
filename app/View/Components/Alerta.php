<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class Alerta extends Component
{
    /**
     * Create a new component instance.
     */
    public $mensaje;
    public $tipo;
    public $uuid;
    public function __construct($mensaje, $tipo = 'info')
    {
        $this->mensaje = $mensaje;
        $this->tipo = $tipo;
        $this->uuid = Str::uuid()->toString();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerta');
    }
}
