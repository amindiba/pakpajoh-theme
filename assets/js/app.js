document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = { root: null, rootMargin: '0px', threshold: 0.15 };
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) { entry.target.classList.add('active'); }
            else { entry.target.classList.remove('active'); }
        });
    }, observerOptions);
    document.querySelectorAll('.reveal, .reveal-up').forEach(el => observer.observe(el));
    
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() { mainNav.classList.toggle('active'); });
    }
});