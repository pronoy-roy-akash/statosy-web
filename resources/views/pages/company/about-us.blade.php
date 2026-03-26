@extends('frontend.layout.template')

@section('title', 'Statosy — About Us')
@section('description',
    'Learn about Statosy: our mission, values, and how we help clients improve software and cloud
    services.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                {{-- <div class="eyebrow">{{ $kicker }}</div> --}}
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Statosy is a cloud services and software company focused on reliability, security, and high
                    availability—built by a team that cares about outcomes.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Let’s talk</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.index') }}">Explore solutions</a>
                </div>

                <div class="subnav">
                    <a class="subnav__link is-active" href="{{ route('company.about') }}">About Us</a>
                    <a class="subnav__link" href="{{ route('company.awards') }}">Awards & Recognition</a>
                    <a class="subnav__link" href="{{ route('company.careers') }}">Careers</a>
                </div>
            </div>

            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">2025</div>
                            <div class="meta__v">Journey begins</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">20+</div>
                            <div class="meta__v">Developers in the team</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Onboarding</div>
                            <div class="meta__v">Prestigious new client projects</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__fade"></div>
    </section>

    <section class="section" id="company">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Leadership</h2>
                <p class="muted">A focused leadership team driving delivery quality, reliability, and growth.</p>
            </div>

            <div class="leaders">
                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">CEO</div>
                        <div class="leader__name">Pronoy Roy Akash</div>
                    </div>
                    <div class="leader__work">Leads company strategy, client partnerships, and delivery direction across
                        cloud services and software projects.</div>
                    <div class="leader__links">
                        <a class="iconBtn"
                            href="https://www.linkedin.com/search/results/all/?keywords=Pronoy%20Roy%20Akash%20Statosy"
                            target="_blank" rel="noopener noreferrer" aria-label="Pronoy Roy Akash on LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M20.447 20.452H17.09v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.745V9h3.222v1.561h.046c.449-.85 1.546-1.748 3.182-1.748 3.404 0 4.032 2.241 4.032 5.156v6.483zM5.337 7.433A1.998 1.998 0 1 1 5.34 3.44a1.998 1.998 0 0 1-.003 3.993zM6.956 20.452H3.713V9h3.243v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.727v20.545C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.273V1.727C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a class="iconBtn" href="mailto:hello@statosy.com?subject=Attn%3A%20Pronoy%20Roy%20Akash"
                            aria-label="Email Pronoy Roy Akash">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 7H19C20.1 7 21 7.9 21 9V17C21 18.1 20.1 19 19 19H5C3.9 19 3 18.1 3 17V9C3 7.9 3.9 7 5 7Z"
                                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                <path d="M4 9L12 14L20 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">CTO</div>
                        <div class="leader__name">Riyad Arefin</div>
                    </div>
                    <div class="leader__work">Owns architecture and engineering standards, ensuring security-first delivery
                        and high availability across production systems.</div>
                    <div class="leader__links">
                        <a class="iconBtn"
                            href="https://www.linkedin.com/search/results/all/?keywords=Riyad%20Arefin%20Statosy"
                            target="_blank" rel="noopener noreferrer" aria-label="Riyad Arefin on LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M20.447 20.452H17.09v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.745V9h3.222v1.561h.046c.449-.85 1.546-1.748 3.182-1.748 3.404 0 4.032 2.241 4.032 5.156v6.483zM5.337 7.433A1.998 1.998 0 1 1 5.34 3.44a1.998 1.998 0 0 1-.003 3.993zM6.956 20.452H3.713V9h3.243v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.727v20.545C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.273V1.727C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a class="iconBtn" href="mailto:hello@statosy.com?subject=Attn%3A%20Riyad%20Arefin"
                            aria-label="Email Riyad Arefin">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 7H19C20.1 7 21 7.9 21 9V17C21 18.1 20.1 19 19 19H5C3.9 19 3 18.1 3 17V9C3 7.9 3.9 7 5 7Z"
                                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                <path d="M4 9L12 14L20 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">Director</div>
                        <div class="leader__name">Faiyaz Chowdhury</div>
                    </div>
                    <div class="leader__work">Drives operations, delivery governance, and execution quality across ongoing
                        and onboarding client engagements.</div>
                    <div class="leader__links">
                        <a class="iconBtn"
                            href="https://www.linkedin.com/search/results/all/?keywords=Faiyaz%20Chowdhury%20Statosy"
                            target="_blank" rel="noopener noreferrer" aria-label="Faiyaz Chowdhury on LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M20.447 20.452H17.09v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.745V9h3.222v1.561h.046c.449-.85 1.546-1.748 3.182-1.748 3.404 0 4.032 2.241 4.032 5.156v6.483zM5.337 7.433A1.998 1.998 0 1 1 5.34 3.44a1.998 1.998 0 0 1-.003 3.993zM6.956 20.452H3.713V9h3.243v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.727v20.545C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.273V1.727C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a class="iconBtn" href="mailto:hello@statosy.com?subject=Attn%3A%20Faiyaz%20Chowdhury"
                            aria-label="Email Faiyaz Chowdhury">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 7H19C20.1 7 21 7.9 21 9V17C21 18.1 20.1 19 19 19H5C3.9 19 3 18.1 3 17V9C3 7.9 3.9 7 5 7Z"
                                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                <path d="M4 9L12 14L20 9" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">Director</div>
                        <div class="leader__name">Azmainur Rahman</div>
                    </div>
                    <div class="leader__work">Leads delivery coordination and team enablement to keep projects predictable,
                        well-structured, and client-focused.</div>
                    <div class="leader__links">
                        <a class="iconBtn"
                            href="https://www.linkedin.com/search/results/all/?keywords=Azmainur%20Rahman%20Statosy"
                            target="_blank" rel="noopener noreferrer" aria-label="Azmainur Rahman on LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M20.447 20.452H17.09v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.745V9h3.222v1.561h.046c.449-.85 1.546-1.748 3.182-1.748 3.404 0 4.032 2.241 4.032 5.156v6.483zM5.337 7.433A1.998 1.998 0 1 1 5.34 3.44a1.998 1.998 0 0 1-.003 3.993zM6.956 20.452H3.713V9h3.243v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.727v20.545C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.273V1.727C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a class="iconBtn" href="mailto:hello@statosy.com?subject=Attn%3A%20Azmainur%20Rahman"
                            aria-label="Email Azmainur Rahman">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
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

            <div class="sectionDivider" aria-hidden="true"></div>

            <div class="section__head section__head--spaced">
                <h2 class="h2">Our story</h2>
                <p class="muted">Statosy started its journey in 2025. Since then we’ve been onboarding prestigious
                    projects and growing a team built around quality and accountability.</p>
            </div>

            <div class="timeline">
                <div class="timeline__item">
                    <div class="timeline__year">2025</div>
                    <div class="timeline__text">Statosy journey begins with a cloud-first vision</div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__year">2025</div>
                    <div class="timeline__text">Core leadership team formed (CEO, CTO, Directors)</div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__year">2026</div>
                    <div class="timeline__text">Team scaled to 20+ developers for delivery capacity</div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__year">Now</div>
                    <div class="timeline__text">Onboarding more prestigious company projects</div>
                </div>
            </div>

            <div class="impact impact--spaced">
                <div class="impact__copy">
                    <h2 class="h2">Keep your business safe & ensure high availability</h2>
                    <p class="muted">We deliver software and cloud operations with a consultative approach on emerging
                        technology—built for real production outcomes.</p>
                    <div class="impact__cta">
                        <a class="btn btn--primary" href="{{ route('home') }}#contact">Talk to our experts</a>
                        <a class="btn btn--ghost" href="{{ route('home') }}#services">View services</a>
                    </div>
                </div>
                <div class="impact__stats">
                    <div class="stat">
                        <div class="stat__k">20+</div>
                        <div class="stat__v">Developers</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">Cloud</div>
                        <div class="stat__v">High availability focus</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">Security</div>
                        <div class="stat__v">Practical protections</div>
                    </div>
                </div>
            </div>

            <div class="section__head section__head--spaced">
                <h2 class="h2">Accelerate your career now</h2>
                <p class="muted">Join a team that values honesty, integrity, and ethical business practices—focused on
                    doing the right thing for clients and users.</p>
            </div>

            <div class="hero__cta">
                <a class="btn btn--primary" href="{{ route('company.careers') }}">View careers</a>
                <a class="btn btn--ghost" href="{{ route('home') }}#contact">Contact</a>
            </div>
        </div>
    </section>
@endsection
