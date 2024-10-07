<?php

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ControllerLista;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

// Route::get(uri: '/alta/usuario', action: [SpAltaController::class, 'sp_a_usuario'])->name(name: 'alta.usuario');
Route::get(uri: '/', action: [Login::class, 'Init'])->name(name: 'login');
Route::get(uri: '/inicarsesion', action: [ControllerLista::class, 'fn_inicio_sesion'])->name(name: 'inicio.sesion');
Route::post(uri: '/enviar/{key}', action: [ControllerGeneral::class, 'desencriptar'])->name(name: 'desencriptar');



Route::get(uri: '/inicio', action: function () {
    return view(view: 'frontend.master');
})->name(name: 'inicio');
