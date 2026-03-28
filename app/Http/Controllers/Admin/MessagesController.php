<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\View\View;

class MessagesController extends Controller
{
    public function index(): View
    {
        $items = ContactMessage::query()
            ->latest()
            ->paginate(20);

        return view('backend.pages.messages.index', [
            'items' => $items,
        ]);
    }

    public function show(ContactMessage $message): View
    {
        return view('backend.pages.messages.show', [
            'item' => $message,
        ]);
    }
}

