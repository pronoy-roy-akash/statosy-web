@extends('backend.layout.template')

@section('title', 'Applications — Statosy Admin')
@section('pageTitle', 'Applications')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm mb-3"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">Open roles</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Add/edit open roles
                                    from here. These show on the Careers page.</div>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <a class="btn btn-outline-light" href="{{ route('admin.job-posts.index') }}"
                                    style="border-radius:14px;">All Job Posts</a>
                                <a class="btn btn-light" href="{{ route('admin.job-posts.create') }}"
                                    style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">Add New Role</a>
                            </div>
                        </div>

                        @if (!($jobPostsReady ?? true))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                Job posts table not found. Run: <span style="font-weight:800;">php artisan migrate</span>
                            </div>
                        @endif

                        @if (($jobPosts ?? collect())->isNotEmpty())
                            <div class="table-responsive mt-3">
                                <table class="table table-dark table-hover align-middle mb-0"
                                    style="--bs-table-bg: transparent; --bs-table-striped-bg: rgba(255,255,255,0.03); --bs-table-border-color: rgba(255,255,255,0.10);">
                                    <thead>
                                        <tr>
                                            <th>Role</th>
                                            <th>Meta</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jobPosts as $post)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('admin.job-posts.edit', $post) }}"
                                                        style="color:rgba(255,255,255,0.92); text-decoration:none; font-weight:750;">
                                                        {{ $post->title }}
                                                    </a>
                                                </td>
                                                <td style="color:rgba(255,255,255,0.70);">{{ $post->meta }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">
                                                    {{ $post->active ? 'Active' : 'Hidden' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-muted mt-2" style="color:rgba(255,255,255,0.60) !important;">
                                Showing latest {{ ($jobPosts ?? collect())->count() }} roles. Open “All Job Posts” to manage
                                everything.
                            </div>
                        @else
                            <div class="text-muted mt-3" style="color:rgba(255,255,255,0.65) !important;">No roles added
                                yet.
                                Click “Add New Role”.</div>
                        @endif
                    </div>
                </div>

                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">Career applications</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Submissions from
                                    the
                                    careers application form.</div>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <a class="btn btn-outline-light" href="{{ route('admin.job-posts.index') }}"
                                    style="border-radius:14px;">Manage Job Posts</a>
                            </div>
                        </div>

                        <div class="table-responsive mt-3">
                            <table class="table table-dark table-hover align-middle mb-0"
                                style="--bs-table-bg: transparent; --bs-table-striped-bg: rgba(255,255,255,0.03); --bs-table-border-color: rgba(255,255,255,0.10);">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>When</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td><a href="{{ route('admin.applications.show', $item) }}"
                                                    style="color:rgba(255,255,255,0.92); text-decoration:none;">{{ $item->name }}</a>
                                            </td>
                                            <td>{{ $item->email }}</td>
                                            <td style="color:rgba(255,255,255,0.70);">{{ $item->role }}</td>
                                            <td style="color:rgba(255,255,255,0.70);">
                                                {{ $item->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" style="color:rgba(255,255,255,0.70);">No applications.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
