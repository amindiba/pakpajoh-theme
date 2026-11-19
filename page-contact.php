<?php
/**
 * Template Name: صفحه تماس با ما
 */
get_header();

$contact_hero_badge = get_option( 'pakpajoh_text_contact_hero_badge', 'تماس با ما' );
$contact_hero_title = get_option( 'pakpajoh_text_contact_hero_title', 'با پاک‌پژوه در تماس باشید' );
$contact_hero_slogan = get_option( 'pakpajoh_text_contact_hero_slogan', '«درخشش در عمل»' );
$contact_hero_desc = get_option( 'pakpajoh_text_contact_hero_desc', 'برای دریافت مشاوره رایگان، بازدید حضوری یا هرگونه سوال، با کارشناسان ما در تماس باشید.' );
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
            <span class="services-hero-badge"><?php echo wp_kses_post( $contact_hero_badge ); ?></span>
            <h1 class="services-hero-title"><?php echo wp_kses_post( $contact_hero_title ); ?></h1>
            <p class="services-hero-slogan"><?php echo wp_kses_post( $contact_hero_slogan ); ?></p>
            <p class="services-hero-desc"><?php echo wp_kses_post( $contact_hero_desc ); ?></p>
        </div>
    </div>
</section>

<section class="section contact-section">
    <div class="container contact-layout">
        <div class="contact-form-wrapper">
            <span class="section-badge">فرم درخواست</span>
            <h2 class="section-title-large">ثبت درخواست مشاوره</h2>
            <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="pakpajoh-form">
                <input type="hidden" name="action" value="pakpajoh_contact_form">
                <?php wp_nonce_field( 'pakpajoh_contact_nonce', 'pakpajoh_nonce' ); ?>
                <div class="form-group"><label for="name">نام و نام خانوادگی</label><input type="text" name="name" id="name" required></div>
                <div class="form-group"><label for="phone">شماره تماس</label><input type="tel" name="phone" id="phone" required></div>
                <div class="form-group"><label for="email">ایمیل (اختیاری)</label><input type="email" name="email" id="email"></div>
                <div class="form-group"><label for="message">توضیحات</label><textarea name="message" id="message" rows="5" required></textarea></div>
                <button type="submit" class="btn btn-primary">ارسال درخواست</button>
            </form>
        </div>
        <div class="contact-info-wrapper">
            <span class="section-badge">اطلاعات تماس</span>
            <h2 class="section-title-large">راه‌های ارتباطی</h2>
            <ul class="contact-info-list">
                <li><svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><div><strong>آدرس</strong><span>تهران، خیابان کریمخان، کوچه آبگان، پلاک ۴، واحد ۱</span></div></li>
                <li><svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg><div><strong>تلفن‌ها</strong><span dir="rtl">۰۲۱-۹۱۰۹۲۱۲۳ | ۰۹۱۲۱۱۵۶۸۶۸ | ۰۹۱۲۲۰۸۸۱۵</span></div></li>
                <li><svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><div><strong>ایمیل</strong><span>info@pakpajoh.ir</span></div></li>
                <li><svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><div><strong>ساعات کاری</strong><span>شنبه تا پنجشنبه، ۸ صبح تا ۶ عصر</span></div></li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();