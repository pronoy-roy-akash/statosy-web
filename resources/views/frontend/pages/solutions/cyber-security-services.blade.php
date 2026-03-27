@extends('frontend.layout.template')

@section('title', 'Statosy — Cyber Security Services')
@section('description', 'Cyber security services to keep your business safe while maintaining delivery speed and availability.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Cyber security should be a natural part of every business. It can be complicated and time-consuming—Statosy helps you implement practical, scalable protections.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Security review</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.cloud-management') }}">Cloud management</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__row">
                        <div class="chip"><div class="chip__dot"></div><div class="chip__txt">Hardening</div></div>
                        <div class="chip"><div class="chip__dot chip__dot--ring"></div><div class="chip__txt">Audit</div></div>
                        <div class="chip"><div class="chip__dot chip__dot--soft"></div><div class="chip__txt">Response</div></div>
                    </div>
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Risk</div>
                            <div class="meta__v">Reduce attack surface and misconfiguration</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Continuity</div>
                            <div class="meta__v">Keep services available</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Trust</div>
                            <div class="meta__v">Security as an enabler</div>
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
                <p class="muted">Security controls designed to work with your delivery pipeline and operational reality.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Assess</div>
                    <div class="step__d">Threat modeling, risk review, and coverage gaps.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Harden</div>
                    <div class="step__d">Secure configuration, access control, and safe defaults.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Monitor</div>
                    <div class="step__d">Alerting and response readiness for faster containment.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

