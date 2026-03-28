@extends('backend.layout.template')

@section('title', 'Content — Statosy Admin')
@section('pageTitle', 'Content')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">Content blocks</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Create and edit key/value text blocks used across the frontend.</div>
                            </div>
                            <a class="btn btn-light" href="{{ route('admin.content.create') }}"
                                style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">New</a>
                        </div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive mt-3">
                            <table class="table table-dark table-hover align-middle mb-0"
                                style="--bs-table-bg: transparent; --bs-table-striped-bg: rgba(255,255,255,0.03); --bs-table-border-color: rgba(255,255,255,0.10);">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Label</th>
                                        <th>Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td><a href="{{ route('admin.content.edit', $item) }}"
                                                    style="color:rgba(255,255,255,0.92); text-decoration:none;">{{ $item->key }}</a></td>
                                            <td style="color:rgba(255,255,255,0.70);">{{ $item->label }}</td>
                                            <td style="color:rgba(255,255,255,0.70);">{{ $item->updated_at->diffForHumans() }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" style="color:rgba(255,255,255,0.70);">No content yet.</td>
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

