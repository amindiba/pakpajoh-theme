/**
 * Auto Refresh System — PakPajoh Theme (v1.1)
 * رفرش سخت (Hard Refresh) هر ۳۰ ثانیه با دور زدن کش
 */
(function () {
    'use strict';

    const REFRESH_INTERVAL = 30000; // ۳۰ ثانیه
    const STORAGE_KEY = 'pakpajoh_scroll_pos';
    const FORM_ACTIVE_KEY = 'pakpajoh_form_active';

    // ۱. بازگرداندن مکان اسکرول پس از رفرش
    if (sessionStorage.getItem(STORAGE_KEY)) {
        const savedPos = parseInt(sessionStorage.getItem(STORAGE_KEY), 10);
        window.scrollTo({ top: savedPos, behavior: 'instant' });
        sessionStorage.removeItem(STORAGE_KEY);
    }

    // ۲. تشخیص فعالیت در فرم‌ها
    const forms = document.querySelectorAll('form');
    let isFormActive = sessionStorage.getItem(FORM_ACTIVE_KEY) === 'true';

    if (forms.length > 0) {
        forms.forEach(function (form) {
            form.addEventListener('focusin', function () {
                isFormActive = true;
                sessionStorage.setItem(FORM_ACTIVE_KEY, 'true');
            });
            form.addEventListener('focusout', function () {
                setTimeout(function () {
                    const activeEl = document.activeElement;
                    if (!activeEl || !activeEl.closest('form')) {
                        isFormActive = false;
                        sessionStorage.setItem(FORM_ACTIVE_KEY, 'false');
                    }
                }, 500);
            });
        });
    }

    // ۳. تایمر رفرش سخت
    setInterval(function () {
        if (isFormActive) return;

        // ذخیره مکان اسکرول
        sessionStorage.setItem(STORAGE_KEY, window.scrollY.toString());

        // رفرش سخت با دور زدن کش (افزودن پارامتر تصادفی به URL)
        const url = new URL(window.location.href);
        url.searchParams.set('_refresh', Date.now().toString());
        window.location.replace(url.toString());
        
    }, REFRESH_INTERVAL);
})();
