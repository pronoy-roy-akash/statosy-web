@extends('frontend.layout.template')

@section('title', 'Statosy — Cloud Services & Software Engineering')
@section('description',
    'Statosy provides a consultative approach to emerging technology: software development, software management, cyber security, IT consulting, cloud management, and 24/7 support.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <div class="eyebrow">Global delivery, cloud-first mindset</div>
                <h1 class="h1">Build, secure, and scale with Statosy</h1>
                <p class="lead">Statosy helps teams ship reliable cloud services and software products with strong security, high availability, and fast iteration.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="#contact">Start a project</a>
                    <a class="btn btn--ghost" href="#services">Explore services</a>
                </div>

                <div class="hero__badges">
                    <div class="badge">
                        <div class="badge__k">User-first delivery</div>
                        <div class="badge__v">Designed for real adoption</div>
                    </div>
                    <div class="badge">
                        <div class="badge__k">High Availability</div>
                        <div class="badge__v">Built for uptime</div>
                    </div>
                </div>
            </div>

            <div class="hero__visual" aria-hidden="true">
                <div class="orb orb--a"></div>
                <div class="orb orb--b"></div>
                <div class="panel">
                    <div class="panel__row">
                        <div class="chip">
                            <div class="chip__dot"></div>
                            <div class="chip__txt">Cloud</div>
                        </div>
                        <div class="chip">
                            <div class="chip__dot chip__dot--ring"></div>
                            <div class="chip__txt">Security</div>
                        </div>
                        <div class="chip">
                            <div class="chip__dot chip__dot--soft"></div>
                            <div class="chip__txt">Delivery</div>
                        </div>
                    </div>
                    <div class="panel__graph">
                        <svg viewBox="0 0 640 220" role="presentation" focusable="false">
                            <defs>
                                <filter id="blur">
                                    <feGaussianBlur stdDeviation="1.2" />
                                </filter>
                            </defs>
                            <path
                                d="M20 170 C 90 150, 120 120, 180 128 C 240 136, 260 70, 320 78 C 380 86, 420 40, 480 56 C 540 72, 570 30, 620 44"
                                fill="none" stroke="rgba(255,255,255,0.82)" stroke-width="4" filter="url(#blur)" />
                            <path
                                d="M20 170 C 90 150, 120 120, 180 128 C 240 136, 260 70, 320 78 C 380 86, 420 40, 480 56 C 540 72, 570 30, 620 44"
                                fill="none" stroke="rgba(255,255,255,0.16)" stroke-width="1" />
                        </svg>
                    </div>
                    <div class="panel__meta">
                        <div class="meta">
                            <div class="meta__k">10+</div>
                            <div class="meta__v">Years building production systems</div>
                        </div>
                        <div class="meta">
                            <div class="meta__k">450+</div>
                            <div class="meta__v">Projects shipped end-to-end</div>
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

    <section class="section" id="process">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Help challenge critical activities</h2>
                <p class="muted">Statosy partners with you through strategy, build, and operations to keep your services secure and highly available.</p>
            </div>

            <div class="steps">
                <div class="step">
                    <div class="step__n">01</div>
                    <div class="step__t">Consultative approach</div>
                    <div class="step__d">We align on goals, constraints, and success metrics before choosing tools and architecture.</div>
                </div>
                <div class="step">
                    <div class="step__n">02</div>
                    <div class="step__t">Lean delivery</div>
                    <div class="step__d">We ship in small increments with continuous improvement and quality as the default.</div>
                </div>
                <div class="step">
                    <div class="step__n">03</div>
                    <div class="step__t">Operate with confidence</div>
                    <div class="step__d">Security, observability, and reliability practices that keep your cloud services stable.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight" id="services">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Offer the latest software and solutions</h2>
                <p class="muted">Modern engineering and cloud operations to keep your business safe and your services available.</p>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.code')</div>
                    <div class="card__t">Software Development</div>
                    <div class="card__d">Build cloud-ready products, internal tools, and platforms with quality-first engineering.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.layers')</div>
                    <div class="card__t">Software Management</div>
                    <div class="card__d">Delivery management, release planning, and execution support for predictable outcomes.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Cyber Security</div>
                    <div class="card__d">Security reviews, hardening, and incident-ready practices without slowing delivery.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.chat')</div>
                    <div class="card__t">IT Consulting</div>
                    <div class="card__d">Architecture, cloud strategy, and roadmap guidance grounded in your goals and constraints.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud Management</div>
                    <div class="card__d">We operate and optimize cloud and servers so you can focus on growth and product.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.support')</div>
                    <div class="card__t">Customer Support</div>
                    <div class="card__d">Support workflows and escalation paths designed for fast resolution and transparency.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="stats">
        <div class="container">
            <div class="impact">
                <div class="impact__copy">
                    <h2 class="h2">Improve efficiency and provide better experiences</h2>
                    <p class="muted">Statosy brings engineering depth and operational discipline to help you reach digital transformation through secure, scalable, and maintainable systems.</p>
                    <div class="impact__cta">
                        <a class="btn btn--primary" href="#contact">Get in touch</a>
                        <a class="btn btn--ghost" href="#process">How we work</a>
                    </div>
                </div>
                <div class="impact__stats">
                    <div class="stat">
                        <div class="stat__k">450+</div>
                        <div class="stat__v">Projects and software delivered</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">10M+</div>
                        <div class="stat__v">User interactions recorded</div>
                    </div>
                    <div class="stat">
                        <div class="stat__k">10+</div>
                        <div class="stat__v">Years of service and innovation</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--contact" id="contact">
        <div class="container contact">
            <div class="contact__copy">
                <h2 class="h2">If you have any questions or need help</h2>
                <p class="muted">Contact Statosy. Tell us what you are building and we will reply with the best next steps.</p>
                <div class="contact__note">
                    <div class="contact__pill">
                        <span class="dot dot--soft" aria-hidden="true"></span>
                        <span>Keep your business safe</span>
                    </div>
                    <div class="contact__pill">
                        <span class="dot dot--ring" aria-hidden="true"></span>
                        <span>Ensure high availability</span>
                    </div>
                </div>
            </div>

            <form class="form" method="post" action="{{ route('contact') }}">
                @csrf

                <div class="form__grid">
                    <div class="field">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required>
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="company">Company (optional)</label>
                        <input id="company" name="company" type="text" value="{{ old('company') }}" autocomplete="organization">
                        @error('company')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="topic">Topic (optional)</label>
                        <input id="topic" name="topic" type="text" value="{{ old('topic') }}">
                        @error('topic')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="field field--full">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button class="btn btn--primary btn--block" type="submit">Send message</button>
                <div class="muted form__fine">By sending, you agree to be contacted about your request.</div>
            </form>
        </div>
    </section>
@endsection

