document.addEventListener('DOMContentLoaded', function() {

    // Mobile Drawer
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const drawer = document.querySelector('.mobile-drawer');
    const overlay = document.querySelector('.mobile-drawer-overlay');
    const drawerClose = document.querySelector('.mobile-drawer-close');

    const openDrawer = function() {
        if (!drawer) return;
        drawer.classList.add('is-open');
        if (overlay) overlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    };
    const closeDrawer = function() {
        if (!drawer) return;
        drawer.classList.remove('is-open');
        if (overlay) overlay.classList.remove('is-open');
        document.body.style.overflow = '';
    };

    if (menuToggle) menuToggle.addEventListener('click', openDrawer);
    if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
    if (overlay) overlay.addEventListener('click', closeDrawer);
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('is-open')) closeDrawer();
    });

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(function(btn) {
        btn.addEventListener('click', function() { this.parentElement.classList.toggle('active'); });
    });

    // Scroll Reveal (IntersectionObserver)
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
        revealElements.forEach(function(el) { observer.observe(el); });
        setTimeout(function() { revealElements.forEach(function(el) { el.classList.add('is-visible'); }); }, 3000);
    } else {
        revealElements.forEach(function(el) { el.classList.add('is-visible'); });
    }

    // Process Timeline Scroll Animation
    const processSteps = document.querySelectorAll('.process-step');
    if ('IntersectionObserver' in window && processSteps.length > 0) {
        const processObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    processObserver.unobserve(entry.target);
                }
            });
        }, { root: null, rootMargin: '0px 0px -10% 0px', threshold: 0.1 });
        processSteps.forEach(function(el) { processObserver.observe(el); });
    } else {
        processSteps.forEach(function(el) { el.classList.add('is-visible'); });
    }

    // Hero mouse move parallax
    document.querySelectorAll('.hero-section, .services-hero, .inner-hero').forEach(function(hero) {
        hero.addEventListener('mousemove', function(e) {
            const rect = hero.getBoundingClientRect();
            hero.style.setProperty('--mouse-x', ((e.clientX - rect.left) / rect.width) * 100 + '%');
            hero.style.setProperty('--mouse-y', ((e.clientY - rect.top) / rect.height) * 100 + '%');
        });
    });

    // ===== Portfolio Carousel (RTL-friendly) =====
    // ===== Loop Carousel (پروژه‌های صفحه اصلی) =====
    function initLoopCarousel(root) {
        const track = root.querySelector('.portfolio-carousel-track');
        if (!track) return;
        const slides = Array.from(track.querySelectorAll('.carousel-slide'));
        if (slides.length < 2) return;
        const dotsWrap = root.querySelector('.carousel-dots');
        let currentIndex = 0;

        const stepPx = function() {
            if (slides.length === 0) return 0;
            const style = window.getComputedStyle(track);
            const gap = parseFloat(style.columnGap || style.gap || 0) || 0;
            return slides[0].getBoundingClientRect().width + gap;
        };

        const renderDots = function() {
            if (!dotsWrap) return;
            dotsWrap.innerHTML = '';
            const total = slides.length;
            for (let i = 0; i < total; i++) {
                const b = document.createElement('button');
                b.className = 'carousel-dot' + (i === currentIndex ? ' active' : '');
                b.type = 'button';
                b.setAttribute('aria-label', 'اسلاید ' + (i + 1));
                b.addEventListener('click', function() { goTo(i); });
                dotsWrap.appendChild(b);
            }
        };

        const goTo = function(idx) {
            const total = slides.length;
            currentIndex = ((idx % total) + total) % total;
            const offset = currentIndex * stepPx();
            track.style.transform = 'translateX(' + offset + 'px)';
            if (dotsWrap) {
                Array.from(dotsWrap.children).forEach(function(d, i) {
                    d.classList.toggle('active', i === currentIndex);
                });
            }
        };

        let startX = 0, startOffset = 0, dragging = false;
        const onDown = function(e) {
            dragging = true;
            startX = (e.touches ? e.touches[0].clientX : e.clientX);
            startOffset = currentIndex * stepPx();
            track.style.transition = 'none';
        };
        const onMove = function(e) {
            if (!dragging) return;
            const x = (e.touches ? e.touches[0].clientX : e.clientX);
            const dx = startX - x;
            track.style.transform = 'translateX(' + (startOffset + dx) + 'px)';
        };
        const onUp = function(e) {
            if (!dragging) return;
            dragging = false;
            track.style.transition = '';
            const endX = e.changedTouches ? e.changedTouches[0].clientX : e.clientX;
            const dx = startX - endX;
            if (dx > 40) goTo(currentIndex + 1);
            else if (dx < -40) goTo(currentIndex - 1);
            else goTo(currentIndex);
        };
        track.addEventListener('mousedown', onDown);
        document.addEventListener('mousemove', onMove);
        document.addEventListener('mouseup', onUp);
        track.addEventListener('touchstart', onDown, { passive: true });
        track.addEventListener('touchmove', onMove, { passive: true });
        track.addEventListener('touchend', onUp);

        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() { goTo(currentIndex); }, 150);
        });

        renderDots();
        goTo(0);

        let moved = false;
        track.addEventListener('mousedown', function() { moved = false; });
        track.addEventListener('mousemove', function() { moved = true; });
        track.addEventListener('click', function(e) {
            if (moved) { e.stopPropagation(); e.preventDefault(); }
        }, true);
    }
    document.querySelectorAll('[data-carousel]').forEach(function(root) {
        const track = root.querySelector('.portfolio-carousel-track, .testimonials-carousel-track');
        if (!track) return;
        const slides = Array.from(track.querySelectorAll('.carousel-slide'));
        if (slides.length === 0) return;
        const prevBtn = root.querySelector('.carousel-prev');
        const nextBtn = root.querySelector('.carousel-next');
        const dotsWrap = root.querySelector('.carousel-dots');
        let currentIndex = 0;

        const getPerView = function() {
            const w = window.innerWidth;
            if (w <= 768) return 1;
            if (w <= 992) return 2;
            return 3;
        };

        const getGap = function() {
            const style = window.getComputedStyle(track);
            return parseFloat(style.columnGap || style.gap || 0) || 0;
        };

        const getMaxIndex = function() {
            return Math.max(0, slides.length - getPerView());
        };

        const stepPx = function() {
            if (slides.length === 0) return 0;
            const slideWidth = slides[0].getBoundingClientRect().width;
            return slideWidth + getGap();
        };

        const renderDots = function() {
            if (!dotsWrap) return;
            dotsWrap.innerHTML = '';
            const max = getMaxIndex();
            for (let i = 0; i <= max; i++) {
                const b = document.createElement('button');
                b.className = 'carousel-dot' + (i === currentIndex ? ' active' : '');
                b.type = 'button';
                b.setAttribute('aria-label', 'اسلاید ' + (i + 1));
                b.addEventListener('click', function() { goTo(i); });
                dotsWrap.appendChild(b);
            }
        };

        const isDesktopGrid = function() {
            if (!root.hasAttribute('data-carousel-desktop-grid')) return false;
            return window.innerWidth > 768;
        };

        const update = function() {
            if (isDesktopGrid()) {
                track.style.transform = '';
                if (prevBtn) prevBtn.style.display = 'none';
                if (nextBtn) nextBtn.style.display = 'none';
                if (dotsWrap) dotsWrap.innerHTML = '';
                return;
            }
            if (prevBtn) prevBtn.style.display = '';
            if (nextBtn) nextBtn.style.display = '';
            // در RTL، translateX مثبت محتوا را به راست می‌برد
            const offset = currentIndex * stepPx();
            track.style.transform = 'translateX(' + (offset) + 'px)';
            if (prevBtn) prevBtn.disabled = currentIndex >= getMaxIndex();
            if (nextBtn) nextBtn.disabled = currentIndex <= 0;
            if (dotsWrap) {
                Array.from(dotsWrap.children).forEach(function(d, i) {
                    d.classList.toggle('active', i === currentIndex);
                });
            }
        };

        const goTo = function(idx) {
            const max = getMaxIndex();
            currentIndex = Math.max(0, Math.min(idx, max));
            update();
        };

        if (prevBtn) prevBtn.addEventListener('click', function() { goTo(currentIndex + 1); });
        if (nextBtn) nextBtn.addEventListener('click', function() { goTo(currentIndex - 1); });

        // کشیدن (drag) با موس و لمسی
        let startX = 0, startOffset = 0, dragging = false;
        const onDown = function(e) {
            dragging = true;
            startX = (e.touches ? e.touches[0].clientX : e.clientX);
            startOffset = currentIndex * stepPx();
            track.style.transition = 'none';
        };
        const onMove = function(e) {
            if (!dragging) return;
            const x = (e.touches ? e.touches[0].clientX : e.clientX);
            const dx = startX - x; // RTL: کشیدن به راست = جلو
            track.style.transform = 'translateX(' + (startOffset + dx) + 'px)';
        };
        const onUp = function(e) {
            if (!dragging) return;
            dragging = false;
            track.style.transition = '';
            const endX = e.changedTouches ? e.changedTouches[0].clientX : e.clientX;
            const dx = startX - endX;
            if (dx > 50) goTo(currentIndex + 1);
            else if (dx < -50) goTo(currentIndex - 1);
            else update();
        };
        track.addEventListener('mousedown', onDown);
        document.addEventListener('mousemove', onMove);
        document.addEventListener('mouseup', onUp);
        track.addEventListener('touchstart', onDown, { passive: true });
        track.addEventListener('touchmove', onMove, { passive: true });
        track.addEventListener('touchend', onUp);

        // ریسایز
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                currentIndex = Math.min(currentIndex, getMaxIndex());
                renderDots();
                update();
            }, 150);
        });

        renderDots();
        update();

        // جلوگیری از باز شدن مودال هنگام drag
        let moved = false;
        track.addEventListener('mousedown', function() { moved = false; });
        track.addEventListener('mousemove', function() { moved = true; });
        track.addEventListener('click', function(e) {
            if (moved) { e.stopPropagation(); e.preventDefault(); }
        }, true);
    });

    // ===== Portfolio Modal =====
    const modal = document.getElementById('portfolio-modal');
    if (modal) {
        modal.style.display = 'none'; modal.classList.remove('active');
        document.body.classList.remove('modal-open');

        const overlay = modal.querySelector('.portfolio-modal-overlay');
        const closeBtn = modal.querySelector('.portfolio-modal-close');
        const content = modal.querySelector('.portfolio-modal-content');

        const openModal = function(card) {
            const setText = function(id, value) {
                const el = document.getElementById(id);
                if (el) el.textContent = value || '-';
            };
            setText('modal-title', card.dataset.title);
            setText('modal-excerpt', card.dataset.excerpt);
            setText('modal-location', card.dataset.location);
            setText('modal-date', card.dataset.date);
            setText('modal-level', card.dataset.level);
            setText('modal-duration', card.dataset.duration);
            setText('modal-type', card.dataset.type);
            setText('modal-satisfaction', card.dataset.satisfaction);
            setText('modal-difficulty', card.dataset.difficulty);

            const img = document.getElementById('modal-image');
            if (img) {
                if (card.dataset.image) { img.src = card.dataset.image; img.style.display = 'block'; }
                else { img.style.display = 'none'; }
            }

            modal.style.display = 'block'; modal.classList.add('active');
            document.body.classList.add('modal-open');
        };

        const closeModal = function() {
            modal.style.display = 'none'; modal.classList.remove('active');
            document.body.classList.remove('modal-open');
        };

        document.querySelectorAll('.portfolio-archive-card, .portfolio-card[data-title]').forEach(function(card) {
            card.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                openModal(this);
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', function(e) { e.stopPropagation(); closeModal(); });
        if (overlay) overlay.addEventListener('click', function(e) { e.stopPropagation(); closeModal(); });
        if (content) content.addEventListener('click', function(e) { e.stopPropagation(); });
        document.addEventListener('keydown', function(e) { if (e.key === 'Escape' && modal.classList.contains('active')) closeModal(); });
    }

});