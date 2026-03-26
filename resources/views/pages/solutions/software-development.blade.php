@extends('frontend.layout.template')

@section('title', 'Statosy — Software Development')
@section('description', 'Software development services to build reliable products and platforms with quality-first engineering.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Build products, platforms, and internal tools that are secure, scalable, and designed for long-term maintainability.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Request a quote</a>
                    <a class="btn btn--ghost" href="{{ route('home') }}#services">View all services</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__row">
                        <div class="chip"><div class="chip__dot"></div><div class="chip__txt">Architecture</div></div>
                        <div class="chip"><div class="chip__dot chip__dot--ring"></div><div class="chip__txt">Quality</div></div>
                        <div class="chip"><div class="chip__dot chip__dot--soft"></div><div class="chip__txt">Delivery</div></div>
                    </div>
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">Lean</div>
                            <div class="meta__v">Continuous improvement & emphasizing quality</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Secure</div>
                            <div class="meta__v">Security-first engineering practices</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">Fast</div>
                            <div class="meta__v">Small batches, predictable releases</div>
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
                <h2 class="h2">Deliver only exceptional quality</h2>
                <p class="muted">Our development process is centered on Lean principles of continuous improvement and emphasizing quality.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Discovery</div>
                    <div class="step__d">Define outcomes, scope, users, and constraints with clear success criteria.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Build</div>
                    <div class="step__d">Implement iteratively with code quality, testing, and secure defaults.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Launch & improve</div>
                    <div class="step__d">Release reliably and iterate based on feedback and real usage data.</div>
                </div>
            </div>
        </div>
    </section>
@endsection

