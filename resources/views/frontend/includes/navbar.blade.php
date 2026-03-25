<header class="nav">
    <div class="container nav__inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Home">
            <img class="brand__logo" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy">
            <span class="brand__name">Statosy</span>
        </a>

        <button class="nav__toggle" type="button" data-nav-toggle aria-expanded="false" aria-controls="site-nav">
            <span class="sr-only">Open navigation</span>
            <span class="hamburger" aria-hidden="true"></span>
        </button>

        <nav class="nav__links" id="site-nav" data-nav>
            <a href="{{ route('home') }}">Home</a>
            <div class="nav__item nav__item--dropdown" data-dropdown-root>
                <button class="nav__dropbtn" type="button" data-dropdown-toggle aria-expanded="false"
                    aria-controls="nav-company">
                    Company
                </button>
                <div class="nav__dropdown" id="nav-company" data-dropdown>
                    <a class="nav__dropdownLink" href="{{ route('company.about') }}">About Us</a>
                    <a class="nav__dropdownLink" href="{{ route('company.awards') }}">Awards & Recognition</a>
                </div>
            </div>

            <div class="nav__item nav__item--dropdown" data-dropdown-root>
                <button class="nav__dropbtn" type="button" data-dropdown-toggle aria-expanded="false"
                    aria-controls="nav-services">
                    Services
                </button>
                <div class="nav__dropdown nav__dropdown--mega" id="nav-services" data-dropdown>
                    <div class="nav__megaGrid">
                        <div class="nav__megaCol">
                            <div class="nav__dropdownTitle">IT Solutions</div>
                            <a class="nav__dropdownLink" href="{{ route('solutions.software-development') }}">Software
                                Development</a>
                            <a class="nav__dropdownLink" href="{{ route('solutions.software-management') }}">Software
                                Management</a>
                            <a class="nav__dropdownLink" href="{{ route('solutions.it-consulting') }}">IT Consulting</a>
                            <a class="nav__dropdownLink" href="{{ route('solutions.cloud-management') }}">Cloud
                                Management</a>
                            <a class="nav__dropdownLink" href="{{ route('solutions.cyber-security-services') }}">Cyber
                                Security Services</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.customer-support-services') }}">Customer Support Services</a>
                        </div>
                        <div class="nav__megaCol">
                            <div class="nav__dropdownTitle">Industries</div>
                            <a class="nav__dropdownLink" href="{{ route('industries.end-user-products') }}">End User
                                Products</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.government-and-public') }}">Government And Public</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.education-and-non-profit') }}">Education And Non-Profit</a>
                            <a class="nav__dropdownLink" href="{{ route('industries.banking-and-finance') }}">Banking
                                And Finance</a>
                            <a class="nav__dropdownLink" href="{{ route('industries.energy-and-utilities') }}">Energy
                                And Utilities</a>
                            <a class="nav__dropdownLink" href="{{ route('industries.legal-and-law-firms') }}">Legal And
                                Law Firms</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('company.careers') }}">Careers</a>
            <a class="btn btn--primary" href="#contact">Let’s talk</a>
        </nav>
    </div>
</header>
