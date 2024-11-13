<div class="flex gap-3 min-h-[150px] max-h-[500px]">
    <span class="flex w-full max-w-[55px] min-w-[55px] object-cover h-full max-h-[55px] overflow-hidden rounded-full">
        @if ($fotoPerfil || $fotoPerfil != '')
            <x-app-recurso-encrypt :filename="$fotoPerfil" :carpeta="'usuarios_fotos'" />
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
    </span>
    <div class="flex flex-col justify-between w-full border-b">
        <div class="flex flex-col gap-1 pb-1">
            <span class="flex items-center gap-1">
                <p class="text-[clamp(.75rem,3vw,.9rem)] font-semibold">
                    {{ $nombre }}
                </p>
                <p class="text-[clamp(.75rem,3vw,.9rem)]">
                    {{ '@' . $usuario }}
                </p>
            </span>
            <p class="text-[clamp(.75rem,3vw,.9rem)]">
                {{ $contenido }}
            </p>
            <div class="w-full">
                @if ($imagen || $imagen != '')
                    <x-app-recurso-encrypt :filename="$imagen" :carpeta="'pub_imagenes'" />
                @endif
            </div>
        </div>
        <p class="text-[clamp(.7rem,3vw,.8rem)] font-light pb-1">
            {{ date('d', strtotime($fechaCreacion)) . ' de ' . date('F Y', strtotime($fechaCreacion)) }}
        </p>
    </div>
</div>
