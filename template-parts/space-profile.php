<?php
/**
 * Space Profile Section — PakPajoh Theme (v12.0) - استایل inline قطعی و بازسازی
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<style>
    .space-profile-content {
        background: linear-gradient(to left, rgba(232, 245, 233, 0.95) 0%, rgba(232, 245, 233, 0.85) 40%, rgba(232, 245, 233, 0.1) 100%), url('https://pakpajoh.ir/wp-content/themes/pakpajoh_a4site_theme/assets/images/palet.webp') center/cover no-repeat !important;
        padding: 30px 40px !important;
        border-radius: 16px !important;
        position: relative !important;
        overflow: hidden !important;
        height: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        align-items: flex-start !important;
        text-align: right !important;
    }
    .space-profile-content .space-badge {
        display: inline-block !important;
        background: #4CAF50 !important;
        color: #FFFFFF !important;
        font-size: 0.9rem !important;
        font-weight: 700 !important;
        padding: 8px 24px !important;
        border-radius: 50px !important;
        margin-bottom: 20px !important;
    }
    .space-profile-content .space-title {
        font-size: 1.6rem !important;
        font-weight: 800 !important;
        line-height: 1.6 !important;
        margin-bottom: 16px !important;
    }
    .space-profile-content .space-title-green {
        color: #1B5E4A !important;
        display: block !important;
    }
    .space-profile-content .space-title-blue {
        color: #005E80 !important;
        display: block !important;
        font-size: 1.3rem !important;
    }
    .space-profile-content .space-desc {
        font-size: 0.9rem !important;
        font-weight: 700 !important;
        color: #333333 !important;
        line-height: 1.8 !important;
        margin-bottom: 24px !important;
        max-width: 90% !important;
        margin-left: 0 !important; margin-right: 0 !important;
    }
    .space-profile-content .space-link {
        display: inline-flex !important;
        align-items: flex-start !important;
        gap: 8px !important;
        background: #FFFFFF !important;
        color: #1B5E4A !important;
        font-size: 0.9rem !important;
        font-weight: 700 !important;
        padding: 10px 24px !important;
        border-radius: 50px !important;
        text-decoration: none !important;
        border: 1px solid #1B5E4A !important;
        transition: all 0.3s !important;
    }
    .space-profile-content .space-link:hover {
        background: #1B5E4A !important;
        color: #FFFFFF !important;
    }
</style>
<section id="space-passport" class="space-profile-section" aria-label="شناسنامه فضا">
    <div class="space-profile-container">
        <div class="space-profile-layout">
            
            <!-- ستون سمت راست: کادر با محتوا -->
            <div class="space-profile-content">
                <span class="space-badge">شناسنامه فضا</span>
                <h2 class="space-title">
                    <span class="space-title-green">هر فضا، یک شناسنامه؛</span>
                    <span class="space-title-blue">هر شناسنامه، مبنای یک برنامه پاکیزگی</span>
                </h2>
                <p class="space-desc">
                    برای مدیریت صحیح پاکیزگی، ابتدا باید محیط را بشناسیم. شناسنامه فضا با بررسی ابعاد، کاربری، سطوح، آلودگی‌ها و وظایف مشخص، اطلاعات هر فضا را در قالب یک شناسنامه اختصاصی ثبت می‌کند.
                </p>
                <a href="/request/" class="space-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    <span>مشاهده نمونه شناسنامه فضا</span>
                </a>
            </div>

            <!-- ستون سمت چپ: گرید تصاویر -->
            <div class="space-profile-grid-wrapper">
                <h3 class="space-grid-title">برای هر محیط، برنامه پاکیزگی متناسب با همان محیط</h3>
                <div class="space-profile-grid">
                    <div class="space-grid-item">
                        <img src="<?php echo esc_url( $img_uri . '/a1.jpg' ); ?>" alt="انبارها و مراکز لجستیکی" loading="lazy">
                        <span class="space-grid-label">انبارها و مراکز لجستیکی</span>
                    </div>
                    <div class="space-grid-item">
                        <img src="<?php echo esc_url( $img_uri . '/a2.jpg' ); ?>" alt="محیط‌های صنعتی و تولیدی" loading="lazy">
                        <span class="space-grid-label">محیط‌های صنعتی و تولیدی</span>
                    </div>
                    <div class="space-grid-item">
                        <img src="<?php echo esc_url( $img_uri . '/a3.jpg' ); ?>" alt="مراکز تجاری و خدماتی" loading="lazy">
                        <span class="space-grid-label">مراکز تجاری و خدماتی</span>
                    </div>
                    <div class="space-grid-item">
                        <img src="<?php echo esc_url( $img_uri . '/a4.jpg' ); ?>" alt="ادارات و سازمان‌ها" loading="lazy">
                        <span class="space-grid-label">ادارات و سازمان‌ها</span>
                    </div>
                    <div class="space-grid-item space-grid-wide">
                        <img src="<?php echo esc_url( $img_uri . '/a1.jpg' ); ?>" alt="محیط‌های تخصصی و حساس" loading="lazy">
                        <span class="space-grid-label">محیط‌های تخصصی و حساس</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>