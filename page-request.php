<?php
/**
 * Template Name: صفحه ثبت درخواست
 * Description: صفحه اختصاصی ثبت درخواست خدمات نظافت صنعتی
 */
get_header();
?>

<section class="request-hero">
    <div class="container">
        <h1 class="request-title">ثبت درخواست خدمات نظافت صنعتی</h1>
        <p class="request-subtitle">کارشناسان پاک‌پژوه رایگان از محل شما بازدید می‌کنند و بهترین راهکار را پیشنهاد می‌دهند.</p>
    </div>
</section>

<section class="request-section section">
    <div class="container">
        <div class="request-layout">
            <!-- ستون فرم -->
            <div class="request-form-wrapper">
                <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="pakpajoh-form">
                    <input type="hidden" name="action" value="pakpajoh_request_form">
                    <?php wp_nonce_field( 'pakpajoh_request_nonce', 'pakpajoh_nonce' ); ?>
                    <div class="form-group">
                        <label for="req-name">نام و نام خانوادگی</label>
                        <input type="text" name="req_name" id="req-name" required>
                    </div>
                    <div class="form-group">
                        <label for="req-phone">شماره تماس</label>
                        <input type="tel" name="req_phone" id="req-phone" required>
                    </div>
                    <div class="form-group">
                        <label for="req-service">نوع خدمت</label>
                        <select name="req_service" id="req-service" required>
                            <option value="">انتخاب کنید...</option>
                            <option value="residential">نظافت مجتمع‌های مسکونی و اداری</option>
                            <option value="commercial">نظافت مراکز تجاری و فروشگاه‌ها</option>
                            <option value="healthcare">نظافت هتل‌ها، بیمارستان‌ها و مراکز آموزشی</option>
                            <option value="dryclean">خشک‌شویی تخصصی در محل</option>
                            <option value="industrial">خدمات صنایع سنگین و پالایشگاهی</option>
                            <option value="transport">لجستیک و ترابری (هوایی، ریلی، جاده‌ای)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="req-area">مساحت تقریبی (متر مربع)</label>
                        <input type="number" name="req_area" id="req-area" min="1">
                    </div>
                    <div class="form-group">
                        <label for="req-message">توضیحات (اختیاری)</label>
                        <textarea name="req_message" id="req-message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn-accent btn-glow">
                        <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                        <span>ارسال درخواست</span>
                    </button>
                </form>
            </div>

            <!-- ستون اطلاعات -->
            <div class="request-info">
                <h2 class="info-title">چرا پاک‌پژوه؟</h2>
                <ul class="info-list">
                    <li>
                        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        <span>کارشناسی رایگان و بازدید حضوری</span>
                    </li>
                    <li>
                        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>پاسخگویی سریع و ارائه پیش‌فاکتور در کمترین زمان</span>
                    </li>
                    <li>
                        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span>تضمین کیفیت با چک‌لیست مدون و سرپرست مقیم</span>
                    </li>
                    <li>
                        <svg class="info-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        <span>استفاده از تجهیزات مکانیزه و شوینده‌های بایو</span>
                    </li>
                </ul>
                <div class="info-contact">
                    <h3>تماس فوری</h3>
                    <a href="tel:+982191092123" class="info-phone" dir="rtl">۰۲۱-۹۱۰۹۲۱۲۳</a>
                    <a href="tel:+989121156868" class="info-phone" dir="rtl">۰۹۱۲۱۱۵۶۸۶۸</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
