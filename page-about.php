<?php
/**
 * Template Name: صفحه درباره ما
 */
get_header();

$about_hero_badge = get_option( 'pakpajoh_text_about_hero_badge', 'درباره پاک‌پژوه' );
$about_hero_title = get_option( 'pakpajoh_text_about_hero_title', 'درخشش در عمل' );
$about_hero_slogan = get_option( 'pakpajoh_text_about_hero_slogan', '«نظافت مدرن، تعهد به کیفیت»' );
$about_hero_desc = get_option( 'pakpajoh_text_about_hero_desc', 'شرکت پاک‌پژوه با نام قانونی آتیه مهرگان انعکاس، از سال ۱۴۰۳ با هدف ارائه خدمات مهندسی نظافت صنعتی فعالیت می‌کند.' );
$about_history_badge = get_option( 'pakpajoh_text_about_history_badge', 'تاریخچه ما' );
$about_history_title = get_option( 'pakpajoh_text_about_history_title', 'از سال ۱۴۰۳ در خدمت صنعت' );
$about_history_desc = get_option( 'pakpajoh_text_about_history_desc', 'شرکت آتیه مهرگان انعکاس (شماره ثبت ۶۳۸۲۱۷) با برند پاک‌پژوه، فعالیت خود را در حوزه مدیریت خدمات مهندسی نظافت صنعتی آغاز کرده است.' );
?>

