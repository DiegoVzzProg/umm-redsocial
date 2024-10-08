<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Init()
    {
        return view(view: 'frontend.home');
    }
}
