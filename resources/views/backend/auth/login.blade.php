@extends('backend.layout.auth')

@section('title', 'Admin Login — Statosy')

@section('content')
    <div class="card border-0 shadow-sm"
        style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
        <div class="card-body p-4">
            <div style="display:flex; align-items:center; gap:12px;">
                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy"
                    style="height:42px; width:auto; border-radius:12px;">
                <div>
                    <div style="font-weight:850; letter-spacing:-0.6px; color:rgba(255,255,255,0.92);">Admin</div>
                    <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Sign in to manage the website.
                    </div>
                </div>
            </div>

            @if (session('status'))
                <div class="alert mt-3"
                    style="border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.04); color:rgba(255,255,255,0.82);">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-3" method="post" action="{{ route('admin.login.post') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="email"
                        style="color:rgba(255,255,255,0.78); font-weight:650;">Email</label>
                    <input class="form-control"
                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                        id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email"
                        required>
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password"
                        style="color:rgba(255,255,255,0.78); font-weight:650;">Password</label>
                    <input class="form-control"
                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                        id="password" name="password" type="password" autocomplete="current-password" required>
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-3">
                    <label class="d-inline-flex align-items-center gap-2 m-0" style="cursor:pointer;">
                        <input class="form-check-input m-0" type="checkbox" name="remember" value="1"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span style="color:rgba(255,255,255,0.75); font-weight:650;">Remember me</span>
                    </label>
                </div>

                <button class="btn btn-light w-100 shadow-sm" type="submit"
                    style="border-radius:14px; font-weight:800; color:rgba(0,0,0,0.95);">Sign in</button>

                <a class="btn btn-outline-light w-100 mt-2"
                    style="border-radius:14px; font-weight:750; background:rgba(255,255,255,0.06);"
                    href="{{ route('admin.register') }}">Register</a>
                @if (empty($canRegister) && empty($registrationEnabled))
                    <div class="text-center mt-2" style="color:rgba(255,255,255,0.65);">
                        Registration is currently disabled.
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
