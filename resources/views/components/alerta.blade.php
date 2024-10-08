<style>
    .app-alerta {
        position: absolute;
        width: 100%;
        max-width: 400px;
        height: 100%;
        max-height: 60px;
        border-radius: 4px;
        top: 10px;
        display: flex;
        overflow: hidden;
        padding: 6px 10px;
        /* animation: AppInitAlert .6s ease forwards 5s; */
    }

    .app-alerta.app-alerta-warning {
        opacity: .9;
        background-color: #ffdb9b;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: end;
        gap: 5px;
        border-left: 4px solid #ffa502
    }

    .app-alerta.app-alerta-warning span {
        color: #ce8500
    }

    .app-alerta.app-alerta-warning i {
        color: #ce8500
    }

    @keyframes AppInitAlert {
        from {
            opacity: .9;
        }

        to {
            opacity: 0;
            display: none;
        }
    }
</style>
<div
    class="app-alerta app-alerta-{{ $tipo }} text-[clamp(.8rem,3vw,.9rem)] ps-[5px] text-balance right-[10px] max-[768px]:right-0">
    <div class="flex items-center gap-[10px] w-full h-full">
        @if ($tipo == 'warning')
            <i class="bi bi-exclamation-circle-fill text-[clamp(1rem,3vw,1.5rem)]"></i>
        @endif
        <span>
            Atencion: {{ $mensaje }}
        </span>
    </div>
</div>
