<?php

namespace App\Http\Middleware;

use App\Support\SiteSettings;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSiteIsUp
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('admin*')) {
            return $next($request);
        }

        if (!SiteSettings::getBool('site_enabled', true)) {
            return response()->view('frontend.pages.maintenance', [], 503);
        }

        return $next($request);
    }
}

