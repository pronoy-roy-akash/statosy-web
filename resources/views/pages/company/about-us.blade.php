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
                <p class="lead">Statosy is a cloud services and software company focused on reliability, security, and high availability—built by a team that cares about outcomes.</p>
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
                    <div class="leader__work">Leads company strategy, client partnerships, and delivery direction across cloud services and software projects.</div>
                    <div class="leader__tags">
                        <span class="tag">Strategy</span>
                        <span class="tag">Partnerships</span>
                        <span class="tag">Delivery</span>
                    </div>
                </div>

                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">CTO</div>
                        <div class="leader__name">Riyad Arefin</div>
                    </div>
                    <div class="leader__work">Owns architecture and engineering standards, ensuring security-first delivery and high availability across production systems.</div>
                    <div class="leader__tags">
                        <span class="tag">Architecture</span>
                        <span class="tag">Cloud</span>
                        <span class="tag">Security</span>
                    </div>
                </div>

                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">Director</div>
                        <div class="leader__name">Faiyaz Chowdhury</div>
                    </div>
                    <div class="leader__work">Drives operations, delivery governance, and execution quality across ongoing and onboarding client engagements.</div>
                    <div class="leader__tags">
                        <span class="tag">Operations</span>
                        <span class="tag">Governance</span>
                        <span class="tag">Quality</span>
                    </div>
                </div>

                <div class="leader">
                    <div class="leader__top">
                        <div class="leader__role">Director</div>
                        <div class="leader__name">Azmainur Rahman</div>
                    </div>
                    <div class="leader__work">Leads delivery coordination and team enablement to keep projects predictable, well-structured, and client-focused.</div>
                    <div class="leader__tags">
                        <span class="tag">Delivery</span>
                        <span class="tag">Team</span>
                        <span class="tag">Client success</span>
                    </div>
                </div>
            </div>

            <div class="section__head section__head--spaced">
                <h2 class="h2">Our story</h2>
                <p class="muted">Statosy started its journey in 2025. Since then we’ve been onboarding prestigious projects and growing a team built around quality and accountability.</p>
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
                    <p class="muted">We deliver software and cloud operations with a consultative approach on emerging technology—built for real production outcomes.</p>
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
                <p class="muted">Join a team that values honesty, integrity, and ethical business practices—focused on doing the right thing for clients and users.</p>
            </div>

            <div class="hero__cta">
                <a class="btn btn--primary" href="{{ route('company.careers') }}">View careers</a>
                <a class="btn btn--ghost" href="{{ route('home') }}#contact">Contact</a>
            </div>
        </div>
    </section>
@endsection
