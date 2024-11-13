<div class="flex flex-col items-center w-full overflow-y-auto app-quitar-scroll">
    <article class="relative flex flex-col w-full max-w-screen-lg gap-3 px-2">
        <section class="bg-[#F8F9FA] rounded w-full flex  p-3 px-4 relative gap-2">
            <div class="flex">
                <span
                    class="flex w-full max-w-[55px] min-w-[55px] object-cover h-full max-h-[55px] overflow-hidden rounded-full">
                    @if ($fotoPerfil || $fotoPerfil != '')
                        <x-app-recurso-encrypt :filename="$fotoPerfil" :carpeta="'usuarios_fotos'" />
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                            fill="none" stroke="#ADB5BD" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                        </svg>
                    @endif
                </span>
            </div>
            <livewire:lw-component-text-publicacion />
        </section>

        <section class="bg-[#F8F9FA] w-full flex p-3 px-4 relative gap-[2em] flex-col">
            @for ($i = 0; $i < count($TablaPublicaciones); $i++)
                <x-app-publicacion-usuario fotoPerfil="{{ $TablaPublicaciones[$i]['foto_perfil'] }}" :fechaCreacion="$TablaPublicaciones[$i]['fecha_creacion']"
                    :nombre="$TablaPublicaciones[$i]['nombre']" :usuario="$TablaPublicaciones[$i]['usuario']" :contenido="$TablaPublicaciones[$i]['usuario']" :imagen="$TablaPublicaciones[$i]['imagen']" />
            @endfor
        </section>
    </article>
</div>
