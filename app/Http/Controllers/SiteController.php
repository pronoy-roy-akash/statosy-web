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

    public function page(string $page): View
    {
        $pages = [
            'company.about-us' => ['kicker' => 'Company', 'title' => 'About Us'],
            'company.awards-recognition' => ['kicker' => 'Company', 'title' => 'Awards & Recognition'],
            'company.careers' => ['kicker' => 'Company', 'title' => 'Careers'],
            'company.case-studies' => ['kicker' => 'Company', 'title' => 'Case Studies'],
            'company.news' => ['kicker' => 'Company', 'title' => 'News'],

            'solutions.index' => ['kicker' => 'Solutions', 'title' => 'IT Solutions'],
            'solutions.software-development' => ['kicker' => 'Solutions', 'title' => 'Software Development'],
            'solutions.software-management' => ['kicker' => 'Solutions', 'title' => 'Software Management'],
            'solutions.it-consulting' => ['kicker' => 'Solutions', 'title' => 'IT Consulting'],
            'solutions.cloud-management' => ['kicker' => 'Solutions', 'title' => 'Cloud Management'],
            'solutions.cyber-security-services' => ['kicker' => 'Solutions', 'title' => 'Cyber Security Services'],
            'solutions.customer-support-services' => ['kicker' => 'Solutions', 'title' => 'Customer Support Services'],

            'industries.end-user-products' => ['kicker' => 'Industries', 'title' => 'End User Products'],
            'industries.government-and-public' => ['kicker' => 'Industries', 'title' => 'Government And Public'],
            'industries.education-and-non-profit' => ['kicker' => 'Industries', 'title' => 'Education And Non-Profit'],
            'industries.banking-and-finance' => ['kicker' => 'Industries', 'title' => 'Banking And Finance'],
            'industries.energy-and-utilities' => ['kicker' => 'Industries', 'title' => 'Energy And Utilities'],
            'industries.legal-and-law-firms' => ['kicker' => 'Industries', 'title' => 'Legal And Law Firms'],
        ];

        if (!array_key_exists($page, $pages)) {
            abort(404);
        }

        return view('frontend.pages.generic', [
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
