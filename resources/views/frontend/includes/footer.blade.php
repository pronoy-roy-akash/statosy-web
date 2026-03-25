<footer class="footer">
    <div class="container footer__grid">
        <div>
            <div class="footer__brand">
                <img class="brand__logo brand__logo--footer" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy">

            </div>
            <p class="muted">Statosy delivers cloud services, software engineering, and security-first operations with a global mindset.</p>
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

