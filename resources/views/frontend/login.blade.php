<!DOCTYPE html>
<html lang="{{ str_replace(search: '_', replace: '-', subject: app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset(path: 'js/jquery-3.7.1.min.js') }}"></script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <style>
        .separador::before {
            content: ' ';
            background-color: #6C757D;
            width: 100%;
            height: 1px;
            position: absolute;
            left: 0
        }

        .alerta {
            font-size: .9rem;
            color: #cb4335;
            font-weight: 600;
        }
    </style>
    <title>Iniciar Sesión</title>

    @livewireStyles
</head>

<body class="flex relative gap-[20px] relative flex-col justify-center items-center py-5 px-5 lg:px-[50px]">

    <livewire:lw-form-login />

    @if (session('data.mensaje'))
        <x-alerta :mensaje="session('data.mensaje')" tipo="warning" />
    @endif

    @livewireScripts
</body>

</html>
