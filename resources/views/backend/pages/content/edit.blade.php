@extends('backend.layout.template')

@section('title', ($item->exists ? 'Edit Content' : 'New Content') . ' — Statosy Admin')
@section('pageTitle', $item->exists ? 'Edit Content' : 'New Content')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">{{ $item->exists ? $item->key : 'Create content' }}</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Keys should be lowercase and use dots, dashes, or underscores.</div>
                            </div>
                            <a class="btn btn-outline-light" href="{{ route('admin.content.index') }}"
                                style="border-radius:14px;">Back</a>
                        </div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="mt-3" method="post"
                            action="{{ $item->exists ? route('admin.content.update', $item) : route('admin.content.store') }}">
                            @csrf
                            @if ($item->exists)
                                @method('put')
                            @endif

                            @if (!$item->exists)
                                <div class="mb-3">
                                    <label class="form-label" for="key"
                                        style="color:rgba(255,255,255,0.78); font-weight:650;">Key</label>
                                    <input class="form-control" id="key" name="key" type="text" value="{{ old('key') }}"
                                        required
                                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                    @error('key')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            <div class="mb-3">
                                <label class="form-label" for="label"
                                    style="color:rgba(255,255,255,0.78); font-weight:650;">Label</label>
                                <input class="form-control" id="label" name="label" type="text"
                                    value="{{ old('label', $item->label) }}"
                                    style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                @error('label')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="value"
                                    style="color:rgba(255,255,255,0.78); font-weight:650;">Value</label>
                                <textarea class="form-control" id="value" name="value" rows="8"
                                    style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">{{ old('value', $item->value) }}</textarea>
                                @error('value')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-light" type="submit"
                                style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">{{ $item->exists ? 'Save' : 'Create' }}</button>
                        </form>

                        @if ($item->exists)
                            <form method="post" action="{{ route('admin.content.destroy', $item) }}" class="mt-3">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit"
                                    style="border-radius:14px;">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

