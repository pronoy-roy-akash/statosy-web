<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Statosy'))</title>
    <meta name="description" content="@yield('description', 'Statosy builds cloud services and software products with strong security, reliability, and fast delivery.')">
    <meta name="theme-color" content="#000000">
    <link rel="icon" href="{{ asset('frontend/assets/images/icon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/icon.png') }}">
    @php
        $fontHref = \App\Support\SiteSettings::fontGoogleHref();
        $fontStack = \App\Support\SiteSettings::fontCssStack();
    @endphp
    @if ($fontHref)
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="{{ $fontHref }}" rel="stylesheet">
    @endif
    <style>
        :root {
            --font: {!! $fontStack !!};
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="theme-dark">
    <a class="skip" href="#content">Skip to content</a>

    <div class="bgFloat" aria-hidden="true">
        <span class="bgFloat__orb bgFloat__orb--a"></span>
        <span class="bgFloat__orb bgFloat__orb--b"></span>
        <span class="bgFloat__orb bgFloat__orb--c"></span>
        <span class="bgFloat__beam"></span>
    </div>

    @include('frontend.includes.navbar')

    <main id="content">
        @yield('content')
    </main>

    @include('frontend.includes.footer')
</body>

</html>
