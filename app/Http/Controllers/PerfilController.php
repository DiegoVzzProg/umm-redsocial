<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function Init($usuario)
    {
        $id_usuario = session()->has($usuario) ?? session()->has('id_usuario');
        return view('frontend.perfil', compact('id_usuario'));
    }
}
