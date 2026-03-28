@extends('backend.layout.template')

@section('title', 'Navbar — Statosy Admin')
@section('pageTitle', 'Navbar')

@section('body-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm"
                    style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start justify-content-between gap-3 flex-wrap">
                            <div>
                                <h5 class="mb-1">Navbar labels</h5>
                                <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Edit the text shown
                                    in the site navbar (routes stay the same).</div>
                            </div>
                        </div>

                        @if (session('status'))
                            <div class="alert mt-3"
                                style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('admin.navigation.update') }}" class="mt-3">
                            @csrf

                            <div class="row g-3">
                                @foreach ($fields as $key => $meta)
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label" for="{{ $key }}"
                                            style="color:rgba(255,255,255,0.78); font-weight:650;">{{ $meta['label'] }}</label>
                                        <input class="form-control" id="{{ $key }}" name="{{ $key }}" type="text"
                                            value="{{ old($key, $values[$key]) }}"
                                            style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);">
                                        @error($key)
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>

                            <button class="btn btn-light mt-3" type="submit"
                                style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">Save navbar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

