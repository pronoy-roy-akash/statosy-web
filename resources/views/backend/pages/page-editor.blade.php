@extends('backend.layout.template')

@section('title', $title . ' — Statosy Admin')
@section('pageTitle', $title)

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">{{ $title }}</h5>
                                @if (!empty($description))
                                    <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">
                                        {{ $description }}
                                    </div>
                                @endif
                            </div>
                            <a class="btn btn-outline-light" href="{{ route('admin.dashboard') }}"
                                style="border-radius:14px;">Back</a>
                        </div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('admin.pages.update', $pageKey) }}" class="mt-3">
                            @csrf

                            <div class="row g-3">
                                @foreach ($fields as $field)
                                    @php
                                        $key = $field['key'];
                                        $label = $field['label'] ?? $key;
                                        $value = old($key, $values[$key] ?? null);
                                    @endphp
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label" for="{{ $key }}"
                                            style="color:rgba(255,255,255,0.78); font-weight:650;">{{ $label }}</label>
                                        @if (strlen((string) $value) > 120)
                                            <textarea class="form-control" id="{{ $key }}" name="{{ $key }}" rows="4"
                                                style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">{{ $value }}</textarea>
                                        @else
                                            <input class="form-control" id="{{ $key }}" name="{{ $key }}" type="text"
                                                value="{{ $value }}"
                                                style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                        @endif
                                        @error($key)
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                        <div class="text-muted mt-1" style="color:rgba(255,255,255,0.55) !important; font-size:12px;">
                                            Key: {{ $key }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button class="btn btn-light mt-3" type="submit"
                                style="border-radius:14px; font-weight:800; color:rgba(0,0,0,0.95);">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

