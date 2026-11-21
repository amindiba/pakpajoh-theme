<?php
/**
 * Footer — PakPajoh Theme (v7.0) - بازگرداندن شبکه‌های اجتماعی و دکمه خبرنامه
 */
?>
</main>
<?php
$newsletter_status = isset( $_GET['newsletter_status'] ) ? sanitize_key( wp_unslash( $_GET['newsletter_status'] ) ) : '';
$newsletter_messages = array(
    'success'   => array( 'شماره شما برای پیگیری در خبرنامه ثبت شد.', 'success' ),
    'duplicate' => array( 'این شماره قبلاً در خبرنامه ثبت شده است.', 'success' ),
    'invalid'   => array( 'شماره همراه معتبر وارد کنید؛ مانند ۰۹۱۲۱۲۳۴۵۶۷.', 'error' ),
    'consent'   => array( 'برای ثبت شماره، تأیید متن رضایت ضروری است.', 'error' ),
    'error'     => array( 'ثبت شماره انجام نشد. لطفاً کمی بعد دوباره تلاش کنید.', 'error' ),
);
$newsletter_feedback = isset( $newsletter_messages[ $newsletter_status ] ) ? $newsletter_messages[ $newsletter_status ] : null;
?>
<style>
    /* ===== استایل CTA پایانی (مشترک در همه صفحات) ===== */
    .cta-banner-section { padding: 48px 0 42px; background: #FFFFFF; }
    .cta-banner-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 32px;
        background: linear-gradient(135deg, #1B5E4A 0%, #124232 100%);
        border-radius: 20px;
        padding: 30px clamp(24px, 4vw, 56px);
        margin: 0 auto;
        width: calc(100% - 64px);
        max-width: 1320px;
        overflow: hidden;
        min-height: 148px;
    }
    .cta-banner-content { position: relative; z-index: 1; text-align: right; max-width: 760px; margin: 0; }
    .cta-banner-title {
        font-size: clamp(1.25rem, 2vw, 1.65rem);
        font-weight: 800;
        color: #FFFFFF;
        margin: 0 0 8px;
        line-height: 1.55;
    }
    .cta-banner-desc {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
        line-height: 1.7;
    }
    .cta-banner-btn {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        flex: 0 0 auto;
        gap: 10px;
        background: #FFFFFF;
        color: #1B5E4A;
        font-size: 0.9rem;
        font-weight: 700;
        min-height: 50px;
        padding: 12px 22px;
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
    .site-footer { background: linear-gradient(145deg, #063748 0%, #03445b 55%, #01506d 100%) !important; color: #FFFFFF !important; margin-top: 0 !important; position: relative !important; overflow: hidden !important; }
    .site-footer::before {
        content: '' !important;
        position: absolute !important;
        inset: 0 !important;
        background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px) !important;
        background-size: 20px 20px !important;
        pointer-events: none !important;
        z-index: 0 !important;
    }
    .footer-main { position: relative; z-index: 1; padding: 54px 0 34px; border-bottom: 1px solid rgba(255,255,255,0.12); }
    .footer-container { display: grid; grid-template-columns: 1.25fr 1fr 1.15fr 0.85fr; gap: 24px; width: 100%; max-width: 1320px; margin: 0 auto; padding: 0 32px; }
    .footer-col { min-width: 0; text-align: right; padding: 0 18px; position: relative; }
    .footer-col:not(:last-child)::after { content: ''; position: absolute; left: -12px; top: 4%; bottom: 4%; width: 1px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.18), transparent); }
    .footer-logo-col { display: flex; flex-direction: column; align-items: flex-start; }
    .footer-logo img { width: auto; max-width: 136px; height: auto; max-height: 64px; margin-bottom: 14px; object-fit: contain; }
    .footer-desc { font-size: 0.82rem; color: rgba(255,255,255,0.78); line-height: 1.85; margin: 0; }
    .footer-title { position: relative; font-size: 0.95rem; font-weight: 800; color: #FFFFFF; margin: 0 0 16px; padding-bottom: 10px; display: block; }
    .footer-title::after { position: absolute; right: 0; bottom: 0; width: 34px; height: 2px; border-radius: 2px; background: #4CAF50; content: ''; }
    .footer-list { list-style: none; padding: 0; margin: 0; }
    .footer-list li { display: flex; align-items: flex-start; gap: 9px; margin-bottom: 9px; font-size: 0.8rem; color: rgba(255,255,255,0.78); line-height: 1.7; }
    .footer-list li svg { width: 15px; height: 15px; flex: 0 0 15px; margin-top: 3px; }
    .footer-list li a { color: rgba(255,255,255,0.82); text-decoration: none; transition: color 0.2s ease; }
    .footer-list li a:hover { color: #7BE495; }
    .footer-contact-phones { display: flex; flex-wrap: wrap; gap: 3px 10px; direction: ltr; }
    .footer-contact-phones a { white-space: nowrap; }
    .footer-address { display: flex; flex-direction: column; gap: 2px; }
    .footer-address small { color: rgba(255,255,255,0.62); font-size: 0.72rem; }
    
    /* شبکه‌های اجتماعی (سبز خطی با دایره) */
    .footer-socials { display: flex; flex-wrap: wrap; gap: 9px; margin-bottom: 22px; }
    .footer-socials a { display: flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 14px; background: rgba(255,255,255,0.06); border: 1px solid rgba(123,228,149,0.35); transition: background 0.2s ease, border-color 0.2s ease, transform 0.2s ease; }
    .footer-socials a:hover { background: rgba(76,175,80,0.2); border-color: #7BE495; transform: translateY(-2px); }
    .footer-socials a svg { stroke: #4CAF50 !important; fill: none !important; }
    .footer-socials a:hover svg { stroke: #FFFFFF !important; }
    
    /* دکمه‌ها */
    .footer-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        background: linear-gradient(135deg, #388E3C 0%, #1B5E4A 100%);
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
        background: linear-gradient(135deg, #388E3C 0%, #1B5E4A 100%);
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
    
    .footer-bottom { position: relative; z-index: 1; text-align: center; padding: 17px 16px calc(17px + env(safe-area-inset-bottom, 0px)); font-size: 0.76rem; color: rgba(255,255,255,0.66); }
    .footer-bottom p { margin: 0; }
    .site-footer :focus-visible,
    .cta-banner-section :focus-visible { outline: 3px solid #9BE7A4; outline-offset: 3px; }

    @media (max-width: 1100px) {
        .cta-banner-section { padding: 34px 0 32px; }
        .cta-banner-container { width: calc(100% - 48px); min-height: 130px; padding: 24px 30px; gap: 22px; }
        .cta-banner-title { font-size: 1.35rem; }
        .cta-banner-desc { font-size: 0.84rem; }
        .cta-banner-btn { padding: 11px 18px; font-size: 0.84rem; }
        .footer-container { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 32px 22px; padding: 0 28px; }
        .footer-col { padding: 0 12px; }
        .footer-col:not(:last-child)::after { display: none; }
    }
    @media (max-width: 640px) {
        .cta-banner-section { padding: 24px 0 26px; }
        .cta-banner-container {
            width: calc(100% - 28px);
            min-height: 0;
            flex-direction: column;
            align-items: stretch;
            gap: 15px;
            padding: 22px 17px;
            border-radius: 17px;
        }
        .cta-banner-content { max-width: none; text-align: right; }
        .cta-banner-title { font-size: 1.08rem; line-height: 1.55; margin-bottom: 6px; }
        .cta-banner-desc { font-size: 0.78rem; line-height: 1.65; }
        .cta-banner-btn { width: 100%; min-height: 46px; justify-content: center; padding: 10px 14px; border-radius: 13px; font-size: 0.82rem; }
        .cta-leaf-right { right: auto; left: -35px; top: -50px; width: 150px; height: 150px; opacity: 0.7; }
        .cta-leaf-left { left: -24px; bottom: -34px; width: 100px; height: 100px; }
        .footer-main { padding: 34px 0 24px; }
        .footer-container {
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            grid-template-areas: "brand brand" "services socials" "contact contact";
            gap: 22px 14px;
            padding: 0 16px;
        }
        .footer-col { padding: 0 5px; }
        .footer-logo-col { grid-area: brand; padding: 0 3px 18px; border-bottom: 1px solid rgba(255,255,255,0.12); }
        .footer-services-col { grid-area: services; }
        .footer-contact-col {
            grid-area: contact;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px;
            padding-top: 18px;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .footer-contact-col > .footer-title,
        .footer-contact-col > .footer-list { grid-column: 1 / -1; }
        .footer-contact-col > .footer-title { margin-bottom: 0; }
        .footer-contact-col > .footer-list { margin-bottom: 4px; }
        .footer-social-col { grid-area: socials; }
        .footer-logo img { max-width: 112px; max-height: 52px; margin-bottom: 9px; }
        .footer-desc { max-width: 520px; font-size: 0.76rem; line-height: 1.75; }
        .footer-title { font-size: 0.84rem; margin-bottom: 11px; padding-bottom: 8px; }
        .footer-list li { gap: 7px; margin-bottom: 7px; font-size: 0.74rem; line-height: 1.6; }
        .footer-list li svg { width: 14px; height: 14px; flex-basis: 14px; }
        .footer-contact-phones { gap: 5px 10px; }
        .footer-contact-phones a { font-size: 0.78rem; }
        .footer-social-col > .footer-title { font-size: 0.78rem; margin-bottom: 9px; }
        .footer-socials { gap: 6px; margin-bottom: 12px; }
        .footer-socials a { width: 32px; height: 32px; border-radius: 10px; }
        .footer-socials a svg { width: 14px; height: 14px; }
        .footer-newsletter { margin-top: 10px; }
        .footer-contact-col > .footer-btn {
            min-height: 34px;
            margin: 0;
            padding: 5px 6px;
            gap: 4px;
            border-radius: 11px;
            font-size: 0.68rem;
            white-space: nowrap;
        }
        .footer-contact-col > .footer-btn svg { width: 12px; height: 12px; flex: 0 0 12px; }
        .footer-newsletter-btn { min-height: 34px; padding: 6px 8px; font-size: 0.68rem; }
        .footer-bottom { padding-top: 14px; font-size: 0.68rem; }
    }
    @media (max-width: 380px) {
        .cta-banner-container { width: calc(100% - 20px); padding: 19px 14px; }
        .footer-container { padding: 0 12px; gap: 19px 10px; }
        .footer-col { padding-right: 2px; padding-left: 2px; }
        .footer-list li { font-size: 0.7rem; }
        .footer-contact-phones { gap: 4px 8px; }
        .footer-contact-phones a { font-size: 0.74rem; }
    }

    /* ===== مودال‌ها ===== */
    .newsletter-modal { display: none; position: fixed; inset: 0; z-index: 9999; align-items: center; justify-content: center; padding: 18px; background: rgba(4,24,31,0.65); backdrop-filter: blur(7px); }
    .newsletter-modal.is-open { display: flex; animation: fadeIn 0.3s ease; }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    .newsletter-modal-content { background: #FFFFFF; border: 1px solid rgba(255,255,255,0.6); border-radius: 20px; padding: 34px 28px 26px; width: min(100%, 430px); text-align: right; position: relative; box-shadow: 0 25px 80px rgba(0,0,0,0.28); animation: slideUp 0.32s cubic-bezier(0.16,1,0.3,1); }
    @keyframes slideUp { from { opacity: 0; transform: translateY(30px) scale(0.95); } to { opacity: 1; transform: translateY(0) scale(1); } }
    .newsletter-modal-close { position: absolute; top: 12px; left: 12px; background: #F0F5F2; border: 0; width: 36px; height: 36px; border-radius: 11px; font-size: 1rem; cursor: pointer; color: #1B5E4A; display: flex; align-items: center; justify-content: center; }
    .newsletter-modal h3 { font-size: 1.25rem; font-weight: 800; color: #1B5E4A; margin: 0 0 7px; }
    .newsletter-modal p { font-size: 0.86rem; color: #5D6A64; margin: 0 0 16px; line-height: 1.7; }
    .newsletter-modal input[type="tel"] { width: 100%; min-height: 48px; padding: 11px 14px; border: 1px solid #D7E3DC; border-radius: 12px; font-family: inherit; font-size: 1rem; text-align: center; outline: none; background: #F8FBF9; }
    .newsletter-modal input[type="tel"]:focus { border-color: #4CAF50; background: #FFFFFF; box-shadow: 0 0 0 3px rgba(76,175,80,0.12); }
    .newsletter-consent { display: flex; align-items: flex-start; gap: 8px; margin: 12px 0; color: #5D6A64; font-size: 0.75rem; line-height: 1.6; }
    .newsletter-consent input { flex: 0 0 auto; margin: 4px 0 0; accent-color: #1B5E4A; }
    .newsletter-modal button.newsletter-submit { background: linear-gradient(135deg, #388E3C 0%, #1B5E4A 100%); color: #FFFFFF; border: none; min-height: 48px; padding: 11px 20px; border-radius: 12px; font-family: inherit; font-size: 0.9rem; font-weight: 700; cursor: pointer; width: 100%; transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .newsletter-modal button.newsletter-submit:hover { transform: translateY(-1px); box-shadow: 0 8px 20px rgba(27,94,74,0.25); }
    .newsletter-msg { font-size: 0.8rem; margin: 12px 0 0 !important; min-height: 0; font-weight: 600; }
    .newsletter-msg.success { color: #4CAF50; }
    .newsletter-msg.error { color: #D32F2F; }
    @media (max-width: 640px) {
        .newsletter-modal { padding: 12px; }
        .newsletter-modal-content { padding: 30px 18px 20px; border-radius: 16px; }
        .newsletter-modal h3 { font-size: 1.08rem; }
        .newsletter-modal p { font-size: 0.8rem; margin-bottom: 12px; }
    }
    @media (prefers-reduced-motion: reduce) {
        .newsletter-modal, .newsletter-modal-content, .footer-newsletter-btn {
            animation: none !important;
            transition: none !important;
        }
    }
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
        <a href="<?php echo esc_url( home_url( '/#request-form' ) ); ?>" class="cta-banner-btn">
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
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="پاک‌پژوه" width="120" height="60" loading="lazy" decoding="async">
                </a>
                <p class="footer-desc"><?php echo wp_kses_post( get_option( "pakpajoh_text_footer_desc", "پاک‌پژوه، ارائه‌دهندهٔ خدمات تخصصی نظافت صنعتی با فناوری‌های نوین، شوینده‌های بایو و نظارت مستمر است. درخشش در عمل، تعهد ما به کیفیت است." ) ); ?></p>
            </div>

            <div class="footer-col footer-services-col">
                <h3 class="footer-title">خدمات ما در سراسر کشور</h3>
                <ul class="footer-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>ارائه خدمات در سراسر ایران</span></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">نظافت صنعتی</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">نظافت تجاری</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">نظافت اداری</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">خشک‌شویی تخصصی</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">لجستیک و ترابری</a></li>
                </ul>
            </div>

            <div class="footer-col footer-contact-col">
                <h3 class="footer-title">اطلاعات تماس</h3>
                <ul class="footer-list">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg><span class="footer-contact-phones"><a href="tel:+989121156868" dir="ltr">۰۹۱۲۱۱۵۶۸۶۸</a><a href="tel:+989122088156" dir="ltr">۰۹۱۲۲۰۸۸۱۵۶</a><a href="tel:+989123353149" dir="ltr">۰۹۱۲۳۳۵۳۱۴۹</a><a href="tel:+982191555678" dir="ltr">۰۲۱-۹۱۵۵۵۶۷۸</a></span></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><a href="mailto:info@pakpajoh.com" dir="ltr">info@pakpajoh.com</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span class="footer-address"><span>تهران، خیابان کریم‌خان، کوچه آبگان، پلاک ۴، واحد ۱</span><small>کد پستی: ۱۵۹۷۶۱۵۸۱۱</small></span></li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer-btn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span>ارتباط با ما</span></a>
                <a href="<?php echo esc_url( home_url( '/#request-form' ) ); ?>" class="footer-btn"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg><span>ثبت درخواست مشاوره</span></a>
            </div>

            <div class="footer-col footer-social-col">
                <h3 class="footer-title">شبکه‌های اجتماعی</h3>
                <div class="footer-socials">
                    <a href="https://www.linkedin.com/company/pakpajoh/" target="_blank" rel="noopener noreferrer" aria-label="لینکدین"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
                    <a href="https://t.me/pakpajoh" target="_blank" rel="noopener noreferrer" aria-label="تلگرام"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3L2 10.5l7 2.5 2.5 7L22 3z"/><path d="M9 13l10-6"/></svg></a>
                    <a href="https://www.instagram.com/pakpajoh/" target="_blank" rel="noopener noreferrer" aria-label="اینستاگرام"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="#4CAF50"/></svg></a>
                    <a href="https://wa.me/989121156868" target="_blank" rel="noopener noreferrer" aria-label="واتس‌اپ"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg></a>
                </div>
                <div class="footer-newsletter">
                    <h3 class="footer-title">عضویت در خبرنامه</h3>
                    <button class="footer-newsletter-btn" id="open-newsletter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg><span>عضویت در خبرنامه</span></button>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom"><p><?php echo wp_kses_post( get_option( "pakpajoh_text_footer_copyright", "© ۱۴۰۵ - تمامی حقوق مادی و معنوی محفوظ است." ) ); ?></p></div>
</footer>

<!-- فرم ثبت سرنخ خبرنامه -->
<div class="newsletter-modal<?php echo $newsletter_feedback ? ' is-open' : ''; ?>" id="newsletter-modal" aria-hidden="<?php echo $newsletter_feedback ? 'false' : 'true'; ?>">
    <div class="newsletter-modal-content" role="dialog" aria-modal="true" aria-labelledby="newsletter-title" tabindex="-1">
        <button class="newsletter-modal-close" id="close-newsletter" type="button" aria-label="بستن پنجره">×</button>
        <h3 id="newsletter-title">دریافت خبرهای پاک‌پژوه</h3>
        <p>شماره همراهتان را ثبت کنید تا برای پیگیری و اطلاع‌رسانی با شما در ارتباط باشیم.</p>
        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
            <input type="hidden" name="action" value="pakpajoh_newsletter_signup">
            <?php wp_nonce_field( 'pakpajoh_newsletter_signup', 'pakpajoh_newsletter_nonce' ); ?>
            <label class="screen-reader-text" for="newsletter-phone">شماره همراه</label>
            <input type="tel" id="newsletter-phone" name="newsletter_phone" placeholder="۰۹۱۲۱۲۳۴۵۶۷" inputmode="tel" autocomplete="tel" dir="ltr" required>
            <label class="newsletter-consent">
                <input type="checkbox" name="newsletter_consent" value="1" required>
                <span>موافقم شماره‌ام برای پیگیری و اطلاع‌رسانی پاک‌پژوه ذخیره شود.</span>
            </label>
            <button class="newsletter-submit" type="submit">ثبت شماره تماس</button>
        </form>
        <?php if ( $newsletter_feedback ) : ?>
            <p class="newsletter-msg <?php echo esc_attr( $newsletter_feedback[1] ); ?>" role="status" aria-live="polite"><?php echo esc_html( $newsletter_feedback[0] ); ?></p>
        <?php endif; ?>
    </div>
</div>

<script>
(function() {
    var modal = document.getElementById('newsletter-modal');
    var openBtn = document.getElementById('open-newsletter');
    var closeBtn = document.getElementById('close-newsletter');
    if (!modal || !openBtn || !closeBtn) return;

    var previousFocus = null;
    function openModal() {
        previousFocus = document.activeElement;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        var phoneInput = document.getElementById('newsletter-phone');
        if (phoneInput) phoneInput.focus();
    }
    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        if (previousFocus && typeof previousFocus.focus === 'function') previousFocus.focus();
        previousFocus = null;
    }

    function focusableElements() {
        return modal.querySelectorAll('button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), a[href], [tabindex]:not([tabindex="-1"])');
    }

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(event) {
        if (event.target === modal) closeModal();
    });
    document.addEventListener('keydown', function(event) {
        if (!modal.classList.contains('is-open')) return;
        if (event.key === 'Escape') {
            closeModal();
            return;
        }
        if (event.key === 'Tab') {
            var focusable = focusableElements();
            var first = focusable[0];
            var last = focusable[focusable.length - 1];
            if (!first || !last) return;
            if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        }
    });
    if (modal.classList.contains('is-open')) {
        document.body.style.overflow = 'hidden';
        var phoneInput = document.getElementById('newsletter-phone');
        if (phoneInput) phoneInput.focus();
    }
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
            <input type="hidden" name="req_source" value="modal">
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
                    <option value="design">طراحی و برنامه‌ریزی خدمات پاک‌سازی</option>
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