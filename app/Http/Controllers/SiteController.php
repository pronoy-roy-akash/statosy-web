<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function index(): View
    {
        return view('frontend.pages.home');
    }

    public function page(string $page): View
    {
        $pages = [
            'company.about-us' => ['view' => 'frontend.pages.company.about-us', 'kicker' => 'Company', 'title' => 'About Us'],
            'company.awards-recognition' => ['view' => 'frontend.pages.company.awards-recognition', 'kicker' => 'Company', 'title' => 'Awards & Recognition'],
            'company.careers' => ['view' => 'frontend.pages.company.careers', 'kicker' => 'Company', 'title' => 'Careers'],
            'company.case-studies' => ['view' => 'frontend.pages.company.case-studies', 'kicker' => 'Company', 'title' => 'Case Studies'],
            'company.news' => ['view' => 'frontend.pages.company.news', 'kicker' => 'Company', 'title' => 'News'],

            'solutions.index' => ['view' => 'frontend.pages.solutions.index', 'kicker' => 'Solutions', 'title' => 'IT Solutions'],
            'solutions.software-development' => ['view' => 'frontend.pages.solutions.software-development', 'kicker' => 'Solutions', 'title' => 'Software Development'],
            'solutions.software-management' => ['view' => 'frontend.pages.solutions.software-management', 'kicker' => 'Solutions', 'title' => 'Software Management'],
            'solutions.it-consulting' => ['view' => 'frontend.pages.solutions.it-consulting', 'kicker' => 'Solutions', 'title' => 'IT Consulting'],
            'solutions.cloud-management' => ['view' => 'frontend.pages.solutions.cloud-management', 'kicker' => 'Solutions', 'title' => 'Cloud Management'],
            'solutions.cyber-security-services' => ['view' => 'frontend.pages.solutions.cyber-security-services', 'kicker' => 'Solutions', 'title' => 'Cyber Security Services'],
            'solutions.customer-support-services' => ['view' => 'frontend.pages.solutions.customer-support-services', 'kicker' => 'Solutions', 'title' => 'Customer Support Services'],

            'industries.end-user-products' => ['view' => 'frontend.pages.industries.end-user-products', 'kicker' => 'Industries', 'title' => 'End User Products'],
            'industries.government-and-public' => ['view' => 'frontend.pages.industries.government-and-public', 'kicker' => 'Industries', 'title' => 'Government And Public'],
            'industries.education-and-non-profit' => ['view' => 'frontend.pages.industries.education-and-non-profit', 'kicker' => 'Industries', 'title' => 'Education And Non-Profit'],
            'industries.banking-and-finance' => ['view' => 'frontend.pages.industries.banking-and-finance', 'kicker' => 'Industries', 'title' => 'Banking And Finance'],
            'industries.energy-and-utilities' => ['view' => 'frontend.pages.industries.energy-and-utilities', 'kicker' => 'Industries', 'title' => 'Energy And Utilities'],
            'industries.legal-and-law-firms' => ['view' => 'frontend.pages.industries.legal-and-law-firms', 'kicker' => 'Industries', 'title' => 'Legal And Law Firms'],
        ];

        if (!array_key_exists($page, $pages)) {
            abort(404);
        }

        return view($pages[$page]['view'], [
            'kicker' => $pages[$page]['kicker'],
            'title' => $pages[$page]['title'],
        ]);
    }

    public function contact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'company' => ['nullable', 'string', 'max:190'],
            'topic' => ['nullable', 'string', 'max:120'],
            'meeting_date' => ['nullable', 'date'],
            'meeting_time' => ['nullable', 'date_format:H:i'],
            'message' => ['nullable', 'string', 'max:4000', 'required_without_all:meeting_date,meeting_time'],
        ]);

        $message = $validated['message'] ?? '';

        if (!empty($validated['meeting_date']) || !empty($validated['meeting_time'])) {
            $meetingLine = trim(
                'Preferred schedule: ' .
                    ($validated['meeting_date'] ?? '') .
                    (!empty($validated['meeting_time']) ? ' ' . $validated['meeting_time'] : '')
            );

            $message = trim($message);
            $message = $message !== '' ? $message . "\n\n" . $meetingLine : $meetingLine;
        }

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? null,
            'topic' => $validated['topic'] ?? null,
            'message' => $message,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->route('thank-you');
    }

    public function contactUs(): View
    {
        return view('frontend.pages.contact-us', [
            'kicker' => 'Contact',
            'title' => 'Contact us',
        ]);
    }

    public function careerApply(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'role' => ['required', 'string', 'max:140'],
            'message' => ['nullable', 'string', 'max:2000'],
            'resume' => ['required', 'file', 'max:2048', 'mimes:pdf,doc,docx'],
        ]);

        $resumePath = $request->file('resume')->store('job-applications');

        JobApplication::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'message' => $validated['message'] ?? null,
            'resume_path' => $resumePath,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return back()->with('career_success', 'Resume submitted. Our team will reach out if there is a match.');
    }

    public function thankYou(): View
    {
        return view('frontend.pages.thank-you');
    }
}
