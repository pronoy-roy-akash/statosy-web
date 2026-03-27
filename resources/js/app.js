const toggle = document.querySelector('[data-nav-toggle]');
const nav = document.querySelector('[data-nav]');
const header = document.querySelector('.nav');
const dropdownRoots = Array.from(document.querySelectorAll('[data-dropdown-root]'));
let closeAllDropdowns = () => {};

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
        const href = a.getAttribute('href') ?? '';
        if (!href.startsWith('#')) return;

        e.preventDefault();
        closeAllDropdowns();
        setOpen(false);

        const id = href.slice(1);
        const el = id ? document.getElementById(id) : null;
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            window.location.hash = href;
        }
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') setOpen(false);
    });
}

if (dropdownRoots.length) {
    const setDropdownOpen = (root, open) => {
        const btn = root.querySelector('[data-dropdown-toggle]');
        const menu = root.querySelector('[data-dropdown]');
        if (!btn || !menu) return;
        menu.classList.toggle('is-open', open);
        btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    };

    closeAllDropdowns = () => {
        dropdownRoots.forEach((root) => setDropdownOpen(root, false));
    };

    dropdownRoots.forEach((root) => {
        const btn = root.querySelector('[data-dropdown-toggle]');
        const menu = root.querySelector('[data-dropdown]');
        if (!btn || !menu) return;

        let closeTimer = 0;

        const cancelClose = () => {
            if (closeTimer) {
                window.clearTimeout(closeTimer);
                closeTimer = 0;
            }
        };

        const scheduleClose = () => {
            cancelClose();
            closeTimer = window.setTimeout(() => {
                setDropdownOpen(root, false);
            }, 220);
        };

        root.addEventListener('pointerenter', (e) => {
            if (e.pointerType !== 'mouse') return;
            cancelClose();
            closeAllDropdowns();
            setDropdownOpen(root, true);
        });

        root.addEventListener('pointerleave', (e) => {
            if (e.pointerType !== 'mouse') return;
            scheduleClose();
        });

        btn.addEventListener('click', () => {
            const open = !menu.classList.contains('is-open');
            closeAllDropdowns();
            setDropdownOpen(root, open);
        });

        menu.addEventListener('click', (e) => {
            const a = e.target.closest('a');
            if (!a) return;
            closeAllDropdowns();
        });
    });

    window.addEventListener('click', (e) => {
        const inside = e.target.closest('[data-dropdown-root]');
        if (!inside) closeAllDropdowns();
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeAllDropdowns();
    });
}

if (header) {
    let ticking = false;
    let lastY = window.scrollY;

    const update = () => {
        const y = window.scrollY;

        if (nav && nav.classList.contains('is-open')) {
            header.classList.add('nav--scrolled');
            header.classList.remove('nav--hidden');
            lastY = y;
            ticking = false;
            return;
        }

        header.classList.toggle('nav--scrolled', y > 10);
        const delta = y - lastY;
        const goingDown = delta > 6;
        const goingUp = delta < -6;
        const shouldHide = y > 120 && goingDown;
        const shouldShow = goingUp || y < 60;
        if (shouldHide) header.classList.add('nav--hidden');
        if (shouldShow) header.classList.remove('nav--hidden');
        lastY = y;
        ticking = false;
    };

    window.addEventListener(
        'scroll',
        () => {
            if (!ticking) {
                window.requestAnimationFrame(update);
                ticking = true;
            }
        },
        { passive: true }
    );

    update();
}
