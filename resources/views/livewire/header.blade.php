<header class="w-full shadow lg:max-w-[300px] gap-[20px] bg-[#f1f4f6] flex max-[768px]:justify-between md:flex-col p-2">
    <div class="flex items-center">
        Nodify UMM
    </div>
    <div class="max-[768px]:hidden flex h-full justify-center items-center max-h-[100px]">
        <button type="button" class="flex w-full max-w-[100px] overflow-hidden h-full max-h-[100px] rounded-full">
            <img src={{ asset($imagen_perfil) }} class="w-full h-full object-fit" alt="">
        </button>
    </div>

    <div class="max-[1024px]:hidden flex h-full max-h-[100px] py-2">
        <div class="flex flex-col items-center justify-center border-e border-e-[#DEE2E6] w-full pe-2">
            <p class="font-semibold">
                {{ $publicaciones }}
            </p>
            <p class="text-[.75rem]">
                publicaciones
            </p>
        </div>
        <div class="flex flex-col items-center justify-center w-full">
            <p class="font-semibold">
                {{ $seguidores }}
            </p>
            <p class="text-[.75rem]">
                seguidores
            </p>
        </div>
        <div class="flex flex-col items-center justify-center border-s border-s-[#DEE2E6] w-full">
            <p class="font-semibold">
                {{ $sigue_a }}
            </p>
            <p class="text-[.75rem]">
                siguiendo
            </p>
        </div>
    </div>

    <div class="flex max-[768px]:flex-row-reverse md:flex-col-reverse items-start justify-center gap-[10px]">
        <a href=""
            class="flex items-center w-full gap-2 p-2 px-3 bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
            <span class="md:translate-y-[-2px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-bell">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" />
                    <path
                        d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" />
                </svg>
            </span>
            <p class="max-[768px]:hidden text-[1.2rem]">
                Notificaciones
            </p>
        </a>
        <a href=""
            class="flex items-center w-full gap-2 p-2 px-3 bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
            <span class="md:translate-y-[-2px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-message">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M18 3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-4.724l-4.762 2.857a1 1 0 0 1 -1.508 -.743l-.006 -.114v-2h-1a4 4 0 0 1 -3.995 -3.8l-.005 -.2v-8a4 4 0 0 1 4 -4zm-4 9h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m2 -4h-8a1 1 0 1 0 0 2h8a1 1 0 0 0 0 -2" />
                </svg>
            </span>
            <p class="max-[768px]:hidden text-[1.2rem]">
                Mensajes
            </p>
        </a>
        <div class="flex gap-[10px] justify-between max-[768px]:hidden md:flex-col md:w-full">
            <a href="{{ route('inicio') }}"
                class="flex items-center w-full gap-2 p-2 px-3 bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
                <span class="md:translate-y-[-2px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-home">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" />
                    </svg>
                </span>
                <p class="text-[1.2rem]">
                    Inicio
                </p>
            </a>
            <a href=""
                class="flex items-center w-full gap-2 p-2 px-3 bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
                <span class="md:translate-y-[-1px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rocket">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M4 13a8 8 0 0 1 7 7a6 6 0 0 0 3 -5a9 9 0 0 0 6 -8a3 3 0 0 0 -3 -3a9 9 0 0 0 -8 6a6 6 0 0 0 -5 3" />
                        <path d="M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3" />
                        <path d="M15 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    </svg>
                </span>
                <p class="text-[1.2rem]">
                    Brightspace
                </p>
            </a>
            <a href=""
                class="flex items-center w-full gap-2 p-2 px-3 bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
                <span class="md:translate-y-[-2px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-browser">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />
                        <path d="M4 8l16 0" />
                        <path d="M8 4l0 4" />
                    </svg>
                </span>
                <p class="text-[1.2rem]">
                    Mi Espacio
                </p>
            </a>
            </a>
            <a href=""
                class="flex items-center w-full gap-2 p-2 px-3 bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
                <span class="md:translate-y-[-2px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-adjustments-horizontal">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 6l8 0" />
                        <path d="M16 6l4 0" />
                        <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 12l2 0" />
                        <path d="M10 12l10 0" />
                        <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 18l11 0" />
                        <path d="M19 18l1 0" />
                    </svg>
                </span>
                <p class="text-[1.2rem]">
                    Configuracion
                </p>
            </a>
        </div>
        <a href=""
            class="flex items-center w-full gap-2 p-2 px-3 md:hidden bg-transparent rounded-full md:rounded md:hover:bg-[#DEE2E6] twine-transition-all">
            <span class="md:translate-y-[-2px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                    <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                </svg>
            </span>
        </a>
    </div>
</header>
