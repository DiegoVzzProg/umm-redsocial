<?php

namespace App\Livewire;

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ParamUsuariosController;
use App\Http\Controllers\SpUsuariosController;
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

        $parametros = new ParamUsuariosController();
        $parametros->p_email = $this->usuario;
        $parametros->p_contraseña = $this->contraseña;

        $usuario = SpUsuariosController::sp_get_autenticacion_usuario($parametros);

        if (ControllerGeneral::$mensaje != '') {
            return redirect()->route('login')->with('data', ['mensaje' => ControllerGeneral::$mensaje]);
        }
        if (count($usuario) == 0) {
            $mensaje = 'Usuario y/o contraseña incorrecta';
            return redirect()->route('login')->with('data', ['mensaje' => $mensaje]);
        }

        $this->contraseña = '';

        session()->put('id_usuario', $usuario[0]["id_usuario"]);
        session()->put('foto_perfil', $usuario[0]["foto_perfil"]);
        session()->put('archivo_foto_portada', $usuario[0]["archivo_foto_portada"]);
        session()->put('usuario', '@' . $usuario[0]["usuario"]);
        session()->put('nombre_completo', trim("{$usuario[0]["nombre"]} {$usuario[0]["paterno"]} {$usuario[0]["materno"]}"));
        session()->put('biografia', $usuario[0]["biografia"]);
        session()->put('matricula', $usuario[0]["matricula"]);

        return redirect()->route('inicio');
    }
}
