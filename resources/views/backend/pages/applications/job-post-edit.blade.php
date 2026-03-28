@extends('backend.layout.template')

@section('title', ($item->exists ? 'Edit Job Post' : 'New Job Post') . ' — Statosy Admin')
@section('pageTitle', $item->exists ? 'Edit Job Post' : 'New Job Post')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">{{ $item->exists ? 'Edit job post' : 'Create job post' }}</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">This role will
                                    appear in the Careers page open roles list and the apply dropdown.</div>
                            </div>
                            <a class="btn btn-outline-light" href="{{ route('admin.job-posts.index') }}"
                                style="border-radius:14px;">Back</a>
                        </div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="mt-3" method="post"
                            action="{{ $item->exists ? route('admin.job-posts.update', $item) : route('admin.job-posts.store') }}">
                            @csrf
                            @if ($item->exists)
                                @method('put')
                            @endif

                            <div class="row g-3">
                                <div class="col-12 col-lg-7">
                                    <label class="form-label" for="title"
                                        style="color:rgba(255,255,255,0.78); font-weight:650;">Title</label>
                                    <input class="form-control" id="title" name="title" type="text"
                                        value="{{ old('title', $item->title) }}"
                                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                                        required>
                                    @error('title')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-5">
                                    <label class="form-label" for="meta"
                                        style="color:rgba(255,255,255,0.78); font-weight:650;">Meta</label>
                                    <input class="form-control" id="meta" name="meta" type="text"
                                        value="{{ old('meta', $item->meta) }}" placeholder="Full-time • Hybrid"
                                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                    @error('meta')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="summary"
                                        style="color:rgba(255,255,255,0.78); font-weight:650;">Short description</label>
                                    <textarea class="form-control" id="summary" name="summary" rows="3"
                                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">{{ old('summary', $item->summary) }}</textarea>
                                    @error('summary')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="bullets"
                                        style="color:rgba(255,255,255,0.78); font-weight:650;">Responsibilities (one per
                                        line)</label>
                                    <textarea class="form-control" id="bullets" name="bullets" rows="6"
                                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">{{ old('bullets', $item->bullets) }}</textarea>
                                    @error('bullets')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-4">
                                    <label class="form-label" for="sort_order"
                                        style="color:rgba(255,255,255,0.78); font-weight:650;">Sort order</label>
                                    <input class="form-control" id="sort_order" name="sort_order" type="number"
                                        value="{{ old('sort_order', $item->sort_order ?? 0) }}"
                                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                    @error('sort_order')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-8 d-flex align-items-end">
                                    <div class="form-check"
                                        style="border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.18); border-radius:14px; padding:12px 14px;">
                                        <input class="form-check-input" id="active" name="active" type="checkbox"
                                            value="1" @checked(old('active', $item->active) ? true : false)>
                                        <label class="form-check-label" for="active"
                                            style="color:rgba(255,255,255,0.82); font-weight:650;">Active (visible on
                                            site)</label>
                                    </div>
                                </div>
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

