@extends('frontend.layout.template')

@section('title', 'Statosy — Legal And Law Firms')
@section('description', 'Industry solutions for legal and law firms: secure document workflows, reliable systems, and high availability.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Secure, reliable systems for sensitive workflows—built for confidentiality, availability, and operational clarity.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Request a quote</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.it-consulting') }}">IT consulting</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Confidential</div>
                            <div class="meta__v">Strong access controls and auditing</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Reliable</div>
                            <div class="meta__v">High availability workflows</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Supportable</div>
                            <div class="meta__v">Clear ownership and support paths</div>
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
                <p class="muted">Security-first engineering and operational practices designed for sensitive workloads.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Security hardening</div>
                    <div class="card__d">Practical protections to reduce risk and protect client data.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Process clarity</div>
                    <div class="card__d">Well-structured workflows with predictable outcomes.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Support readiness</div>
                    <div class="card__d">Fast escalation and transparent communication.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

