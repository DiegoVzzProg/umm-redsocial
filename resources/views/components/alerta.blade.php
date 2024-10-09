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
        animation: AppInitAlert .6s ease forwards 5s;
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
        color: #ce8500;
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ce8500"
                class="icon icon-tabler icons-tabler-filled icon-tabler-alert-triangle">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M12 1.67c.955 0 1.845 .467 2.39 1.247l.105 .16l8.114 13.548a2.914 2.914 0 0 1 -2.307 4.363l-.195 .008h-16.225a2.914 2.914 0 0 1 -2.582 -4.2l.099 -.185l8.11 -13.538a2.914 2.914 0 0 1 2.491 -1.403zm.01 13.33l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007zm-.01 -7a1 1 0 0 0 -.993 .883l-.007 .117v4l.007 .117a1 1 0 0 0 1.986 0l.007 -.117v-4l-.007 -.117a1 1 0 0 0 -.993 -.883z" />
            </svg>
        @endif
        <span>
            Atencion: {{ $mensaje }}
        </span>
    </div>
</div>