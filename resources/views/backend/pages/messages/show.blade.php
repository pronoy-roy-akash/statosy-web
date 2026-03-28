@extends('backend.layout.template')

@php
    $mode = $mode ?? 'messages';
    $pageTitle = $mode === 'meetings' ? 'Meeting Request' : 'Message';
@endphp

@section('title', $pageTitle . ' — Statosy Admin')
@section('pageTitle', $pageTitle)

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">{{ $item->name }}</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">{{ $item->email }}
                                    • {{ $item->created_at->timezone('Asia/Dhaka')->format('Y-m-d H:i:s') }} (BDT)</div>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                @if ($mode === 'meetings')
                                    <form method="post" action="{{ route('admin.meetings.destroy', $item) }}"
                                        onsubmit="return confirm('Delete this meeting request?');" style="display:inline;">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-light" type="submit"
                                            style="border-radius:14px;">Delete</button>
                                    </form>
                                @else
                                    <form method="post" action="{{ route('admin.messages.destroy', $item) }}"
                                        onsubmit="return confirm('Delete this message?');" style="display:inline;">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-light" type="submit"
                                            style="border-radius:14px;">Delete</button>
                                    </form>
                                @endif
                                <a class="btn btn-outline-light"
                                    href="{{ $mode === 'meetings' ? route('admin.meetings.index') : route('admin.messages.index') }}"
                                    style="border-radius:14px;">Back</a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Company</div>
                            <div style="color:rgba(255,255,255,0.86);">{{ $item->company }}</div>
                        </div>

                        <div class="mt-3">
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Topic</div>
                            <div style="color:rgba(255,255,255,0.86);">{{ $item->topic }}</div>
                        </div>

                        @if ($mode === 'meetings')
                            <div class="mt-3">
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Preferred date</div>
                                <div style="color:rgba(255,255,255,0.86);">{{ $preferredDate }}</div>
                            </div>

                            <div class="mt-3">
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Preferred time</div>
                                <div style="color:rgba(255,255,255,0.86);">{{ $preferredTime }}</div>
                            </div>
                        @endif

                        <div class="mt-4">
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">
                                {{ $mode === 'meetings' ? 'Notes' : 'Message' }}</div>
                            <div class="mt-2" style="white-space:pre-wrap; color:rgba(255,255,255,0.86);">
                                {{ $mode === 'meetings' ? ($notes ?? '') : $item->message }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
