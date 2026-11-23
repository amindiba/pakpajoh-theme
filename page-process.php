<?php
/**
 * Template Name: صفحه مراحل همکاری
 */
get_header();
?>
<div class="process-page">

<section class="hero-section process-hero" aria-label="بخش معرفی">
    <div class="hero-slider">
        <div class="hero-slide active">
            <div class="hero-bg">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/process-hero.jpeg' ); ?>" alt="روش کار پاک‌پژوه" loading="eager" fetchpriority="high">
                <div class="hero-overlay"></div>
            </div>
        </div>
    </div>

    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">پاکیزگی قابل اندازه‌گیری، با یک روش کار مشخص</h1>
            <p class="hero-desc">در پاک‌پژوه، خدمات پاکیزگی با شناخت محیط، طراحی برنامه‌ای متناسب، مدیریت اجرا، ارزیابی کیفیت و مستندسازی ارائه می‌شوند.</p>

            <div class="hero-actions">
                <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="btn btn-primary request-visit-cta">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <span><?php echo esc_html( get_option( 'pakpajoh_text_home_hero_btn1', 'درخواست بازدید اولیه رایگان' ) ); ?></span>
                </a>
                <a href="#process-steps" class="btn btn-outline">
                    <span>مشاهده مراحل همکاری</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pp-why" aria-label="چرا پیش از اجرا، محیط را می‌شناسیم؟">
    <div class="pp-why-inner">
        <div class="pp-why-badge-wrap">
            <div class="pp-why-badge">
                <span class="pp-why-check">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </span>
                <span class="pp-why-badge-text">هر پروژه،<br>یک برنامه مشخص</span>
            </div>
            <div class="pp-why-divider"></div>
        </div>
        <div class="pp-why-content">
            <h2 class="pp-why-title">چرا پیش از اجرا، محیط را می‌شناسیم؟</h2>
            <p class="pp-why-desc">محیط‌های کاری از نظر نوع فعالیت، وسعت، تجهیزات و شرایط بهره‌برداری با یکدیگر متفاوت‌اند. بنابراین، برنامه پاکیزگی باید بر اساس شرایط واقعی هر مجموعه طراحی شود.</p>
        </div>
        <div class="pp-why-image">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/process-why.webp' ); ?>" alt="شناخت محیط پیش از اجرا" loading="lazy">
        </div>
    </div>
</section>

