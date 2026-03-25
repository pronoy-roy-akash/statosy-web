@extends('frontend.layout.template')

@section('title', 'Thank you — Statosy')
@section('description', 'Message received. We will get back to you with next steps.')

@section('content')
    <section class="section section--tight">
        <div class="container">
            <div class="thanks">
                <div class="thanks__icon" aria-hidden="true">@include('partials.icons.chat')</div>
                <h1 class="h1">Message received</h1>
                <p class="muted">Thanks for reaching out. Our team will contact you soon.</p>
                <div class="thanks__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}">Back to home</a>
                    <a class="btn btn--ghost" href="{{ route('home') }}#services">View services</a>
                </div>
            </div>
        </div>
    </section>
@endsection

