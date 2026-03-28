@extends('backend.layout.template')

@section('title', 'Job Posts — Statosy Admin')
@section('pageTitle', 'Job Posts')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">Open roles (job posts)</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">These roles show
                                    on the Careers page.</div>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <a class="btn btn-outline-light" href="{{ route('admin.applications.index') }}"
                                    style="border-radius:14px;">Applications</a>
                                <a class="btn btn-light" href="{{ route('admin.job-posts.create') }}"
                                    style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">New</a>
                            </div>
                        </div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (!($jobPostsReady ?? true))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                If you see “table job_posts doesn't exist”, run: <span style="font-weight:800;">php artisan
                                    migrate</span>
                            </div>
                        @endif

                        <div class="table-responsive mt-3">
                            <table class="table table-dark table-hover align-middle mb-0"
                                style="--bs-table-bg: transparent; --bs-table-striped-bg: rgba(255,255,255,0.03); --bs-table-border-color: rgba(255,255,255,0.10);">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Meta</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('admin.job-posts.edit', $item) }}"
                                                    style="color:rgba(255,255,255,0.92); text-decoration:none; font-weight:750;">
                                                    {{ $item->title }}
                                                </a>
                                            </td>
                                            <td style="color:rgba(255,255,255,0.70);">{{ $item->meta }}</td>
                                            <td style="color:rgba(255,255,255,0.70);">{{ $item->sort_order }}</td>
                                            <td style="color:rgba(255,255,255,0.70);">
                                                {{ $item->active ? 'Active' : 'Hidden' }}
                                            </td>
                                            <td class="text-end">
                                                <form method="post" action="{{ route('admin.job-posts.destroy', $item) }}"
                                                    onsubmit="return confirm('Delete this job post?');"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-outline-light" type="submit"
                                                        style="border-radius:12px;">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" style="color:rgba(255,255,255,0.70);">No job posts yet.</td>
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
