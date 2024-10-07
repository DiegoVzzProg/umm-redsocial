<?php

namespace App\Http\Controllers;

class Login extends Controller
{
    public function Init()
    {
        return view(view: 'frontend.login');
    }
}
