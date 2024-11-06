@extends('layouts.master')

@section('head')
@endsection

@section('content')
    <div class="flex w-full min-h-[calc(100vh-115px)] justify-center px-5 animate-fade-in">
        <livewire:lw-perfil :guid="$IdUsuarioParametro" />
    </div>
@endsection
