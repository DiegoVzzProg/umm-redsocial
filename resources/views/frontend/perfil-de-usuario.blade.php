@extends('layouts.master')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="flex w-full h-[calc(100vh-100px)] overflow-y-auto app-quitar-scroll items-center">
        <livewire:perfil-de-usuario />
    </div>
@endsection
