@php
    $linkStyle =
        'display:block; padding:10px 10px; border-radius:12px; border:1px solid rgba(255,255,255,0.12); background:rgba(0,0,0,0.15); color:rgba(255,255,255,0.78); text-decoration:none;';
    $linkStyleActive =
        'display:block; padding:10px 10px; border-radius:12px; border:1px solid rgba(255,255,255,0.16); background:rgba(255,255,255,0.10); color:rgba(255,255,255,0.92); text-decoration:none;';
    $linkStyleSub =
        'display:block; padding:9px 10px 9px 18px; border-radius:12px; border:1px solid rgba(255,255,255,0.10); background:rgba(0,0,0,0.10); color:rgba(255,255,255,0.70); text-decoration:none;';
    $linkStyleSubActive =
        'display:block; padding:9px 10px 9px 18px; border-radius:12px; border:1px solid rgba(255,255,255,0.16); background:rgba(255,255,255,0.08); color:rgba(255,255,255,0.88); text-decoration:none;';

    $isPage = fn(string $pageKey) => request()->routeIs('admin.pages.edit') && request()->route('page') === $pageKey;
@endphp

<div
    style="border:1px solid rgba(255,255,255,0.14); border-radius:14px; background:rgba(255,255,255,0.03); padding:14px;">
    <div style="display:flex; align-items:center; gap:10px;">
        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Statosy"
            style="height:34px; width:auto; border-radius:10px;">
        <div style="font-weight:850; letter-spacing:-0.6px;">Statosy</div>
    </div>

    <div style="margin-top:14px; display:grid; gap:8px;">
        <a href="{{ route('admin.dashboard') }}"
            style="{{ request()->routeIs('admin.dashboard') ? $linkStyleActive : $linkStyle }}">Dashboard</a>

        <div
            style="margin-top:6px; font-size:12px; letter-spacing:0.9px; text-transform:uppercase; color:rgba(255,255,255,0.55); font-weight:750;">
            Edit Website
        </div>

        <a href="{{ route('admin.navigation.edit') }}"
            style="{{ request()->routeIs('admin.navigation.*') ? $linkStyleActive : $linkStyle }}">Navbar Labels</a>
        <a href="{{ route('admin.pages.index') }}"
            style="{{ request()->routeIs('admin.pages.index') ? $linkStyleActive : $linkStyle }}">Pages Overview</a>

        <a href="{{ route('admin.pages.edit', 'home') }}"
            style="{{ $isPage('home') ? $linkStyleActive : $linkStyle }}">Home</a>

        <div
            style="margin-top:4px; font-size:12px; letter-spacing:0.9px; text-transform:uppercase; color:rgba(255,255,255,0.55); font-weight:750;">
            Company
        </div>
        <a href="{{ route('admin.pages.edit', 'company-about') }}"
            style="{{ $isPage('company-about') ? $linkStyleSubActive : $linkStyleSub }}">About Us</a>
        <a href="{{ route('admin.pages.edit', 'company-awards') }}"
            style="{{ $isPage('company-awards') ? $linkStyleSubActive : $linkStyleSub }}">Awards & Recognition</a>
        <a href="{{ route('admin.pages.edit', 'company-careers') }}"
            style="{{ $isPage('company-careers') ? $linkStyleSubActive : $linkStyleSub }}">Careers</a>

        <div
            style="margin-top:4px; font-size:12px; letter-spacing:0.9px; text-transform:uppercase; color:rgba(255,255,255,0.55); font-weight:750;">
            Services
        </div>
        <a href="{{ route('admin.pages.edit', 'solutions-index') }}"
            style="{{ $isPage('solutions-index') ? $linkStyleSubActive : $linkStyleSub }}">Solutions Overview</a>
        <a href="{{ route('admin.pages.edit', 'solutions-software-development') }}"
            style="{{ $isPage('solutions-software-development') ? $linkStyleSubActive : $linkStyleSub }}">Software
            Development</a>
        <a href="{{ route('admin.pages.edit', 'solutions-software-management') }}"
            style="{{ $isPage('solutions-software-management') ? $linkStyleSubActive : $linkStyleSub }}">Software
            Management</a>
        <a href="{{ route('admin.pages.edit', 'solutions-it-consulting') }}"
            style="{{ $isPage('solutions-it-consulting') ? $linkStyleSubActive : $linkStyleSub }}">IT Consulting</a>
        <a href="{{ route('admin.pages.edit', 'solutions-cloud-management') }}"
            style="{{ $isPage('solutions-cloud-management') ? $linkStyleSubActive : $linkStyleSub }}">Cloud
            Management</a>
        <a href="{{ route('admin.pages.edit', 'solutions-cyber-security-services') }}"
            style="{{ $isPage('solutions-cyber-security-services') ? $linkStyleSubActive : $linkStyleSub }}">Cyber
            Security Services</a>
        <a href="{{ route('admin.pages.edit', 'solutions-customer-support-services') }}"
            style="{{ $isPage('solutions-customer-support-services') ? $linkStyleSubActive : $linkStyleSub }}">Customer
            Support Services</a>

        <div
            style="margin-top:4px; font-size:12px; letter-spacing:0.9px; text-transform:uppercase; color:rgba(255,255,255,0.55); font-weight:750;">
            Industries
        </div>
        <a href="{{ route('admin.pages.edit', 'industries-end-user-products') }}"
            style="{{ $isPage('industries-end-user-products') ? $linkStyleSubActive : $linkStyleSub }}">End User
            Products</a>
        <a href="{{ route('admin.pages.edit', 'industries-government-and-public') }}"
            style="{{ $isPage('industries-government-and-public') ? $linkStyleSubActive : $linkStyleSub }}">Government
            And Public</a>
        <a href="{{ route('admin.pages.edit', 'industries-education-and-non-profit') }}"
            style="{{ $isPage('industries-education-and-non-profit') ? $linkStyleSubActive : $linkStyleSub }}">Education
            And Non-Profit</a>
        <a href="{{ route('admin.pages.edit', 'industries-banking-and-finance') }}"
            style="{{ $isPage('industries-banking-and-finance') ? $linkStyleSubActive : $linkStyleSub }}">Banking And
            Finance</a>
        <a href="{{ route('admin.pages.edit', 'industries-energy-and-utilities') }}"
            style="{{ $isPage('industries-energy-and-utilities') ? $linkStyleSubActive : $linkStyleSub }}">Energy And
            Utilities</a>
        <a href="{{ route('admin.pages.edit', 'industries-legal-and-law-firms') }}"
            style="{{ $isPage('industries-legal-and-law-firms') ? $linkStyleSubActive : $linkStyleSub }}">Legal And Law
            Firms</a>

        <a href="{{ route('admin.pages.edit', 'contact') }}"
            style="{{ $isPage('contact') ? $linkStyleActive : $linkStyle }}">Contact</a>
        <a href="{{ route('admin.pages.edit', 'footer') }}"
            style="{{ $isPage('footer') ? $linkStyleActive : $linkStyle }}">Footer</a>

        <a href="{{ route('admin.content.index') }}"
            style="{{ request()->routeIs('admin.content.*') ? $linkStyleActive : $linkStyle }}">All Content Blocks</a>

        <div
            style="margin-top:6px; font-size:12px; letter-spacing:0.9px; text-transform:uppercase; color:rgba(255,255,255,0.55); font-weight:750;">
            Leads
        </div>
        <a href="{{ route('admin.messages.index') }}"
            style="{{ request()->routeIs('admin.messages.*') ? $linkStyleActive : $linkStyle }}">Messages</a>
        <a href="{{ route('admin.applications.index') }}"
            style="{{ request()->routeIs('admin.applications.*') ? $linkStyleActive : $linkStyle }}">Applications</a>

        <div
            style="margin-top:6px; font-size:12px; letter-spacing:0.9px; text-transform:uppercase; color:rgba(255,255,255,0.55); font-weight:750;">
            Settings
        </div>
        <a href="{{ route('admin.settings.edit') }}"
            style="{{ request()->routeIs('admin.settings.*') ? $linkStyleActive : $linkStyle }}">Website Settings</a>
    </div>
</div>
