<?php
/**
 * Template Name: صفحه ثبت درخواست
 * Description: صفحه اختصاصی ثبت درخواست خدمات نظافت صنعتی
 */
get_header();
?>

<style>
.req-hero {
    background: linear-gradient(135deg, #0A2540 0%, #1a3a5c 50%, #0B1F35 100%);
    color: #fff;
    text-align: center;
    padding: 8rem 0 4rem;
    position: relative;
    overflow: hidden;
}
.req-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 20%, rgba(201,169,110,0.18) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(74,144,226,0.12) 0%, transparent 50%);
    pointer-events: none;
}
.req-hero .container { position: relative; z-index: 2; }
.req-hero h1 { font-size: 2.6rem; font-weight: 900; margin-bottom: 1rem; color: #fff; line-height: 1.3; }
.req-hero p { font-size: 1.1rem; color: rgba(255,255,255,0.85); max-width: 680px; margin: 0 auto; line-height: 1.9; }
.req-hero .badge {
    display: inline-block;
    background: rgba(201,169,110,0.15);
    border: 1px solid rgba(201,169,110,0.4);
    color: #C9A96E;
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    backdrop-filter: blur(8px);
}

.req-section { padding: 4rem 0 5rem; background: linear-gradient(180deg, #F4F6F8 0%, #FFFFFF 100%); }
.req-layout { display: grid; grid-template-columns: 1.3fr 1fr; gap: 3rem; align-items: start; }

.req-form-card {
    background: #fff;
    padding: 3rem;
    border-radius: 24px;
    box-shadow: 0 20px 60px rgba(10,37,64,0.1);
    border: 1px solid rgba(10,37,64,0.05);
    position: relative;
    overflow: hidden;
}
.req-form-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #C9A96E 0%, #4A90E2 50%, #C9A96E 100%);
}

.req-form-card h2 {
    font-size: 1.5rem;
    font-weight: 900;
    color: #0A2540;
    margin-bottom: 0.5rem;
}
.req-form-card .form-sub { color: #6B7280; font-size: 0.95rem; margin-bottom: 2rem; line-height: 1.7; }

.req-form { display: flex; flex-direction: column; gap: 1.25rem; }
.req-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; }

.req-field { display: flex; flex-direction: column; gap: 0.4rem; position: relative; }
.req-field label {
    font-weight: 700;
    color: #0A2540;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 6px;
}
.req-field label .req-star { color: #E74C3C; font-size: 0.8rem; }
.req-field input, .req-field select, .req-field textarea {
    width: 100%;
    padding: 0.85rem 1.1rem;
    border: 2px solid #E5E9EF;
    border-radius: 12px;
    font-family: inherit;
    font-size: 1rem;
    background: #F9FAFB;
    color: #0A2540;
    transition: all 0.3s ease;
    box-sizing: border-box;
}
.req-field input:focus, .req-field select:focus, .req-field textarea:focus {
    outline: none;
    border-color: #C9A96E;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(201,169,110,0.12);
}
.req-field textarea { resize: vertical; min-height: 100px; }

.req-submit {
    background: linear-gradient(135deg, #0A2540 0%, #1a3a5c 100%);
    color: #fff;
    border: none;
    padding: 1rem 2.5rem;
    border-radius: 14px;
    font-family: inherit;
    font-size: 1.05rem;
    font-weight: 800;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    box-shadow: 0 8px 24px rgba(10,37,64,0.25);
    margin-top: 0.5rem;
}
.req-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(10,37,64,0.35);
    background: linear-gradient(135deg, #C9A96E 0%, #A8843E 100%);
}
.req-submit svg { transition: transform 0.3s ease; }
.req-submit:hover svg { transform: translateX(-4px); }

.req-info { padding: 0.5rem 0; }
.req-info h2 { font-size: 1.6rem; font-weight: 900; color: #0A2540; margin-bottom: 1rem; }
.req-info .info-desc { color: #6B7280; line-height: 1.9; margin-bottom: 2rem; font-size: 0.95rem; }

.req-benefits { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2rem; }
.req-benefit {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    padding: 1rem 1.2rem;
    background: #fff;
    border-radius: 14px;
    border: 1px solid rgba(10,37,64,0.06);
    transition: all 0.3s ease;
}
.req-benefit:hover { transform: translateX(-4px); box-shadow: 0 6px 20px rgba(10,37,64,0.08); }
.req-benefit-icon {
    width: 42px; height: 42px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(201,169,110,0.15) 0%, rgba(74,144,226,0.12) 100%);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    color: #C9A96E;
}
.req-benefit-text h4 { font-size: 0.95rem; font-weight: 800; color: #0A2540; margin-bottom: 0.2rem; }
.req-benefit-text p { font-size: 0.85rem; color: #6B7280; line-height: 1.6; margin: 0; }

.req-contact-card {
    background: linear-gradient(135deg, #0A2540 0%, #1a3a5c 100%);
    color: #fff;
    padding: 2rem;
    border-radius: 20px;
    position: relative;
    overflow: hidden;
}
.req-contact-card::before {
    content: '';
    position: absolute;
    top: -50%; right: -50%;
    width: 200%; height: 200%;
    background: radial-gradient(circle, rgba(201,169,110,0.15) 0%, transparent 60%);
    pointer-events: none;
}
.req-contact-card h3 { color: #fff; font-size: 1.2rem; font-weight: 900; margin-bottom: 0.5rem; position: relative; z-index: 2; }
.req-contact-card p { color: rgba(255,255,255,0.75); font-size: 0.9rem; margin-bottom: 1.2rem; position: relative; z-index: 2; }
.req-phone-link {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #C9A96E;
    font-weight: 800;
    font-size: 1.15rem;
    text-decoration: none;
    padding: 0.7rem 1rem;
    background: rgba(255,255,255,0.08);
    border-radius: 12px;
    margin-bottom: 0.6rem;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
    direction: rtl;
}
.req-phone-link:hover { background: rgba(201,169,110,0.2); color: #fff; transform: translateX(-4px); }
.req-phone-link svg { flex-shrink: 0; }

.req-trust {
    display: flex;
    gap: 1.5rem;
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(10,37,64,0.08);
    flex-wrap: wrap;
}
.req-trust-item { display: flex; align-items: center; gap: 8px; font-size: 0.85rem; color: #6B7280; }
.req-trust-item svg { color: #27AE60; }

@media (max-width: 992px) {
    .req-hero { padding: 6rem 0 3rem; }
    .req-hero h1 { font-size: 2rem; }
    .req-layout { grid-template-columns: 1fr; gap: 2.5rem; }
    .req-form-card { padding: 2rem; }
    .req-row { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
    .req-hero h1 { font-size: 1.6rem; }
    .req-form-card { padding: 1.5rem; }
    .req-submit { font-size: 1rem; }
}
</style>

<section class="req-hero" aria-label="ثبت درخواست">
    <div class="container">
        <span class="badge">بازدید رایگان • پاسخگویی سریع</span>
        <h1>ثبت درخواست خدمات نظافت صنعتی</h1>
        <p>کارشناسان پاک‌پژوه رایگان از محل شما بازدید می‌کنند و بهترین راهکار را پیشنهاد می‌دهند.</p>
    </div>
</section>

<section class="req-section">
    <div class="container">
        <div class="req-layout">
            <!-- ستون فرم -->
            <div class="req-form-card">
                <h2>فرم درخواست بازدید اولیه</h2>
                <p class="form-sub">اطلاعات زیر را تکمیل کنید تا کارشناسان ما در کوتاه‌ترین زمان با شما تماس بگیرند.</p>
                <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="req-form">
                    <input type="hidden" name="action" value="pakpajoh_request_form">
                    <?php wp_nonce_field( 'pakpajoh_request_nonce', 'pakpajoh_nonce' ); ?>
                    <div class="req-row">
                        <div class="req-field">
                            <label for="req-name">نام و نام خانوادگی <span class="req-star">*</span></label>
                            <input type="text" name="req_name" id="req-name" required placeholder="مثال: علی محمدی">
                        </div>
                        <div class="req-field">
                            <label for="req-phone">شماره تماس <span class="req-star">*</span></label>
                            <input type="tel" name="req_phone" id="req-phone" required placeholder="09121234567">
                        </div>
                    </div>
                    <div class="req-row">
                        <div class="req-field">
                            <label for="req-service">نوع خدمت <span class="req-star">*</span></label>
                            <select name="req_service" id="req-service" required>
                                <option value="">انتخاب کنید...</option>
                                <option value="design">طراحی و برنامه‌ریزی خدمات پاکسازی</option>
                                <option value="execution">مدیریت و اجرای عملیات</option>
                                <option value="quality-control">کنترل کیفیت و ارزیابی</option>
                                <option value="documentation">مستندسازی و گزارش‌دهی</option>
                                <option value="residential">نظافت مجتمع‌های مسکونی و اداری</option>
                                <option value="commercial">نظافت مراکز تجاری و فروشگاه‌ها</option>
                                <option value="healthcare">نظافت هتل‌ها، بیمارستان‌ها و مراکز آموزشی</option>
                                <option value="dryclean">خشک‌شویی تخصصی در محل</option>
                                <option value="industrial">خدمات صنایع سنگین و پالایشگاهی</option>
                                <option value="transport">لجستیک و ترابری (هوایی، ریلی، جاده‌ای)</option>
                            </select>
                        </div>
                        <div class="req-field">
                            <label for="req-area">مساحت تقریبی (متر مربع)</label>
                            <input type="number" name="req_area" id="req-area" min="1" placeholder="مثال: 500">
                        </div>
                    </div>
                    <div class="req-field">
                        <label for="req-message">توضیحات (اختیاری)</label>
                        <textarea name="req_message" id="req-message" rows="4" placeholder="توضیحات تکمیلی درباره محیط و نیازهای شما..."></textarea>
                    </div>
                    <button type="submit" class="req-submit">
                        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                        <span>ارسال درخواست</span>
                    </button>
                    <div class="req-trust">
                        <div class="req-trust-item">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            <span>اطلاعات شما محفوظ است</span>
                        </div>
                        <div class="req-trust-item">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            <span>پاسخگویی در کمتر از ۲۴ ساعت</span>
                        </div>
                        <div class="req-trust-item">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            <span>بازدید رایگان و بدون تعهد</span>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ستون اطلاعات -->
            <div class="req-info">
                <h2>چرا پاک‌پژوه؟</h2>
                <p class="info-desc">ما با شناخت محیط، طراحی برنامه متناسب و مدیریت اجرا، پاکیزگی قابل اندازه‌گیری را برای شما به ارمغان می‌آوریم.</p>
                <div class="req-benefits">
                    <div class="req-benefit">
                        <div class="req-benefit-icon">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        </div>
                        <div class="req-benefit-text">
                            <h4>کارشناسی رایگان و بازدید حضوری</h4>
                            <p>بدون هزینه، کارشناس ما در محل شما حضور می‌یابد.</p>
                        </div>
                    </div>
                    <div class="req-benefit">
                        <div class="req-benefit-icon">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div class="req-benefit-text">
                            <h4>پاسخگویی سریع</h4>
                            <p>پیش‌فاکتور در کمترین زمان ارائه می‌شود.</p>
                        </div>
                    </div>
                    <div class="req-benefit">
                        <div class="req-benefit-icon">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        </div>
                        <div class="req-benefit-text">
                            <h4>تضمین کیفیت</h4>
                            <p>چک‌لیست مدون و سرپرست مقیم در محل.</p>
                        </div>
                    </div>
                    <div class="req-benefit">
                        <div class="req-benefit-icon">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        </div>
                        <div class="req-benefit-text">
                            <h4>تجهیزات مکانیزه</h4>
                            <p>شوینده‌های بایو و تجهیزات پیشرفته.</p>
                        </div>
                    </div>
                </div>
                <div class="req-contact-card">
                    <h3>تماس فوری</h3>
                    <p>برای پاسخگویی فوری با ما تماس بگیرید:</p>
                    <a href="tel:+982191092123" class="req-phone-link">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        <span dir="rtl">۰۲۱-۹۱۰۹۲۱۲۳</span>
                    </a>
                    <a href="tel:+989121156868" class="req-phone-link">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        <span dir="rtl">۰۹۱۲-۱۱۵-۶۸۶۸</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();