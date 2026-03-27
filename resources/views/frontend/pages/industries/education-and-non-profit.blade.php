@extends('frontend.layout.template')

@section('title', 'Statosy — Education And Non-Profit')
@section('description', 'Industry solutions for education and non-profit: dependable platforms, secure access, and
    efficient operations.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Dependable software for education and non-profit organizations—secure access, stable
                    performance, and simplified operations designed for mission-driven teams.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('contact-us') }}#message">Send a message</a>
                    <a class="btn btn--ghost" href="{{ route('contact-us') }}#schedule">Schedule a meeting</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Access</div>
                            <div class="meta__v">Secure identity and permissions</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Efficiency</div>
                            <div class="meta__v">Better processes and outcomes</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Availability</div>
                            <div class="meta__v">Reliable services during peak times</div>
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
                <h2 class="h2">Offer the latest software and solutions</h2>
                <p class="muted">Simple, reliable platforms that help teams focus on learners and communities—not IT
                    headaches.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Plan</div>
                    <div class="step__d">Define needs, users, and workflows with a clear implementation path.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Build</div>
                    <div class="step__d">Deliver secure software with accessibility and performance in mind.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Support</div>
                    <div class="step__d">Operate and improve to keep services highly available.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
