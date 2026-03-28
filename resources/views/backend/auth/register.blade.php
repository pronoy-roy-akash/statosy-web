@extends('backend.layout.auth')

@section('title', 'Admin Register — Statosy')

@section('content')
    <div class="card border-0 shadow-sm" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.12) !important;">
        <div class="card-body p-4">
            <div style="display:flex; align-items:center; gap:12px;">
                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy"
                    style="height:42px; width:auto; border-radius:12px;">
                <div>
                    <div style="font-weight:850; letter-spacing:-0.6px; color:rgba(255,255,255,0.92);">Create Admin</div>
                    <div class="text-muted" style="color:rgba(255,255,255,0.65) !important;">Set up your admin access.</div>
                </div>
            </div>

            <form class="mt-3" method="post" action="{{ route('admin.register.post') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="name" style="color:rgba(255,255,255,0.78); font-weight:650;">Name</label>
                    <input class="form-control"
                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                        id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required>
                    @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email" style="color:rgba(255,255,255,0.78); font-weight:650;">Email</label>
                    <input class="form-control"
                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                        id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required>
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password"
                        style="color:rgba(255,255,255,0.78); font-weight:650;">Password</label>
                    <input class="form-control"
                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                        id="password" name="password" type="password" autocomplete="new-password" required>
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password_confirmation"
                        style="color:rgba(255,255,255,0.78); font-weight:650;">Confirm password</label>
                    <input class="form-control"
                        style="border-radius:14px; border:1px solid rgba(255,255,255,0.14); background:rgba(0,0,0,0.22); color:rgba(255,255,255,0.9);"
                        id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required>
                </div>

                <button class="btn btn-light w-100" type="submit"
                    style="border-radius:14px; font-weight:750; color:rgba(0,0,0,0.95);">Create account</button>

                <div class="text-center mt-3" style="color:rgba(255,255,255,0.65);">
                    Already have an account? <a href="{{ route('admin.login') }}" style="color:rgba(255,255,255,0.9);">Sign in</a>
                </div>
            </form>
        </div>
    </div>
@endsection

