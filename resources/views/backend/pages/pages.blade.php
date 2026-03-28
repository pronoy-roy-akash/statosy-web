@extends('backend.layout.template')

@section('title', 'Pages — Statosy Admin')
@section('pageTitle', 'Pages')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <h5 class="mb-1">Site pages</h5>
                        <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Open a page to edit its
                            text content.</div>

                        <div class="row g-3 mt-2">
                            @foreach ($links as $key => $label)
                                <div class="col-12 col-md-6 col-xl-4">
                                    <a class="card border-0 h-100 text-decoration-none"
                                        style="background:rgba(0,0,0,0.18); border:1px solid rgba(255,255,255,0.10) !important; border-radius:16px;"
                                        href="{{ route('admin.pages.edit', $key) }}">
                                        <div class="card-body p-3">
                                            <div style="color:rgba(255,255,255,0.9); font-weight:800;">{{ $label }}</div>
                                            <div style="color:rgba(255,255,255,0.62); font-size:13px; margin-top:4px;">
                                                Edit</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-3">
                            <a class="btn btn-outline-light" href="{{ route('admin.navigation.edit') }}"
                                style="border-radius:14px;">Edit Navbar</a>
                            <a class="btn btn-outline-light" href="{{ route('admin.content.index') }}"
                                style="border-radius:14px;">All Content Blocks</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

