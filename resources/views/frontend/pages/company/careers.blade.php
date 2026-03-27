@extends('frontend.layout.template')

@section('title', 'Statosy — Careers')
@section('description', 'Join Statosy to build cloud services and software products that customers rely on.')

@section('content')
    <section class="hero">
        <div class="container hero__grid">
            <div class="hero__copy">
                <h1 class="h1">{{ $title }}</h1>
                <p class="lead">Accelerate your career now. Join a team that values quality, ethics, and real impact—building secure and highly available software.</p>
                <div class="hero__cta">
                    <a class="btn btn--primary" href="{{ route('home') }}#contact">Apply now</a>
                    <a class="btn btn--ghost" href="{{ route('company.about') }}">Learn about Statosy</a>
                </div>
            </div>
            <div class="hero__visual hero__visual--about" aria-hidden="true">
                <div class="panel panel--snapshot">
                    <div class="panel__meta panel__meta--about">
                        <div class="meta meta--split">
                            <div class="meta__k">Engineering</div>
                            <div class="meta__v">Build products and platforms</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Security</div>
                            <div class="meta__v">Ship with confidence</div>
                        </div>
                        <div class="meta meta--split">
                            <div class="meta__k">Cloud</div>
                            <div class="meta__v">Operate at scale</div>
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
                <h2 class="h2">What you will work on</h2>
                <p class="muted">Practical projects with measurable outcomes—delivered with strong engineering standards.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.code')</div>
                    <div class="card__t">Product Engineering</div>
                    <div class="card__d">Build scalable systems with clean architecture and clear delivery milestones.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.shield')</div>
                    <div class="card__t">Security & Reliability</div>
                    <div class="card__d">Apply practical security and reliability patterns to keep services available.</div>
                </div>
                <div class="card">
                    <div class="icon" aria-hidden="true">@include('partials.icons.cloud')</div>
                    <div class="card__t">Cloud Operations</div>
                    <div class="card__d">Operate cloud workloads with observability, automation, and cost awareness.</div>
                </div>
            </div>
            <div class="sectionDivider sectionDivider--lg" aria-hidden="true"></div>
        </div>
    </section>

    <section class="section section--tight" id="open-roles">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Open roles</h2>
                <p class="muted">Click a designation to view the job description. Then submit your resume below (max 2MB).
                </p>
            </div>

            <div class="jobs">
                <details class="job">
                    <summary class="job__summary">
                        <span class="job__title">Software Engineer (Backend)</span>
                        <span class="job__meta">Full-time • Hybrid</span>
                    </summary>
                    <div class="job__body">
                        <div class="muted">Build secure APIs, services, and data workflows that power cloud-first products.
                        </div>
                        <ul class="job__list">
                            <li>Design and implement backend services with clean architecture.</li>
                            <li>Work with databases, caching, queues, and integrations.</li>
                            <li>Improve reliability through testing, observability, and performance work.</li>
                        </ul>
                        <div class="job__cta">
                            <a class="btn btn--ghost" href="#apply">Apply for this role</a>
                        </div>
                    </div>
                </details>

                <details class="job">
                    <summary class="job__summary">
                        <span class="job__title">Software Engineer (Frontend)</span>
                        <span class="job__meta">Full-time • Hybrid</span>
                    </summary>
                    <div class="job__body">
                        <div class="muted">Build fast, accessible interfaces that users actually enjoy working with.</div>
                        <ul class="job__list">
                            <li>Develop UI features with strong attention to quality and usability.</li>
                            <li>Collaborate with backend engineers to integrate APIs cleanly.</li>
                            <li>Improve performance, responsive layout, and accessibility.</li>
                        </ul>
                        <div class="job__cta">
                            <a class="btn btn--ghost" href="#apply">Apply for this role</a>
                        </div>
                    </div>
                </details>

                <details class="job">
                    <summary class="job__summary">
                        <span class="job__title">Cloud / DevOps Engineer</span>
                        <span class="job__meta">Full-time • Remote</span>
                    </summary>
                    <div class="job__body">
                        <div class="muted">Keep systems safe and highly available through automation and operational
                            discipline.</div>
                        <ul class="job__list">
                            <li>Implement CI/CD, infrastructure automation, and deployment pipelines.</li>
                            <li>Improve observability, incident readiness, and reliability practices.</li>
                            <li>Support cost optimization and secure cloud configuration.</li>
                        </ul>
                        <div class="job__cta">
                            <a class="btn btn--ghost" href="#apply">Apply for this role</a>
                        </div>
                    </div>
                </details>

                <details class="job">
                    <summary class="job__summary">
                        <span class="job__title">Customer Support Specialist</span>
                        <span class="job__meta">Full-time • Remote</span>
                    </summary>
                    <div class="job__body">
                        <div class="muted">Support workflows aligned to reliability goals—fast response, clear communication,
                            and ownership.</div>
                        <ul class="job__list">
                            <li>Handle incoming requests with clear triage and documentation.</li>
                            <li>Coordinate with engineering for escalations and incident response.</li>
                            <li>Maintain customer satisfaction through proactive updates.</li>
                        </ul>
                        <div class="job__cta">
                            <a class="btn btn--ghost" href="#apply">Apply for this role</a>
                        </div>
                    </div>
                </details>
            </div>
            <div class="sectionDivider sectionDivider--lg" aria-hidden="true"></div>
        </div>
    </section>

    <section class="section" id="apply">
        <div class="container">
            <div class="section__head">
                <h2 class="h2">Submit your resume</h2>
                <p class="muted">Upload your CV/resume (PDF/DOC/DOCX, max 2MB). We’ll contact you if there is a match.</p>
            </div>

            @if (session('career_success'))
                <div class="notice">{{ session('career_success') }}</div>
            @endif

            <form class="form" method="post" action="{{ route('company.careers.apply') }}" enctype="multipart/form-data">
                @csrf

                <div class="form__grid">
                    <div class="field">
                        <label for="career_name">Name</label>
                        <input id="career_name" name="name" type="text" value="{{ old('name') }}" autocomplete="name"
                            required>
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="career_email">Email</label>
                        <input id="career_email" name="email" type="email" value="{{ old('email') }}"
                            autocomplete="email" required>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="career_role">Designation</label>
                        <select id="career_role" name="role" required>
                            <option value="" @selected(old('role') === null || old('role') === '')>Select a role</option>
                            <option value="Software Engineer (Backend)" @selected(old('role') === 'Software Engineer (Backend)')>Software Engineer (Backend)</option>
                            <option value="Software Engineer (Frontend)" @selected(old('role') === 'Software Engineer (Frontend)')>Software Engineer (Frontend)</option>
                            <option value="Cloud / DevOps Engineer" @selected(old('role') === 'Cloud / DevOps Engineer')>Cloud / DevOps Engineer</option>
                            <option value="Customer Support Specialist" @selected(old('role') === 'Customer Support Specialist')>Customer Support Specialist</option>
                        </select>
                        @error('role')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="career_resume">Resume (max 2MB)</label>
                        <input id="career_resume" name="resume" type="file" accept=".pdf,.doc,.docx" required>
                        @error('resume')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field field--full">
                        <label for="career_message">Message (optional)</label>
                        <textarea id="career_message" name="message" rows="5">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button class="btn btn--primary btn--block" type="submit">Submit resume</button>
                <div class="muted form__fine">Accepted formats: PDF/DOC/DOCX. Max file size: 2MB.</div>
            </form>
        </div>
    </section>
@endsection
