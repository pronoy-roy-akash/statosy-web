<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\SiteContentStore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NavigationController extends Controller
{
    public function edit(): View
    {
        $fields = $this->fields();

        $values = [];
        foreach ($fields as $key => $meta) {
            $values[$key] = SiteContentStore::get($key, $meta['default']);
        }

        return view('backend.pages.navigation', [
            'values' => $values,
            'fields' => $fields,
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $fields = $this->fields();

        $rules = [];
        foreach ($fields as $key => $meta) {
            $rules[$key] = ['nullable', 'string', 'max:190'];
        }

        $validated = $request->validate($rules);

        foreach ($fields as $key => $meta) {
            $value = $validated[$key] ?? null;
            if ($value === null || trim($value) === '') {
                SiteContentStore::set($key, null, $meta['label']);
            } else {
                SiteContentStore::set($key, $value, $meta['label']);
            }
        }

        return back()->with('status', 'Navbar updated.');
    }

    private function fields(): array
    {
        return [
            'nav.home' => ['label' => 'Home', 'default' => 'Home'],
            'nav.company' => ['label' => 'Company', 'default' => 'Company'],
            'nav.company.about' => ['label' => 'Company → About Us', 'default' => 'About Us'],
            'nav.company.awards' => ['label' => 'Company → Awards & Recognition', 'default' => 'Awards & Recognition'],
            'nav.services' => ['label' => 'Services', 'default' => 'Services'],
            'nav.services.solutions_title' => ['label' => 'Services dropdown → IT Solutions title', 'default' => 'IT Solutions'],
            'nav.services.industries_title' => ['label' => 'Services dropdown → Industries title', 'default' => 'Industries'],
            'nav.services.software_development' => ['label' => 'Services → Software Development', 'default' => 'Software Development'],
            'nav.services.software_management' => ['label' => 'Services → Software Management', 'default' => 'Software Management'],
            'nav.services.it_consulting' => ['label' => 'Services → IT Consulting', 'default' => 'IT Consulting'],
            'nav.services.cloud_management' => ['label' => 'Services → Cloud Management', 'default' => 'Cloud Management'],
            'nav.services.cyber_security' => ['label' => 'Services → Cyber Security Services', 'default' => 'Cyber Security Services'],
            'nav.services.customer_support' => ['label' => 'Services → Customer Support Services', 'default' => 'Customer Support Services'],
            'nav.industries.end_user_products' => ['label' => 'Industries → End User Products', 'default' => 'End User Products'],
            'nav.industries.government_public' => ['label' => 'Industries → Government And Public', 'default' => 'Government And Public'],
            'nav.industries.education_nonprofit' => ['label' => 'Industries → Education And Non-Profit', 'default' => 'Education And Non-Profit'],
            'nav.industries.banking_finance' => ['label' => 'Industries → Banking And Finance', 'default' => 'Banking And Finance'],
            'nav.industries.energy_utilities' => ['label' => 'Industries → Energy And Utilities', 'default' => 'Energy And Utilities'],
            'nav.industries.legal_law' => ['label' => 'Industries → Legal And Law Firms', 'default' => 'Legal And Law Firms'],
            'nav.careers' => ['label' => 'Careers', 'default' => 'Careers'],
            'nav.contact' => ['label' => 'Contact us button', 'default' => 'Contact us'],
        ];
    }
}

