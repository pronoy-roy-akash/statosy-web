@extends('frontend.layout.template')

@section('title', 'Statosy — Energy And Utilities')
@section('description', 'Industry solutions for energy and utilities: stable systems, operational visibility, and high availability.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Reliable platforms for critical operations—built to stay available, deliver real-time visibility, and support secure workflows.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Let’s talk</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.cloud-management') }}">Cloud management</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Availability</div>
                            <div class="meta__v">Resilient service design</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Monitoring</div>
                            <div class="meta__v">Actionable operational insights</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Safe access and hardened systems</div>
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
                <h2 class="h2">Ensure high availability of your services</h2>
                <p class="muted">Operational excellence that keeps critical services stable and supportable.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Assess</div>
                    <div class="step__d">Review workloads, risks, and operational bottlenecks.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Stabilize</div>
                    <div class="step__d">Implement reliability improvements and guardrails.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Operate</div>
                    <div class="step__d">Monitoring, alerting, and fast response workflows.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
