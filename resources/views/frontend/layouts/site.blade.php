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

    <header class="nav">
        <div class="container nav__inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Home">
                <img class="brand__logo" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy">
            </a>

            <button class="nav__toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="site-nav">
                <span class="sr-only">Open navigation</span>
                <span class="hamburger" aria-hidden="true"></span>
            </button>

            <nav class="nav__links" id="site-nav" data-nav>
                <a href="#services">Services</a>
                <a href="#process">Process</a>
                <a href="#stats">Impact</a>
                <a href="#contact">Contact</a>
                <a class="btn btn--primary" href="#contact">Talk to us</a>
            </nav>
        </div>
    </header>

    <main id="content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer__grid">
            <div>
                <div class="footer__brand">
                    <img class="brand__logo --footer" src="{{ asset('frontend/assets/images/logo.png') }}"
                        alt="Statosy">
                </div>
                <p class="muted">Statosy delivers cloud services, software engineering, and security-first operations
                    with a global mindset.</p>
            </div>
            <div>
                <div class="footer__title">Company</div>
                <a class="footer__link" href="#services">Services</a>
                <a class="footer__link" href="#process">How we work</a>
                <a class="footer__link" href="#contact">Contact</a>
            </div>
            <div>
                <div class="footer__title">Focus</div>
                <div class="muted">Software Development</div>
                <div class="muted">Cyber Security</div>
                <div class="muted">Cloud Management</div>
            </div>
        </div>
        <div class="container footer__bottom">
            <div class="muted">© {{ now()->year }} Statosy. All rights reserved.</div>
        </div>
    </footer>
</body>

</html>
