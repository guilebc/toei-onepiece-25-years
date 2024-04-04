<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{open: false}">
    <head>
        @include('layouts.head')
    </head>
    <body class="font-body" :class="open ? 'overflow-hidden' : ''">
        @yield('content')

        @livewireScriptConfig
    </body>
</html>
