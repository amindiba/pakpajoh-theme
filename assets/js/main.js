document.addEventListener('DOMContentLoaded', function() {
    // منوی موبایل
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('is-active');
            this.setAttribute('aria-expanded', mainNav.classList.contains('is-active'));
        });
    }

    // اسکرول نرم برای لینک‌های داخلی
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                // بستن منو در موبایل
                if (mainNav && mainNav.classList.contains('is-active')) {
                    mainNav.classList.remove('is-active');
                    if(menuToggle) menuToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });
});