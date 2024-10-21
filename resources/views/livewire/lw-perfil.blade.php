<section class="w-full max-w-screen-lg rounded" x-data="{ AbrirFormEditPresentacion: false }">
    <div class="flex flex-col w-full min-h-full gap-1">
        <div class="flex flex-col w-full bg-[#E9ECEF] h-screen rounded overflow-hidden max-h-96 relative">
            @if ($archivo_foto_portada || $archivo_foto_portada != '')
                <div class="flex w-full h-full max-h-48">
                    <livewire:lw-component-imagen-encriptada :filename="$archivo_foto_portada" />
                </div>
            @else
                <div class="flex w-full h-full max-h-48 bg-[#495057]"></div>
            @endif
            <div class="relative flex flex-col w-full h-full p-3 rounded-b">
                <div class="flex w-full h-full max-h-[85px] rounded gap-2 ">
                    <div class="w-full h-full rounded max-w-[85px] overflow-hidden relative transition-all">
                        @if ($foto_perfil || $foto_perfil != '')
                            <livewire:lw-component-imagen-encriptada :filename="$foto_perfil" />
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-user-square-rounded">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                                <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                            </svg>
                        @endif
                    </div>
                    <div class="flex flex-col justify-center max-w-xl">
                        <p class="text-[clamp(.75rem,3vw,.9rem)] font-semibold">
                            {{ $nombre_completo }}
                        </p>
                        <p class="text-[clamp(.65rem,3vw,.75rem)] font-medium">
                            {{ $usuario }}
                        </p>
                    </div>
                </div>
                <div class="flex items-baseline">
                    {{-- <p class="text-[clamp(.65rem,3vw,.7rem)] ">
                        {{ $biografia }}
                    </p> --}}
                    <div class="flex">

                    </div>
                </div>
                @if (((int) session('id_usuario')) == $id_usuario)
                    <button class="absolute top-0 right-0 p-3 app-transition-all hover:animate-pulse"
                        @click="AbrirFormEditPresentacion = true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    </div>

    @if (((int) session('id_usuario')) == $id_usuario)
        <div class="absolute top-0 left-0 flex flex-col w-full h-full p-2 bg-[rgba(0,0,0,.1)] flex items-center justify-center"
            x-show="AbrirFormEditPresentacion">
            <div class="flex flex-col w-full p-5 gap-5 h-full max-w-screen-md bg-white max-h-[768px] rounded">
                <div
                    class="text-[1.2rem] font-semibold pb-3 border-b border-b-[#343A40] flex items-center justify-between">
                    Editar presentación

                    <button @click="AbrirFormEditPresentacion = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Usuario" class="py-3 border-b outline-none border-b-[#6C757D]">
                </div>
            </div>
        </div>
    @endif
</section>
