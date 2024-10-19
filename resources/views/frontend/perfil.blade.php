@extends('layouts.master')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="flex w-full min-h-[calc(100vh-115px)] justify-center px-5">
        <livewire:lw-perfil :id_usuario="$id_usuario" />
    </div>
@endsection
