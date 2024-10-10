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
    <title>Nodify UMM</title>
    @livewireStyles
</head>

<body class="flex max-[768px]:flex-col animate-fade-in">
    <livewire:header />

    <main
        class="w-full h-auto p-3 max-[768px]:p-2 pb-0 md:min-h-screen lg:min-h-screen lg:h-screen md:h-screen">
        @yield('content')
    </main>

    @livewireScripts
</body>

</html>
