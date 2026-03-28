<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\View\View;

class ApplicationsController extends Controller
{
    public function index(): View
    {
        $items = JobApplication::query()
            ->latest()
            ->paginate(20);

        return view('backend.pages.applications.index', [
            'items' => $items,
        ]);
    }

    public function show(JobApplication $application): View
    {
        return view('backend.pages.applications.show', [
            'item' => $application,
        ]);
    }
}
