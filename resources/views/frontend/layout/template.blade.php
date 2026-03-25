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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="theme-dark">
    <a class="skip" href="#content">Skip to content</a>

    @include('frontend.includes.navbar')

    <main id="content">
        @yield('content')
    </main>

    @include('frontend.includes.footer')
</body>
</html>
