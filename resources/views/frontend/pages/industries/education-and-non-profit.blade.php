@extends('frontend.layout.template')

@section('title', 'Statosy — Education And Non-Profit')
@section('description', 'Industry solutions for education and non-profit: dependable platforms, secure access, and efficient operations.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Build trusted systems for learners and communities with secure access, stable performance, and simplified operations.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Let’s talk</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.it-consulting') }}">IT consulting</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Access</div>
                            <div class="meta__v">Secure identity and permissions</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Efficiency</div>
                            <div class="meta__v">Better processes and outcomes</div>
                        </div>
                        <div class="meta">
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
                <p class="muted">Simple, reliable platforms that help teams focus on mission and impact.</p>
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

