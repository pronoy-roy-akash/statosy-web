@extends('frontend.layout.template')

@section('title', 'Statosy — Awards & Recognition')
@section('description',
    'Awards, recognition, and milestones that reflect our commitment to quality and user
    experience.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                {{-- <div class="eyebrow">{{ $kicker }}</div> --}}
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Recognition follows consistent delivery. We focus on quality, usability, and measurable
                    outcomes across software and cloud services.</p>
                <div class="awardNote">
                    <div class="awardNote__title">Our awards wall (currently in beta)</div>
                    <div class="muted awardNote__text">Statosy is new to the market with our in-house built services. So yes,
                        the “trophy shelf” is still mostly… minimalist. We’re earning awards and certifications the boring
                        way: by delivering real results.</div>
                    <div class="awardNote__fine">Soon, these empty slots won’t be empty. Hold us to it.</div>
                </div>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Start a project</a>
                    <a class="btn btn--ghost" href="{{ route('company.about') }}">About Statosy</a>
                </div>
            </div>
            <div class="hero__visual" aria-hidden="true">
                <div class="panel">
                    <div class="awardWall">
                        <div class="awardWall__title">Awards & Certifications</div>
                        <div class="awardWall__grid">
                            <div class="awardTile">
                                <div class="awardTile__k">Award</div>
                                <div class="awardTile__v">Reserved</div>
                            </div>
                            <div class="awardTile">
                                <div class="awardTile__k">Certification</div>
                                <div class="awardTile__v">Reserved</div>
                            </div>
                            <div class="awardTile">
                                <div class="awardTile__k">Recognition</div>
                                <div class="awardTile__v">Reserved</div>
                            </div>
                            <div class="awardTile">
                                <div class="awardTile__k">Certification</div>
                                <div class="awardTile__v">Reserved</div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 12px;"></div>
                    <div class="badge">
                        <div class="badge__k">Suspiciously good UX</div>
                        <div class="badge__v">UpCity noticed. We didn’t bribe anyone.</div>
                    </div>
                    <div style="height: 12px;"></div>
                    <div class="badge">
                        <div class="badge__k">Uptime we’re unreasonably proud of</div>
                        <div class="badge__v">Built to stay up. Drama not included.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__fade"></div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">How we earn recognition</h2>
                <p class="muted">Awards are a side effect. This is the work that earns them: consistent quality,
                    security-first delivery, and systems that keep running when it matters.</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Quality by default</div>
                    <div class="step__d">Clear requirements, clean architecture, reviews, and testing—so “pixel perfect” and
                        “works in production” are both true.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Security-first mindset</div>
                    <div class="step__d">We build with safe defaults, reduce risk early, and keep security aligned with real
                        delivery speed.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">High availability outcomes</div>
                    <div class="step__d">Reliability patterns, observability, and operational discipline—so uptime isn’t a
                        promise, it’s a habit.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
