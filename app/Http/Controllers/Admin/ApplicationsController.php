<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class ApplicationsController extends Controller
{
    public function index(): View
    {
        $items = JobApplication::query()
            ->latest()
            ->paginate(20);

        $jobPostsReady = true;
        $jobPosts = collect();
        try {
            if (!Schema::hasTable('job_posts')) {
                throw new \RuntimeException('Job posts table not found.');
            }

            $jobPosts = JobPost::query()
                ->orderBy('sort_order')
                ->orderBy('title')
                ->limit(8)
                ->get();
        } catch (\Throwable) {
            $jobPostsReady = false;
            $jobPosts = collect();
        }

        return view('backend.pages.applications.index', [
            'items' => $items,
            'jobPostsReady' => $jobPostsReady,
            'jobPosts' => $jobPosts,
        ]);
    }

    public function jobPosts(): View
    {
        $jobPostsReady = true;
        try {
            if (!Schema::hasTable('job_posts')) {
                throw new \RuntimeException('Job posts table not found.');
            }

            $items = JobPost::query()
                ->orderBy('sort_order')
                ->orderBy('title')
                ->paginate(20);
        } catch (\Throwable) {
            $jobPostsReady = false;
            $items = new LengthAwarePaginator([], 0, 20, 1, [
                'path' => request()->url(),
                'query' => request()->query(),
            ]);
        }

        return view('backend.pages.applications.job-posts', [
            'items' => $items,
            'jobPostsReady' => $jobPostsReady,
        ]);
    }

    public function createJobPost(): View
    {
        abort_unless(Schema::hasTable('job_posts'), 500, 'Job posts table not found. Run migrations.');

        return view('backend.pages.applications.job-post-edit', [
            'item' => new JobPost([
                'active' => true,
                'sort_order' => 0,
            ]),
        ]);
    }

    public function storeJobPost(Request $request): RedirectResponse
    {
        if (!Schema::hasTable('job_posts')) {
            return redirect()
                ->route('admin.job-posts.index')
                ->with('status', 'Job posts table not found. Please run: php artisan migrate');
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:140'],
            'meta' => ['nullable', 'string', 'max:120'],
            'summary' => ['nullable', 'string', 'max:1000'],
            'bullets' => ['nullable', 'string', 'max:6000'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'active' => ['nullable', 'boolean'],
        ]);

        $validated['active'] = (bool) ($validated['active'] ?? false);
        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);

        $item = JobPost::query()->create($validated);

        return redirect()->route('admin.job-posts.edit', $item)->with('status', 'Job post created.');
    }

    public function editJobPost(JobPost $post): View
    {
        abort_unless(Schema::hasTable('job_posts'), 500, 'Job posts table not found. Run migrations.');

        return view('backend.pages.applications.job-post-edit', [
            'item' => $post,
        ]);
    }

    public function updateJobPost(Request $request, JobPost $post): RedirectResponse
    {
        if (!Schema::hasTable('job_posts')) {
            return redirect()
                ->route('admin.job-posts.index')
                ->with('status', 'Job posts table not found. Please run: php artisan migrate');
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:140'],
            'meta' => ['nullable', 'string', 'max:120'],
            'summary' => ['nullable', 'string', 'max:1000'],
            'bullets' => ['nullable', 'string', 'max:6000'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'active' => ['nullable', 'boolean'],
        ]);

        $validated['active'] = (bool) ($validated['active'] ?? false);
        $validated['sort_order'] = (int) ($validated['sort_order'] ?? 0);

        $post->update($validated);

        return back()->with('status', 'Job post updated.');
    }

    public function destroyJobPost(JobPost $post): RedirectResponse
    {
        if (!Schema::hasTable('job_posts')) {
            return redirect()
                ->route('admin.job-posts.index')
                ->with('status', 'Job posts table not found. Please run: php artisan migrate');
        }

        $post->delete();
        return redirect()->route('admin.job-posts.index')->with('status', 'Job post deleted.');
    }

    public function show(JobApplication $application): View
    {
        return view('backend.pages.applications.show', [
            'item' => $application,
        ]);
    }
}
