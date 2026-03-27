@extends('frontend.layout.template')

@section('title', 'Statosy — Government And Public')
@section('description', 'Industry solutions for government and public sector: secure systems, compliance-minded delivery, and high availability.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Reliable, secure platforms that support critical services, protect sensitive data, and remain available during high demand.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Request a quote</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.cyber-security-services') }}">Cyber security</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Protection and governance</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Availability</div>
                            <div class="meta__v">Resilient service design</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Support</div>
                            <div class="meta__v">Operational readiness</div>
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
                <h2 class="h2">Keep your business safe & ensure high availability</h2>
                <p class="muted">Engineering and operations that keep critical public services stable and secure.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Security-first design</div>
                    <div class="card__d">Practical controls and governance aligned with operational reality.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud reliability</div>
                    <div class="card__d">High availability and resilience patterns for essential workloads.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Support readiness</div>
                    <div class="card__d">Operational workflows built for faster resolution and visibility.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
