<?php
/**
 * Services Section — PakPajoh Theme (v1.2) - ترتیب جدید تصاویر
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<section class="services-section" aria-label="خدمات اصلی">
    <div class="services-container">
        
        <div class="services-header">
            <h2 class="services-title"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_services_title", "چهار محور اصلی خدمات ما" ) ); ?></h2>
            <p class="services-subtitle"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_services_subtitle", "طراحی، اجرا، کنترل و مستندسازی خدمات پاکسازی" ) ); ?></p>
        </div>

        <div class="services-grid">
            <!-- کارت ۱: طراحی و برنامه‌ریزی -->
            <div class="service-card">
                <div class="service-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/a3.jpg' ); ?>" alt="طراحی و برنامه‌ریزی" loading="lazy">
                </div>
                <div class="service-card-body">
                    <h3 class="service-card-title"><span class="service-num">۱.</span> طراحی و برنامه‌ریزی خدمات پاکسازی</h3>
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