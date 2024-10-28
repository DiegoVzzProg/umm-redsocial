<div class="flex flex-col items-center w-full overflow-y-auto app-quitar-scroll">
    <article class="relative flex flex-col w-full max-w-screen-lg gap-3 px-2">
        <section class="bg-[#F8F9FA] rounded w-full flex  p-3 px-4 relative gap-2">
            <div class="flex">
                <span
                    class="flex w-full max-w-[55px] min-w-[55px] object-cover h-full max-h-[55px] overflow-hidden rounded-full">
                    @if ($imagen_perfil || $imagen_perfil != '')
                        <livewire:lw-component-imagen-encriptada :filename="$imagen_perfil" />
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
            <div class="flex flex-col items-end w-full gap-2">
                <textarea name="" id="" rows="3"
                    class="bg-[#E9ECEF] placeholder:text-[.9rem] text-[1rem] px-3 max-h-[120px] placeholder:opacity-50 resize-none overflow-y-auto app-quitar-scroll outline-none rounded w-full p-2"
                    placeholder="¿En que estas pensando?" maxlength="150"></textarea>
                <div class="flex justify-between w-full">
                    <div class="flex gap-2">
                        <button class="opacity-50 hover:opacity-100 app-transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-photo-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 8h.01" />
                                <path d="M12.5 21h-6.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6.5" />
                                <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />
                                <path d="M14 14l1 -1c.67 -.644 1.45 -.824 2.182 -.54" />
                                <path d="M16 19h6" />
                                <path d="M19 16v6" />
                            </svg>
                        </button>
                        <button class="opacity-50 hover:opacity-100 app-transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mood-happy">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-2 9.66h-6a1 1 0 0 0 -1 1v.05a3.975 3.975 0 0 0 3.777 3.97l.227 .005a4.026 4.026 0 0 0 3.99 -3.79l.006 -.206a1 1 0 0 0 -1 -1.029zm-5.99 -5l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993zm6 0l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993z" />
                            </svg>
                        </button>
                    </div>
                    <button
                        class="p-2 px-3 bg-[#039be5] text-white rounded flex gap-2 opacity-50 hover:opacity-100 app-transition-all text-[clamp(.8rem,3vw,.85rem)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="translate-y-[1px]" viewBox="0 0 24 24"
                            width="18" height="18">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path fill="white"
                                d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                            </path>
                        </svg>
                        Publicar
                    </button>
                </div>
            </div>

        </section>

        <section class="bg-[#F8F9FA] rounded w-full flex p-3 px-4 relative gap-2">
        </section>
    </article>
</div>
