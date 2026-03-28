<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MessagesController extends Controller
{
    private function extractMeetingFields(?string $message): array
    {
        $preferredDate = null;
        $preferredTime = null;
        $notes = null;

        $message = (string) $message;

        if (preg_match('/Preferred schedule:\s*([0-9]{4}-[0-9]{2}-[0-9]{2})(?:\s+([0-9]{2}:[0-9]{2}))?/i', $message, $m)) {
            $preferredDate = $m[1] ?? null;
            $preferredTime = $m[2] ?? null;
        }

        $notes = preg_replace('/^Preferred schedule:.*$/mi', '', $message);
        $notes = trim((string) $notes);

        return [$preferredDate, $preferredTime, $notes];
    }

    public function index(): View
    {
        $items = ContactMessage::query()
            ->latest()
            ->paginate(20);

        return view('backend.pages.messages.index', [
            'items' => $items,
        ]);
    }

    public function meetings(): View
    {
        $items = ContactMessage::query()
            ->where('message', 'like', '%Preferred schedule:%')
            ->latest()
            ->paginate(20);

        $items->setCollection(
            $items->getCollection()->map(function (ContactMessage $item) {
                [$preferredDate, $preferredTime, $notes] = $this->extractMeetingFields($item->message);
                $item->preferred_date = $preferredDate;
                $item->preferred_time = $preferredTime;
                $item->notes = $notes;
                return $item;
            })
        );

        return view('backend.pages.messages.index', [
            'items' => $items,
            'mode' => 'meetings',
        ]);
    }

    public function show(ContactMessage $message): View
    {
        return view('backend.pages.messages.show', [
            'item' => $message,
        ]);
    }

    public function destroy(ContactMessage $message): RedirectResponse
    {
        $message->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with('status', 'Message deleted.');
    }

    public function showMeeting(ContactMessage $message): View
    {
        [$preferredDate, $preferredTime, $notes] = $this->extractMeetingFields($message->message);

        return view('backend.pages.messages.show', [
            'item' => $message,
            'mode' => 'meetings',
            'preferredDate' => $preferredDate,
            'preferredTime' => $preferredTime,
            'notes' => $notes,
        ]);
    }

    public function destroyMeeting(ContactMessage $message): RedirectResponse
    {
        $message->delete();

        return redirect()
            ->route('admin.meetings.index')
            ->with('status', 'Meeting request deleted.');
    }
}
