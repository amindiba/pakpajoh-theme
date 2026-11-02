/* ============================================================
   PakPajoh Theme — Frontend JS
   Scroll Reveal | Mobile Menu | Persian Digits
   ============================================================ */
(function () {
  'use strict';

  // --- Scroll Reveal via IntersectionObserver ---
  function initReveal() {
    var items = document.querySelectorAll('.pp-reveal');
    if (!items.length) return;

    if (!('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('is-visible'); });
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    items.forEach(function (el) { observer.observe(el); });
  }

  // --- Mobile Menu Toggle ---
  function initBurger() {
    var burger = document.querySelector('.pp-burger');
    var nav = document.querySelector('.pp-nav');
    if (!burger || !nav) return;

    burger.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    // Close on link click (mobile)
    nav.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        nav.classList.remove('is-open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // --- Persian Digits ---
  function toPersianDigits(str) {
    var map = { '0':'۰','1':'۱','2':'۲','3':'۳','4':'۴','5':'۵','6':'۶','7':'۷','8':'۸','9':'۹' };
    return str.replace(/[0-9]/g, function (d) { return map[d]; });
  }

  function applyPersianDigits() {
    document.querySelectorAll('[data-pp-num]').forEach(function (el) {
      el.textContent = toPersianDigits(el.textContent);
    });
  }

  // --- Init ---
  function init() {
    initReveal();
    initBurger();
    applyPersianDigits();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();