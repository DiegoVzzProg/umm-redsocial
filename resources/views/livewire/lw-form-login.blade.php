<div
    class="shadow-lg text-[#7A7D7D] rounded bg-[#F8F9FA] w-full h-full max-w-[600px] p-5 max-h-[500px] flex flex-col items-center justify-between gap-[10px] rounded">

    <div class="flex items-center justify-center w-full h-full">
        <span class="max-w-[400px] w-full font-bold py-3 flex items-center gap-1">
            NODIFY
            <svg xmlns="http://www.w3.org/2000/svg" class="translate-y-[-1px]" width="24" height="24"
                viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-binary-tree-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M12 3a3 3 0 0 1 2.616 4.47l3.274 3.742a3 3 0 1 1 -1.505 1.318l-3.275 -3.743l-.11 .042v6.342a3.001 3.001 0 1 1 -2 0v-6.342l-.111 -.041l-3.274 3.742a3 3 0 1 1 -1.505 -1.318l3.273 -3.742a3 3 0 0 1 2.617 -4.47" />
            </svg>
        </span>
    </div>
    <div class="flex flex-col w-full max-w-[400px]">
        <div class="flex relative items-center bg-[#E9ECEF] w-full h-full rounded-[3px] overflow-hidden shadow">
            <div class="flex items-center bg-[#E9ECEF] px-[10px]">
                <i class="bi bi-person-circle"></i>
            </div>
            <input type="text" name="usuario" autocomplete="off" wire:model.lazy="usuario"
                class="bg-[#E9ECEF] w-full focus:placeholder:opacity-0 outline-none p-2 py-[15px] pe-[25px] text-[.9rem] font-normal"
                placeholder="Correo">
        </div>
        @error('usuario')
            <div class="alerta">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col w-full max-w-[400px]">
        <div class="flex relative items-center w-full bg-[#E9ECEF] rounded-[3px] overflow-hidden shadow">
            <div class="flex items-center bg-[#E9ECEF] min-h-full px-[10px]">
                <i class="bi bi-lock-fill"></i>
            </div>
            <input type="text" name="contraseña" autocomplete="off" wire:model.lazy="contraseña"
                class="bg-[#E9ECEF] w-full focus:placeholder:opacity-0 outline-none p-2 py-[15px] pe-[25px] text-[.9rem] font-normal"
                placeholder="Contraseña">
        </div>
        @error('contraseña')
            <div class="alerta">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex items-center w-full max-w-[400px] rounded-[8px] overflow-hidden">
        <button type="submit" wire:click="InicioSesion"
            class="bg-[IndianRed] text-[white] app-transition-all md:opacity-[.7] text-center lg:opacity-[.7] hover:opacity-[1] outline-none text-[.9rem] font-normal w-full p-3">
            Iniciar sesión
        </button>
    </div>

    <div
        class="separador relative w-full max-w-[400px] p-5 text-center flex items-center justify-center bg-transparent">
        <p class="z-10 bg-[#F8F9FA] px-[15px] pointer-events-none translate-y-[-1px]">o</p>
    </div>

    <div class="flex items-center w-full max-w-[400px] rounded-[8px] overflow-hidden">
        <a href="{{ route('inicio') }}"
            class="bg-[#3498db] text-[white] app-transition-all md:opacity-[.7] text-center lg:opacity-[.7] hover:opacity-[1] outline-none text-[.9rem] font-normal w-full p-3">
            Regresar a inicio
        </a>
    </div>
</div>
