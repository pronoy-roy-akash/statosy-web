@extends('frontend.layout.template')

@section('title', 'Statosy — Temporarily Unavailable')
@section('description', 'The site is temporarily unavailable while updates are being applied.')

@section('content')
    <section class="section section--tight">
        <div class="container">
            <div class="thanks">
                <div class="thanks__icon" aria-hidden="true">@include('partials.icons.support')</div>
                <h1 class="h1">We’ll be back soon</h1>
                <p class="muted">Statosy is temporarily unavailable while we apply updates. Please check back shortly.</p>
                <div class="thanks__cta">
                    <a class="btn btn--ghost" href="{{ route('contact-us') }}">Contact us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

