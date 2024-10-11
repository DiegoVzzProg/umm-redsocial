@extends('layouts.master')

@section('css')
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
    <div class="flex w-full h-full">
        <div class="flex flex-col w-full h-[calc(100vh-100px)] overflow-y-auto app-quitar-scroll items-center">
            <article class="relative flex flex-col w-full max-w-screen-lg gap-3 p-2">
                <section class="bg-[#171616] rounded w-full flex  p-3 px-4 relative gap-2">
                    <div class="flex">
                        <a href=""
                            class="flex w-full max-w-[55px] min-w-[55px] object-cover h-full max-h-[55px] overflow-hidden rounded-full">
                            <img src="{{ asset('assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
                        </a>
                    </div>
                    <livewire:text-post />
                </section>

                <section class="bg-[#171616] rounded w-full flex p-3 px-4 relative gap-2">
                    awd
                </section>
            </article>
        </div>
        <div class="flex flex-col w-full max-w-[350px] bg-[#171616] items-center p-2 gap-2 max-[768px]:hidden rounded">
            <div class="flex flex-col items-center justify-between w-full h-full max-h-[200px] pt-3">
                <a href="" class="flex w-full max-w-[120px] h-full max-h-[120px] overflow-hidden rounded-full">
                    <img src="{{ asset('assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
                </a>
                <div class="grid w-full grid-cols-3 divide-x divide-[#343A40]">
                    @foreach ($estadisticas as $item)
                        <span class="flex flex-col items-center justify-center px-2">
                            <p class="text-[.8rem] font-semibold">
                                {{ $item['valor'] }}
                            </p>
                            <p class="text-[.8rem] font-normal text-[#dce1e6]">
                                {{ $item['titulo'] }}
                            </p>
                        </span>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col w-full h-screen px-2 pt-2 overflow-y-auto app-quitar-scroll">
                <h1 class="p-2 px-3 rounded bg-[#1e1d1d] font-light">
                    Sugerencias de amistad
                </h1>
                <div class="min-h-auto">

                </div>
            </div>
        </div>
    </div>
@endsection
