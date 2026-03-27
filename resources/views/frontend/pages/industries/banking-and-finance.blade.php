@extends('frontend.layout.template')

@section('title', 'Statosy — Banking And Finance')
@section('description',
    'Industry solutions for banking and finance: secure systems, compliance-ready operations, and
    high availability.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Banking and finance software built with precision and security—protecting sensitive data,
                    supporting critical workflows, and staying available under real-world load.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('contact-us') }}#message">Send a message</a>
                    <a class="btn btn--ghost" href="{{ route('contact-us') }}#schedule">Schedule a meeting</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Hardening and safe access patterns</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Uptime</div>
                            <div class="meta__v">High availability service design</div>
                        </div>
                        <div class="meta meta--split">
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
                <p class="muted">Reduce risk, improve customer experience, and keep services stable with security-first
                    engineering and reliable operations.</p>
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
