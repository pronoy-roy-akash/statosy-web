@extends('frontend.layout.template')

@section('title', 'Statosy — Banking And Finance')
@section('description', 'Industry solutions for banking and finance: secure systems, compliance-ready operations, and high availability.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Secure platforms that protect sensitive data, support critical workflows, and remain available under load—built with reliability in mind.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Request a quote</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.cyber-security-services') }}">Cyber security</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Hardening and safe access patterns</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Uptime</div>
                            <div class="meta__v">High availability service design</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Confidence</div>
                            <div class="meta__v">Clear operations and monitoring</div>
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
                <h2 class="h2">Improve efficiency and provide better experiences</h2>
                <p class="muted">Systems and processes designed to reduce risk and improve customer experience.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Modernization</div>
                    <div class="card__d">Refine architecture and delivery for faster iteration and reliability.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Security controls</div>
                    <div class="card__d">Practical protections integrated into daily operations.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud operations</div>
                    <div class="card__d">Monitoring, backups, and incident readiness for critical services.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

