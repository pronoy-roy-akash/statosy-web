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

