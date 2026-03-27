@extends('frontend.layout.template')

@section('title', 'Statosy — IT Consulting')
@section('description', 'IT consulting to help you make better technology decisions grounded in your goals and
    constraints.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Your IT problems solved with tailored solutions and practical digital innovation. We help
                    you make better decisions, implement the right solutions, and keep delivery grounded in real
                    business goals.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Book a consultation</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.cloud-management') }}">Cloud management</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Strategy</div>
                            <div class="meta__v">Architecture, roadmap, and tradeoffs</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Risk reduction without slowing delivery</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Efficiency</div>
                            <div class="meta__v">Better operations and user experience</div>
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
                <p class="muted">We translate goals into a practical plan—then support implementation with strong
                    engineering and operations.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Assess</div>
                    <div class="step__d">Understand your current systems, constraints, risks, and opportunities.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Recommend</div>
                    <div class="step__d">Provide options with clear tradeoffs in cost, speed, and operational risk.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Execute</div>
                    <div class="step__d">Support delivery with architecture guidance, implementation, and reliable release
                        practices.</div>
                </div>
                <div class="step">
                    <div class="step__n">04</div>
                    <div class="step__t">Evaluate</div>
                    <div class="step__d">Review outcomes, improve the plan, and iterate based on real usage and feedback.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
