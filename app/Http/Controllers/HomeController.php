<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function Init()
    {
        if (!session()->has('id_usuario')) {
            return redirect()->route('login');
        }

        $id_usuario = session()->has('id_usuario');
        $response = Usuario::where('id_usuario', $id_usuario)->first();

        $imagen_perfil = $response->foto_perfil;
        $encryptedUser = Crypt::encrypt(value: route(name: 'perfil.usuario'));
        return view(view: 'frontend.home', data: compact('imagen_perfil', 'encryptedUser'));
    }
}
