<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Crypt;
use Livewire\Component;

class FormLogin extends Component
{
    public $usuario = '';
    public $contraseña = '';

    protected $rules = [
        'usuario' => 'required|max:50',
        'contraseña' => 'required|string|max:20|min:10',
    ];

    protected $messages = [
        'usuario.required' => 'Este campo es obligatorio.',
        'contraseña.required' => 'Este campo es obligatorio.',
        'usuario.max' => 'Sólo permite un máximo de 50 caracteres.',
        'contraseña.max' => 'Sólo permite un máximo de 20 caracteres.',
        'contraseña.min' => 'Sólo permite un mínimo de 10 caracteres.'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $encrypted = Crypt::encrypt(value: route(name: 'inicio.sesion'));
        return view(view: 'livewire.form-login', data: ['encrypted' => $encrypted]);
    }
}
