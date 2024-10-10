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
    <div class="flex flex-col w-full min-h-[calc(100vh-20px)] gap-2">
        <div class="flex items-center w-full h-full py-4 px-5 rounded-[3px] bg-[#F8F9FA] rounded-[5px] justify-between">
            <div class="relative flex w-full overflow-hidden bg-white rounded max-w-[400px] shadow-sm app-transition-all">
                <button class="p-3 w-full max-w-[40px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </button>
                <input type="text" name=""
                    class="w-full outline-none pe-[1rem] bg-[white] app-transition-all placeholder:opacity-[.6]"
                    id="" placeholder="Buscar">
            </div>
            <nav class="flex items-center justify-end w-full" x-data="{ menu: false }">

                <div class="flex max-[768px]:hidden items-center justify-center gap-3">
                    @foreach ($opcion_icon as $item)
                        <button
                            class="bg-[#ADB5BD] p-2 rounded-full app-transition-all max-w-[40px] max-[768px]:max-w-[30px] opacity-[.5] hover:opacity-[1]">
                            {!! $item !!}
                        </button>
                    @endforeach
                </div>
                <div class="hidden max-[768px]:flex">
                    <button @click="menu = !menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l16 0" />
                            <path d="M4 12l16 0" />
                            <path d="M4 18l16 0" />
                        </svg>
                    </button>
                </div>
                <div class="hidden max-[768px]:flex fixed w-full h-full top-0 left-0 bg-transparent flex p-5"
                    x-show="menu">
                    <div class="w-full h-full bd">

                    </div>
                </div>
            </nav>
        </div>
        <article class="flex max-[1200px]:flex-col-reverse w-full h-[calc(100vh-100px)] gap-2">
            <section
                class="flex flex-col w-full bg-[#F8F9FA] py-5 px-5 rounded-[5px] gap-4 overflow-y-auto app-ocultar-scroll">
                <h4 class="font-bold text-[1rem] font-family-nunito pointer-events-none">
                    Contenido
                </h4>
                <div class="flex w-full gap-3">
                    <a href="" class="flex w-full max-w-[50px] h-full max-h-[50px] rounded-full overflow-hidden">
                        <img src="{{ asset(path: 'assets/img/imgs_perfil/' . $imagen_perfil) }}" alt=""
                            srcset="">
                    </a>
                    <div
                        class="relative flex items-end w-full bg-white max-w-[600px] max-[768px]:max-w-full rounded overflow-hidden shadow-sm">
                        <textarea name="" id="" cols="30" rows="4"
                            class="w-full resize-none outline-none p-2 bg-white app-transition-all placeholder:opacity-[.6]"
                            placeholder="¿En que estas pensando?"></textarea>
                    </div>
                </div>
                <div class="flex w-full" style="content-visibility: auto;">
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                    a <br />
                </div>
            </section>
            <section
                class="flex w-full bg-[#F8F9FA] max-w-[300px]  max-[1200px]:max-w-full py-5 max-[768px]:py-2 px-5 rounded-[5px]">
                <h4 class="font-bold text-[1rem] font-family-nunito pointer-events-none">
                    Sugerencias
                </h4>
            </section>
        </article>
    </div>
@endsection
