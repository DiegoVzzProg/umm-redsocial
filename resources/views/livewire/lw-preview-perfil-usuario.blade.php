<div class="flex flex-col w-full max-w-[350px] bg-[#F8F9FA] items-center p-2 gap-2 max-[768px]:hidden rounded">
    <div class="flex flex-col items-center justify-between w-full h-full max-h-[220px] pt-3 gap-2">
        <button type="button"
            class="flex w-full max-w-[120px] h-full max-h-[120px] overflow-hidden rounded-full justify-center items-center opacity-100 app-transition-all hover:opacity-80"
            wire:click="GoToPerfil('{{ !session()->has('id_usuario') ? null : Crypt::encryptString(session('id_usuario')) }}')">
            @if ($imagen_perfil || $imagen_perfil != '')
                <x-app-recurso-encrypt :filename="$imagen_perfil" :carpeta="'usuarios_fotos'" />
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none"
                    stroke="#ADB5BD" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
            @endif
        </button>
        <div class="flex">
            <p class="text-center text-[.9rem] font-semibold">
                {{ $usuario }}
            </p>
        </div>
        @if (count($estadisticas) > 0)
            <div class="grid w-full grid-cols-3 divide-x divide-[#343A40]">
                <span class="flex flex-col items-center justify-center px-2">
                    <p class="text-[.8rem] font-semibold text-[#404040]">
                        {{ $estadisticas[0]['seguidores'] }}
                    </p>
                    <p class="text-[.8rem] font-normal">
                        seguidores
                    </p>
                </span>
                <span class="flex flex-col items-center justify-center px-2">
                    <p class="text-[.8rem] font-semibold text-[#404040]">
                        {{ $estadisticas[0]['sigues'] }}
                    </p>
                    <p class="text-[.8rem] font-normal">
                        sigues
                    </p>
                </span>
                <span class="flex flex-col items-center justify-center px-2">
                    <p class="text-[.8rem] font-semibold text-[#404040]">
                        {{ $estadisticas[0]['publicaciones'] }}
                    </p>
                    <p class="text-[.8rem] font-normal">
                        publicaciones
                    </p>
                </span>
            </div>
        @endif
    </div>
    <div class="flex flex-col w-full h-screen px-2 pt-2 overflow-y-auto app-quitar-scroll">
        <h1 class="p-2 px-3 rounded bg-[#F8F9FA] font-light">
            Sugerencias de amistades
        </h1>
        <div class="min-h-auto">

        </div>
    </div>
</div>
