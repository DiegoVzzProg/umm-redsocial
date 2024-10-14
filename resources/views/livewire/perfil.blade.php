<section class="w-full bg-[#171616] rounded p-5">
    <div class="flex flex-col w-full min-h-full xl:max-w-screen-lg">
        <div
            class="flex w-full h-screen border-[#272727] border max-h-60 max-[768px]:max-h-56 max-[640px]:max-h-36 relative">

            <div class="bg-[#171616] absolute bottom-[-28px] left-[15px] max-[425px]:left-[10px] rounded-full">
                <span class="flex w-full max-w-20 opacity-70">
                    @if ($imagen_perfil)
                        <img src="{{ asset('assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
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
                </span>
            </div>
            <div class="absolute bottom-[3px] left-[95px] max-[425px]:left-[90px] z-index-10">
                <p class="flex font-normal text-[.7rem] max-[320px]:text-[.6rem]">
                    {{ $nombre_completo }}
                </p>
                <p class="flex font-semibold text-[.7rem] max-[320px]:text-[.6rem]">
                    {{ $usuario }}
                </p>
            </div>
        </div>
        <div class="grid max-[640px]:grid-cols-1 grid-cols-2 h-full p-5 border border-[#272727] border-t-0">
            <div class="flex items-center w-full">
                <p class="flex font-light text-[.85rem] max-[640px]:text-[.75rem] text-balance py-2">
                    {{ $biografia }}
                </p>
            </div>
            <div class="grid w-full grid-cols-3 max-[640px]:divide-x-0 divide-x">
                @foreach ($estadisticas as $item)
                    <span class="flex flex-col items-center justify-center px-2">
                        <p class="text-[.8rem] font-semibold">
                            {{ $item['valor'] }}
                        </p>
                        <p class="text-[.8rem] max-[768px]:text-[.7rem] font-normal text-[#dce1e6] translate-x-[5px]">
                            {{ $item['titulo'] }}
                        </p>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</section>
