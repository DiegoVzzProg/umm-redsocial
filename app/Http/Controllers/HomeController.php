<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function Init()
    {
        if (!session()->has('id_usuario')) {
            return redirect()->route('login');
        }

        return view(view: 'frontend.home');
    }
}
