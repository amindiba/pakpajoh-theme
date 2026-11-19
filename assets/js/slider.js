/**
 * Hero Slider — PakPajoh Theme (v3.0) - ساده و مقاوم
 */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        const slider = document.querySelector('.hero-slider');
        if (!slider) { console.warn('اسلایدر یافت نشد'); return; }

        const slides = slider.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-pagination .dot');
        const prevBtn = document.querySelector('.hero-nav-prev');
        const nextBtn = document.querySelector('.hero-nav-next');

        console.log('اسلایدر:', slides.length, 'اسلاید | فلش‌ها:', !!prevBtn, !!nextBtn);

        if (slides.length <= 1) return;

        let currentIndex = 0;
        const interval = 5000;
        let timer;

        function goToSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            currentIndex = index;
            console.log('اسلاید:', index);
        }

        function nextSlide() { goToSlide(currentIndex + 1); }
        function prevSlide() { goToSlide(currentIndex - 1); }

        function startTimer() {
            clearInterval(timer);
            timer = setInterval(nextSlide, interval);
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', function () {
                goToSlide(parseInt(this.getAttribute('data-index'), 10));
                startTimer();
            });
        });

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('کلیک روی قبلی');
                prevSlide();
                startTimer();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('کلیک روی بعدی');
                nextSlide();
                startTimer();
            });
        }

        startTimer();
    });
})();
