<!DOCTYPE html>
<html lang="{{ str_replace(search: '_', replace: '-', subject: app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{asset(path: 'js/jquery-3.7.1.min.js')}}"></script>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    <title>UMM</title>

    @livewireStyles
</head>

<body class="flex">
    <livewire:header />
    <main class="w-full h-screen min-h-screen overflow-y-auto p-5">
        <livewire:home />
    </main>
    @livewireScripts
</body>

</html>