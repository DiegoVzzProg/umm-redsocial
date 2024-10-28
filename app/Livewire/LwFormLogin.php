<?php

namespace App\Livewire;

use App\Models\Usuario;
use Exception;
use Livewire\Component;

class LwFormLogin extends Component
{
    public $usuario = '';
    public $contraseña = '';

    protected $rules = [
        'usuario' => 'required|max:50',
        'contraseña' => 'required|string|max:20',
    ];

    protected $messages = [
        'usuario.required' => 'Este campo es obligatorio.',
        'contraseña.required' => 'Este campo es obligatorio.',
        'usuario.max' => 'Sólo permite un máximo de 50 caracteres.',
        'contraseña.max' => 'Sólo permite un máximo de 20 caracteres.'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.lw-form-login');
    }

    public function InicioSesion()
    {
        $this->validate();

        try {
            $usuario = Usuario::where('usuario', $this->usuario)->first();

            if ($usuario && $usuario->contraseña === $this->contraseña) {

                session()->put('id_usuario', $usuario->id_usuario);
                session()->put('foto_perfil', $usuario->foto_perfil);
                session()->put('archivo_foto_portada', $usuario->archivo_foto_portada);
                session()->put('usuario', '@' . $usuario->usuario);
                session()->put('nombre_completo', trim("{$usuario->nombre} {$usuario->paterno} {$usuario->materno}"));
                session()->put('biografia', $usuario->biografia);
                session()->put('matricula', $usuario->matricula);

                $this->contraseña = '';

                return redirect()->route('inicio')->with('data', ['mensaje' => '']);
            } else {

                return redirect()->route('login')->with('data', ['mensaje' => 'Usuario y/o contraseña incorrecta']);
            }
        } catch (Exception $e) {
            return redirect()->route('login')->with('data', ['mensaje' => $e->getMessage()]);
        }
    }
}
