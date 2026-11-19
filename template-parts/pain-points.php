<?php
/**
 * Pain Points Section — PakPajoh Theme (v3.1) - با تصاویر
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<section class="pain-points-section" aria-label="چالش‌های نظافت">
    <div class="pain-points-container">
        
        <div class="pain-points-header">
            <span class="line-decor"></span>
            <h2 class="pain-points-title"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_pain_title", "آیا نظافت محیط شما انجام می‌شود یا واقعاً مدیریت می‌شود؟" ) ); ?></h2>
            <span class="line-decor"></span>
        </div>

        <div class="pain-points-grid">
            <!-- کارت ۱ -->
            <div class="pain-card">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-plan.png' ); ?>" alt="نبود برنامه مشخص" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود برنامه مشخص</h3>
                <p class="pain-card-desc">فعالیت‌های پراکنده و زمان‌بندی نامنظم</p>
            </div>

            <!-- کارت ۲ -->
            <div class="pain-card">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-quality.png' ); ?>" alt="نبود معیار کیفیت" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود معیار کیفیت</h3>
                <p class="pain-card-desc">مشخص نبودن سطح قابل قبول خدمات</p>
            </div>

            <!-- کارت ۳ -->
            <div class="pain-card">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-repetition.png' ); ?>" alt="تکرار نواقص" loading="lazy">
                </div>
                <h3 class="pain-card-title">تکرار نواقص</h3>
                <p class="pain-card-desc">نبود پیگیری مؤثر برای رفع مشکلات</p>
            </div>

            <!-- کارت ۴ -->
            <div class="pain-card">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-report.png' ); ?>" alt="نبود گزارش مستند" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود گزارش مستند</h3>
                <p class="pain-card-desc">نبود اطلاعات روشن از نتایج خدمات</p>
            </div>
        </div>

        <div class="pain-points-note">
            <span class="note-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#1B5E4A">
                    <circle cx="12" cy="12" r="10" fill="#1B5E4A"/>
                    <rect x="11" y="6" width="2" height="8" rx="1" fill="#FFFFFF"/>
                    <circle cx="12" cy="17" r="1.2" fill="#FFFFFF"/>
                </svg>
            </span>
            <p>پاکیزگی محیط کار نباید به اقدامات پراکنده وابسته باشد؛ باید برنامه، معیار و مسئولیت مشخص داشته باشد.</p>
        </div>

    </div>
</section>