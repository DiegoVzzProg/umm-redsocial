@extends('layouts.master')

@section('head')
@endsection

@section('content')
    <div class="flex w-full justify-center h-[calc(100vh-120px)]">
        <div class="flex flex-col w-full max-w-screen-md px-2">
            <div class="w-full relative flex bg-[#E9ECEF] rounded-[3px]">
                <input type="text" name="" id="txt_buscar_usuario" wire:model="txt_buscar_usuario" autocomplete="off"
                    class="outline-none rounded-[3px] bg-[#E9ECEF] w-full py-2 px-3 placeholder:opacity-50" maxlength="50"
                    placeholder="Buscar usuario">

                <button class="flex items-center justify-center px-2 rounded-[3px] h-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="translate-x-[3px]" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="#ADB5BD" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </button>
            </div>
            {{-- @if (count($usuarios) > 0)
                <div class="fixed top-[88px] left-0 w-full h-[300px] z-[9999] overflow-y-auto p-5">
                    <div class="flex flex-col w-full bg-[#E9ECEF] rounded-[3px] p-3">
                        @for ($i = 0; $i < count($usuarios); $i++)
                            <button class="text-left"
                                wire:click="GoToPerfil('{{ Crypt::encryptString($usuarios[$i]['id_usuario']) }}')">
                                {{ $usuarios[$i]['usuario'] }}
                            </button>
                        @endfor
                    </div>
                </div>
            @endif --}}
        </div>
    </div>
@endsection
