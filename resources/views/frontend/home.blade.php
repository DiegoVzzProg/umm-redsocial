@extends('layouts.master')

@section('head')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

        .font-family-nunito {
            font-family: "Nunito", sans-serif;
        }

        .app-ocultar-scroll::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="flex w-full h-[calc(100vh-120px)]">
        <livewire:lw-home />
        <livewire:lw-preview-perfil-usuario />
    </div>
@endsection
