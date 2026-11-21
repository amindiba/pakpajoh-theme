<?php
/**
 * Services Section — PakPajoh Theme (v1.2) - ترتیب جدید تصاویر
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<style>
.services-title { font-size: 26px !important; font-weight: 800 !important; color: #003b73 !important; }
.services-header .line-decor {
    display: block !important;
    width: 120px !important;
    height: 3px !important;
    background: linear-gradient(90deg, transparent 0%, #27AE60 50%, transparent 100%) !important;
    border-radius: 2px !important;
    opacity: 0.8 !important;
}
.svc-sub-mobile { display: none; }
.services-section { padding: 4rem 0; }
.services-header { text-align: center; margin-bottom: 0.75rem; }
.services-subtitle { text-align: center; }
@media (max-width: 640px) {
    .services-section { padding: 1.5rem 0 1.75rem; }
    .services-container { padding: 0 8px !important; }
    .services-header { gap: 8px !important; margin-bottom: 0.35rem !important; }
    .services-title { font-size: 17px !important; line-height: 1.45; }
    .services-header .line-decor { display: none !important; }
    .svc-sub-desktop { display: none; }
    .svc-sub-mobile { display: inline; }
    .services-subtitle { font-size: 10.5px !important; line-height: 1.5; margin: 0 0 0.65rem !important; }
    .services-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 7px !important;
        margin-top: 0 !important;
    }
    .service-card { min-width: 0; border-radius: 12px !important; }
    .service-card-image { height: 92px !important; }
    .service-card-body { padding: 8px 7px 9px !important; }
    .service-card-title { font-size: 11.5px !important; line-height: 1.35; margin-bottom: 4px !important; min-height: 31px; }
    .service-num { margin-left: 2px; }
    .service-card-desc {
        font-size: 9.5px !important;
        line-height: 1.5 !important;
        min-height: 0 !important;
        display: block !important;
        -webkit-line-clamp: unset !important;
        overflow: visible !important;
    }
}
@media (max-width: 380px) {
    .services-container { padding-left: 6px !important; padding-right: 6px !important; }
    .services-grid { gap: 5px !important; }
    .service-card-image { height: 82px !important; }
    .service-card-body { padding: 7px 6px 8px !important; }
    .service-card-title { font-size: 10.5px !important; }
    .service-card-desc { font-size: 9px !important; }
}
</style>
<section class="services-section" aria-label="خدمات اصلی">
    <div class="services-container">
        
<div class="services-header" style="display:flex; align-items:center; justify-content:center; gap:16px;">
    <span class="line-decor"></span>
    <h2 class="services-title"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_services_title", "چهار محور اصلی خدمات ما" ) ); ?></h2>
    <span class="line-decor"></span>
        </div>
            <p class="services-subtitle">
    <span class="svc-sub-desktop"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_services_subtitle", "طراحی، اجرا، کنترل و مستندسازی خدمات پاک‌سازی" ) ); ?></span>
    <span class="svc-sub-mobile">طراحی، اجرا، کنترل، مستندسازی</span>
</p>

        <div class="services-grid">
            <!-- کارت ۱: طراحی و برنامه‌ریزی -->
            <div class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/a3.jpg' ); ?>" alt="طراحی و برنامه‌ریزی" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3 class="service-card-title"><span class="service-num">۱.</span> طراحی و برنامه‌ریزی خدمات پاک‌سازی</h3>
                    <p class="service-card-desc">شناخت نیازهای محیط، تدوین برنامه، تعیین روش‌ها، زمان‌بندی و مسئولیت‌ها</p>
                </div>
            </div>

            <!-- کارت ۲: اجرا و مدیریت عملیات -->
            <div class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/a4.jpg' ); ?>" alt="اجرا و مدیریت عملیات" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3 class="service-card-title"><span class="service-num">۲.</span> اجرا و مدیریت عملیات</h3>
                    <p class="service-card-desc">سازمان‌دهی و هماهنگی نیروی انسانی و اجرای خدمات مطابق برنامه</p>
                </div>
            </div>

            <!-- کارت ۳: کنترل کیفیت و ارزیابی -->
            <div class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/a2.jpg' ); ?>" alt="کنترل کیفیت و ارزیابی" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3 class="service-card-title"><span class="service-num">۳.</span> کنترل کیفیت و ارزیابی</h3>
                    <p class="service-card-desc">بررسی نتایج، ثبت نواقص و پیگیری اقدامات اصلاحی</p>
                </div>
            </div>

            <!-- کارت ۴: مستندسازی و گزارش‌دهی -->
            <div class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/a1.jpg' ); ?>" alt="مستندسازی و گزارش‌دهی" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3 class="service-card-title"><span class="service-num">۴.</span> مستندسازی و گزارش‌دهی</h3>
                    <p class="service-card-desc">تهیه برنامه‌ها، چک‌لیست‌ها و گزارش عملکرد</p>
                </div>
            </div>
        </div>

    </div>
</section>