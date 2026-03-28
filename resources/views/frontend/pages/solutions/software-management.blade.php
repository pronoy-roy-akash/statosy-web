@extends('frontend.layout.template')

@section('title', 'Statosy — Software Management')
@section('description', 'Software management services to keep projects on track, maintain quality, and ship reliably.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <h1 class="h1">
                    {{ \App\Support\SiteContentStore::get('solutions.software-management.hero.title', $title ?? 'Software Management') }}
                </h1>
                <p class="lead">
                    {{ \App\Support\SiteContentStore::get('solutions.software-management.hero.text', 'We manage your software delivery and IT operations so you can focus on building your business—planning, execution, DevOps, and continuous improvement.') }}
                </p>
                <div class="hero__cta">
                    <a class="btn btn--primary"
                        href="{{ route('contact-us') }}#message">{{ \App\Support\SiteContentStore::get('solutions.software-management.hero.cta.primary', 'Send a message') }}</a>
                    <a class="btn btn--ghost"
                        href="{{ route('contact-us') }}#schedule">{{ \App\Support\SiteContentStore::get('solutions.software-management.hero.cta.secondary', 'Schedule a meeting') }}</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Manage</div>
                            <div class="meta__v">Planning and delivery governance</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">DevOps</div>
                            <div class="meta__v">Automation and reliability</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Focus</div>
                            <div class="meta__v">You build the business</div>
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
                <p class="muted">From roadmaps to operations, we keep execution predictable—with clear communication,
                    practical process improvements, and uptime-focused support.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Roadmaps & planning</div>
                    <div class="card__d">Prioritize work, define milestones, and keep scope aligned with business outcomes.
                    </div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Operations & DevOps</div>
                    <div class="card__d">Release coordination, automation, incident readiness, and service ownership.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">Stakeholder clarity</div>
                    <div class="card__d">Transparent updates, decisions, and next steps for faster execution.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
