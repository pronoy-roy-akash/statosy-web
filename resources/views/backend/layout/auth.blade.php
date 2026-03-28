<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Statosy Admin')</title>
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="theme-dark">
    <div class="container" style="min-height:100vh; display:flex; align-items:center; justify-content:center; padding: 28px 0;">
        <div style="width: min(520px, 100%);">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

