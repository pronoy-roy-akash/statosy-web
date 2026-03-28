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
    <div class="container-fluid" style="padding: 24px;">
        <div style="display:flex; gap:16px; align-items:flex-start;">
            <aside style="flex:0 0 280px;">
                @include('backend.includes.leftsidebar')
            </aside>
            <div style="flex:1 1 auto;">
                @include('backend.includes.topbar')
                <main style="padding-top:16px;">
                    @yield('body-content')
                    @yield('content')
                </main>
                @include('backend.includes.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        if (window.feather) window.feather.replace();
    </script>
</body>
</html>
