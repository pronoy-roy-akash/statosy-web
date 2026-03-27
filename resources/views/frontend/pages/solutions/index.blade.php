@extends('frontend.layout.template')

@section('title', 'Statosy — IT Solutions')
@section('description', 'IT solutions from Statosy: software development, management, cyber security, consulting, cloud
    management, and support.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">{{ $kicker }}</div>
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Offer the latest software and solutions to our customers. Easy solutions for difficult IT
                    problems to ensure high availability.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('contact-us') }}#message">Send a message</a>
                    <a class="btn btn--ghost" href="{{ route('contact-us') }}#schedule">Schedule a meeting</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Build</div>
                            <div class="meta__v">Software development and delivery</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Protect</div>
                            <div class="meta__v">Cyber security and hardening</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Operate</div>
                            <div class="meta__v">Cloud management and support</div>
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
                <h2 class="h2">By our IT solutions</h2>
                <p class="muted">Improve efficiency and provide better experience with practical engineering and
                    operations.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.code')</div>
                    <div class="card__t">Software Development</div>
                    <div class="card__d">Build modern products and platforms with quality-first engineering.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Software Management</div>
                    <div class="card__d">Expert support to keep delivery predictable and efficient.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Cyber Security</div>
                    <div class="card__d">Security as a natural part of business—practical and scalable.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">IT Consulting</div>
                    <div class="card__d">Guidance grounded in goals, constraints, and tradeoffs.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud Management</div>
                    <div class="card__d">Operate cloud and servers so you can focus on growth.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Customer Support</div>
                    <div class="card__d">Support workflows designed for fast resolution and visibility.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