<style>
    .services-hero { padding: 80px 0 60px; background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%) !important; text-align: center !important; }
    .services-hero .container { width: 100% !important; max-width: 1200px !important; margin: 0 auto !important; padding: 0 24px !important; }
    .services-hero-badge { display: inline-block !important; background: rgba(255,255,255,0.15) !important; color: #FFFFFF !important; font-size: 0.9rem !important; font-weight: 700 !important; padding: 8px 24px !important; border-radius: 50px !important; margin-bottom: 20px !important; }
    .services-hero-title { font-size: 2.2rem !important; font-weight: 900 !important; color: #FFFFFF !important; margin-bottom: 16px !important; line-height: 1.4 !important; }
    .services-hero-slogan { font-size: 1.2rem !important; color: #C9A96E !important; font-style: italic !important; margin-bottom: 16px !important; }
    .services-hero-desc { font-size: 1rem !important; color: rgba(255,255,255,0.85) !important; line-height: 1.8 !important; max-width: 750px !important; margin: 0 auto 30px !important; }
    .section { padding: 60px 0 !important; }
    .section-badge { display: inline-block !important; background: #E8F5E9 !important; color: #1B5E4A !important; font-size: 0.9rem !important; font-weight: 700 !important; padding: 8px 24px !important; border-radius: 50px !important; margin-bottom: 16px !important; }
    .section-title-large { font-size: 1.8rem !important; font-weight: 800 !important; color: #005E80 !important; margin-bottom: 16px !important; }
    .container { width: 100% !important; max-width: 1200px !important; margin: 0 auto !important; padding: 0 24px !important; }
    .about-layout { display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 40px !important; align-items: center !important; }
    .about-image img { width: 100% !important; border-radius: 12px !important; }
    .commitments-grid { display: grid !important; grid-template-columns: repeat(3,1fr) !important; gap: 20px !important; margin-top: 30px !important; }
    .commit-card { background: #F9F9F9 !important; border-radius: 12px !important; padding: 24px !important; text-align: center !important; border: 1px solid #E0E4E8 !important; }
    .commit-icon { color: #4CAF50 !important; margin-bottom: 12px !important; }
    .safety-grid { display: grid !important; grid-template-columns: repeat(4,1fr) !important; gap: 20px !important; margin-top: 30px !important; }
    .safety-item { background: #F9F9F9 !important; border-radius: 12px !important; padding: 24px !important; text-align: center !important; border: 1px solid #E0E4E8 !important; }
    .safety-icon { color: #4CAF50 !important; margin-bottom: 12px !important; }
    .contact-layout { display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 40px !important; }
    .contact-info-list { list-style: none !important; padding: 0 !important; margin: 0 !important; }
    .contact-info-list li { display: flex !important; align-items: flex-start !important; gap: 12px !important; margin-bottom: 20px !important; }
    .contact-icon { color: #4CAF50 !important; flex-shrink: 0 !important; }
    .contact-form-wrapper .pakpajoh-form .form-group { margin-bottom: 16px !important; }
    .contact-form-wrapper .pakpajoh-form label { display: block !important; font-weight: 600 !important; margin-bottom: 6px !important; }
    .contact-form-wrapper .pakpajoh-form input,
    .contact-form-wrapper .pakpajoh-form textarea { width: 100% !important; padding: 10px 14px !important; border: 1px solid #E0E4E8 !important; border-radius: 8px !important; }
    .process-timeline { display: flex !important; flex-direction: column !important; gap: 20px !important; margin-top: 30px !important; }
    .process-step-item { display: flex !important; gap: 16px !important; background: #F9F9F9 !important; border-radius: 12px !important; padding: 20px !important; border: 1px solid #E0E4E8 !important; }
    .process-step-number { display: flex !important; align-items: center !important; justify-content: center !important; width: 48px !important; height: 48px !important; background: #4CAF50 !important; color: #FFF !important; border-radius: 50% !important; font-weight: 800 !important; flex-shrink: 0 !important; }
    .packages-grid { display: grid !important; grid-template-columns: repeat(3,1fr) !important; gap: 20px !important; margin-top: 30px !important; }
    .package-card { background: #F9F9F9 !important; border-radius: 12px !important; padding: 24px !important; border: 1px solid #E0E4E8 !important; }
    .package-card.featured { border-color: #4CAF50 !important; background: #E8F5E9 !important; }
    .package-card ul { list-style: none !important; padding: 0 !important; margin: 12px 0 0 0 !important; }
    .package-card ul li { padding: 4px 0 !important; font-size: 0.9rem !important; }
    @media (max-width: 1024px) {
        .about-layout, .contact-layout, .commitments-grid, .packages-grid { grid-template-columns: 1fr !important; }
        .safety-grid { grid-template-columns: repeat(2,1fr) !important; }
    }
    @media (max-width: 600px) {
        .safety-grid { grid-template-columns: 1fr !important; }
    }
</style>
<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge"><?php echo wp_kses_post( $about_hero_badge ); ?></span>
            <h1 class="services-hero-title"><?php echo wp_kses_post( $about_hero_title ); ?></h1>
            <p class="services-hero-slogan"><?php echo wp_kses_post( $about_hero_slogan ); ?></p>
            <p class="services-hero-desc"><?php echo wp_kses_post( $about_hero_desc ); ?></p>
        </div>
    </div>
</section>

<section class="section about-intro">
    <div class="container about-layout">
        <div class="about-text">
            <span class="section-badge"><?php echo wp_kses_post( $about_history_badge ); ?></span>
            <h2 class="section-title-large"><?php echo wp_kses_post( $about_history_title ); ?></h2>
            <p><?php echo wp_kses_post( $about_history_desc ); ?></p>
            <p>اصول کاری ما بر پایه <strong>بهینه‌سازی مصرف آب و انرژی</strong>، <strong>تضمین کیفیت از طریق چک‌لیست‌های مدون</strong> و <strong>حفظ ایمنی و سلامت پرسنل</strong> استوار است.</p>
        </div>
        <div class="about-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/palet.webp' ); ?>" alt="درباره پاک‌پژوه" loading="lazy"></div>
    </div>
</section>

<section class="section commitments-section">
    <div class="container">
        <span class="section-badge">منشور تعهد</span>
        <h2 class="section-title-large">تعهدات شرکت پاک‌پژوه</h2>
        <div class="commitments-grid">
            <div class="commit-card"><svg class="commit-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg><h4>بهینه‌سازی مصرف</h4><p>استفاده از فناوری‌های مکانیزه و شوینده‌های بایو برای کاهش مصرف آب و انرژی.</p></div>
            <div class="commit-card"><svg class="commit-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg><h4>تضمین کیفیت</h4><p>پایداری کیفیت خدمات با چک‌لیست‌های مدون تحویل کار و نظارت سرپرست مقیم.</p></div>
            <div class="commit-card"><svg class="commit-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg><h4>محیط بهداشتی</h4><p>ایجاد محیطی تمیز و ایمن، شایسته مشتریان و ساکنان.</p></div>
        </div>
    </div>
</section>

<section class="section safety-section">
    <div class="container">
        <span class="section-badge">استانداردها و ایمنی</span>
        <h2 class="section-title-large">الزامات اجرایی ما</h2>
        <div class="safety-grid">
            <div class="safety-item"><svg class="safety-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg><h4>حفظ ایمنی پرسنل</h4><p>استفاده از تجهیزات حفاظت فردی کامل و پوشش متحدالشکل.</p></div>
            <div class="safety-item"><svg class="safety-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/></svg><h4>سرپرست مقیم</h4><p>حضور مستمر سرپرست پروژه برای نظارت بر اجرا.</p></div>
            <div class="safety-item"><svg class="safety-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg><h4>عدم اختلال در کار</h4><p>اجرای فرآیندها بدون برهم زدن چرخه کاری مشتری.</p></div>
            <div class="safety-item"><svg class="safety-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><h4>پایش مستمر</h4><p>ارزیابی کیفی با چک‌لیست و ارائه گزارش.</p></div>
        </div>
    </div>
</section>

<?php

get_footer();