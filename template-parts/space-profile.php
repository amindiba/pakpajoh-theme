<?php
/**
 * Space Profile Section — PakPajoh Theme (v12.0) - استایل inline قطعی و بازسازی
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<style>
    .space-profile-content {
        background: linear-gradient(to left, rgba(232, 245, 233, 0.95) 0%, rgba(232, 245, 233, 0.85) 40%, rgba(232, 245, 233, 0.1) 100%), url('<?php echo esc_url( $img_uri . '/palet.webp' ); ?>') center/cover no-repeat !important;
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
    @media (max-width: 1024px) {
        .space-profile-section { padding: 2.75rem 0 !important; }
        .space-profile-container { padding: 0 24px !important; }
        .space-profile-layout {
            grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr) !important;
            gap: 20px !important;
            align-items: center !important;
        }
        .space-profile-content {
            min-height: 100% !important;
            padding: 24px !important;
            border-radius: 18px !important;
        }
        .space-profile-content .space-badge {
            font-size: 0.76rem !important;
            padding: 6px 14px !important;
            margin-bottom: 12px !important;
        }
        .space-profile-content .space-title {
            font-size: 1.3rem !important;
            line-height: 1.45 !important;
            margin-bottom: 10px !important;
        }
        .space-profile-content .space-title-blue { font-size: 1.05rem !important; }
        .space-profile-content .space-desc {
            max-width: 100% !important;
            font-size: 0.82rem !important;
            line-height: 1.7 !important;
            margin-bottom: 14px !important;
        }
        .space-profile-content .space-link {
            align-items: center !important;
            gap: 7px !important;
            padding: 9px 14px !important;
            font-size: 0.8rem !important;
        }
        .space-profile-grid-wrapper { margin-top: 0 !important; }
        .space-grid-title { font-size: 0.88rem !important; line-height: 1.5 !important; margin-bottom: 12px !important; }
        .space-profile-grid { gap: 8px !important; }
        .space-grid-item { aspect-ratio: 4 / 3 !important; border-radius: 11px !important; }
        .space-grid-item.space-grid-wide { aspect-ratio: 2.8 / 1 !important; }
        .space-grid-label {
            background: linear-gradient(to top, rgba(10, 37, 64, 0.8), rgba(10, 37, 64, 0)) !important;
            color: #fff !important;
            font-size: 0.7rem !important;
            padding: 22px 6px 7px !important;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.45) !important;
        }
    }
    @media (max-width: 640px) {
        .space-profile-section { padding: 1.75rem 0 2rem !important; }
        .space-profile-container { padding: 0 14px !important; }
        .space-profile-layout { grid-template-columns: minmax(0, 1fr) !important; gap: 16px !important; }
        .space-profile-content {
            min-height: 0 !important;
            padding: 19px 17px !important;
            border-radius: 16px !important;
        }
        .space-profile-content .space-badge {
            font-size: 0.7rem !important;
            padding: 5px 11px !important;
            margin-bottom: 9px !important;
        }
        .space-profile-content .space-title {
            font-size: 1.12rem !important;
            line-height: 1.45 !important;
            margin-bottom: 8px !important;
        }
        .space-profile-content .space-title-blue { font-size: 0.94rem !important; }
        .space-profile-content .space-desc {
            font-size: 0.8rem !important;
            line-height: 1.7 !important;
            margin-bottom: 12px !important;
        }
        .space-profile-content .space-link {
            width: 100% !important;
            min-height: 42px !important;
            justify-content: center !important;
            padding: 8px 10px !important;
            border-radius: 12px !important;
            font-size: 0.76rem !important;
        }
        .space-profile-content .space-link svg { width: 16px; height: 16px; flex: 0 0 auto; }
        .space-profile-grid-wrapper { margin-top: 0 !important; }
        .space-grid-title { font-size: 0.82rem !important; margin-bottom: 9px !important; }
        .space-profile-grid { gap: 7px !important; }
        .space-grid-item { aspect-ratio: 16 / 10 !important; border-radius: 10px !important; }
        .space-grid-item.space-grid-wide { aspect-ratio: 2.8 / 1 !important; }
        .space-grid-label { font-size: 0.64rem !important; padding: 19px 5px 6px !important; }
    }
    @media (max-width: 380px) {
        .space-profile-container { padding: 0 10px !important; }
        .space-profile-content { padding: 16px 14px !important; }
        .space-profile-content .space-title { font-size: 1.04rem !important; }
        .space-profile-content .space-title-blue { font-size: 0.88rem !important; }
        .space-profile-content .space-desc { font-size: 0.76rem !important; }
        .space-grid-label { font-size: 0.6rem !important; }
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