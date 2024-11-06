<section class="w-full max-w-screen-lg rounded">
    <div class="flex flex-col w-full min-h-full gap-2">
        <div
            class="flex flex-col w-full bg-[#F3F4F5] h-screen rounded overflow-hidden max-h-96 max-[768px]:max-h-[484px] relative">
            @if ($archivo_foto_portada || $archivo_foto_portada != '')
                <div class="flex w-full h-full max-h-48 max-[425px]:max-h-36 max-[375px]:max-h-32">
                    <x-app-recurso-encrypt :filename="$archivo_foto_portada" :cssFormato="2" />
                </div>
            @else
                <div class="flex w-full h-full max-h-48 max-[425px]:max-h-44 bg-[#495057]"></div>
            @endif
            <div class="relative flex flex-col w-full h-full gap-2 max-[768px]:gap-[40px] p-3 rounded-b">
                <div class="flex max-[768px]:flex-col w-full rounded gap-2 max-[768px]:gap-4 justify-between">
                    <div class="flex flex-row gap-2">
                        <div class="w-full h-full rounded max-w-[85px] overflow-hidden relative transition-all">
                            @if ($foto_perfil || $foto_perfil != '')
                                <x-app-recurso-encrypt :filename="$foto_perfil" />
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
                        <div class="flex flex-col justify-center w-full gap-1">
                            <p class="text-[clamp(.7rem,3vw,.8rem)] font-bold">
                                {{ $nombre_completo }}
                            </p>
                            <p class="text-[clamp(.7rem,3vw,.8rem)] font-semibold">
                                {{ $usuario }}
                            </p>
                            @if ($matricula > 0)
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-medium">
                                    {{ $matricula }}
                                </p>
                            @endif
                        </div>
                    </div>
                    @if (count($estadisticas) > 0)
                        <div class="grid items-center justify-center grid-cols-3 gap-5 pe-[7px]">
                            <div class="flex flex-col items-center">
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-medium">
                                    {{ $estadisticas[0]['seguidores'] }}
                                </p>
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-semibold">
                                    seguidores
                                </p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-medium">
                                    {{ $estadisticas[0]['sigues'] }}
                                </p>
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-semibold">
                                    sigues
                                </p>
                            </div>
                            <div class="flex flex-col items-center">
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-medium">
                                    {{ $estadisticas[0]['publicaciones'] }}
                                </p>
                                <p class="text-[clamp(.7rem,3vw,.8rem)] font-semibold">
                                    publicaciones
                                </p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex max-w-lg">
                    <p class="text-[clamp(.65rem,3vw,.7rem)] text-balance">
                        {{ $biografia }}
                    </p>
                </div>
                @if (((int) session('id_usuario')) == $id_usuario)
                    <button class="absolute bottom-0 right-[2px] p-3 app-transition-all hover:animate-pulse"
                        wire:click="AbrirFormulario">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                    </button>
                @else
                    @if (!$responseSeguidores)
                        <button class="absolute bottom-0 right-[2px] p-3 app-transition-all hover:opacity-70"
                            wire:click="AgregarAmigo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M16 19h6" />
                                <path d="M19 16v6" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                        </button>
                    @else
                        <button class="absolute bottom-0 right-[2px] p-3 hover:opacity-70" wire:click="EliminarAmigo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-user-check">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                <path d="M15 19l2 2l4 -4" />
                            </svg>
                        </button>
                    @endif
                @endif
            </div>
        </div>
        <div class="flex flex-col bg-[#F3F4F5] p-2 gap-3 rounded">
            <div>
                <p class="text-clamp(.9rem,3vw,1.1rem) font-semibold">
                    @if (((int) session('id_usuario')) == $id_usuario)
                        Sobre mi
                    @else
                        Añadir publicacion
                    @endif
                </p>
                <livewire:lw-component-text-publicacion bgColor="#e9ecef" />
            </div>

            <div class="flex flex-col w-full font-medium">
                <p>
                    Publicaciones
                </p>
            </div>
        </div>
    </div>
    @if (((int) session('id_usuario')) == $id_usuario && $abrir_formulario == true)
        <div
            class="absolute top-0 left-0 flex flex-col w-full h-full p-2 bg-[rgba(0,0,0,.1)] flex items-center justify-center">
            <div
                class="flex flex-col w-full p-5 gap-5 h-full max-w-screen-md bg-white max-h-[768px] rounded shadow overflow-y-auto">
                <div
                    class="text-[1.2rem] font-semibold pb-3 border-b border-b-[#343A40] flex items-center justify-between">
                    Editar presentación

                    <button wire:click="AbrirFormulario">
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
                    <input type="text" placeholder="Usuario"
                        class="py-3 border-b w-full outline-none border-b-[#6C757D]" maxlength="20">
                </div>
                <div class="flex items-center">
                    <textarea id="perfil-biografia-usuario-edit" placeholder="Biografia"
                        class="py-3 border-b resize-none w-full outline-none border-b-[#6C757D] max-h-[121px]" maxlength="200"></textarea>
                </div>
                <div class="grid grid-cols-2 h-full max-[768px]:max-h-96 max-[768px]:grid-cols-1 md:gap-5"
                    x-data="{ clickFotoPerfil() { this.$refs.fotoPerfil.click() }, clickFotoPortada() { this.$refs.fotoPortada.click() } }">
                    <div class="flex flex-col">
                        <p class="text-[.85rem] font-bold">
                            Cambiar foto de perfil
                        </p>
                        <div class="flex-col h-full max-h-40">
                            <input x-ref="fotoPerfil" type="file" name="" class="hidden" id="">
                            <button @click="clickFotoPerfil()"
                                class="flex items-center justify-center w-full h-full bg-[#E9ECEF] rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-photo">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 8h.01" />
                                    <path
                                        d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                                    <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                    <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-[.85rem] font-bold">
                            Cambiar foto de portada
                        </p>
                        <div class="flex-col h-full max-h-40">
                            <input x-ref="fotoPortada" type="file" name="" class="hidden" id="">
                            <button @click="clickFotoPortada()"
                                class="flex items-center justify-center w-full h-full bg-[#E9ECEF] rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                                    viewBox="0 0 24 24" fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-photo">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M8.813 11.612c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.986 4.986l.094 .083a1 1 0 0 0 1.403 -1.403l-.083 -.094l-1.292 -1.293l.292 -.293l.106 -.095c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.674 4.675a4 4 0 0 1 -3.775 3.599l-.206 .005h-12a4 4 0 0 1 -3.98 -3.603l6.687 -6.69l.106 -.095zm9.187 -9.612a4 4 0 0 1 3.995 3.8l.005 .2v9.585l-3.293 -3.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-.307 .306l-2.293 -2.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-5.307 5.306v-9.585a4 4 0 0 1 3.8 -3.995l.2 -.005h12zm-2.99 5l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button class="p-2 bg-[#abc4ff] w-full py-5 rounded text-black font-bold">
                        Cambiar
                    </button>
                </div>
            </div>
        </div>
    @endif
</section>
