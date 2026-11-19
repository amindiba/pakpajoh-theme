/**
 * Header Scroll Effect — PakPajoh Theme (v1.0)
 * اضافه کردن کلاس is-scrolled هنگام اسکرول به پایین
 */
(function() {
    const header = document.getElementById('masthead');
    if (!header) return;

    const scrollThreshold = 50;
    let ticking = false;

    function updateHeader() {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
        ticking = false;
    }

    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }, { passive: true });

    // اجرای اولیه
    updateHeader();
})();
