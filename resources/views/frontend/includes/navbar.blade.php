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
            <a href="{{ route('home') }}">{{ \App\Support\SiteContentStore::get('nav.home', 'Home') }}</a>
            <div class="nav__item nav__item--dropdown" data-dropdown-root>
                <button class="nav__dropbtn" type="button" data-dropdown-toggle aria-expanded="false"
                    aria-controls="nav-company">
                    {{ \App\Support\SiteContentStore::get('nav.company', 'Company') }}
                </button>
                <div class="nav__dropdown" id="nav-company" data-dropdown>
                    <a class="nav__dropdownLink"
                        href="{{ route('company.about') }}">{{ \App\Support\SiteContentStore::get('nav.company.about', 'About Us') }}</a>
                    <a class="nav__dropdownLink"
                        href="{{ route('company.awards') }}">{{ \App\Support\SiteContentStore::get('nav.company.awards', 'Awards & Recognition') }}</a>
                </div>
            </div>

            <div class="nav__item nav__item--dropdown" data-dropdown-root>
                <button class="nav__dropbtn" type="button" data-dropdown-toggle aria-expanded="false"
                    aria-controls="nav-services">
                    {{ \App\Support\SiteContentStore::get('nav.services', 'Services') }}
                </button>
                <div class="nav__dropdown nav__dropdown--mega" id="nav-services" data-dropdown>
                    <div class="nav__megaGrid">
                        <div class="nav__megaCol">
                            <div class="nav__dropdownTitle">
                                {{ \App\Support\SiteContentStore::get('nav.services.solutions_title', 'IT Solutions') }}
                            </div>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.software-development') }}">{{ \App\Support\SiteContentStore::get('nav.services.software_development', 'Software Development') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.software-management') }}">{{ \App\Support\SiteContentStore::get('nav.services.software_management', 'Software Management') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.it-consulting') }}">{{ \App\Support\SiteContentStore::get('nav.services.it_consulting', 'IT Consulting') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.cloud-management') }}">{{ \App\Support\SiteContentStore::get('nav.services.cloud_management', 'Cloud Management') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.cyber-security-services') }}">{{ \App\Support\SiteContentStore::get('nav.services.cyber_security', 'Cyber Security Services') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('solutions.customer-support-services') }}">{{ \App\Support\SiteContentStore::get('nav.services.customer_support', 'Customer Support Services') }}</a>
                        </div>
                        <div class="nav__megaCol">
                            <div class="nav__dropdownTitle">
                                {{ \App\Support\SiteContentStore::get('nav.services.industries_title', 'Industries') }}
                            </div>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.end-user-products') }}">{{ \App\Support\SiteContentStore::get('nav.industries.end_user_products', 'End User Products') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.government-and-public') }}">{{ \App\Support\SiteContentStore::get('nav.industries.government_public', 'Government And Public') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.education-and-non-profit') }}">{{ \App\Support\SiteContentStore::get('nav.industries.education_nonprofit', 'Education And Non-Profit') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.banking-and-finance') }}">{{ \App\Support\SiteContentStore::get('nav.industries.banking_finance', 'Banking And Finance') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.energy-and-utilities') }}">{{ \App\Support\SiteContentStore::get('nav.industries.energy_utilities', 'Energy And Utilities') }}</a>
                            <a class="nav__dropdownLink"
                                href="{{ route('industries.legal-and-law-firms') }}">{{ \App\Support\SiteContentStore::get('nav.industries.legal_law', 'Legal And Law Firms') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <a
                href="{{ route('company.careers') }}">{{ \App\Support\SiteContentStore::get('nav.careers', 'Careers') }}</a>
            <a class="btn btn--primary nav__contactBtn"
                href="{{ route('contact-us') }}">{{ \App\Support\SiteContentStore::get('nav.contact', 'Contact us') }}</a>
        </nav>
    </div>
</header>
