<header id="app_header_nodify"
    class="w-full flex-col max-[768px]:flex-row gap-[20px] max-[768px]:hidden max-[768px]:shadow-none shadow bg-[#f1f4f6] flex p-5 max-[1024px]:p-2 max-w-[350px] max-[768px]:max-w-full max-[1024px]:max-w-[250px]">
    <div class="flex items-center py-[10px] w-full">
        Nodify UMM
    </div>
    <div class="flex h-full max-h-[220px] items-center justify-between flex-col gap-[20px] max-[768px]:hidden">
        <a href="" class="flex w-full max-w-[100px] h-full max-h-[100px] rounded-full overflow-hidden">
            <img src="{{ asset(path: 'assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
        </a>
        <p class="text-[.85rem]">
            {{ $usuario }}
        </p>
        <div class="flex w-full">
            @foreach ($estadisticas as $item)
                <div class="flex flex-col items-center justify-center w-full">
                    <span class="text-[.85rem] font-semibold">
                        {{ $item['valor'] }}
                    </span>
                    <span class="max-[1024px]:text-[.7rem] text-[.85rem]">
                        {{ $item['titulo'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col w-full h-full">
        <nav class="flex w-full h-full">

        </nav>
        <nav class="flex h-full max-h-[50px] justify-end">
            <button wire:click="salir"
                class="rounded-full w-full max-w-[50px] flex items-center justify-center bg-[#565254]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2 translate-x-[-2px]">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                    <path d="M15 12h-12l3 -3" />
                    <path d="M6 15l-3 -3" />
                </svg>
            </button>
        </nav>
    </div>
</header>
