@extends('backend.layout.template')

@section('title', 'Message — Statosy Admin')
@section('pageTitle', 'Message')

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
                                    • {{ $item->created_at->toDayDateTimeString() }}</div>
                            </div>
                            <a class="btn btn-outline-light" href="{{ route('admin.messages.index') }}"
                                style="border-radius:14px;">Back</a>
                        </div>

                        <div class="mt-3">
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Company</div>
                            <div style="color:rgba(255,255,255,0.86);">{{ $item->company }}</div>
                        </div>

                        <div class="mt-3">
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Topic</div>
                            <div style="color:rgba(255,255,255,0.86);">{{ $item->topic }}</div>
                        </div>

                        <div class="mt-4">
                            <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Message</div>
                            <div class="mt-2" style="white-space:pre-wrap; color:rgba(255,255,255,0.86);">
                                {{ $item->message }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

