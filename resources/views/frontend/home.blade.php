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
            <article class="relative flex flex-col w-full max-w-screen-lg p-2">
                <section class="bg-[#171616] rounded w-full flex  p-3 px-4 relative gap-2">
                    <div class="flex">
                        <a href=""
                            class="flex w-full max-w-[55px] min-w-[55px] object-cover h-full max-h-[55px] overflow-hidden rounded-full">
                            <img src="{{ asset('assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
                        </a>
                    </div>
                    <div class="flex flex-col items-end w-full gap-2">
                        <textarea name="" id="" rows="3"
                            class="bg-[#212121] placeholder:text-[.9rem] text-[1rem] px-3 placeholder:opacity-50 resize-none overflow-y-auto app-quitar-scroll outline-none rounded w-full p-2"
                            placeholder="¿En que estas pensando?" maxlength="150"></textarea>
                        <div class="flex justify-between w-full">
                            <div class="flex gap-2">
                                <button class="opacity-50 hover:opacity-100 app-transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 8h.01" />
                                        <path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" />
                                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                                        <path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" />
                                        <path d="M16 19h6" />
                                        <path d="M19 16v6" />
                                    </svg>
                                </button>
                                <button class="opacity-50 hover:opacity-100 app-transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="currentColor"
                                        class="icon icon-tabler icons-tabler-filled icon-tabler-mood-happy">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-2 9.66h-6a1 1 0 0 0 -1 1v.05a3.975 3.975 0 0 0 3.777 3.97l.227 .005a4.026 4.026 0 0 0 3.99 -3.79l.006 -.206a1 1 0 0 0 -1 -1.029zm-5.99 -5l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993zm6 0l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993z" />
                                    </svg>
                                </button>
                            </div>
                            <button
                                class="p-2 px-3 bg-[#039be5] rounded flex gap-2 opacity-50 hover:opacity-100 app-transition-all text-[clamp(.8rem,3vw,.85rem)]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="translate-y-[1px]" viewBox="0 0 24 24"
                                    width="18" height="18">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                                Publicar
                            </button>
                        </div>
                    </div>
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
