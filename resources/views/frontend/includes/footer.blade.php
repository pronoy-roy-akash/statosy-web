<footer class="footer">
    <div class="container footer__hero">
        <div class="footer__heroCopy">
            <div class="footer__kicker">Ensure high availability of your services</div>
            <div class="footer__heroTitle">Ready to start your next project?</div>
            <div class="muted footer__heroText">We partner with brands to help them improve their software and IT
                services.</div>
        </div>
        <div class="footer__heroActions">
            <a class="btn btn--primary" href="{{ route('contact-us') }}#message">Let's Talk</a>
            <a class="btn btn--ghost" href="{{ route('contact-us') }}#schedule">Schedule a meeting</a>
        </div>
    </div>

    <div class="container footer__main">
        <div class="footer__col footer__col--brand">
            <div class="footer__brand">
                <img style="height: 63px;" class="footer__logo" src="{{ asset('frontend/assets/images/logo.png') }}"
                    alt="Statosy">

            </div>
            <p class="muted">A cloud services and software company built on in-house infrastructure—delivering secure,
                reliable, high-availability systems for modern businesses.</p>

            <div class="footer__statRow">
                <div class="footer__statMini">
                    <div class="footer__statK">Secure</div>
                    <div class="footer__statV">Security-first delivery</div>
                </div>
                <div class="footer__statMini">
                    <div class="footer__statK">Reliable</div>
                    <div class="footer__statV">High availability mindset</div>
                </div>
                <div class="footer__statMini">
                    <div class="footer__statK">Fast</div>
                    <div class="footer__statV">Lean, consistent shipping</div>
                </div>
            </div>
        </div>

        <div class="footer__col">
            <div class="footer__title">Company</div>
            <ul class="footer__list">
                <li><a class="footer__link" href="{{ route('company.about') }}">About Us</a></li>
                <li><a class="footer__link" href="{{ route('company.awards') }}">Awards & Recognition</a></li>
                <li><a class="footer__link" href="{{ route('company.careers') }}">Careers</a></li>
                <li><a class="footer__link" href="{{ route('contact-us') }}">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <div class="footer__title">Solutions</div>
            <ul class="footer__list">
                <li><a class="footer__link" href="{{ route('solutions.software-development') }}">Software
                        Development</a></li>
                <li><a class="footer__link" href="{{ route('solutions.software-management') }}">Software Management</a>
                </li>
                <li><a class="footer__link" href="{{ route('solutions.it-consulting') }}">IT Consulting</a></li>
                <li><a class="footer__link" href="{{ route('solutions.cloud-management') }}">Cloud Management</a></li>
                <li><a class="footer__link" href="{{ route('solutions.cyber-security-services') }}">Cyber Security
                        Services</a></li>
                <li><a class="footer__link" href="{{ route('solutions.customer-support-services') }}">Customer Support
                        Services</a></li>
            </ul>
        </div>

        <div class="footer__col">
            <div class="footer__title">Industries</div>
            <ul class="footer__list">
                <li><a class="footer__link" href="{{ route('industries.end-user-products') }}">End User Products</a>
                </li>
                <li><a class="footer__link" href="{{ route('industries.government-and-public') }}">Government And
                        Public</a></li>
                <li><a class="footer__link" href="{{ route('industries.education-and-non-profit') }}">Education And
                        Non-Profit</a></li>
                <li><a class="footer__link" href="{{ route('industries.banking-and-finance') }}">Banking And
                        Finance</a></li>
                <li><a class="footer__link" href="{{ route('industries.energy-and-utilities') }}">Energy And
                        Utilities</a></li>
                <li><a class="footer__link" href="{{ route('industries.legal-and-law-firms') }}">Legal And Law
                        Firms</a></li>
            </ul>
        </div>

        <div class="footer__col footer__col--contact">
            <div class="footer__title">Get In Touch</div>
            <div class="muted footer__text">If you have any questions or need help, contact our team.</div>
            <div class="footer__contact">
                <a class="footer__contactItem" href="{{ route('contact-us') }}#message">Send a message</a>
                <a class="footer__contactItem" href="{{ route('contact-us') }}#schedule">Book Meeting</a>
            </div>



            <div class="footer__social">
                <a class="footer__socialBtn" href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer"
                    aria-label="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path
                            d="M20.447 20.452H17.09v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.745V9h3.222v1.561h.046c.449-.85 1.546-1.748 3.182-1.748 3.404 0 4.032 2.241 4.032 5.156v6.483zM5.337 7.433A1.998 1.998 0 1 1 5.34 3.44a1.998 1.998 0 0 1-.003 3.993zM6.956 20.452H3.713V9h3.243v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.727v20.545C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.273V1.727C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                <a class="footer__socialBtn" href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"
                    aria-label="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path
                            d="M13.5 22v-8h2.7l.4-3h-3.1V9.1c0-.9.3-1.6 1.6-1.6h1.7V4.8c-.3 0-1.4-.1-2.6-.1-2.6 0-4.4 1.6-4.4 4.5V11H7v3h2.7v8h3.8z" />
                    </svg>
                </a>
                <a class="footer__socialBtn"
                    href="https://mail.google.com/mail/?view=cm&fs=1&to=info@statosy.com&su=Hello%20Statosy"
                    target="_blank" rel="noopener noreferrer" aria-label="Email">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path
                            d="M5 7H19C20.1 7 21 7.9 21 9V17C21 18.1 20.1 19 19 19H5C3.9 19 3 18.1 3 17V9C3 7.9 3.9 7 5 7Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="M4 9L12 14L20 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="container footer__bottom">
        <div class="muted">© {{ now()->year }} Statosy. All rights reserved.</div>
    </div>
</footer>
