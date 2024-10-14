<div class="flex flex-col w-full max-w-[350px] bg-[#171616] items-center p-2 gap-2 max-[768px]:hidden rounded">
    <div class="flex flex-col items-center justify-between w-full h-full max-h-[220px] pt-3 gap-2">
        <a href="{{ route(name: 'ruta', parameters: ['key' => $encryptedUser]) }}"
            class="flex w-full max-w-[120px] h-full max-h-[120px] overflow-hidden rounded-full justify-center items-center opacity-75 app-transition-all hover:opacity-100">
            @if ($imagen_perfil)
                <img src="{{ asset('assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
            @endif
        </a>
        <div class="flex">
            <p>
                {{ $usuario }}
            </p>
        </div>
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
            Sugerencias de amistade
        </h1>
        <div class="min-h-auto">

        </div>
    </div>
</div>
