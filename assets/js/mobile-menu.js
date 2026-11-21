document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const drawer = document.querySelector('.mobile-drawer');
    const overlay = document.querySelector('.mobile-drawer-overlay');
    const closeButton = document.querySelector('.mobile-drawer-close');

    if (!toggle || !drawer || !overlay || !closeButton) return;

    let previousFocus = null;
    let previousBodyOverflow = '';

    function getFocusableElements() {
        return Array.from(drawer.querySelectorAll('a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])'))
            .filter(function(element) {
                return element.offsetWidth > 0 || element.offsetHeight > 0;
            });
    }

    function openDrawer() {
        if (drawer.classList.contains('is-open')) return;

        previousFocus = document.activeElement;
        previousBodyOverflow = document.body.style.overflow;
        drawer.classList.add('is-open');
        overlay.classList.add('is-open');
        drawer.setAttribute('aria-hidden', 'false');
        overlay.setAttribute('aria-hidden', 'false');
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'بستن منو');
        document.body.style.overflow = 'hidden';
        closeButton.focus();
    }

    function closeDrawer(restoreFocus) {
        if (!drawer.classList.contains('is-open')) return;

        drawer.classList.remove('is-open');
        overlay.classList.remove('is-open');
        drawer.setAttribute('aria-hidden', 'true');
        overlay.setAttribute('aria-hidden', 'true');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'باز کردن منو');
        document.body.style.overflow = previousBodyOverflow;

        if (restoreFocus && previousFocus && typeof previousFocus.focus === 'function') {
            previousFocus.focus();
        }
        previousFocus = null;
    }

    toggle.addEventListener('click', function() {
        if (drawer.classList.contains('is-open')) closeDrawer(true);
        else openDrawer();
    });
    closeButton.addEventListener('click', function() { closeDrawer(true); });
    overlay.addEventListener('click', function() { closeDrawer(true); });

    drawer.querySelectorAll('a[href]').forEach(function(link) {
        link.addEventListener('click', function() { closeDrawer(false); });
    });

    document.addEventListener('keydown', function(event) {
        if (!drawer.classList.contains('is-open')) return;

        if (event.key === 'Escape') {
            event.preventDefault();
            closeDrawer(true);
            return;
        }

        if (event.key !== 'Tab') return;
        const focusableElements = getFocusableElements();
        if (focusableElements.length === 0) {
            event.preventDefault();
            drawer.focus();
            return;
        }

        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];
        if (event.shiftKey && (document.activeElement === firstElement || !drawer.contains(document.activeElement))) {
            event.preventDefault();
            lastElement.focus();
        } else if (!event.shiftKey && (document.activeElement === lastElement || !drawer.contains(document.activeElement))) {
            event.preventDefault();
            firstElement.focus();
        }
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth > 1024) closeDrawer(false);
    });
});
