<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Statosy Admin')</title>
    <meta name="theme-color" content="#000000">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="theme-dark">
    <div class="container" style="padding: 24px 0;">
        <div style="display:flex; gap:16px; align-items:flex-start;">
            <aside style="flex:0 0 260px;">
                @include('backend.includes.leftsidebar')
            </aside>
            <div style="flex:1 1 auto;">
                @include('backend.includes.topbar')
                <main style="padding-top:16px;">
                    @yield('content')
                </main>
                @include('backend.includes.footer')
            </div>
        </div>
    </div>
</body>
</html>

