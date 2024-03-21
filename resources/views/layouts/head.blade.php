    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('meta.title')
        <title>@yield('meta.title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <meta name="description" content="@yield('meta.description', trim(preg_replace('/\s\s+/', ' ', trans('app.introduction2'))))" />

    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property="og:type" content="website" />
    @hasSection('meta.title')
        <meta property="og:title" content="@yield('meta.title') - {{ config('app.name') }}" />
    @else
        <meta property="og:title" content="{{ config('app.name') }}" />
    @endif
    <meta property="og:description" content="@yield('og.description', trim(preg_replace('/\s\s+/', ' ', trans('app.introduction2'))))" />
    <meta property="og:url" content="@yield('og.url', url()->current())" />
    @hasSection('og.site_name')
        <meta property="og:site_name" content="@yield('og.site_name') - {{ config('app.name') }}" />
    @else
        <meta property="og:site_name" content="{{ config('app.name') }}" />
    @endif
    <meta property="og:image" content="@yield('og.image', asset('assets/og.jpg'))" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="@yield('og.image.width', 1200)" />
    <meta property="og:image:height" content="@yield('og.image.height', 630)" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@agencecarburant" />
    <meta name="twitter:creator" content="@agencecarburant" />
    @hasSection('meta.title')
        <meta name="twitter:title" content="@yield('meta.title') - {{ config('app.name') }}" />
    @else
        <meta property="og:site_name" content="{{ config('app.name') }}" />
    @endif
    <meta name="twitter:description" content="@yield('og.description', trim(preg_replace('/\s\s+/', ' ', trans('app.introduction2'))))">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,300;0,400;1,300;1,400&family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @turnstileScripts()
