<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\SiteContentStore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageEditorController extends Controller
{
    public function index(): View
    {
        return view('backend.pages.pages', [
            'links' => self::pageLinks(),
        ]);
    }

    public function edit(string $page): View
    {
        $pages = $this->pages();
        abort_unless(array_key_exists($page, $pages), 404);

        $config = $pages[$page];
        $fields = $config['fields'];

        $values = [];
        foreach ($fields as $field) {
            $values[$field['key']] = SiteContentStore::get($field['key'], $field['default'] ?? null);
        }

        return view('backend.pages.page-editor', [
            'pageKey' => $page,
            'title' => $config['title'],
            'description' => $config['description'] ?? null,
            'fields' => $fields,
            'values' => $values,
        ]);
    }

    public function update(Request $request, string $page): RedirectResponse
    {
        $pages = $this->pages();
        abort_unless(array_key_exists($page, $pages), 404);

        $fields = $pages[$page]['fields'];

        $rules = [];
        foreach ($fields as $field) {
            $rules[$field['key']] = ['nullable', 'string'];
        }

        $validated = $request->validate($rules);

        foreach ($fields as $field) {
            $key = $field['key'];
            $label = $field['label'] ?? null;
            $value = $validated[$key] ?? null;

            if ($value === null || trim($value) === '') {
                SiteContentStore::set($key, null, $label);
            } else {
                SiteContentStore::set($key, $value, $label);
            }
        }

        return back()->with('status', 'Page content updated.');
    }

    public static function pageLinks(): array
    {
        return [
            'home' => 'Home',
            'company-about' => 'Company • About Us',
            'company-awards' => 'Company • Awards & Recognition',
            'company-careers' => 'Company • Careers',
            'solutions-index' => 'Solutions • Overview',
            'solutions-software-development' => 'Solutions • Software Development',
            'solutions-software-management' => 'Solutions • Software Management',
            'solutions-it-consulting' => 'Solutions • IT Consulting',
            'solutions-cloud-management' => 'Solutions • Cloud Management',
            'solutions-cyber-security-services' => 'Solutions • Cyber Security Services',
            'solutions-customer-support-services' => 'Solutions • Customer Support Services',
            'industries-end-user-products' => 'Industries • End User Products',
            'industries-government-and-public' => 'Industries • Government And Public',
            'industries-education-and-non-profit' => 'Industries • Education And Non-Profit',
            'industries-banking-and-finance' => 'Industries • Banking And Finance',
            'industries-energy-and-utilities' => 'Industries • Energy And Utilities',
            'industries-legal-and-law-firms' => 'Industries • Legal And Law Firms',
            'contact' => 'Contact',
            'footer' => 'Footer',
        ];
    }

    private function pages(): array
    {
        return [
            'home' => [
                'title' => 'Home',
                'description' => 'Edit the main homepage hero text and primary buttons.',
                'fields' => [
                    ['key' => 'home.hero.eyebrow', 'label' => 'Hero eyebrow', 'default' => 'Founded in 2025 • Cloud-first • Security-first'],
                    ['key' => 'home.hero.title', 'label' => 'Hero title', 'default' => 'Build systems that stay safe and stay up'],
                    ['key' => 'home.hero.lead', 'label' => 'Hero description', 'default' => 'Statosy is a cloud and software company with its own in-house infrastructure—delivering secure, high-availability systems, powerful software, and exceptional web solutions through a top-tier engineering team.'],
                    ['key' => 'home.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Start a project'],
                    ['key' => 'home.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Explore services'],
                ],
            ],
            'company-about' => [
                'title' => 'Company • About Us',
                'description' => 'Edit the hero copy for the About Us page.',
                'fields' => [
                    ['key' => 'company.about.hero.title', 'label' => 'Hero title', 'default' => 'About Statosy'],
                    ['key' => 'company.about.hero.text', 'label' => 'Hero text', 'default' => 'We build secure, reliable software and cloud systems for modern organizations.'],
                    ['key' => 'company.about.hero.cta.primary', 'label' => 'Primary button label', 'default' => "Let's Talk"],
                    ['key' => 'company.about.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'company-awards' => [
                'title' => 'Company • Awards & Recognition',
                'description' => 'Edit the hero copy for the Awards page.',
                'fields' => [
                    ['key' => 'company.awards.hero.title', 'label' => 'Hero title', 'default' => 'Awards & Recognition'],
                    ['key' => 'company.awards.hero.text', 'label' => 'Hero text', 'default' => 'Highlights from our work and milestones.'],
                    ['key' => 'company.awards.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'company.awards.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'company-careers' => [
                'title' => 'Company • Careers',
                'description' => 'Edit the hero copy for the Careers page.',
                'fields' => [
                    ['key' => 'company.careers.hero.title', 'label' => 'Hero title', 'default' => 'Careers at Statosy'],
                    ['key' => 'company.careers.hero.text', 'label' => 'Hero text', 'default' => 'Join a team that ships secure, high-quality work and grows together.'],
                    ['key' => 'company.careers.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'company.careers.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-index' => [
                'title' => 'Solutions • Overview',
                'description' => 'Edit the hero copy for the Solutions overview page.',
                'fields' => [
                    ['key' => 'solutions.index.hero.title', 'label' => 'Hero title', 'default' => 'Solutions'],
                    ['key' => 'solutions.index.hero.text', 'label' => 'Hero text', 'default' => 'Engineering, consulting, and security services to move faster with confidence.'],
                    ['key' => 'solutions.index.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.index.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-software-development' => [
                'title' => 'Solutions • Software Development',
                'fields' => [
                    ['key' => 'solutions.software-development.hero.title', 'label' => 'Hero title', 'default' => 'Software Development'],
                    ['key' => 'solutions.software-development.hero.text', 'label' => 'Hero text', 'default' => 'Build scalable products with reliable delivery.'],
                    ['key' => 'solutions.software-development.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.software-development.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-software-management' => [
                'title' => 'Solutions • Software Management',
                'fields' => [
                    ['key' => 'solutions.software-management.hero.title', 'label' => 'Hero title', 'default' => 'Software Management'],
                    ['key' => 'solutions.software-management.hero.text', 'label' => 'Hero text', 'default' => 'Keep systems healthy with ongoing improvement and support.'],
                    ['key' => 'solutions.software-management.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.software-management.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-it-consulting' => [
                'title' => 'Solutions • IT Consulting',
                'fields' => [
                    ['key' => 'solutions.it-consulting.hero.title', 'label' => 'Hero title', 'default' => 'IT Consulting'],
                    ['key' => 'solutions.it-consulting.hero.text', 'label' => 'Hero text', 'default' => 'Make clearer technology decisions with expert guidance.'],
                    ['key' => 'solutions.it-consulting.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.it-consulting.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-cloud-management' => [
                'title' => 'Solutions • Cloud Management',
                'fields' => [
                    ['key' => 'solutions.cloud-management.hero.title', 'label' => 'Hero title', 'default' => 'Cloud Management'],
                    ['key' => 'solutions.cloud-management.hero.text', 'label' => 'Hero text', 'default' => 'Operate infrastructure for security, performance, and uptime.'],
                    ['key' => 'solutions.cloud-management.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.cloud-management.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-cyber-security-services' => [
                'title' => 'Solutions • Cyber Security Services',
                'fields' => [
                    ['key' => 'solutions.cyber-security-services.hero.title', 'label' => 'Hero title', 'default' => 'Cyber Security Services'],
                    ['key' => 'solutions.cyber-security-services.hero.text', 'label' => 'Hero text', 'default' => 'Strengthen security posture with pragmatic controls and monitoring.'],
                    ['key' => 'solutions.cyber-security-services.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.cyber-security-services.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'solutions-customer-support-services' => [
                'title' => 'Solutions • Customer Support Services',
                'fields' => [
                    ['key' => 'solutions.customer-support-services.hero.title', 'label' => 'Hero title', 'default' => 'Customer Support Services'],
                    ['key' => 'solutions.customer-support-services.hero.text', 'label' => 'Hero text', 'default' => 'Support customers with speed, clarity, and empathy.'],
                    ['key' => 'solutions.customer-support-services.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'solutions.customer-support-services.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'industries-end-user-products' => [
                'title' => 'Industries • End User Products',
                'fields' => [
                    ['key' => 'industries.end-user-products.hero.title', 'label' => 'Hero title', 'default' => 'End User Products'],
                    ['key' => 'industries.end-user-products.hero.text', 'label' => 'Hero text', 'default' => 'Build reliable experiences for real users.'],
                    ['key' => 'industries.end-user-products.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'industries.end-user-products.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'industries-government-and-public' => [
                'title' => 'Industries • Government And Public',
                'fields' => [
                    ['key' => 'industries.government-and-public.hero.title', 'label' => 'Hero title', 'default' => 'Government And Public'],
                    ['key' => 'industries.government-and-public.hero.text', 'label' => 'Hero text', 'default' => 'Secure platforms for public services and citizen needs.'],
                    ['key' => 'industries.government-and-public.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'industries.government-and-public.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'industries-education-and-non-profit' => [
                'title' => 'Industries • Education And Non-Profit',
                'fields' => [
                    ['key' => 'industries.education-and-non-profit.hero.title', 'label' => 'Hero title', 'default' => 'Education And Non-Profit'],
                    ['key' => 'industries.education-and-non-profit.hero.text', 'label' => 'Hero text', 'default' => 'Technology that scales impact and protects data.'],
                    ['key' => 'industries.education-and-non-profit.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'industries.education-and-non-profit.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'industries-banking-and-finance' => [
                'title' => 'Industries • Banking And Finance',
                'fields' => [
                    ['key' => 'industries.banking-and-finance.hero.title', 'label' => 'Hero title', 'default' => 'Banking And Finance'],
                    ['key' => 'industries.banking-and-finance.hero.text', 'label' => 'Hero text', 'default' => 'Security and compliance-focused systems for finance.'],
                    ['key' => 'industries.banking-and-finance.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'industries.banking-and-finance.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'industries-energy-and-utilities' => [
                'title' => 'Industries • Energy And Utilities',
                'fields' => [
                    ['key' => 'industries.energy-and-utilities.hero.title', 'label' => 'Hero title', 'default' => 'Energy And Utilities'],
                    ['key' => 'industries.energy-and-utilities.hero.text', 'label' => 'Hero text', 'default' => 'Operational reliability for critical services.'],
                    ['key' => 'industries.energy-and-utilities.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'industries.energy-and-utilities.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'industries-legal-and-law-firms' => [
                'title' => 'Industries • Legal And Law Firms',
                'fields' => [
                    ['key' => 'industries.legal-and-law-firms.hero.title', 'label' => 'Hero title', 'default' => 'Legal And Law Firms'],
                    ['key' => 'industries.legal-and-law-firms.hero.text', 'label' => 'Hero text', 'default' => 'Confidential systems with strong access controls.'],
                    ['key' => 'industries.legal-and-law-firms.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'industries.legal-and-law-firms.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                ],
            ],
            'contact' => [
                'title' => 'Contact',
                'description' => 'Edit contact page hero and contact details.',
                'fields' => [
                    ['key' => 'contact.hero.title', 'label' => 'Hero title', 'default' => 'Contact us'],
                    ['key' => 'contact.hero.text', 'label' => 'Hero text', 'default' => 'Tell us about your project and we’ll reply quickly.'],
                    ['key' => 'contact.hero.cta.primary', 'label' => 'Primary button label', 'default' => 'Send a message'],
                    ['key' => 'contact.hero.cta.secondary', 'label' => 'Secondary button label', 'default' => 'Schedule a meeting'],
                    ['key' => 'contact.email', 'label' => 'Email', 'default' => 'hello@statosy.com'],
                    ['key' => 'contact.phone', 'label' => 'Phone', 'default' => '+880 0000-000000'],
                    ['key' => 'contact.address', 'label' => 'Address', 'default' => 'Dhaka, Bangladesh'],
                ],
            ],
            'footer' => [
                'title' => 'Footer',
                'description' => 'Edit the footer hero and brand section.',
                'fields' => [
                    ['key' => 'footer.hero.kicker', 'label' => 'Footer hero kicker', 'default' => 'Ensure high availability of your services'],
                    ['key' => 'footer.hero.title', 'label' => 'Footer hero title', 'default' => 'Ready to start your next project?'],
                    ['key' => 'footer.hero.text', 'label' => 'Footer hero text', 'default' => 'We partner with brands to help them improve their software and IT services.'],
                    ['key' => 'footer.brand.text', 'label' => 'Footer brand text', 'default' => 'A cloud services and software company built on in-house infrastructure—delivering secure, reliable, high-availability systems for modern businesses.'],
                    ['key' => 'footer.stat.1.k', 'label' => 'Stat 1 title', 'default' => 'Secure'],
                    ['key' => 'footer.stat.1.v', 'label' => 'Stat 1 description', 'default' => 'Security-first delivery'],
                    ['key' => 'footer.stat.2.k', 'label' => 'Stat 2 title', 'default' => 'Reliable'],
                    ['key' => 'footer.stat.2.v', 'label' => 'Stat 2 description', 'default' => 'High availability mindset'],
                    ['key' => 'footer.stat.3.k', 'label' => 'Stat 3 title', 'default' => 'Fast'],
                    ['key' => 'footer.stat.3.v', 'label' => 'Stat 3 description', 'default' => 'Lean, consistent shipping'],
                ],
            ],
        ];
    }
}
