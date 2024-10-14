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
    <div class="flex w-full h-[calc(100vh-120px)]">
        <div class="flex flex-col items-center w-full overflow-y-auto app-quitar-scroll">
            <article class="relative flex flex-col w-full max-w-screen-lg gap-3 p-2">
                <section class="bg-[#171616] rounded w-full flex  p-3 px-4 relative gap-2">
                    <div class="flex">
                        <a href="{{ route(name: 'ruta', parameters: ['key' => $encryptedUser]) }}"
                            class="flex w-full max-w-[55px] min-w-[55px] object-cover h-full max-h-[55px] overflow-hidden rounded-full opacity-75 app-transition-all hover:opacity-100">
                            @if ($imagen_perfil)
                                <img src="{{ asset('assets/img/imgs_perfil/' . $imagen_perfil) }}" alt=""
                                    srcset="">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                </svg>
                            @endif
                        </a>
                    </div>
                    <livewire:text-post />
                </section>

                <section class="bg-[#171616] rounded w-full flex p-3 px-4 relative gap-2">
                </section>
            </article>
        </div>
        <livewire:perfil-usuario />
    </div>
@endsection
