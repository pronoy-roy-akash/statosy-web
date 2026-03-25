<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(): View
    {
        return view('frontend.pages.home');
    }

    public function contact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'company' => ['nullable', 'string', 'max:190'],
            'topic' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:4000'],
        ]);

        ContactMessage::create($validated + [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->route('thank-you');
    }

    public function thankYou(): View
    {
        return view('frontend.pages.thank-you');
    }
}
