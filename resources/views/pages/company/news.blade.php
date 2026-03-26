@extends('frontend.layout.template')

@section('title', 'Statosy — News')
@section('description', 'News and updates from Statosy.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Updates about product delivery, cloud operations, and security practices—focused on real outcomes and high availability.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Get in touch</a>
                    <a class="btn btn--ghost" href="{{ route('company.awards') }}">Awards</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Engineering</div>
                            <div class="meta__v">Delivery insights</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Cloud</div>
                            <div class="meta__v">Operations updates</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Best practices</div>
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
                <h2 class="h2">Latest updates</h2>
                <p class="muted">News items are being prepared. Contact us for the latest capabilities and references.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Product delivery</div>
                    <div class="step__d">Lean process, quality-first execution, and measurable results.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Security posture</div>
                    <div class="step__d">Practical controls to keep your business safe.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">High availability</div>
                    <div class="step__d">Operational excellence that keeps services running.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

