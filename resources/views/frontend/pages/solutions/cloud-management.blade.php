@extends('frontend.layout.template')

@section('title', 'Statosy — Cloud Management')
@section('description', 'Cloud and server management so your team can focus on building and growing the business.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">We make sure your cloud infrastructure runs at maximum efficiency—reducing degraded
                    uptime, improving performance, and keeping services highly available.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Talk to an expert</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.cyber-security-services') }}">Cyber security</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Uptime</div>
                            <div class="meta__v">High availability and resilience</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Safety</div>
                            <div class="meta__v">Security-first operations</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Clarity</div>
                            <div class="meta__v">Monitoring and actionable insights</div>
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
                <h2 class="h2">Operate with confidence</h2>
                <p class="muted">Monitoring, incident readiness, and operational discipline to keep services reliable and
                    costs under control.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud & servers</div>
                    <div class="card__d">Provisioning, hardening, updates, backups, and performance improvements.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Security operations</div>
                    <div class="card__d">Least privilege, safe configs, and response-ready practices.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Observability</div>
                    <div class="card__d">Monitoring, alerts, and dashboards designed for fast recovery.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
