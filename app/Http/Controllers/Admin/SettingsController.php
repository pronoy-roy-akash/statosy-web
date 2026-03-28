<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\SiteSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function edit(): View
    {
        return view('backend.pages.settings', [
            'siteEnabled' => SiteSettings::getBool('site_enabled', true),
            'fontKey' => SiteSettings::get('font_key', 'avenir') ?? 'avenir',
            'fontOptions' => SiteSettings::fontOptions(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'site_enabled' => ['nullable', 'string'],
            'font_key' => ['required', 'string'],
        ]);

        $fontKey = $validated['font_key'];
        $options = SiteSettings::fontOptions();
        if (!array_key_exists($fontKey, $options)) {
            $fontKey = 'avenir';
        }

        SiteSettings::set('font_key', $fontKey);
        SiteSettings::set('site_enabled', $request->boolean('site_enabled') ? '1' : '0');

        return back()->with('status', 'Settings updated.');
    }
}

