<footer class="footer">
    <div class="container footer__hero">
        <div class="footer__heroCopy">
            <div class="footer__kicker">Ensure high availability of your services</div>
            <div class="footer__heroTitle">Ready to start your next project?</div>
            <div class="muted footer__heroText">We partner with brands to help them improve their software and IT
                services.</div>
        </div>
        <div class="footer__heroActions">
            <a class="btn btn--primary" href="#contact">Request a quote</a>
            <a class="btn btn--ghost" href="#services">View services</a>
        </div>
    </div>

    <div class="container footer__main">
        <div class="footer__col footer__col--brand">
            <div class="footer__brand">
                <img class="footer__logo" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy">
                <div>
                    <div class="brand__name brand__name--footer">Statosy</div>
                    <div class="muted footer__tagline">International service, global expertise</div>
                </div>
            </div>
            <p class="muted">Offer the latest software and solutions to our customers. Built for reliability, security,
                and high availability.</p>

            <div class="footer__statRow">
                <div class="footer__statMini">
                    <div class="footer__statK">450+</div>
                    <div class="footer__statV">Successful products delivered</div>
                </div>
                <div class="footer__statMini">
                    <div class="footer__statK">10M+</div>
                    <div class="footer__statV">User interactions recorded</div>
                </div>
                <div class="footer__statMini">
                    <div class="footer__statK">10+</div>
                    <div class="footer__statV">Years of experience</div>
                </div>
            </div>
        </div>

        <div class="footer__col">
            <div class="footer__title">Company</div>
            <ul class="footer__list">
                <li><a class="footer__link" href="#">About Us</a></li>
                <li><a class="footer__link" href="#contact">Contact Us</a></li>
                <li><a class="footer__link" href="#">Careers</a></li>
                <li><a class="footer__link" href="#">Case Studies</a></li>
                <li><a class="footer__link" href="#">News</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <div class="footer__title">Solutions</div>
            <ul class="footer__list">
                <li><a class="footer__link" href="#services">Software Development</a></li>
                <li><a class="footer__link" href="#services">Software Management</a></li>
                <li><a class="footer__link" href="#services">IT Consulting</a></li>
                <li><a class="footer__link" href="#services">Cloud Management</a></li>
                <li><a class="footer__link" href="#services">Cyber Security Services</a></li>
                <li><a class="footer__link" href="#services">Customer Support Services</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <div class="footer__title">Industries</div>
            <ul class="footer__list">
                <li><a class="footer__link" href="#">End User Products</a></li>
                <li><a class="footer__link" href="#">Government And Public</a></li>
                <li><a class="footer__link" href="#">Education And Non-Profit</a></li>
                <li><a class="footer__link" href="#">Banking And Finance</a></li>
                <li><a class="footer__link" href="#">Energy And Utilities</a></li>
                <li><a class="footer__link" href="#">Legal And Law Firms</a></li>
            </ul>

            <div class="footer__title footer__title--sub">Get In Touch</div>
            <div class="muted footer__text">If you have any questions or need help, feel free to contact with our team.
            </div>
            <div class="footer__contact">
                <a class="footer__contactItem" href="#contact">Send a message</a>
                <a class="footer__contactItem" href="#contact">Request a quote</a>
            </div>

            <div class="footer__social">
                <a class="footer__socialBtn" href="#" aria-label="LinkedIn">in</a>
                <a class="footer__socialBtn" href="#" aria-label="X">x</a>
                <a class="footer__socialBtn" href="#" aria-label="GitHub">gh</a>
            </div>
        </div>
    </div>

    <div class="container footer__bottom">
        <div class="muted">© {{ now()->year }} Statosy. All rights reserved.</div>
        <div class="footer__bottomLinks">
            <a class="footer__bottomLink" href="#services">Services</a>
            <a class="footer__bottomLink" href="#process">Process</a>
            <a class="footer__bottomLink" href="#contact">Contact</a>
        </div>
    </div>
</footer>
