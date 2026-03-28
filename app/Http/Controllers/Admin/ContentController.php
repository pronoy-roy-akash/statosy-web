<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteContent;
use App\Support\SiteContentStore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function index(): View
    {
        $items = SiteContent::query()
            ->orderBy('key')
            ->paginate(30);

        return view('backend.pages.content.index', [
            'items' => $items,
        ]);
    }

    public function create(): View
    {
        return view('backend.pages.content.edit', [
            'item' => new SiteContent(),
        ]);
    }

    public function edit(SiteContent $content): View
    {
        return view('backend.pages.content.edit', [
            'item' => $content,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'key' => ['required', 'string', 'max:160', 'regex:/^[a-z0-9_.-]+$/', 'unique:site_contents,key'],
            'label' => ['nullable', 'string', 'max:190'],
            'value' => ['nullable', 'string'],
        ]);

        $item = SiteContent::query()->create($validated);
        SiteContentStore::set($item->key, $item->value, $item->label);

        return redirect()->route('admin.content.edit', $item)->with('status', 'Content created.');
    }

    public function update(Request $request, SiteContent $content): RedirectResponse
    {
        $validated = $request->validate([
            'label' => ['nullable', 'string', 'max:190'],
            'value' => ['nullable', 'string'],
        ]);

        $content->update($validated);
        SiteContentStore::set($content->key, $content->value, $content->label);

        return back()->with('status', 'Content updated.');
    }

    public function destroy(SiteContent $content): RedirectResponse
    {
        SiteContentStore::forget($content->key);

        return redirect()->route('admin.content.index')->with('status', 'Content deleted.');
    }
}

