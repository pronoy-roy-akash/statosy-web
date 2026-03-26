@extends('frontend.layout.template')

@section('title', 'Statosy — Careers')
@section('description', 'Join Statosy to build cloud services and software products that customers rely on.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Accelerate your career now. Join a team that values quality, ethics, and real impact—building secure and highly available software.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Apply now</a>
                    <a class="btn btn--ghost" href="{{ route('company.about') }}">Learn about Statosy</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Engineering</div>
                            <div class="meta__v">Build products and platforms</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Ship with confidence</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Cloud</div>
                            <div class="meta__v">Operate at scale</div>
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
                <h2 class="h2">What you will work on</h2>
                <p class="muted">Practical projects with measurable outcomes—delivered with strong engineering standards.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.code')</div>
                    <div class="card__t">Product Engineering</div>
                    <div class="card__d">Build scalable systems with clean architecture and clear delivery milestones.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Security & Reliability</div>
                    <div class="card__d">Apply practical security and reliability patterns to keep services available.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud Operations</div>
                    <div class="card__d">Operate cloud workloads with observability, automation, and cost awareness.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

