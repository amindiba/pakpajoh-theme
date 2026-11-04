<?php
/**
 * Template Name: صفحه تماس با ما
 */
get_header();
?>

<!-- هیرو -->
<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge">تماس با ما</span>
            <h1 class="services-hero-title">با پاک‌پژوه در تماس باشید</h1>
            <p class="services-hero-slogan">«درخشش در عمل»</p>
            <p class="services-hero-desc">برای دریافت مشاوره رایگان، بازدید حضوری یا هرگونه سوال، با کارشناسان ما در تماس باشید.</p>
        </div>
    </div>
</section>

<!-- فرم تماس + اطلاعات -->
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
