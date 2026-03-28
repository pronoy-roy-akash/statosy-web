@extends('frontend.layout.template')

@section('title', 'Statosy — Cloud Services & Software Solutions')
@section('description',
    'Statosy provides a consultative approach to emerging technology: software development, software
    management, cyber security, IT consulting, cloud management, and 24/7 support.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">
                    {{ \App\Support\SiteContentStore::get('home.hero.eyebrow', 'Founded in 2025 • Cloud-first • Security-first') }}
                </div>
                <h1 class="h1">
                    {{ \App\Support\SiteContentStore::get('home.hero.title', 'Build systems that stay safe and stay up') }}
                </h1>
                <p class="lead">
                    {{ \App\Support\SiteContentStore::get('home.hero.lead', 'Statosy is a cloud and software company with its own in-house infrastructure—delivering secure, high-availability systems, powerful software, and exceptional web solutions through a top-tier engineering team.') }}
                </p>
                <div class="hero__cta">
                    <a class="btn btn--primary"
                        href="#contact">{{ \App\Support\SiteContentStore::get('home.hero.cta.primary', 'Start a project') }}</a>
                    <a class="btn btn--ghost"
                        href="#services">{{ \App\Support\SiteContentStore::get('home.hero.cta.secondary', 'Explore services') }}</a>

                </div>

                <div class="hero__badges">
                    <div class="badge">
                        <div class="badge__k">Security-first delivery</div>
                        <div class="badge__v">Hardening and safe defaults</div>
                    </div>
                    <div class="badge">
                        <div class="badge__k">High availability mindset</div>
                        <div class="badge__v">Designed for resilience</div>
                    </div>
                    <div class="badge">
                        <div class="badge__k">Awards wall</div>
                        <div class="badge__v">Currently in beta</div>
                    </div>
                </div>
            </div>

            <div class="hero__visual" aria-hidden="true">
                <div class="orb orb--a"></div>
                <div class="orb orb--b"></div>
                <div class="panel">
                    <div class="panel__row">
                        <div class="chip">
                            <div class="chip__dot"></div>
                            <div class="chip__txt">Cloud</div>
                        </div>
                        <div class="chip">
                            <div class="chip__dot chip__dot--ring"></div>
                            <div class="chip__txt">Security</div>
                        </div>
                        <div class="chip">
                            <div class="chip__dot chip__dot--soft"></div>
                            <div class="chip__txt">Delivery</div>
                        </div>
                    </div>
                    <div class="panel__graph">
                        <svg viewBox="0 0 640 220" role="presentation" focusable="false">
                            <defs>
                                <filter id="blur">
                                    <feGaussianBlur stdDeviation="1.2" />
                                </filter>
                            </defs>
                            <path
                                d="M20 170 C 90 150, 120 120, 180 128 C 240 136, 260 70, 320 78 C 380 86, 420 40, 480 56 C 540 72, 570 30, 620 44"
                                fill="none" stroke="rgba(255,255,255,0.82)" stroke-width="4" filter="url(#blur)" />
                            <path
                                d="M20 170 C 90 150, 120 120, 180 128 C 240 136, 260 70, 320 78 C 380 86, 420 40, 480 56 C 540 72, 570 30, 620 44"
                                fill="none" stroke="rgba(255,255,255,0.16)" stroke-width="1" />
                        </svg>
                    </div>
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">2025</div>
                            <div class="meta__v">Founded</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">20+</div>
                            <div class="meta__v">Developers</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Onboarding</div>
                            <div class="meta__v">Prestigious client projects</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__fade"></div>
    </section>


    <section class="section" id="process">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">How we work</h2>
                <p class="muted">Clear outcomes, disciplined delivery, and operational confidence—built for production
                    realities.</p>
            </div>

            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Consultative approach</div>
                    <div class="step__d">We align on goals, constraints, and success metrics before choosing tools and
                        architecture.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Lean delivery</div>
                    <div class="step__d">We ship in small increments with continuous improvement and quality as the default.
                    </div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Operate with confidence</div>
                    <div class="step__d">Security, observability, and reliability practices that keep your cloud services
                        stable.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight" id="services">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Offer the latest software and solutions</h2>
                <p class="muted">Modern engineering and cloud operations to keep your business safe and your services
                    available.</p>
            </div>

            <div class="cards">
                <a class="card" href="{{ route('solutions.software-development') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.code')</div>
                    <div class="card__t">Software Development</div>
                    <div class="card__d">Build cloud-ready products, internal tools, and platforms with quality-first
                        engineering.</div>
                </a>
                <a class="card" href="{{ route('solutions.software-management') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Software Management</div>
                    <div class="card__d">Delivery management, release planning, and execution support for predictable
                        outcomes.</div>
                </a>
                <a class="card" href="{{ route('solutions.cyber-security-services') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Cyber Security</div>
                    <div class="card__d">Security reviews, hardening, and incident-ready practices without slowing
                        delivery.</div>
                </a>
                <a class="card" href="{{ route('solutions.it-consulting') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">IT Consulting</div>
                    <div class="card__d">Architecture, cloud strategy, and roadmap guidance grounded in your goals and
                        constraints.</div>
                </a>
                <a class="card" href="{{ route('solutions.cloud-management') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud Management</div>
                    <div class="card__d">We operate and optimize cloud and servers so you can focus on growth and product.
                    </div>
                </a>
                <a class="card" href="{{ route('solutions.customer-support-services') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Customer Support</div>
                    <div class="card__d">Support workflows and escalation paths designed for fast resolution and
                        transparency.</div>
                </a>
            </div>
        </div>
    </section>

    <section class="section section--tight" id="industries">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Industries we support</h2>
                <p class="muted">Delivery and operations designed for real constraints: security, compliance, uptime, and
                    user experience.</p>
            </div>

            <div class="cards">
                <a class="card" href="{{ route('industries.end-user-products') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.code')</div>
                    <div class="card__t">End User Products</div>
                    <div class="card__d">Build and operate apps customers rely on, with performance and availability as
                        defaults.</div>
                </a>
                <a class="card" href="{{ route('industries.government-and-public') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Government And Public</div>
                    <div class="card__d">Secure, resilient platforms for public services with clear governance and
                        supportability.</div>
                </a>
                <a class="card" href="{{ route('industries.education-and-non-profit') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Education And Non-Profit</div>
                    <div class="card__d">Dependable systems that keep learners and communities supported during peak
                        usage.</div>
                </a>
                <a class="card" href="{{ route('industries.banking-and-finance') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Banking And Finance</div>
                    <div class="card__d">Security-first delivery for sensitive workloads, uptime, and compliance-minded
                        operations.</div>
                </a>
                <a class="card" href="{{ route('industries.energy-and-utilities') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Energy And Utilities</div>
                    <div class="card__d">High availability operations, monitoring, and incident readiness for critical
                        services.</div>
                </a>
                <a class="card" href="{{ route('industries.legal-and-law-firms') }}">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">Legal And Law Firms</div>
                    <div class="card__d">Confidential workflows with practical security hardening and reliable support
                        paths.</div>
                </a>
            </div>
        </div>
    </section>

    <section class="section" id="stats">
        <div class="container">
            <div class="impact">
                <div class="impact__copy">
                    <h2 class="h2">Operate with confidence</h2>
                    <p class="muted">When uptime, security, and delivery speed all matter, you need a team that can build
                        and operate without the drama.</p>
                    <div class="impact__cta">
                        <a class="btn btn--primary" href="#contact">Get in touch</a>
                        <a class="btn btn--ghost" href="#process">How we work</a>
                    </div>
                </div>
                <div class="impact__stats">
                    <div class="stat">
                        <div class="stat__k">Service level</div>
                        <div class="stat__v">Response & resolution targets</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">Uptime</div>
                        <div class="stat__v">Designed for resilience</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">Security</div>
                        <div class="stat__v">Hardening, least privilege</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--contact" id="contact">
        <div class="container contact">
            <div class="contact__copy">
                <h2 class="h2">If you have any questions or need help</h2>
                <p class="muted">Contact Statosy. Tell us what you are building and we will reply with the best next
                    steps.</p>
                <div class="contact__note">
                    <div class="contact__pill">
                        <span class="dot dot--soft" aria-hidden="true"></span>
                        <span>Keep your business safe</span>
                    </div>
                    <div class="contact__pill">
                        <span class="dot dot--ring" aria-hidden="true"></span>
                        <span>Ensure high availability</span>
                    </div>
                </div>
            </div>

            <form class="form" method="post" action="{{ route('contact') }}">
                @csrf
                <input type="hidden" name="form_context" value="home_contact">

                <div class="form__grid">
                    <div class="field">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}"
                            autocomplete="name" required>
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            autocomplete="email" required>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="company">Company (optional)</label>
                        <input id="company" name="company" type="text" value="{{ old('company') }}"
                            autocomplete="organization">
                        @error('company')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="topic">Topic</label>
                        <input id="topic" name="topic" type="text" value="{{ old('topic') }}" required>
                        @error('topic')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field field--full">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button class="btn btn--primary btn--block" type="submit">Send message</button>
                <div class="muted form__fine">By sending, you agree to be contacted about your request.</div>
            </form>
        </div>
    </section>
@endsection
