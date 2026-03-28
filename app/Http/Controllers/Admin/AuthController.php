<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Support\SiteSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('backend.auth.login', [
            'canRegister' => $this->canRegister(),
            'registrationEnabled' => $this->registrationEnabled(),
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (!Auth::attempt($credentials, $remember)) {
            return back()
                ->withErrors(['email' => 'Invalid email or password.'])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    public function showRegister(): View
    {
        if (!$this->canRegister() && !Auth::check() && !$this->registrationEnabled()) {
            return redirect()
                ->route('admin.login')
                ->with('status', 'Registration is disabled. Ask an admin to create an account for you.');
        }

        return view('backend.auth.register');
    }

    public function register(Request $request): RedirectResponse
    {
        if (!$this->canRegister() && !Auth::check() && !$this->registrationEnabled()) {
            return redirect()
                ->route('admin.login')
                ->with('status', 'Registration is disabled. Ask an admin to create an account for you.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::query()->create($validated);

        if ($this->canRegister() && !Auth::check()) {
            Auth::login($user);
        }

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    private function canRegister(): bool
    {
        return User::query()->count() === 0;
    }

    private function registrationEnabled(): bool
    {
        return SiteSettings::getBool('admin_registration_open', false);
    }
}
