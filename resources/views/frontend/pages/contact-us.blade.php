@extends('frontend.layout.template')

@section('title', 'Statosy — Contact Us')
@section('description', 'Send a message or request a meeting with the Statosy team.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <h1 class="h1">{{ \App\Support\SiteContentStore::get('contact.hero.title', $title ?? 'Contact us') }}
                </h1>
                <p class="lead">
                    {{ \App\Support\SiteContentStore::get('contact.hero.text', 'If you have any questions or need help, contact our team. Send a message or request a meeting—we’ll reply with the best next steps.') }}
                </p>
                <div class="hero__cta">
                    <a class="btn btn--primary"
                        href="#message">{{ \App\Support\SiteContentStore::get('contact.hero.cta.primary', 'Send a message') }}</a>
                    <a class="btn btn--ghost"
                        href="#schedule">{{ \App\Support\SiteContentStore::get('contact.hero.cta.secondary', 'Schedule a meeting') }}</a>
                </div>
            </div>

            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__title">Contact Snapshot</div>
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Response</div>
                            <div class="meta__v">Within 1 business day</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Email</div>
                            <div class="meta__v">
                                {{ \App\Support\SiteContentStore::get('contact.email', 'hello@statosy.com') }}</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Meetings</div>
                            <div class="meta__v">Request a schedule</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__fade"></div>
    </section>

    <section class="section" id="message">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Send a message</h2>
                <p class="muted">Tell us what you are building and we will reply with the best next steps.</p>
            </div>

            <div class="contactHub">
                <div class="panel panel--snapshot contactHub__panel">
                    <div class="panel__title">Message form</div>
                    <form class="form" method="post" action="{{ route('contact') }}">
                        @csrf
                        <input type="hidden" name="form_context" value="contact_message">
                        <div class="form__grid">
                            <div class="field">
                                <label for="contact_name">Name</label>
                                <input id="contact_name" name="name" type="text" value="{{ old('name') }}"
                                    autocomplete="name" required>
                                @error('name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="contact_email">Email</label>
                                <input id="contact_email" name="email" type="email" value="{{ old('email') }}"
                                    autocomplete="email" required>
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="contact_company">Company (optional)</label>
                                <input id="contact_company" name="company" type="text" value="{{ old('company') }}"
                                    autocomplete="organization">
                                @error('company')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="contact_topic">Topic</label>
                                <input id="contact_topic" name="topic" type="text" value="{{ old('topic') }}"
                                    required>
                                @error('topic')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field field--full">
                                <label for="contact_message">Message</label>
                                <textarea id="contact_message" name="message" rows="6" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn--primary btn--block" type="submit">Send message</button>
                        <div class="muted form__fine">We typically respond within 1 business day.</div>
                    </form>
                </div>

                <div class="panel panel--snapshot contactHub__panel">
                    <div class="panel__title">Prefer a meeting?</div>
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Time</div>
                            <div class="meta__v">Pick a preferred slot</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Confirm</div>
                            <div class="meta__v">We’ll reply by email</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Agenda</div>
                            <div class="meta__v">Add notes if needed</div>
                        </div>
                    </div>
                    <div class="hero__cta">
                        <a class="btn btn--ghost" href="#schedule">Go to schedule form</a>
                    </div>
                </div>
            </div>

            <div class="sectionDivider sectionDivider--lg" aria-hidden="true"></div>
        </div>
    </section>

    <section class="section section--tight" id="schedule">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Schedule a meeting</h2>
                <p class="muted">Select a preferred date and time. We’ll confirm the schedule by email.</p>
            </div>

            <div class="contactHub contactHub--single">
                <div class="panel panel--snapshot contactHub__panel">
                    <div class="panel__title">Meeting request</div>
                    <form class="form" method="post" action="{{ route('contact') }}">
                        @csrf
                        <div class="form__grid">
                            <div class="field">
                                <label for="meeting_name">Name</label>
                                <input id="meeting_name" name="name" type="text" value="{{ old('name') }}"
                                    autocomplete="name" required>
                                @error('name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="meeting_email">Email</label>
                                <input id="meeting_email" name="email" type="email" value="{{ old('email') }}"
                                    autocomplete="email" required>
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="meeting_company">Company (optional)</label>
                                <input id="meeting_company" name="company" type="text" value="{{ old('company') }}"
                                    autocomplete="organization">
                                @error('company')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="meeting_topic">Topic</label>
                                <input id="meeting_topic" name="topic" type="text" value="{{ old('topic') }}"
                                    required>
                                @error('topic')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="meeting_date">Preferred date</label>
                                <input id="meeting_date" name="meeting_date" type="date" data-show-picker required>
                                @error('meeting_date')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="meeting_time">Preferred time</label>
                                <input id="meeting_time" name="meeting_time" type="time" data-show-picker required>
                                @error('meeting_time')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field field--full">
                                <label for="meeting_message">Notes (optional)</label>
                                <textarea id="meeting_message" name="message" rows="5">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn--primary btn--block" type="submit">Request meeting</button>
                        <div class="muted form__fine">We’ll confirm the schedule by email.</div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
