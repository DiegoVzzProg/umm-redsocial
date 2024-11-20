<header id="app_header" class="flex items-center bg-[#F8F9FA] gap-2 p-5 shadow-inner justify-between">
    <div class="flex w-full max-w-[300px] gap-3">
        <h4 class="font-semibold tracking-widest text-[1rem] flex items-center gap-1 max-[768px]:hidden">
            NODIFY
        </h4>
        @if (request()->routeIs(patterns: 'inicio'))
            <div class="w-full max-w-[250px] relative flex bg-[#E9ECEF] rounded-[3px]" wire:click="BuscarUsuario()">

                <input type="text" name="" id="txt_buscar_usuario" wire:model="txt_buscar_usuario"
                    autocomplete="off"
                    class="outline-none rounded-[3px] bg-[#E9ECEF] w-full py-2 px-3 placeholder:opacity-50"
                    maxlength="50" placeholder="Buscar">
                <span class="flex items-center justify-center px-2 rounded-[3px] h-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="translate-x-[3px]" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="#ADB5BD" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </span>
            </div>
        @endif
    </div>
    <nav class="flex justify-between gap-2" x-data="{ open: false }">
        @foreach ($opcion_icon as $item)
            @if ($item['visible'])
                <a href="{{ route($item['ruta']) }}"
                    class="bg-[#E9ECEF] p-3 rounded-full app-transition-all opacity-60 hover:opacity-100 max-[768px]:hidden">
                    {!! $item['icono'] !!}
                </a>
            @endif
        @endforeach
        @if (session()->has('id_usuario'))
            <button wire:click="salir"
                class="bg-[#E9ECEF] p-3 rounded-full app-transition-all opacity-60 hover:opacity-100 max-[768px]:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#ADB5BD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-login">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                    <path d="M21 12h-13l3 -3" />
                    <path d="M11 15l-3 -3" />
                </svg>
            </button>
        @endif
        <button @click="open = true"
            class="bg-[#343A40] p-3 rounded-full app-transition-all opacity-60 hover:opacity-100 hidden max-[768px]:block">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="#e9ecef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>
        </button>
        @if (false == true)
            <div class="fixed animate-fade-in top-0 right-0 flex items-center justify-center w-full max-w-[500px] h-full p-5 z-[9999]"
                style="animation-delay: 0ms; animation-timing-function: steps(16); animation-duration: 200ms; animation-iteration-count: unset;"
                x-show="open">
                <div class="flex flex-col w-full h-full bg-[#6C757D] rounded ">
                    <div class="flex justify-end">
                        <button @click="open = false"
                            class="p-3 rounded-full app-transition-all opacity-60 hover:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="#e9ecef"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-square-rounded-x">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm-1.489 7.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                                    fill="#e9ecef" stroke-width="0" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col gap-2">
                        @foreach ($opcion_icon as $item)
                            @if ($item['visible'])
                                <a href="{{ route($item['ruta']) }}"
                                    class="p-3 rounded-[3px] app-transition-all flex items-center gap-2 opacity-60 hover:opacity-100">
                                    {!! $item['icono'] !!}{{ $item['descripcion'] }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </nav>
</header>
