<div style="display:flex; align-items:center; justify-content:space-between; gap:12px; border:1px solid rgba(255,255,255,0.14); border-radius:14px; background:rgba(255,255,255,0.03); padding:12px 14px;">
    <div style="font-weight:750; color:rgba(255,255,255,0.9);">@yield('pageTitle', 'Admin')</div>
    <div style="display:flex; gap:10px; align-items:center;">
        <a href="{{ route('admin.settings.edit') }}"
            style="padding:8px 10px; border-radius:12px; border:1px solid rgba(255,255,255,0.12); background:rgba(0,0,0,0.18); color:rgba(255,255,255,0.75); font-size:13px; text-decoration:none;">Settings</a>
        <form method="post" action="{{ route('admin.logout') }}" style="margin:0;">
            @csrf
            <button type="submit"
                style="padding:8px 10px; border-radius:12px; border:1px solid rgba(255,255,255,0.12); background:rgba(255,255,255,0.92); color:rgba(0,0,0,0.95); font-weight:700;">Logout</button>
        </form>
    </div>
</div>
