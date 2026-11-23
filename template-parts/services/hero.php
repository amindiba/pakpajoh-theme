<?php
/**
 * Hero Section — Services — PakPajoh Theme
 */
?>
<section class="hero-section" aria-label="بخش معرفی" style="min-height: 39vh;">
    <div class="hero-slider">
        <div class="hero-slide active">
            <div class="hero-bg">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/activities-hero.jpg' ); ?>" alt="نظافت صنعتی پاک‌پژوه" loading="eager" fetchpriority="high">
                <div class="hero-overlay"></div>
            </div>
        </div>
    </div>

    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">خدمات پاکیزگی فراتر از نظافت روزمره</h1>
            <p class="hero-desc">پاک‌پژوه با شناخت شرایط هر محیط، برنامه‌ای متناسب طراحی می‌کند، اجرای خدمات را مدیریت می‌کند و کیفیت آن‌ها را می‌سنجد تا پاکیزگی محیط به فرایندی برنامه‌ریزی‌شده تبدیل شود.</p>

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
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">
                    <span>مشاهده خدمات</span>
                </a>
            </div>

            <div class="hero-pagination" aria-hidden="true">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>
