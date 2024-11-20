<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarUsuarioController extends Controller
{
    public function Index()
    {
        return view('frontend.buscar-usuario');
    }
}
