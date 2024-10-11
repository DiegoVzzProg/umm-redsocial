<form action="{{ route(name: 'desencriptar', parameters: ['key' => $encrypted]) }}" method="post"
    class="shadow-lg text-[#7A7D7D] rounded bg-[#212121] w-full h-full max-w-[600px] p-5 max-h-[500px] flex flex-col items-center justify-start gap-[10px]">
    @csrf
    <p class="text-[2rem] w-full text-center p-5 font-semibold pointer-events-none text-[#e9ecef]">
        Bienvenido
    </p>
    <div class="flex flex-col w-full max-w-[400px]">
        <div class="flex relative items-center w-full  rounded-[3px] overflow-hidden shadow">
            <div class="flex items-center bg-[#343A40] min-h-full px-[10px]">
                <i class="bi bi-person-circle"></i>
            </div>
            <input type="text" name="usuario" autocomplete="off" wire:model.lazy="usuario"
                class="bg-[#343A40] w-full focus:placeholder:opacity-0 outline-none p-2 py-[15px] pe-[25px] text-[.9rem] font-normal"
                placeholder="Usuario">
        </div>
        @error('usuario')
            <div class="alerta">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col w-full max-w-[400px]">
        <div class="flex relative items-center w-full rounded-[3px] overflow-hidden shadow">
            <div class="flex items-center bg-[#343A40] min-h-full px-[10px]">
                <i class="bi bi-lock-fill"></i>
            </div>
            <input type="text" name="contraseña" autocomplete="off" wire:model.lazy="contraseña"
                class="bg-[#343A40] w-full focus:placeholder:opacity-0 outline-none p-2 py-[15px] pe-[25px] text-[.9rem] font-normal"
                placeholder="Contraseña">
        </div>
        @error('contraseña')
            <div class="alerta">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex items-center w-full max-w-[400px] rounded-[8px] overflow-hidden">
        <button type="submit"
            class="bg-[IndianRed] text-[white] app-transition-all outline-none text-[.9rem] font-normal w-full p-3">
            Iniciar sesión
        </button>
    </div>

    <div
        class="separador relative w-full max-w-[400px] p-5 text-center flex items-center justify-center bg-transparent">
        <p class="z-10 bg-[#212121] px-[15px] pointer-events-none translate-y-[-1px]">o</p>
    </div>

    <div class="flex items-center w-full max-w-[400px] rounded-[8px] overflow-hidden">
        <a href=""
            class="bg-[#3498db] text-[white] app-transition-all md:opacity-[.7] text-center lg:opacity-[.7] hover:opacity-[1] outline-none text-[.9rem] font-normal w-full p-3">
            Iniciar sesión con Office365
        </a>
    </div>
</form>
