document.addEventListener('DOMContentLoaded', function() {
    // هدر چسبنده
    const header = document.querySelector('.site-header');
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 50) { header.classList.add('scrolled'); }
        else { header.classList.remove('scrolled'); }
        lastScroll = currentScroll;
    });

    // افکت نور موس در هیرو
    const hero = document.querySelector('.hero-section');
    if (hero) {
        hero.addEventListener('mousemove', function(e) {
            const rect = hero.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            hero.style.setProperty('--mouse-x', x + '%');
            hero.style.setProperty('--mouse-y', y + '%');
        });
    }

    // منوی موبایل
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });
    }

    // انیمیشن اسکرول (کندتر)
    const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.section, .commit-card, .portfolio-card, .testimonial-card, .hero-content').forEach(function(el) {
        el.classList.add('reveal');
        observer.observe(el);
    });
});
