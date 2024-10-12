<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilDeUsuarioController extends Controller
{
    public function Init()
    {
        return view('frontend.perfil-de-usuario');
    }
}
