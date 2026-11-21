<?php
/**
 * Hero Section — PakPajoh Theme (v6.0) - بازنویسی کامل با SVG و متن از پنل
 */
$hero_title = get_option( 'pakpajoh_text_home_hero_title', 'پاک پژوه' );
$hero_subtitle = get_option( 'pakpajoh_text_home_hero_subtitle', 'پاکسازی قابل‌اندازه‌گیری' );
$hero_desc = get_option( 'pakpajoh_text_home_hero_desc', 'طراحی، مدیریت، اجرا و کنترل کیفیت خدمات پاکسازی در محیط‌های کاری' );
$hero_btn1 = get_option( 'pakpajoh_text_home_hero_btn1', 'درخواست بازدید اولیه رایگان' );
$hero_btn2 = get_option( 'pakpajoh_text_home_hero_btn2', 'آشنایی با خدمات' );
?>
<style>
/* ===== Isolated hero mobile ===== */
@media (max-width: 640px) {
    .hero-section { display: flex; flex-direction: column; min-height: auto !important; }
    .hero-slider { position: relative; inset: auto; height: auto; width: 100%; }
    .hero-slide, .hero-slide .hero-bg { position: relative; inset: auto; height: auto; }
    .hero-slide .hero-bg img { width: 100%; height: auto; object-fit: contain; object-position: center; }
    .hero-slide .hero-overlay { display: none; }
    .hero-container { position: relative; z-index: 2; padding: 0.3rem 1rem 0; width: 100%; max-width: 100%; justify-content: center; }
    .hero-content { max-width: 100%; padding: 0.3rem 0; text-align: center; }
    .hero-section .hero-title { font-size: 1.5rem !important; line-height: 1.2; }
    .hero-section .hero-subtitle { font-size: 1rem !important; }
    .hero-section .hero-desc { font-size: 0.85rem !important; line-height: 1.6; }
    .hero-section .hero-actions { display: flex; flex-direction: row; gap: 0.4rem; flex-wrap: nowrap; margin-top: -1.2rem; position: relative; z-index: 3; justify-content: center; }
    .hero-section .hero-actions .btn { padding: 0.35rem 0.6rem; font-size: 0.65rem; white-space: nowrap; flex: 1; max-width: 48%; justify-content: center; }
    .hero-pagination { display: none !important; }
}
/* ===== Isolated hero desktop font scale ===== */
@media (min-width: 993px) {
    .hero-section .hero-title { font-size: 3.42rem !important; }
    .hero-section .hero-subtitle { font-size: 2.07rem !important; }
    .hero-section .hero-desc { font-size: 1.14rem !important; }
}
</style>
<section class="hero-section" aria-label="بخش معرفی" style="min-height: 34.5vh;">
    <div class="hero-slider">
        <div class="hero-slide active">
            <div class="hero-bg">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-home.jpeg' ); ?>" alt="نظافت صنعتی پاک پژوه" loading="eager" fetchpriority="high">
                <div class="hero-overlay"></div>
            </div>
        </div>
    </div>

    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
            <h2 class="hero-subtitle"><?php echo wp_kses_post( $hero_subtitle ); ?></h2>
            <p class="hero-desc"><?php echo wp_kses_post( $hero_desc ); ?></p>

            <div class="hero-actions">
                <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="btn btn-primary">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <span><?php echo wp_kses_post( $hero_btn1 ); ?></span>
                </a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="5 3 19 12 5 21 5 3"/>
                    </svg>
                    <span><?php echo wp_kses_post( $hero_btn2 ); ?></span>
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