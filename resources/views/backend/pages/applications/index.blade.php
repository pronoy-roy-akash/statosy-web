@extends('backend.layout.template')

@section('title', 'Applications — Statosy Admin')
@section('pageTitle', 'Applications')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <h5 class="mb-1">Career applications</h5>
                        <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Submissions from the careers
                            application form.</div>

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
