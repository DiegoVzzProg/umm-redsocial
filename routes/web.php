<?php

use App\Http\Controllers\ControllerGeneral;
use App\Http\Controllers\ControllerLista;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilDeUsuarioController;

Route::get(uri: '/', action: [Login::class, 'Init'])->name(name: 'login');
Route::get(uri: '/perfil', action: [PerfilDeUsuarioController::class, 'Init'])->name(name: 'perfil.usuario');
Route::get(uri: '/inicarsesion', action: [ControllerLista::class, 'fn_inicio_sesion'])->name(name: 'inicio.sesion');
Route::post(uri: '/enviar/{key}', action: [ControllerGeneral::class, 'desencriptar'])->name(name: 'desencriptar');

Route::get(uri: '/inicio', action: [HomeController::class, 'Init'])->name(name: 'inicio');
