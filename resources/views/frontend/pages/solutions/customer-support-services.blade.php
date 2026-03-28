@extends('frontend.layout.template')

@section('title', 'Statosy — Customer Support Services')
@section('description', 'Customer support services designed for fast resolution, transparency, and uptime.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <h1 class="h1">{{ \App\Support\SiteContentStore::get('solutions.customer-support-services.hero.title', $title ?? 'Customer Support Services') }}</h1>
                <p class="lead">
                    {{ \App\Support\SiteContentStore::get('solutions.customer-support-services.hero.text', 'We take care of your customers on behalf of you with 24/7 availability—support workflows aligned to your service reliability goals.') }}
                </p>
                <div class="hero__cta">
                    <a class="btn btn--primary"
                        href="{{ route('contact-us') }}#message">{{ \App\Support\SiteContentStore::get('solutions.customer-support-services.hero.cta.primary', 'Send a message') }}</a>
                    <a class="btn btn--ghost"
                        href="{{ route('contact-us') }}#schedule">{{ \App\Support\SiteContentStore::get('solutions.customer-support-services.hero.cta.secondary', 'Schedule a meeting') }}</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">24/7</div>
                            <div class="meta__v">Availability and escalation</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">SLA</div>
                            <div class="meta__v">Response & resolution targets</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Clarity</div>
                            <div class="meta__v">Transparent status updates</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__fade"></div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Support that protects uptime</h2>
                <p class="muted">Fast response, clear communication, and reliable escalation—so customers stay informed and
                    services stay stable.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">24/7 coverage</div>
                    <div class="card__d">Always-on support with clear triage and ownership.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Escalation paths</div>
                    <div class="card__d">Fast handoffs to engineering when issues are critical.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">Customer communication</div>
                    <div class="card__d">Timely updates, clear next steps, and transparent status.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
