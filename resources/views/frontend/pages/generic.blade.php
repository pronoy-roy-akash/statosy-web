@extends('frontend.layout.template')

@section('title', 'Statosy — ' . $title)
@section('description', $title . ' — Statosy cloud services and software solutions.')

@section('content')
    <section class="section section--tight">
        <div class="container">
            <div class="eyebrow">{{ $kicker }}</div>
            <h1 class="h1">{{ $title }}</h1>
            <p class="lead">We’re building this page. Use the navigation to explore services, industries, and company
                updates.</p>

            <div class="impact" style="margin-top: 22px;">
                <div class="impact__copy">
                    <h2 class="h2">Ready to start your next project?</h2>
                    <p class="muted">Tell us what you’re building and we’ll reply with the best next steps.</p>
                    <div class="impact__cta">
                        <a class="btn btn--primary" href="{{ route('home') }}#contact">Let’s talk</a>
                        <a class="btn btn--ghost" href="{{ route('home') }}#services">View services</a>
                    </div>
                </div>
                <div class="impact__stats">
                    <div class="stat">
                        <div class="stat__k">450+</div>
                        <div class="stat__v">Projects delivered</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">10M+</div>
                        <div class="stat__v">User interactions</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">10+</div>
                        <div class="stat__v">Years of experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
