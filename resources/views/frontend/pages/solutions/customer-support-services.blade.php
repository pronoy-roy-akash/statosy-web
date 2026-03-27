@extends('frontend.layout.template')

@section('title', 'Statosy — Customer Support Services')
@section('description', 'Customer support services designed for fast resolution, transparency, and uptime.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Our customer happiness engineers are ready 24/7 to help you out with anything and anytime—support workflows aligned to your service reliability goals.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Contact support</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.software-management') }}">Software management</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">24/7</div>
                            <div class="meta__v">Availability and escalation</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">SLA</div>
                            <div class="meta__v">Response & resolution targets</div>
                        </div>
                        <div class="meta">
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
                <p class="muted">Operational practices that keep customers informed and services stable.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Escalation paths</div>
                    <div class="card__d">Clear ownership and fast handoffs when issues are critical.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Knowledge base</div>
                    <div class="card__d">Reusable fixes and documented solutions to reduce repeat incidents.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">Communication</div>
                    <div class="card__d">Timely updates and clear next steps for stakeholders.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

