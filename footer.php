<?php
/**
 * Footer — PakPajoh Theme (v7.0) - بازگرداندن شبکه‌های اجتماعی و دکمه خبرنامه
 */
?>
</main>
<style>
    /* ===== استایل CTA پایانی (مشترک در همه صفحات) ===== */
    .cta-banner-section { padding: 40px 0; background: #FFFFFF; }
    .cta-banner-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: linear-gradient(135deg, #1B5E4A 0%, #124232 100%);
        border-radius: 16px;
        padding: 24px 60px;
        margin: 0 40px;
        width: auto;
        overflow: hidden;
        min-height: 100px;
    }
    .cta-banner-content { position: relative; z-index: 1; text-align: center; max-width: 60%; margin: 0 auto; }
    .cta-banner-title {
        font-size: 1.6rem;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 12px;
        line-height: 1.5;
    }
    .cta-banner-desc {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
    }
    .cta-banner-btn {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: #FFFFFF;
        color: #1B5E4A;
        font-size: 1rem;
        font-weight: 700;
        padding: 16px 32px;
        border-radius: 50px;
        text-decoration: none;
        white-space: nowrap;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border: 2px solid transparent;
    }
    .cta-banner-btn:hover {
        background: #E8F5E9;
        border-color: #4CAF50;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .cta-leaf-right {
        position: absolute;
        right: -20px;
        top: -30px;
        width: 250px;
        height: 250px;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%234CAF50" opacity="0.2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>');
        background-repeat: no-repeat;
        background-size: contain;
        transform: rotate(15deg);
        pointer-events: none;
    }
    .cta-leaf-left {
        position: absolute;
        left: -10px;
        bottom: -20px;
        width: 150px;
        height: 150px;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%234CAF50" opacity="0.1"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>');
        background-repeat: no-repeat;
        background-size: contain;
        transform: rotate(-15deg);
        pointer-events: none;
    }
    .site-footer { background: linear-gradient(to top, #022d3d 0%, #03445b 50%, #01506d 100%) !important; color: #FFFFFF !important; margin-top: 80px !important; position: relative !important; overflow: hidden !important; }
    .site-footer::before {
        content: '' !important;
        position: absolute !important;
        inset: 0 !important;
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px) !important;
        background-size: 20px 20px !important;
        pointer-events: none !important;
        z-index: 0 !important;
    }
    .footer-main { position: relative; z-index: 1; padding: 60px 0 40px; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .footer-container { display: grid; grid-template-columns: 1.2fr 1fr 1fr 1fr; gap: 0; width: 100%; max-width: 100%; margin: 0 auto; padding: 0 40px; }
    .footer-col { text-align: right; padding: 0 24px; position: relative; }
    .footer-col:not(:last-child)::after { content: ''; position: absolute; left: 0; top: 10%; bottom: 10%; width: 1px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.25), transparent); }
    .footer-logo-col { display: flex; flex-direction: column; align-items: flex-start; }
    .footer-logo img { max-width: 130px; margin-bottom: 16px; }
    .footer-desc { font-size: 0.85rem; color: rgba(255,255,255,0.75); line-height: 1.8; }
    .footer-title { font-size: 1rem; font-weight: 700; color: #FFFFFF; margin-bottom: 20px; display: block; }
    .footer-list { list-style: none; padding: 0; margin: 0; }
    .footer-list li { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px; font-size: 0.85rem; color: rgba(255,255,255,0.75); line-height: 1.6; }
    .footer-list li svg { flex-shrink: 0; margin-top: 3px; }
    .footer-list li a { color: rgba(255,255,255,0.75); text-decoration: none; transition: color 0.3s; }
    .footer-list li a:hover { color: #4CAF50; }
    
    /* شبکه‌های اجتماعی (سبز خطی با دایره) */
    .footer-socials { display: flex; gap: 10px; margin-bottom: 24px; }
    .footer-socials a { display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; background: transparent; border: 1px solid rgba(76,175,80,0.5); transition: all 0.3s; }
    .footer-socials a:hover { background: rgba(76,175,80,0.1); border-color: #4CAF50; transform: translateY(-2px); }
    .footer-socials a svg { stroke: #4CAF50 !important; fill: none !important; }
    .footer-socials a:hover svg { stroke: #FFFFFF !important; }
    
    /* دکمه‌ها */
    .footer-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        background: linear-gradient(135deg, #2E7D32 0%, #1B5E20 100%);
        color: #FFFFFF;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 50px;
        border: none;
        cursor: pointer;
        transition: all 0.3s;
        width: 100%;
        margin-bottom: 8px;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(46,125,50,0.2);
    }
    .footer-btn:hover {
        background: linear-gradient(135deg, #388E3C 0%, #2E7D32 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(46,125,50,0.4);
    }
    .footer-btn svg { stroke: #FFFFFF; }
    
    .footer-newsletter { margin-top: 20px; }
    .footer-newsletter-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        background: linear-gradient(135deg, #2E7D32 0%, #1B5E20 100%);
        color: #FFFFFF;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 50px;
        border: none;
        cursor: pointer;
        transition: all 0.3s;
        width: 100%;
        box-shadow: 0 4px 12px rgba(46,125,50,0.2);
    }
    .footer-newsletter-btn:hover {
        background: linear-gradient(135deg, #388E3C 0%, #2E7D32 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(46,125,50,0.4);
    }
    
    .footer-bottom { position: relative; z-index: 1; text-align: center; padding: 20px 0; font-size: 0.8rem; color: rgba(255,255,255,0.5); }
    
    @media (max-width: 1024px) { .footer-container { display: grid; grid-template-columns: 1.2fr 1fr 1fr 1fr; gap: 0; width: 100%; max-width: 100%; margin: 0 auto; padding: 0 40px; } .footer-col:not(:last-child)::after { content: ''; position: absolute; left: 0; top: 10%; bottom: 10%; width: 1px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.25), transparent); } }
    @media (max-width: 600px) { .footer-container { display: grid; grid-template-columns: 1.2fr 1fr 1fr 1fr; gap: 0; width: 100%; max-width: 100%; margin: 0 auto; padding: 0 40px; } .footer-col { text-align: center; padding: 0 16px; } .footer-logo-col { align-items: center; } .footer-list li { justify-content: center; } .footer-socials { justify-content: center; } }

    /* ===== مودال‌ها ===== */
    .newsletter-modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.7); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(8px); }
    .newsletter-modal.is-open { display: flex; animation: fadeIn 0.3s ease; }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    .newsletter-modal-content { background: rgba(255,255,255,0.95); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 24px; padding: 48px 40px; width: 90%; max-width: 420px; text-align: center; position: relative; box-shadow: 0 25px 80px rgba(0,0,0,0.4); animation: slideUp 0.4s cubic-bezier(0.16,1,0.3,1); }
    @keyframes slideUp { from { opacity: 0; transform: translateY(30px) scale(0.95); } to { opacity: 1; transform: translateY(0) scale(1); } }
    .newsletter-modal-close { position: absolute; top: 16px; left: 16px; background: rgba(0,0,0,0.05); border: none; width: 32px; height: 32px; border-radius: 50%; font-size: 1rem; cursor: pointer; color: #666; display: flex; align-items: center; justify-content: center; }
    .newsletter-modal h3 { font-size: 1.4rem; font-weight: 800; color: #1B5E4A; margin-bottom: 8px; }
    .newsletter-modal p { font-size: 0.9rem; color: #666; margin-bottom: 24px; line-height: 1.6; }
    .newsletter-modal input[type="tel"] { width: 100%; padding: 16px 20px; border: 2px solid #E0E4E8; border-radius: 16px; font-family: inherit; font-size: 1rem; text-align: center; outline: none; background: #FAFAFA; }
    .newsletter-modal input[type="tel"]:focus { border-color: #4CAF50; background: #FFFFFF; box-shadow: 0 0 0 4px rgba(76,175,80,0.1); }
    .newsletter-code-inputs { display: flex; gap: 10px; justify-content: center; direction: ltr; margin-bottom: 24px; }
    .newsletter-code-inputs input { width: 56px; height: 64px; border: 2px solid #E0E4E8; border-radius: 16px; font-size: 1.5rem; font-weight: 700; text-align: center; outline: none; background: #FAFAFA; color: #1B5E4A; }
    .newsletter-code-inputs input:focus { border-color: #4CAF50; background: #FFFFFF; box-shadow: 0 0 0 4px rgba(76,175,80,0.1); }
    .newsletter-code-inputs input.filled { border-color: #4CAF50; background: #F1F8E9; }
    .newsletter-modal button.newsletter-submit { background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%); color: #FFFFFF; border: none; padding: 16px 32px; border-radius: 16px; font-family: inherit; font-size: 1rem; font-weight: 700; cursor: pointer; width: 100%; transition: all 0.3s; }
    .newsletter-modal button.newsletter-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(76,175,80,0.4); }
    .newsletter-msg { font-size: 0.85rem; margin-top: 16px; min-height: 20px; font-weight: 600; }
    .newsletter-msg.success { color: #4CAF50; }
    .newsletter-msg.error { color: #D32F2F; }
    .newsletter-step-2 { display: none; }
    .newsletter-step-2.is-active { display: block; }
</style>
<!-- CTA پایانی (مشترک در همه صفحات) -->
<section class="cta-banner-section global-cta">
    <div class="cta-banner-container">
        <div class="cta-leaf-right"></div>
        <div class="cta-leaf-left"></div>
        <div class="cta-banner-content">
            <h2 class="cta-banner-title">پاکیزگی محیط کار را به یک فرایند قابل مدیریت تبدیل کنید.</h2>
            <p class="cta-banner-desc">برای شناخت نیازهای مجموعه خود و بررسی امکان همکاری با ما در ارتباط باشید.</p>
        </div>
        <a href="/#request-form" class="cta-banner-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <span>درخواست بازدید اولیه</span>
        </a>
    </div>
</section>
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-container">
            
            <div class="footer-col footer-logo-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="پاک پژوه" width="120" height="60">
                </a>
                <p class="footer-desc"><?php echo wp_kses_post( get_option( "pakpajoh_text_footer_desc", "پاک پژوه، ارائه‌دهنده خدمات تخصصی نظافت صنعتی با فناوری‌های نوین، شوینده‌های بایو و نظارت مستمر. درخشش در عمل، تعهد ما به کیفیت است." ) ); ?></p>
            </div>

            <div class="footer-col">
                <h3 class="footer-title">خدمات ما در سراسر کشور</h3>
                <ul class="footer-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>ارائه خدمات در سراسر ایران</span></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg><a href="/services/">نظافت صنعتی</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><a href="/services/">نظافت تجاری</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg><a href="/services/">نظافت اداری</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg><a href="/services/">خشک‌شویی تخصصی</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg><a href="/services/">لجستیک و ترابری</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-title">اطلاعات تماس</h3>
                <ul class="footer-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg><span dir="rtl">۰۲۱-۹۱۵۵۵۶۷۸</span></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><span>info@pakpajoh.com</span></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>تهران، خیابان نمونه، پلاک ۱۲۳</span></li>
                </ul>
                <a href="/contact/" class="footer-btn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>ارتباط با ما</span></a>
                <button class="footer-btn" id="open-consultation"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg><span>ثبت درخواست مشاوره</span></button>
            </div>

            <div class="footer-col">
                <h3 class="footer-title">شبکه‌های اجتماعی</h3>
                <div class="footer-socials">
                    <a href="#" aria-label="لینکدین"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
                    <a href="#" aria-label="تلگرام"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3L2 10.5l7 2.5 2.5 7L22 3z"/><path d="M9 13l10-6"/></svg></a>
                    <a href="#" aria-label="اینستاگرام"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#4CAF50"/></svg></a>
                    <a href="#" aria-label="واتس‌اپ"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></a>
                </div>
                <div class="footer-newsletter">
                    <h3 class="footer-title">عضویت در خبرنامه</h3>
                    <button class="footer-newsletter-btn" id="open-newsletter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><span>عضویت در خبرنامه</span></button>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom"><p><?php echo wp_kses_post( get_option( "pakpajoh_text_footer_copyright", "© ۱۴۰۴ - تمامی حقوق مادی و معنوی محفوظ است." ) ); ?></p></div>
</footer>

<!-- مودال خبرنامه -->
<div class="newsletter-modal" id="newsletter-modal">
    <div class="newsletter-modal-content">
        <button class="newsletter-modal-close" id="close-newsletter">✕</button>
        <div class="newsletter-step-1" id="newsletter-step-1">
            <h3>عضویت در خبرنامه</h3>
            <p>شماره همراه خود را وارد کنید</p>
            <input type="tel" id="newsletter-phone" placeholder="۰۹۱۲۳۴۵۶۷۸۹" dir="ltr">
            <button class="newsletter-submit" id="send-code" style="margin-top: 20px;">ارسال کد تایید</button>
            <p class="newsletter-msg" id="newsletter-msg-1"></p>
        </div>
        <div class="newsletter-step-2" id="newsletter-step-2">
            <h3>کد تایید را وارد کنید</h3>
            <p>کد ۴ رقمی به شماره شما ارسال شد</p>
            <div class="newsletter-code-inputs" id="code-inputs">
                <input type="text" maxlength="1" inputmode="numeric" data-index="0">
                <input type="text" maxlength="1" inputmode="numeric" data-index="1">
                <input type="text" maxlength="1" inputmode="numeric" data-index="2">
                <input type="text" maxlength="1" inputmode="numeric" data-index="3">
            </div>
            <button class="newsletter-submit" id="verify-code">تایید و عضویت</button>
            <p class="newsletter-msg" id="newsletter-msg-2"></p>
        </div>
    </div>
</div>

<script>
(function() {
    var modal = document.getElementById('newsletter-modal');
    var openBtn = document.getElementById('open-newsletter');
    var closeBtn = document.getElementById('close-newsletter');
    var sendBtn = document.getElementById('send-code');
    var verifyBtn = document.getElementById('verify-code');
    var step1 = document.getElementById('newsletter-step-1');
    var step2 = document.getElementById('newsletter-step-2');
    var msg1 = document.getElementById('newsletter-msg-1');
    var msg2 = document.getElementById('newsletter-msg-2');
    var codeInputs = document.querySelectorAll('#code-inputs input');

    openBtn.addEventListener('click', function() {
        modal.classList.add('is-open');
        step1.style.display = 'block';
        step2.classList.remove('is-active');
        msg1.textContent = '';
        msg2.textContent = '';
        codeInputs.forEach(function(i) { i.value = ''; i.classList.remove('filled'); });
    });

    closeBtn.addEventListener('click', function() { modal.classList.remove('is-open'); });
    modal.addEventListener('click', function(e) { if (e.target === modal) modal.classList.remove('is-open'); });

    sendBtn.addEventListener('click', function() {
        var phone = document.getElementById('newsletter-phone').value.trim();
        if (phone.length < 10) {
            msg1.textContent = 'لطفاً یک شماره همراه معتبر وارد کنید.';
            msg1.className = 'newsletter-msg error';
            return;
        }
        msg1.textContent = 'کد تایید ارسال شد.';
        msg1.className = 'newsletter-msg success';
        step1.style.display = 'none';
        step2.classList.add('is-active');
        codeInputs[0].focus();
    });

    codeInputs.forEach(function(input, idx) {
        input.addEventListener('input', function() {
            if (this.value.length === 1) {
                this.classList.add('filled');
                if (idx < codeInputs.length - 1) codeInputs[idx + 1].focus();
            } else {
                this.classList.remove('filled');
            }
        });
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && this.value === '' && idx > 0) {
                codeInputs[idx - 1].focus();
            }
        });
    });

    verifyBtn.addEventListener('click', function() {
        var code = Array.from(codeInputs).map(function(i) { return i.value; }).join('');
        if (code === '1234') {
            msg2.textContent = 'عضویت شما با موفقیت انجام شد.';
            msg2.className = 'newsletter-msg success';
            setTimeout(function() { modal.classList.remove('is-open'); }, 2000);
        } else {
            msg2.textContent = 'کد وارد شده صحیح نیست.';
            msg2.className = 'newsletter-msg error';
        }
    });
})();
</script>

<style>
    .request-modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.7); z-index: 9999; align-items: center; justify-content: center; backdrop-filter: blur(8px); padding: 20px; }
    .request-modal.is-open { display: flex; animation: fadeInModal 0.3s ease; }
    @keyframes fadeInModal { from { opacity: 0; } to { opacity: 1; } }
    .request-modal-content { background: #FFFFFF; border-radius: 24px; padding: 40px; width: 100%; max-width: 480px; position: relative; box-shadow: 0 25px 80px rgba(0,0,0,0.3); max-height: 90vh; overflow-y: auto; }
    .request-modal-close { position: absolute; top: 16px; left: 16px; background: rgba(0,0,0,0.05); border: none; width: 32px; height: 32px; border-radius: 50%; font-size: 1rem; cursor: pointer; color: #666; display: flex; align-items: center; justify-content: center; }
    .request-modal-content h3 { font-size: 1.4rem; font-weight: 800; color: #1B5E4A; margin-bottom: 8px; text-align: center; }
    .request-modal-content > p { font-size: 0.9rem; color: #666; margin-bottom: 24px; text-align: center; }
    .request-modal .form-group { margin-bottom: 16px; }
    .request-modal .form-group label { display: block; font-size: 0.85rem; font-weight: 600; color: #333; margin-bottom: 6px; }
    .request-modal .form-group input,
    .request-modal .form-group select,
    .request-modal .form-group textarea { width: 100%; padding: 12px 16px; border: 2px solid #E0E4E8; border-radius: 12px; font-family: inherit; font-size: 0.95rem; outline: none; transition: border-color 0.3s; }
    .request-modal .form-group input:focus,
    .request-modal .form-group select:focus,
    .request-modal .form-group textarea:focus { border-color: #4CAF50; box-shadow: 0 0 0 4px rgba(76,175,80,0.1); }
    .request-modal-submit { width: 100%; padding: 14px; background: linear-gradient(135deg, #4CAF50 0%, #2E7D32 100%); color: #FFFFFF; border: none; border-radius: 50px; font-family: inherit; font-size: 1rem; font-weight: 700; cursor: pointer; transition: all 0.3s; margin-top: 8px; }
    .request-modal-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(76,175,80,0.4); }
</style>
<!-- مودال فرم درخواست مشاوره -->
<div class="request-modal" id="request-modal">
    <div class="request-modal-content">
        <button class="request-modal-close" id="close-request-modal">✕</button>
        <h3>ثبت درخواست مشاوره</h3>
        <p>برای دریافت مشاوره رایگان، فرم زیر را تکمیل کنید.</p>
        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="pakpajoh-form-modal">
            <input type="hidden" name="action" value="pakpajoh_request_form">
            <?php wp_nonce_field( 'pakpajoh_request_nonce', 'pakpajoh_nonce' ); ?>
            <div class="form-group">
                <label for="modal-req-name">نام و نام خانوادگی</label>
                <input type="text" name="req_name" id="modal-req-name" required>
            </div>
            <div class="form-group">
                <label for="modal-req-phone">شماره تماس</label>
                <input type="tel" name="req_phone" id="modal-req-phone" required>
            </div>
            <div class="form-group">
                <label for="modal-req-service">نوع خدمت</label>
                <select name="req_service" id="modal-req-service" required>
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
            <div class="form-group">
                <label for="modal-req-message">توضیحات (اختیاری)</label>
                <textarea name="req_message" id="modal-req-message" rows="3"></textarea>
            </div>
            <button type="submit" class="request-modal-submit">ارسال درخواست</button>
        </form>
    </div>
</div>
<script>
(function() {
    var modal = document.getElementById('request-modal');
    if (!modal) return;

    var closeBtn = document.getElementById('close-request-modal');
    var serviceSelect = document.getElementById('modal-req-service');

    // باز کردن مودال با کلیک روی لینک‌های درخواست مشاوره
    document.querySelectorAll('a[href*="request-form"]').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var url = new URL(this.href, window.location.origin);
            var service = url.searchParams.get('service');
            if (service && serviceSelect) {
                for (var i = 0; i < serviceSelect.options.length; i++) {
                    if (serviceSelect.options[i].value === service) {
                        serviceSelect.selectedIndex = i;
                        break;
                    }
                }
            }
            modal.classList.add('is-open');
        });
    });

    closeBtn.addEventListener('click', function() { modal.classList.remove('is-open'); });
    modal.addEventListener('click', function(e) { if (e.target === modal) modal.classList.remove('is-open'); });
})();
</script>
<?php wp_footer(); ?>
</body>
</html>