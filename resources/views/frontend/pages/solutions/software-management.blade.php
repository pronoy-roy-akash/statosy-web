@extends('frontend.layout.template')

@section('title', 'Statosy — Software Management')
@section('description', 'Software management services to keep projects on track, maintain quality, and ship reliably.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Get your project up and running quickly and efficiently—planning, execution, delivery cadence, and continuous improvement.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Talk to us</a>
                    <a class="btn btn--ghost" href="{{ route('solutions.software-development') }}">Software development</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Delivery</div>
                            <div class="meta__v">Release planning and execution</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Quality</div>
                            <div class="meta__v">Standards and review discipline</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Visibility</div>
                            <div class="meta__v">Clear status and next steps</div>
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
                <p class="muted">We support your teams with predictable delivery, strong communication, and practical process improvements.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Roadmaps & planning</div>
                    <div class="card__d">Prioritize work, define milestones, and keep scope aligned with outcomes.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Operational support</div>
                    <div class="card__d">Release coordination, incident response readiness, and service ownership.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">Stakeholder clarity</div>
                    <div class="card__d">Transparent updates and decisions for faster execution.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
