<?php

namespace App\Http\Controllers;

class Login extends Controller
{
    public function Init()
    {

        if (session()->has('id_usuario')) {
            return redirect()->route('inicio');
        }

        return view(view: 'frontend.login');
    }
}