<style>
    body { background: #FAFCFF !important; }
    .pp-why-inner {
        max-width: 100%; margin: 0 auto; padding: 4px 24px;
        display: flex; align-items: center; gap: 32px;
    }
    .pp-why-badge-wrap { flex: 0 0 auto; display: flex; align-items: center; gap: 24px; }
    .pp-why-badge {
        display: flex; flex-direction: column; align-items: center; gap: 10px;
        background: transparent; border-radius: 16px; padding: 16px 20px;
    }
    .pp-why-check {
        width: 40px; height: 40px; border-radius: 50%; background: #2FA84F;
        display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .pp-why-check svg { width: 20px; height: 20px; }
    .pp-why-badge-text { font-weight: 800; color: #0A2540; font-size: 0.95rem; line-height: 1.55; text-align: center; }
    .pp-why-divider { width: 3px; height: 120px; background: #93C5FD; }
    .pp-why-content { flex: 1; }
    .pp-why-title { font-size: 1.8rem; font-weight: 800; color: #0A2540; margin: 0 0 12px; line-height: 1.5; }
    .pp-why-desc { font-size: 1.1rem; font-weight: 700; color: #555555; line-height: 1.95; margin: 0; }
    .pp-why-image { flex: 0 0 24%; }
    .pp-why-image img { width: 100%; height: auto; max-height: 120px; display: block; object-fit: contain; transform: scale(1.5); transform-origin: center; }
    @media (max-width: 900px) {
        .pp-why-inner { flex-direction: column; text-align: center; gap: 24px; }
        .pp-why-badge-wrap { order: -1; }
        .pp-why-image { flex-basis: auto; max-width: 240px; }
    }
</style>

<style>
    .pp-steps-title { text-align: center; font-size: 22px; font-weight: 800; color: #003b73; margin-bottom: 40px; position: relative; display: inline-block; }
    .pp-steps-title::before, .pp-steps-title::after { content: ''; position: absolute; top: 50%; width: 16vw; height: 3px; transform: translateY(-50%); }
    .pp-steps-title::before { left: 100%; margin-left: 12px; background: linear-gradient(to right, #35BA38, transparent); }
    .pp-steps-title::after { right: 100%; margin-right: 12px; background: linear-gradient(to left, #35BA38, transparent); }
    .pp-step-card { transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease; cursor: default; border: 2px solid #D1D5DB; }
    .pp-step-card .pp-step-arrow { position: absolute; top: 50%; right: -18px; transform: translateY(-50%); color: #4caf50; font-size: 20px; font-weight: bold; z-index: 5; }
    .pp-step-card .pp-step-circle { position: absolute; top: 0; left: 50%; transform: translate(-50%, -50%); width: 59px; height: 59px; background: #4caf50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 29px; font-weight: bold; box-shadow: 0 2px 4px rgba(0,0,0,0.15); z-index: 10; transition: background 0.4s ease, transform 0.4s ease; }
    .pp-step-card .pp-step-title { font-size: 16px; font-weight: 800; color: #003b73; line-height: 1.5; margin-bottom: 10px; min-height: 50px; display: flex; align-items: center; justify-content: center; }
    .pp-step-card .pp-step-desc { font-size: 14px; font-weight: 700; color: #003b73; line-height: 1.6; }
</style>

<section class="pp-steps" id="process-steps" aria-label="مراحل همکاری با پاک‌پژوه">
    <div class="pp-steps-container">
        <h2 class="pp-steps-title">مراحل همکاری با پاک‌پژوه</h2>
        <div class="pp-steps-cards">
<div class="pp-step-card">
<div class="pp-step-circle">۱</div>
                <div class="pp-step-title">دریافت درخواست و شناخت اولیه نیازها</div>
                <div class="pp-step-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-1.jpeg' ); ?>" alt="ثبت درخواست خدمات" loading="lazy"></div>
                <div class="pp-step-desc">ثبت درخواست و ارائه اطلاعات اولیه</div>
            </div>
<div class="pp-step-card">
<div class="pp-step-circle">۲</div>
                <div class="pp-step-title">بازدید و شناخت محیط</div>
                <div class="pp-step-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-2.jpeg' ); ?>" alt="بازدید و شناخت محیط" loading="lazy"></div>
                <div class="pp-step-desc">بررسی شرایط و ابزارهای مجموعه</div>
            </div>
<div class="pp-step-card">
<div class="pp-step-circle">۳</div>
                <div class="pp-step-title">طراحی برنامه پاکیزگی</div>
                <div class="pp-step-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-3.jpg' ); ?>" alt="طراحی برنامه پاکیزگی" loading="lazy"></div>
                <div class="pp-step-desc">تعیین روش، تنظیم و معیارهای کیفیت</div>
            </div>
<div class="pp-step-card">
<div class="pp-step-circle">۴</div>
                <div class="pp-step-title">سازماندهی منابع و آماده‌سازی اجرا</div>
                <div class="pp-step-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-4.jpg' ); ?>" alt="آماده‌سازی منابع و تجهیزات" loading="lazy"></div>
                <div class="pp-step-desc">تأمین نیروی انسانی و تجهیزات مورد نیاز</div>
            </div>
<div class="pp-step-card">
<div class="pp-step-circle">۵</div>
                <div class="pp-step-title">اجرا و کنترل کیفیت</div>
                <div class="pp-step-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-5.jpeg' ); ?>" alt="اجرای خدمات و کنترل کیفیت" loading="lazy"></div>
                <div class="pp-step-desc">اجرای خدمات و ارزیابی کیفیت</div>
            </div>
<div class="pp-step-card">
                <div class="pp-step-circle">۶</div>
                <div class="pp-step-title">مستندسازی و بهبود</div>
                <div class="pp-step-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/step-6.jpg' ); ?>" alt="گزارش عملکرد و بهبود مستمر" loading="lazy"></div>
                <div class="pp-step-desc">ارائه گزارش و بهبود مستمر</div>
            </div>
        </div>
    </div>
</section>

<section class="pp-s7" aria-label="انعطاف‌پذیری در تأمین و اجرای خدمات">
    <style>
        .pp-s7 .pp-s7-container { width: 100%; margin: 0 auto; padding: 0 24px; box-sizing: border-box; background: linear-gradient(135deg, #f0faf7 0%, #e8f5f0 50%, #f5fbf9 100%); border-radius: 24px; padding: 35px 40px; box-shadow: 0 8px 32px rgba(0,80,120,0.06), 0 2px 8px rgba(0,80,120,0.04), inset 0 1px 0 rgba(255,255,255,0.8); border: 1px solid rgba(255,255,255,0.6); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4,0,0.2,1); }
        .pp-s7 .pp-s7-container:hover { box-shadow: 0 12px 40px rgba(0,80,120,0.1), 0 4px 12px rgba(0,80,120,0.06), inset 0 1px 0 rgba(255,255,255,0.8); }
        .pp-s7 .pp-s7-title { font-size: 24px; font-weight: 800; color: #0a4a7a; line-height: 1.6; margin-bottom: 14px; text-align: center; }
        .pp-s7 .pp-s7-desc { font-size: 15px; font-weight: 700; color: #1565a8; line-height: 1.9; text-align: justify; text-align-last: center; margin-bottom: 16px; }
        .pp-s7 .pp-s7-highlight { background: rgba(10,74,122,0.08); border-right: 3px solid #0a4a7a; padding: 12px 16px; border-radius: 8px; margin: 16px 0; }
        .pp-s7 .pp-s7-highlight p { font-size: 15px; color: #0a4a7a; line-height: 1.9; font-weight: 700; text-align: justify; text-align-last: right; }
        .pp-s7 .pp-s7-list { list-style: none; padding: 0; margin: 16px 0 0; display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; }
        .pp-s7 .pp-s7-list li { background: rgba(255,255,255,0.9); border: 1px solid rgba(10,74,122,0.15); border-radius: 20px; padding: 8px 16px; font-size: 14px; color: #0a4a7a; font-weight: 700; cursor: default; transition: all 0.3s ease; }
    </style>
    <div class="pp-s7-container">
        <h2 class="pp-s7-title">ساختار اجرا، متناسب با نیاز هر پروژه</h2>
        <p class="pp-s7-desc">پروژه‌ها از نظر وسعت، نوع فعالیت، تعداد فضاها، ساعات بهره‌برداری و سطح خدمات مورد نیاز یکسان نیستند. به همین دلیل، پاک‌پژوه ساختار اجرایی خود را متناسب با شرایط هر پروژه سازمان‌دهی می‌کند.</p>
        <div class="pp-s7-highlight">
            <p>تأمین منابع می‌تواند با استفاده از ترکیبی از نیروهای داخلی و همکاران قراردادی انجام شود. ترکیب منابع، نحوهٔ سازمان‌دهی و مسئولیت‌ها در پیشنهاد اجرایی و توافق همکاری مشخص خواهد شد.</p>
        </div>
        <p class="pp-s7-desc">هدف این است که ساختار اجرا با نیاز واقعی پروژه متناسب باشد؛ نه اینکه یک الگوی ثابت برای همه مجموعه‌ها به کار گرفته شود.</p>
        <ul class="pp-s7-list">
            <li>نیروهای داخلی</li>
            <li>همکاران قراردادی</li>
            <li>ترکیب متناسب</li>
            <li>سازماندهی انعطاف‌پذیر</li>
        </ul>
    </div>
</section>
<section class="pp-s8" aria-label="شناسنامه مهندسی فضا">
    <style>
        .pp-s8 .pp-s8-container { width: 100%; margin: 0 auto; padding: 0 24px; box-sizing: border-box; background: linear-gradient(135deg, #f0f7fa 0%, #e8f0f8 50%, #f5fafd 100%); border-radius: 24px; padding: 35px 40px; box-shadow: 0 8px 32px rgba(0,80,120,0.06), 0 2px 8px rgba(0,80,120,0.04), inset 0 1px 0 rgba(255,255,255,0.8); border: 1px solid rgba(255,255,255,0.6); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4,0,0.2,1); }
        .pp-s8 .pp-s8-container:hover { box-shadow: 0 12px 40px rgba(0,80,120,0.1), 0 4px 12px rgba(0,80,120,0.06), inset 0 1px 0 rgba(255,255,255,0.8); }
        .pp-s8 .pp-s8-title { font-size: 20px; font-weight: 800; color: #0a4a7a; line-height: 1.6; margin-bottom: 14px; text-align: center; }
        .pp-s8 .pp-s8-desc { font-size: 13px; color: #1565a8; line-height: 1.9; text-align: justify; text-align-last: center; margin-bottom: 20px; }
        .pp-s8 .pp-s8-list { list-style: none; padding: 0; margin: 0 0 20px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .pp-s8 .pp-s8-list li { background: rgba(255,255,255,0.9); border: 1px solid rgba(10,74,122,0.12); border-radius: 12px; padding: 10px 14px; font-size: 14px; color: #0a4a7a; font-weight: 700; text-align: right; display: flex; align-items: center; gap: 8px; transition: all 0.3s ease; cursor: default; }
        .pp-s8 .pp-s8-list li svg { width: 7px; height: 7px; fill: #0a4a7a; flex-shrink: 0; transition: fill 0.3s ease, transform 0.3s ease; }
        .pp-s8 .pp-s8-btn { display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #0d5a8f 0%, #0a4a7a 100%); color: white; border: none; border-radius: 24px; padding: 10px 22px; font-size: 12px; font-weight: 600; cursor: pointer; font-family: 'Vazirmatn', Tahoma, sans-serif; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); box-shadow: 0 4px 12px rgba(13,90,143,0.2); text-decoration: none; }
        .pp-s8 .pp-s8-btn:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(13,90,143,0.35); background: linear-gradient(135deg, #0e6aa3 0%, #0b558f 100%); }
        .pp-s8 .pp-s8-btn-wrap { text-align: center; }
        @media (max-width: 768px) {
            .pp-s8 .pp-s8-list { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
    <div class="pp-s8-container">
        <h2 class="pp-s8-title">شناسنامه مهندسی فضا؛ مبنای شناخت و برنامه‌ریزی</h2>
        <p class="pp-s8-desc">یکی از مبانی طراحی برنامه در پاک‌پژوه، شناخت ساختار و ویژگی‌های فضاهای تحت پوشش است. برای آنکه برنامهٔ پاکیزگی صرفاً بر اساس مساحت یا تعداد نیرو تعیین نشود، از مفهوم «شناسنامهٔ مهندسی فضا» استفاده می‌کنیم.</p>
        <ul class="pp-s8-list">
            <li>نام و کد فضا</li>
            <li>نوع کاربری</li>
            <li>مساحت و مشخصات فیزیکی</li>
            <li>نوع کف و سطوح</li>
            <li>تجهیزات و امکانات موجود</li>
            <li>میزان تردد و ساعات بهره‌برداری</li>
            <li>نوع آلودگی‌های محتمل</li>
            <li>حساسیت‌ها و محدودیت‌های اجرایی</li>
            <li>روش و تناوب پیشنهادی پاکیزگی</li>
            <li>معیارهای ارزیابی کیفیت</li>
        </ul>
        <div class="pp-s8-btn-wrap">
            <a href="<?php echo esc_url( home_url( '/space-passport/' ) ); ?>" class="pp-s8-btn">آشنایی با شناسنامه مهندسی فضا</a>
        </div>
    </div>
</section>
<section class="pp-s4" aria-label="خدمات پاک‌پژوه">
    <style>
        .pp-s4 .pp-s4-container { display: flex; flex-direction: row-reverse; justify-content: center; gap: 24px; width: 100%; margin: 0 auto; padding: 0 24px; box-sizing: border-box; }
        .pp-s4 .pp-s4-card { flex: 1; min-width: 280px; max-width: 400px; background: linear-gradient(180deg, #f8fafc 0%, #eef2f7 50%, #dce8f5 100%); border-radius: 18px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.06), 0 2px 6px rgba(0,0,0,0.04), inset 0 1px 0 rgba(255,255,255,0.8); border: 1px solid rgba(255,255,255,0.6); display: flex; flex-direction: column; transition: all 0.4s cubic-bezier(0.4,0,0.2,1); position: relative; }
        .pp-s4 .pp-s4-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.1), 0 8px 16px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.8); }
        .pp-s4 .pp-s4-card-header { background: linear-gradient(135deg, #0a4a7a 0%, #0d5a8f 100%); padding: 10px 14px; position: relative; min-height: 48px; display: flex; align-items: center; flex-direction: row; gap: 10px; }
        .pp-s4 .pp-s4-card-title { color: white; font-size: 20px; font-weight: 800; line-height: 1.4; text-align: right; flex: 1; z-index: 1; }
        .pp-s4 .pp-s4-card-icon { width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; order: -1; z-index: 1; transition: transform 0.3s ease; }
        .pp-s4 .pp-s4-card:hover .pp-s4-card-icon { transform: scale(1.1) rotate(-5deg); }
        .pp-s4 .pp-s4-card-icon svg { width: 30px; height: 30px; fill: white; transition: transform 0.3s ease; filter: drop-shadow(0 1px 2px rgba(0,0,0,0.1)); }
        .pp-s4 .pp-s4-card:hover .pp-s4-card-icon svg { transform: scale(1.05); }
        .pp-s4 .pp-s4-card-body { padding: 12px 2px 2px; flex: 1; display: flex; flex-direction: column; position: relative; }
        .pp-s4 .pp-s4-card-desc { color: #4a6b8a; font-size: 16px; font-weight: 700; line-height: 1.85; text-align: justify; text-align-last: right; padding: 0 14px 10px; position: relative; z-index: 2; overflow: hidden; text-overflow: ellipsis; max-height: 60px; }
        .pp-s4 .pp-s4-card-image-wrap { position: relative; width: 100%; padding: 0 2px 2px; z-index: 1; flex: 1; min-height: 140px; }
        .pp-s4 .pp-s4-card-image { width: 100%; height: 100%; min-height: 140px; border-radius: 0 0 14px 14px; overflow: hidden; position: relative; display: flex; align-items: flex-end; }
        .pp-s4 .pp-s4-card-image::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 50px; background: linear-gradient(to bottom, rgba(248,250,252,1) 0%, rgba(248,250,252,0.9) 30%, rgba(248,250,252,0.5) 60%, rgba(248,250,252,0) 100%); z-index: 2; pointer-events: none; }
        .pp-s4 .pp-s4-image-placeholder { width: 100%; height: 100%; min-height: 140px; display: flex; align-items: flex-start; justify-content: center; position: relative; overflow: hidden; }
        .pp-s4 .pp-s4-doc-image { background: linear-gradient(135deg, #f0f4f8 0%, #e0e8f0 100%); }
        .pp-s4 .pp-s4-doc-sheet { position: absolute; width: 68%; height: 78%; background: white; border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); top: 28%; left: 16%; transform: rotate(-3deg); padding: 8px; }
        .pp-s4 .pp-s4-doc-sheet::before { content: ''; position: absolute; top: -5px; left: 20px; width: 60px; height: 22px; background: linear-gradient(135deg, #7cb342 0%, #8bc34a 100%); border-radius: 3px; transform: rotate(-5deg); box-shadow: 0 1px 3px rgba(0,0,0,0.15); }
        .pp-s4 .pp-s4-doc-lines { margin-top: 18px; }
        .pp-s4 .pp-s4-doc-line { height: 3px; background: #e0e0e0; border-radius: 2px; margin-bottom: 5px; }
        .pp-s4 .pp-s4-doc-line:nth-child(1) { width: 90%; }
        .pp-s4 .pp-s4-doc-line:nth-child(2) { width: 75%; }
        .pp-s4 .pp-s4-doc-line:nth-child(3) { width: 85%; }
        .pp-s4 .pp-s4-doc-line:nth-child(4) { width: 60%; }
        .pp-s4 .pp-s4-doc-logo { position: absolute; top: 8px; right: 8px; width: 28px; height: 28px; background: linear-gradient(135deg, #2196f3 0%, #1976d2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 10px; font-weight: bold; }
        .pp-s4 .pp-s4-pen-image { background: linear-gradient(135deg, #f5f7fa 0%, #eef1f5 100%); }
        .pp-s4 .pp-s4-paper-sheet { position: absolute; width: 72%; height: 68%; background: white; border-radius: 4px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); top: 30%; left: 14%; }
        .pp-s4 .pp-s4-checklist-item { display: flex; align-items: center; padding: 3px 8px; border-bottom: 1px solid #f0f0f0; }
        .pp-s4 .pp-s4-check-box { width: 10px; height: 10px; border: 1.5px solid #4caf50; border-radius: 2px; margin-left: 6px; flex-shrink: 0; position: relative; }
        .pp-s4 .pp-s4-check-box.checked::after { content: '✓'; position: absolute; top: -4px; left: 0; color: #4caf50; font-size: 10px; font-weight: bold; }
        .pp-s4 .pp-s4-check-text { height: 3px; background: #e0e0e0; border-radius: 2px; flex: 1; }
        .pp-s4 .pp-s4-pen-object { position: absolute; bottom: 12px; right: 15%; width: 70%; height: 10px; background: linear-gradient(180deg, #ffd700 0%, #daa520 50%, #b8860b 100%); border-radius: 5px; transform: rotate(-8deg); box-shadow: 0 2px 4px rgba(0,0,0,0.15); }
        .pp-s4 .pp-s4-pen-object::before { content: ''; position: absolute; left: -8px; top: 1px; width: 20px; height: 8px; background: linear-gradient(180deg, #333 0%, #111 100%); border-radius: 2px 0 0 2px; }
        .pp-s4 .pp-s4-laptop-image { background: linear-gradient(135deg, #f0f4f8 0%, #e4eaf2 100%); }
        .pp-s4 .pp-s4-laptop-frame { position: absolute; width: 72%; height: 58%; background: #37474f; border-radius: 6px 6px 0 0; top: 32%; left: 14%; padding: 4px 4px 0 4px; box-shadow: 0 3px 10px rgba(0,0,0,0.15); }
        .pp-s4 .pp-s4-laptop-screen { width: 100%; height: 100%; background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); border-radius: 3px 3px 0 0; position: relative; overflow: hidden; }
        .pp-s4 .pp-s4-chart-area { position: absolute; top: 8px; left: 8px; right: 8px; bottom: 8px; }
        .pp-s4 .pp-s4-bar-chart { display: flex; align-items: flex-end; justify-content: center; gap: 4px; height: 50%; padding: 0 10px; }
        .pp-s4 .pp-s4-bar { width: 8px; background: linear-gradient(180deg, #42a5f5 0%, #1976d2 100%); border-radius: 2px 2px 0 0; }
        .pp-s4 .pp-s4-bar:nth-child(1) { height: 40%; }
        .pp-s4 .pp-s4-bar:nth-child(2) { height: 70%; }
        .pp-s4 .pp-s4-bar:nth-child(3) { height: 55%; }
        .pp-s4 .pp-s4-bar:nth-child(4) { height: 85%; }
        .pp-s4 .pp-s4-bar:nth-child(5) { height: 60%; }
        .pp-s4 .pp-s4-pie-charts { position: absolute; bottom: 5px; right: 5px; display: flex; gap: 4px; }
        .pp-s4 .pp-s4-pie { width: 16px; height: 16px; border-radius: 50%; background: conic-gradient(#42a5f5 0deg 210deg, #e3f2fd 210deg 360deg); border: 1px solid rgba(0,0,0,0.05); }
        .pp-s4 .pp-s4-pie:nth-child(2) { background: conic-gradient(#66bb6a 0deg 120deg, #e8f5e9 120deg 360deg); }
        .pp-s4 .pp-s4-laptop-base { position: absolute; bottom: 14%; left: 12%; width: 76%; height: 6px; background: linear-gradient(180deg, #546e7a 0%, #455a64 100%); border-radius: 0 0 3px 3px; }
        .pp-s4 .pp-s4-plant { position: absolute; bottom: 14%; right: 6%; width: 14px; height: 22px; }
        .pp-s4 .pp-s4-pot { position: absolute; bottom: 0; width: 100%; height: 10px; background: linear-gradient(180deg, #8d6e63 0%, #6d4c41 100%); border-radius: 2px; }
        .pp-s4 .pp-s4-leaf { position: absolute; bottom: 8px; left: 50%; transform: translateX(-50%); width: 8px; height: 14px; background: linear-gradient(135deg, #66bb6a 0%, #43a047 100%); border-radius: 50% 50% 50% 0; transform-origin: bottom center; }
        .pp-s4 .pp-s4-leaf:nth-child(2) { transform: translateX(-50%) rotate(-30deg); left: 30%; }
        .pp-s4 .pp-s4-leaf:nth-child(3) { transform: translateX(-50%) rotate(30deg); left: 70%; }
        .pp-s4 .pp-s4-card-footer { position: absolute; bottom: 14px; left: 50%; transform: translateX(-50%); z-index: 10; }
        .pp-s4 .pp-s4-card-button { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.95); border: 1px solid rgba(200,210,230,0.5); border-radius: 20px; padding: 10px 22px; color: #1565c0; font-size: 13px; font-weight: 600; cursor: pointer; font-family: 'Vazirmatn', Tahoma, sans-serif; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); box-shadow: 0 2px 8px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.04); backdrop-filter: blur(4px); white-space: nowrap; }
        .pp-s4 .pp-s4-card-button:hover { background: #ffffff; transform: translateY(-2px); box-shadow: 0 6px 16px rgba(21,101,192,0.15); border-color: rgba(21,101,192,0.2); }
        .pp-s4 .pp-s4-btn-icon { width: 14px; height: 14px; background: #1565c0; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 9px; flex-shrink: 0; transition: all 0.3s ease; }
        .pp-s4 .pp-s4-card-button:hover .pp-s4-btn-icon { background: #0d47a1; transform: translateX(-2px); }
        @media (max-width: 768px) {
            .pp-s4 .pp-s4-container { flex-direction: column; align-items: center; }
            .pp-s4 .pp-s4-card { width: 100%; max-width: 320px; }
        }
    </style>
    <div class="pp-s4-container">
        <div class="pp-s4-card">
            <div class="pp-s4-card-header">
                <div class="pp-s4-card-icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/></svg></div>
                <div class="pp-s4-card-title">مستندسازی و گزارش‌دهی</div>
            </div>
            <div class="pp-s4-card-body">
                <div class="pp-s4-card-desc">تمام فعالیت‌ها ثبت و گزارش می‌شود تا تصویر شفافی از عملکرد ارائه کرده و بهبود مستمر را تسهیل نماید.</div>
                <div class="pp-s4-card-image-wrap">
                    <div class="pp-s4-card-image">
                        <div class="pp-s4-image-placeholder pp-s4-doc-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/s4-card-1.jpeg' ); ?>" alt="نمونه مستندات گزارش عملکرد" loading="lazy"></div>
                    </div>
                </div>
            </div>
            <div class="pp-s4-card-footer">
                <a href="<?php echo esc_url( home_url( '/services/#documentation' ) ); ?>" class="pp-s4-card-button"><span class="pp-s4-btn-icon">←</span><span>مشاهده خدمات مستندسازی</span></a>
            </div>
        </div>
        <div class="pp-s4-card">
            <div class="pp-s4-card-header">
                <div class="pp-s4-card-icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-1 17l-4-4 1.41-1.41L11 14.17l6.59-6.59L19 9l-8 8z"/></svg></div>
                <div class="pp-s4-card-title">کنترل کیفیت؛ معیار کیفیت خدمات</div>
            </div>
            <div class="pp-s4-card-body">
                <div class="pp-s4-card-desc">کیفیت باید قابل اندازه‌گیری باشد. ما با نظارت مستمر و ارزیابی بر اساس معیارهای مشخص، کیفیت خدمات را تضمین می‌کنیم.</div>
                <div class="pp-s4-card-image-wrap">
                    <div class="pp-s4-card-image">
                        <div class="pp-s4-image-placeholder pp-s4-pen-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/s4-card-2.jpg' ); ?>" alt="ارزیابی و کنترل کیفیت خدمات" loading="lazy"></div>
                    </div>
                </div>
            </div>
            <div class="pp-s4-card-footer">
                <a href="<?php echo esc_url( home_url( '/services/#quality-control' ) ); ?>" class="pp-s4-card-button"><span class="pp-s4-btn-icon">←</span><span>جزئیات کنترل کیفیت</span></a>
            </div>
        </div>
        <div class="pp-s4-card">
            <div class="pp-s4-card-header">
                <div class="pp-s4-card-icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></div>
                <div class="pp-s4-card-title">شناسنامه مهندسی فضا</div>
            </div>
            <div class="pp-s4-card-body">
                <div class="pp-s4-card-desc">شناسنامهٔ مهندسی فضا، اطلاعاتی مانند کاربری، مساحت، نوع سطوح، میزان تردد و نیازهای ویژه را در بر می‌گیرد.</div>
                <div class="pp-s4-card-image-wrap">
                    <div class="pp-s4-card-image">
                        <div class="pp-s4-image-placeholder pp-s4-laptop-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/s4-card-3.jpg' ); ?>" alt="ثبت مشخصات و ویژگی‌های فضا" loading="lazy"></div>
                    </div>
                </div>
            </div>
            <div class="pp-s4-card-footer">
                <a href="<?php echo esc_url( home_url( '/space-passport/' ) ); ?>" class="pp-s4-card-button"><span class="pp-s4-btn-icon">←</span><span>آشنایی با شناسنامه فضا</span></a>
            </div>
        </div>
    </div>
</section>
<section class="pp-s5" aria-label="روش کار ما">
    <style>
        .pp-s5 .pp-s5-section { width: 100%; margin: 0 auto; background: linear-gradient(135deg, #f0faf7 0%, #e8f5f0 50%, #f5fbf9 100%); border-radius: 24px; padding: 35px 45px; display: flex; align-items: center; justify-content: space-between; gap: 40px; box-shadow: 0 8px 32px rgba(0,80,120,0.06), 0 2px 8px rgba(0,80,120,0.04), inset 0 1px 0 rgba(255,255,255,0.8); border: 1px solid rgba(255,255,255,0.6); position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.4,0,0.2,1); }
        .pp-s5 .pp-s5-section:hover { box-shadow: 0 12px 40px rgba(0,80,120,0.1), 0 4px 12px rgba(0,80,120,0.06), inset 0 1px 0 rgba(255,255,255,0.8); }
        .pp-s5 .pp-s5-section::before { content: ''; position: absolute; top: -60%; right: -15%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(200,230,255,0.15) 0%, transparent 70%); pointer-events: none; }
        .pp-s5 .pp-s5-section::after { content: ''; position: absolute; bottom: -40%; left: -10%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(200,255,230,0.12) 0%, transparent 70%); pointer-events: none; }
        .pp-s5 .pp-s5-content { flex: 0 0 368px; z-index: 1; text-align: center; }
        .pp-s5 .pp-s5-title { font-size: 26px; font-weight: 800; color: #0a4a7a; line-height: 1.6; margin-bottom: 14px; text-align: center; transition: color 0.3s ease; }
        .pp-s5 .pp-s5-section:hover .pp-s5-title { color: #073d65; }
        .pp-s5 .pp-s5-desc { font-size: 15px; font-weight: 700; color: #1565a8; line-height: 1.9; text-align: center; text-align-last: center; margin-bottom: 22px; transition: color 0.3s ease; }
        .pp-s5 .pp-s5-btn { display: inline-flex; margin: 0 auto; align-items: center; flex-direction: row-reverse; gap: 8px; background: linear-gradient(135deg, #0d5a8f 0%, #0a4a7a 100%); color: white; border: none; border-radius: 24px; padding: 10px 22px; font-size: 12px; font-weight: 600; cursor: pointer; font-family: 'Vazirmatn', Tahoma, sans-serif; transition: all 0.3s cubic-bezier(0.4,0,0.2,1); box-shadow: 0 4px 12px rgba(13,90,143,0.2); position: relative; overflow: hidden; }
        .pp-s5 .pp-s5-btn::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.5s ease; }
        .pp-s5 .pp-s5-btn:hover::before { left: 100%; }
        .pp-s5 .pp-s5-btn:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(13,90,143,0.35); background: linear-gradient(135deg, #0e6aa3 0%, #0b558f 100%); }
        .pp-s5 .pp-s5-btn:active { transform: translateY(-1px); }
        .pp-s5 .pp-s5-btn-icon { width: 18px; height: 18px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 10px; transition: all 0.3s ease; }
        .pp-s5 .pp-s5-btn:hover .pp-s5-btn-icon { background: rgba(255,255,255,0.3); transform: translateX(-3px); }
        .pp-s5 .pp-s5-circles { display: flex; align-items: center; gap: 8px; flex: 1; justify-content: flex-end; z-index: 1; }
        .pp-s5 .pp-s5-circle-item { display: flex; flex-direction: column; align-items: center; gap: 10px; cursor: pointer; transition: transform 0.4s cubic-bezier(0.4,0,0.2,1); }
        .pp-s5 .pp-s5-circle-item:hover { transform: translateY(-5px); }
        .pp-s5 .pp-s5-circle-wrapper { position: relative; width: 132px; height: 132px; }
        .pp-s5 .pp-s5-circle-image { width: 100%; height: 100%; border-radius: 50%; overflow: hidden; border: 3px solid rgba(255,255,255,0.9); box-shadow: 0 4px 12px rgba(0,80,120,0.1), 0 0 0 3px rgba(10,74,122,0.15), inset 0 0 0 1px rgba(255,255,255,0.5); position: relative; transition: all 0.4s cubic-bezier(0.4,0,0.2,1); }
        .pp-s5 .pp-s5-circle-image::before { content: ''; position: absolute; top: -6px; left: -6px; right: -6px; bottom: -6px; border-radius: 50%; border: 2px solid rgba(10,74,122,0.25); z-index: -1; transition: all 0.4s ease; }
        .pp-s5 .pp-s5-circle-item:hover .pp-s5-circle-image::before { border-color: rgba(10,74,122,0.45); top: -10px; left: -10px; right: -10px; bottom: -10px; }
        .pp-s5 .pp-s5-circle-item:hover .pp-s5-circle-image { transform: scale(1.06); box-shadow: 0 8px 24px rgba(0,80,120,0.18), 0 0 0 4px rgba(10,74,122,0.2), inset 0 0 0 1px rgba(255,255,255,0.5); }
        .pp-s5 .pp-s5-circle-placeholder { width: 100%; height: 100%; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 32px; transition: transform 0.4s ease; }
        .pp-s5 .pp-s5-circle-item:hover .pp-s5-circle-placeholder { transform: scale(1.1); }
        .pp-s5 .pp-s5-circle-1 { background: linear-gradient(135deg, #e0f2f1 0%, #b2dfdb 100%); }
        .pp-s5 .pp-s5-circle-2 { background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%); }
        .pp-s5 .pp-s5-circle-3 { background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); }
        .pp-s5 .pp-s5-circle-4 { background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%); }
        .pp-s5 .pp-s5-circle-5 { background: linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%); }
        .pp-s5 .pp-s5-circle-label { font-size: 15px; font-weight: 800; color: #073d65; text-align: center; line-height: 1.6; font-weight: 700; max-width: 100px; transition: all 0.3s ease; }
        .pp-s5 .pp-s5-circle-item:hover .pp-s5-circle-label { color: #073d65; transform: translateY(-2px); }
        .pp-s5 .pp-s5-connector { display: flex; align-items: center; justify-content: center; color: #0a4a7a; font-size: 18px; padding-bottom: 30px; opacity: 0.35; transition: all 0.3s ease; font-weight: 300; }
        .pp-s5 .pp-s5-connector:hover { opacity: 0.6; transform: translateX(-2px); }
        @media (max-width: 968px) {
            .pp-s5 .pp-s5-section { flex-direction: column; padding: 30px; }
            .pp-s5 .pp-s5-content { flex: none; width: 100%; text-align: center; }
            .pp-s5 .pp-s5-title, .pp-s5 .pp-s5-desc { text-align: center; text-align-last: center; }
            .pp-s5 .pp-s5-circles { flex-wrap: wrap; justify-content: center; }
        }
    </style>
    <div class="pp-s5-section">
        <div class="pp-s5-content">
            <h2 class="pp-s5-title">روش کار ما، انعطاف‌پذیر و متناسب با نیاز شما</h2>
            <p class="pp-s5-desc">از کارخانه و انبار تا بیمارستان و هتل، برنامه پاکیزگی بر اساس شرایط هر محیط طراحی و اجرا می‌شود.</p>
            <a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>" class="pp-s5-btn"><span>مشاهده حوزه‌های فعالیت</span><span class="pp-s5-btn-icon">←</span></a>
        </div>
        <div class="pp-s5-circles">
            <div class="pp-s5-circle-item">
                <div class="pp-s5-circle-wrapper">
                    <div class="pp-s5-circle-image">
                        <div class="pp-s5-circle-placeholder pp-s5-circle-1"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/circle-1.jpeg' ); ?>" alt="" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"></div>
                    </div>
                </div>
                <span class="pp-s5-circle-label">هتل‌ها و مراکز اقامتی</span>
            </div>
            <div class="pp-s5-connector">›</div>
            <div class="pp-s5-circle-item">
                <div class="pp-s5-circle-wrapper">
                    <div class="pp-s5-circle-image">
                        <div class="pp-s5-circle-placeholder pp-s5-circle-2"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/circle-2.jpg' ); ?>" alt="" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"></div>
                    </div>
                </div>
                <span class="pp-s5-circle-label">بیمارستان‌ها و درمانگاه‌ها</span>
            </div>
            <div class="pp-s5-connector">›</div>
            <div class="pp-s5-circle-item">
                <div class="pp-s5-circle-wrapper">
                    <div class="pp-s5-circle-image">
                        <div class="pp-s5-circle-placeholder pp-s5-circle-3"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/circle-3.jpg' ); ?>" alt="" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"></div>
                    </div>
                </div>
                <span class="pp-s5-circle-label">مراکز لجستیکی و توزیع</span>
            </div>
            <div class="pp-s5-connector">›</div>
            <div class="pp-s5-circle-item">
                <div class="pp-s5-circle-wrapper">
                    <div class="pp-s5-circle-image">
                        <div class="pp-s5-circle-placeholder pp-s5-circle-4"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/circle-4.jpg' ); ?>" alt="" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"></div>
                    </div>
                </div>
                <span class="pp-s5-circle-label">انبارها و مراکز نگهداری</span>
            </div>
            <div class="pp-s5-connector">›</div>
            <div class="pp-s5-circle-item">
                <div class="pp-s5-circle-wrapper">
                    <div class="pp-s5-circle-image">
                        <div class="pp-s5-circle-placeholder pp-s5-circle-5"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/circle-5.jpg' ); ?>" alt="" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"></div>
                    </div>
                </div>
                <span class="pp-s5-circle-label">محیط‌های صنعتی</span>
            </div>
        </div>
    </div>
</section>
<section class="pp-s6" aria-label="پرسش‌های متداول">
    <style>
        .pp-s6 .pp-s6-container { width: 100%; max-width: 900px; margin: 0 auto; }
        .pp-s6 .pp-s6-title { text-align: center; font-size: 22px; font-weight: 800; color: #003b73; margin-bottom: 30px; position: relative; display: inline-block; width: 100%; }
        .pp-s6 .pp-s6-title::before, .pp-s6 .pp-s6-title::after { content: ''; position: absolute; top: 50%; width: 16vw; height: 3px; transform: translateY(-50%); }
        .pp-s6 .pp-s6-title::before { left: 50%; margin-left: 110px; background: linear-gradient(to right, #35BA38, transparent); }
        .pp-s6 .pp-s6-title::after { right: 50%; margin-right: 110px; background: linear-gradient(to left, #35BA38, transparent); }
        .pp-s6 .pp-s6-item { background: #FFFFFF; border-radius: 16px; margin-bottom: 12px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid #E0E4E8; transition: all 0.3s ease; }
        .pp-s6 .pp-s6-item:hover { box-shadow: 0 4px 16px rgba(0,0,0,0.1); }
        .pp-s6 .pp-s6-question { display: flex; align-items: center; justify-content: space-between; padding: 16px 20px; cursor: pointer; font-size: 15px; font-weight: 700; color: #003b73; line-height: 1.6; user-select: none; transition: color 0.3s ease; }
        .pp-s6 .pp-s6-item.active .pp-s6-question { color: #1B5E4A; }
        .pp-s6 .pp-s6-icon { width: 28px; height: 28px; border-radius: 50%; background: #4CAF50; color: white; display: flex; align-items: center; justify-content: center; font-size: 16px; font-weight: bold; flex-shrink: 0; transition: transform 0.3s ease, background 0.3s ease; }
        .pp-s6 .pp-s6-item.active .pp-s6-icon { transform: rotate(45deg); background: #0a4a7a; }
        .pp-s6 .pp-s6-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0 20px; }
        .pp-s6 .pp-s6-item.active .pp-s6-answer { max-height: 500px; padding: 0 20px 16px; }
        .pp-s6 .pp-s6-answer p { font-size: 13px; color: #555; line-height: 1.9; text-align: justify; text-align-last: right; }
        .pp-s6 .pp-s6-answer ul { list-style: none; padding: 0; margin: 8px 0 0; }
        .pp-s6 .pp-s6-answer ul li { font-size: 13px; color: #555; line-height: 1.9; padding: 4px 0 4px 16px; position: relative; }
        .pp-s6 .pp-s6-answer ul li::before { content: '•'; position: absolute; right: 0; color: #4CAF50; font-weight: bold; }
    </style>
    <div class="pp-s6-container">
        <h2 class="pp-s6-title">پرسش‌های متداول</h2>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-1" data-process-faq-toggle><span>آیا پاک‌پژوه قبل از شروع کار، بازدید انجام می‌دهد؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-1" aria-hidden="true"><p>بله. بازدید اولیه با هماهنگی قبلی و در محدوده جغرافیایی تحت پوشش، بدون دریافت هزینه انجام می‌شود. این بازدید برای شناخت مقدماتی محیط و نیازهای مجموعه است.</p></div>
        </div>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-2" data-process-faq-toggle><span>آیا بازدید اولیه شامل طراحی کامل برنامه پاکیزگی است؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-2" aria-hidden="true"><p>خیر. طراحی تفصیلی، ارزیابی تخصصی و تهیه مستندات مهندسی، در صورت نیاز، جداگانه تعریف و درباره محدوده و هزینه آن توافق می‌شود.</p></div>
        </div>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-3" data-process-faq-toggle><span>آیا برنامه پاکیزگی برای همه مشتریان یکسان است؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-3" aria-hidden="true"><p>خیر. برنامه بر اساس نوع فعالیت، ویژگی‌های محیط، میزان استفاده از فضاها و سطح خدمات مورد انتظار طراحی می‌شود.</p></div>
        </div>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-4" data-process-faq-toggle><span>آیا پاک‌پژوه فقط نیروی خدماتی تأمین می‌کند؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-4" aria-hidden="true"><p>خیر. رویکرد پاک‌پژوه بر ترکیب شناخت محیط، طراحی برنامه، سازماندهی اجرا، کنترل کیفیت و مستندسازی استوار است. تأمین نیروی انسانی بخشی از ساختار اجرای خدمات است.</p></div>
        </div>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-5" data-process-faq-toggle><span>آیا امکان اجرای آزمایشی خدمات وجود دارد؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-5" aria-hidden="true"><p>در صورت تناسب با شرایط پروژه، امکان تعریف دوره آزمایشی وجود دارد. مدت، محدوده، هزینه، معیارهای ارزیابی و مسئولیت‌ها باید پیش از شروع به توافق برسند.</p></div>
        </div>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-6" data-process-faq-toggle><span>آیا گزارش عملکرد به کارفرما ارائه می‌شود؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-6" aria-hidden="true"><p>نوع، محتوای گزارش و دوره ارائه آن متناسب با نیاز پروژه و توافق طرفین تعیین می‌شود.</p></div>
        </div>
        <div class="pp-s6-item">
            <button class="pp-s6-question" type="button" aria-expanded="false" aria-controls="process-faq-answer-7" data-process-faq-toggle><span>آیا امکان تغییر برنامه پس از شروع کار وجود دارد؟</span><span class="pp-s6-icon" aria-hidden="true">+</span></button>
            <div class="pp-s6-answer" id="process-faq-answer-7" aria-hidden="true"><p>بله. در صورت تغییر شرایط محیط یا نیازهای مجموعه، برنامه می‌تواند با بررسی شرایط و توافق طرفین بازنگری شود.</p></div>
        </div>
    </div>
</section>

<script>
document.addEventListener('click', function (event) {
    if (!(event.target instanceof Element)) {
        return;
    }

    var button = event.target.closest('[data-process-faq-toggle]');
    if (!button) {
        return;
    }

    var item = button.closest('.pp-s6-item');
    var answer = document.getElementById(button.getAttribute('aria-controls'));
    var isOpen = item.classList.toggle('active');

    button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    answer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
});
</script>
</div>

<?php
get_footer();
