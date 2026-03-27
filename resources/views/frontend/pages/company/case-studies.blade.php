@extends('frontend.layout.template')

@section('title', 'Statosy — Case Studies')
@section('description', 'Selected case studies and success stories from Statosy projects.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">We partner with teams to improve their software and IT services. These stories highlight delivery quality, reliability, and measurable impact.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Start your next project</a>
                    <a class="btn btn--ghost" href="{{ route('home') }}#stats">See impact</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">150+</div>
                            <div class="meta__v">Satisfied clients over the globe</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">450+</div>
                            <div class="meta__v">Successful products delivered</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">10M+</div>
                            <div class="meta__v">User interactions recorded</div>
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
                <h2 class="h2">Success stories</h2>
                <p class="muted">Case studies are being curated. Contact us and we’ll share relevant examples for your industry.</p>
            </div>
            <div class="impact">
                <div class="impact__copy">
                    <h2 class="h2">Ready to start your next project?</h2>
                    <p class="muted">Tell us what you are building and we will reply with the best next steps.</p>
                    <div class="impact__cta">
                        <a class="btn btn--primary" href="{{ route('home') }}#contact">Let’s talk</a>
                        <a class="btn btn--ghost" href="{{ route('home') }}#services">View services</a>
                    </div>
                </div>
                <div class="impact__stats">
                    <div class="stat">
                        <div class="stat__k">High Availability</div>
                        <div class="stat__v">Reliability-first delivery</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">Security</div>
                        <div class="stat__v">Practical protections</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">Quality</div>
                        <div class="stat__v">Continuous improvement</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

