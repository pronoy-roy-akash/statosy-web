@extends('frontend.layout.template')

@section('title', 'Statosy — Software Development')
@section('description', 'Software development services to build reliable products and platforms with quality-first
    engineering.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Pixel-perfect web and mobile apps delivered with speed and discipline—secure, scalable, and
                    built for long-term maintainability.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Request a quote</a>
                    <a class="btn btn--ghost" href="{{ route('home') }}#services">View all services</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__row">
                        <div class="chip">
                            <div class="chip__dot"></div>
                            <div class="chip__txt">Architecture</div>
                        </div>
                        <div class="chip">
                            <div class="chip__dot chip__dot--ring"></div>
                            <div class="chip__txt">Quality</div>
                        </div>
                        <div class="chip">
                            <div class="chip__dot chip__dot--soft"></div>
                            <div class="chip__txt">Delivery</div>
                        </div>
                    </div>
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Prototype</div>
                            <div class="meta__v">Validate the concept early</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Build</div>
                            <div class="meta__v">Quality-first engineering</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Improve</div>
                            <div class="meta__v">Ship, measure, iterate</div>
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
                <p class="muted">From discovery to delivery, we build software that scales—high quality, practical
                    security,
                    and predictable execution.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Brainstorming</div>
                    <div class="step__d">We gather requirements, understand the problem deeply, and align on outcomes,
                        scope, and success metrics.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Concept prototype</div>
                    <div class="step__d">We validate ideas early with a working prototype—reducing risk and speeding up
                        delivery.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Design & development</div>
                    <div class="step__d">We deliver clean UI, solid architecture, and secure implementation—built for
                        performance and maintainability.</div>
                </div>
                <div class="step">
                    <div class="step__n">04</div>
                    <div class="step__t">Evaluation</div>
                    <div class="step__d">We test, review, and improve based on real feedback—then ship in predictable
                        releases.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
