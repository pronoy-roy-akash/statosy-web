@extends('backend.layout.template')

@section('title', 'Settings — Statosy Admin')
@section('pageTitle', 'Settings')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <h5 class="mb-1">Website settings</h5>
                        <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Font and website up/down
                            toggle.</div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('admin.settings.update') }}" class="mt-3">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" style="color:rgba(255,255,255,0.78); font-weight:650;">Website
                                    status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="site_enabled" name="site_enabled"
                                        value="1" {{ $siteEnabled ? 'checked' : '' }}>
                                    <label class="form-check-label" for="site_enabled"
                                        style="color:rgba(255,255,255,0.75); font-weight:650;">
                                        {{ $siteEnabled ? 'Up (visible to visitors)' : 'Down (maintenance mode)' }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="font_key"
                                    style="color:rgba(255,255,255,0.78); font-weight:650;">Font</label>
                                <select class="form-select" id="font_key" name="font_key"
                                    style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                    @foreach ($fontOptions as $key => $opt)
                                        <option value="{{ $key }}" {{ $fontKey === $key ? 'selected' : '' }}>
                                            {{ $opt['label'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-light" type="submit"
                                style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">Save settings</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
