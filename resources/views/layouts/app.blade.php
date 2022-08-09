<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Blog') }}</title>

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
</head>

<body>
    @if (isset($header))
        <!-- Page Heading -->
        <header class="header">
            <!-- Navigation -->
            @include('layouts.navigation')
            <!-- Header content -->
            {{ $header }}
        </header>
    @endif

    <!-- Page Content -->
        {{ $slot }}

    <!-- Page Navbar -->
    @include('layouts.footer')

    {{-- @stack('scripts') --}}
    @livewireScripts()
</body>

</html>
