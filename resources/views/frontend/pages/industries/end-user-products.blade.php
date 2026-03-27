@extends('frontend.layout.template')

@section('title', 'Statosy — End User Products')
@section('description', 'Industry solutions for end user products: reliable platforms, secure operations, and better user experience.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Build user-facing products that are fast, secure, and designed for high availability—supported by dependable cloud operations.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Let’s talk</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.software-development') }}">Software development</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Experience</div>
                            <div class="meta__v">Better journeys and performance</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Safe defaults and protections</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Uptime</div>
                            <div class="meta__v">Built to stay available</div>
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
                <p class="muted">Solutions that help teams ship faster, operate safely, and deliver consistently better user outcomes.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Discover</div>
                    <div class="step__d">Clarify users, use cases, and the critical path to value.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Build</div>
                    <div class="step__d">Deliver with quality-first engineering and secure design.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Operate</div>
                    <div class="step__d">Monitor and improve reliability to maintain high availability.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
