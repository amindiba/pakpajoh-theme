document.addEventListener('DOMContentLoaded', function() {
    // هدر چسبنده
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) { header.classList.add('scrolled'); }
            else { header.classList.remove('scrolled'); }
        });
    }

    // افکت موس روی همه هیروها
    const heroes = document.querySelectorAll('.hero-section, .services-hero, .inner-hero');
    heroes.forEach(function(hero) {
        hero.addEventListener('mousemove', function(e) {
            const rect = hero.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            hero.style.setProperty('--mouse-x', x + '%');
            hero.style.setProperty('--mouse-y', y + '%');
        });
    });

    // منوی موبایل
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-menu');
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
        });
    }

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            this.parentElement.classList.toggle('active');
        });
    });

    // انیمیشن اسکرول (با fallback مطمئن)
    const revealElements = document.querySelectorAll('.reveal-up, .reveal');

    if ('IntersectionObserver' in window && revealElements.length > 0) {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { root: null, rootMargin: '0px', threshold: 0.05 });

        revealElements.forEach(function(el) {
            observer.observe(el);
        });

        // fallback: اگر بعد از ۳ ثانیه هنوز نامرئی بود، همه را نمایان کن
        setTimeout(function() {
            revealElements.forEach(function(el) {
                if (!el.classList.contains('is-visible')) {
                    el.classList.add('is-visible');
                }
            });
        }, 3000);
    } else {
        // اگر IntersectionObserver پشتیبانی نشود، همه را نمایان کن
        revealElements.forEach(function(el) {
            el.classList.add('is-visible');
        });
    }
});
