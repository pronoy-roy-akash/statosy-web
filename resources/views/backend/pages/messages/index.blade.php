@extends('backend.layout.template')

@php
    $mode = $mode ?? 'messages';
    $pageTitle = $mode === 'meetings' ? 'Meeting Requests' : 'Messages';
@endphp

@section('title', $pageTitle . ' — Statosy Admin')
@section('pageTitle', $pageTitle)

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        @if ($mode === 'meetings')
                            <h5 class="mb-1">Schedule a meeting</h5>
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Meeting requests
                                submitted from the Contact page schedule form.</div>
                        @else
                            <h5 class="mb-1">Contact messages</h5>
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Messages submitted from
                                the
                                site forms.</div>
                        @endif

                        <div class="table-responsive mt-3">
                            <table class="table table-dark table-hover align-middle mb-0"
                                style="--bs-table-bg: transparent; --bs-table-striped-bg: rgba(255,255,255,0.03); --bs-table-border-color: rgba(255,255,255,0.10);">
                                <thead>
                                    <tr>
                                        @if ($mode === 'meetings')
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th>Topic</th>
                                            <th>Preferred date</th>
                                            <th>Preferred time</th>
                                            <th>Notes</th>
                                            <th>Received</th>
                                            <th></th>
                                        @else
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Topic</th>
                                            <th>When</th>
                                            <th></th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            @if ($mode === 'meetings')
                                                <td>
                                                    <a href="{{ route('admin.meetings.show', $item) }}"
                                                        style="color:rgba(255,255,255,0.92); text-decoration:none;">{{ $item->name }}</a>
                                                </td>
                                                <td>{{ $item->email }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">{{ $item->company }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">{{ $item->topic }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">{{ $item->preferred_date }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">{{ $item->preferred_time }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">
                                                    {{ \Illuminate\Support\Str::limit($item->notes, 60) }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">
                                                    {{ $item->created_at->timezone('Asia/Dhaka')->format('Y-m-d H:i:s') }}
                                                    (BDT)
                                                </td>
                                                <td class="text-end">
                                                    <form method="post"
                                                        action="{{ route('admin.meetings.destroy', $item) }}"
                                                        onsubmit="return confirm('Delete this meeting request?');"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-outline-light" type="submit"
                                                            style="border-radius:12px;">Delete</button>
                                                    </form>
                                                </td>
                                            @else
                                                <td><a href="{{ route('admin.messages.show', $item) }}"
                                                        style="color:rgba(255,255,255,0.92); text-decoration:none;">{{ $item->name }}</a>
                                                </td>
                                                <td>{{ $item->email }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">{{ $item->topic }}</td>
                                                <td style="color:rgba(255,255,255,0.70);">
                                                    {{ $item->created_at->diffForHumans() }}</td>
                                                <td class="text-end">
                                                    <form method="post"
                                                        action="{{ route('admin.messages.destroy', $item) }}"
                                                        onsubmit="return confirm('Delete this message?');"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-outline-light" type="submit"
                                                            style="border-radius:12px;">Delete</button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            @if ($mode === 'meetings')
                                                <td colspan="9" style="color:rgba(255,255,255,0.70);">No meeting
                                                    requests.</td>
                                            @else
                                                <td colspan="5" style="color:rgba(255,255,255,0.70);">No messages.</td>
                                            @endif
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
