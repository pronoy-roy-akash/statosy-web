<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\JobApplication;
use App\Models\SiteContent;
use App\Support\SiteSettings;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('backend.pages.dashboard', [
            'totalMessages' => ContactMessage::query()->count(),
            'totalContents' => SiteContent::query()->count(),
            'totalNavItems' => SiteContent::query()->where('key', 'like', 'nav.%')->count(),
            'totalApplications' => JobApplication::query()->count(),
            'siteEnabled' => SiteSettings::getBool('site_enabled', true),
        ]);
    }
}
