<header id="app_header_nodify"
    class="w-full md:flex-col gap-[20px] max-[768px]:shadow-none shadow bg-[#f1f4f6] flex flex-col p-5 max-w-[350px] max-[768px]:max-w-full max-[768px]:border-b max-[768px]:border-b-[#CED4DA]">
    <div class="flex items-center py-[10px]">
        Nodify UMM
    </div>
    <div class="flex h-full max-h-[175px] items-center justify-between flex-col gap-[20px] max-[768px]:hidden">
        <a href="" class="flex w-full max-w-[100px] h-full max-h-[100px] rounded-full overflow-hidden">
            <img src="{{ asset(path: 'assets/img/imgs_perfil/' . $imagen_perfil) }}" alt="" srcset="">
        </a>
        <div class="flex w-full">
            <div class="flex flex-col w-full items-center justify-center">
                <p class="text-[.85rem] font-semibold">
                    {{$publicaciones}}
                </p>
                <p class="text-[.85rem]">
                    publicaciones
                </p>
            </div>
            <div class="flex flex-col w-full items-center justify-center">
                <p class="text-[.85rem] font-semibold">
                    {{$seguidores}}
                </p>
                <p class="text-[.85rem]">
                    seguidores
                </p>
            </div>
            <div class="flex flex-col w-full items-center justify-center">
                <p class="text-[.85rem] font-semibold">
                    {{ $sigue_a }}
                </p>
                <p class="text-[.85rem]">
                    seguidos
                </p>
            </div>
        </div>
    </div>
    <div class="flex flex-col">

    </div>
</header>