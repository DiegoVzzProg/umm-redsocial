<!DOCTYPE html>
<html lang="{{ str_replace(search: '_', replace: '-', subject: app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset(path: 'js/jquery-3.7.1.min.js') }}"></script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/css/master.css')
    @yield('css')
    <title>NODIFY</title>
    @livewireStyles
</head>

<body class="flex flex-col animate-fade-in">
    <livewire:header />

    <main class="w-full min-h-[calc(100vh-90px)] flex py-3">
        @yield('content')
    </main>

    @livewireScripts
</body>

</html>
