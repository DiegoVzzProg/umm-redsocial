<header class="w-full max-w-[380px] gap-[10px] shadow-md bg-[#f1f4f6] flex flex-col p-5">
    <div class="flex">
        <span class="font-semibold">
            Indefinido
        </span>
    </div>
    <div class="flex items-center justify-center h-full  max-h-[130px]">

    </div>
    <div class="grid grid-cols-3 divide-x h-full max-h-[50px] text-[.85rem]">
        <div class="flex flex-col gap-[10px] items-center justify-center">
            <p class="font-semibold">
                {{ $publicaciones }}
            </p>
            <p class="opacity-[.9] font-normal">
                publicaciones
            </p>
        </div>
        <div class="flex flex-col gap-[10px] items-center justify-center">
            <p class="font-semibold">
                {{ $seguidores }}
            </p>
            <p class="opacity-[.9] font-normal">
                seguidores
            </p>
        </div>
        <div class="flex flex-col gap-[10px] items-center justify-center">
            <p class="font-semibold">
                {{ $sigue_a }}
            </p>
            <p class="opacity-[.9] font-normal">
                sigues
            </p>
        </div>
    </div>
</header>
