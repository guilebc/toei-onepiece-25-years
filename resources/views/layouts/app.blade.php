<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body class="font-body">
    @yield('content')
    @livewireScriptConfig
</body>
</html>
