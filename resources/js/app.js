const toggle = document.querySelector('[data-nav-toggle]');
const nav = document.querySelector('[data-nav]');

if (toggle && nav) {
    const setOpen = (open) => {
        nav.classList.toggle('is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    };

    toggle.addEventListener('click', () => {
        const open = !nav.classList.contains('is-open');
        setOpen(open);
    });

    nav.addEventListener('click', (e) => {
        const a = e.target.closest('a');
        if (!a) return;
        if (a.getAttribute('href')?.startsWith('#')) {
            setOpen(false);
        }
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') setOpen(false);
    });
}
