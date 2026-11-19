<?php
/**
 * Template Name: صفحه خدمات ما
 */
get_header();

$services_hero_title = get_option( 'pakpajoh_text_services_hero_title', 'خدمات طراحی، مدیریت و اجرای پاکیزگی' );
$services_hero_desc = get_option( 'pakpajoh_text_services_hero_desc', 'پاک پژوه با شناخت شرایط هر محیط...' );
$services_hero_btn1 = get_option( 'pakpajoh_text_services_hero_btn1', 'درخواست بازدید اولیه رایگان' );
$services_hero_btn2 = get_option( 'pakpajoh_text_services_hero_btn2', 'مشاهده خدمات' );
$services_cards_title = get_option( 'pakpajoh_text_services_cards_title', 'چهار محور یک نظام یکپارچه پاکیزگی' );
$services_passport_title = get_option( 'pakpajoh_text_services_passport_title', 'شناسنامه فضا؛ نقطه شروع برنامه‌ریزی دقیق' );
$services_passport_desc = get_option( 'pakpajoh_text_services_passport_desc', 'برای تدوین برنامه‌ای متناسب با هر محیط...' );
$services_process_title = get_option( 'pakpajoh_text_services_process_title', 'خدمات پاکیزگی چگونه ارائه می‌شوند؟' );
$services_process_subtitle = get_option( 'pakpajoh_text_services_process_subtitle', 'از شناخت محیط تا بهبود مستمر...' );
$services_scope_title = get_option( 'pakpajoh_text_services_scope_title', 'خدمات متناسب با نیاز هر سازمان تعریف می‌شوند' );
$services_scope_desc = get_option( 'pakpajoh_text_services_scope_desc', 'دامنه خدمات پاک پژوه...' );
$services_docs_title = get_option( 'pakpajoh_text_services_docs_title', 'آنچه مدیریت می‌شود، باید ثبت و ارزیابی باشد' );
$services_docs_subtitle = get_option( 'pakpajoh_text_services_docs_subtitle', 'نمونه مستنداتی که در فرایند خدمات تولید می‌شود.' );
?>
<style>
.sv-hero{padding:80px 0 60px;background:#F9F9F9;text-align:center}
.sv-container{width:100%;padding:0 40px}
.sv-badge{display:inline-block;background:#E8F5E9;color:#1B5E4A;font-size:0.9rem;font-weight:700;padding:8px 24px;border-radius:50px;margin-bottom:20px}
.sv-title{font-size:2.2rem;font-weight:900;color:#005E80;margin-bottom:16px;line-height:1.4}
.sv-desc{font-size:1rem;color:#555;line-height:1.8;max-width:750px;margin:0 auto 30px}
.sv-actions{display:flex;gap:16px;justify-content:center;flex-wrap:wrap}
.sv-cards-section{padding:60px 0;background:#FFF}
.sv-section-title{font-size:1.8rem;font-weight:800;color:#005E80;text-align:center;margin-bottom:40px}
.sv-cards-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.sv-card-link{text-decoration:none}
.sv-card{background:#F9F9F9;border-radius:12px;padding:24px;text-align:center;border:1px solid #E0E4E8;height:100%;transition:all 0.3s}
.sv-card:hover{transform:translateY(-4px);box-shadow:0 8px 30px rgba(0,0,0,0.08);background:#FFF}
.sv-card-icon{margin-bottom:16px;display:flex;justify-content:center}
.sv-card h3{font-size:1rem;font-weight:800;color:#005E80;margin-bottom:8px;line-height:1.5}
.sv-card p{font-size:0.85rem;color:#666;line-height:1.6;margin-bottom:12px}
.sv-card-more{color:#4CAF50;font-size:0.85rem;font-weight:700}
.sv-details-section{padding:60px 0;background:#F9F9F9}
.sv-detail{margin-bottom:50px;padding-bottom:40px;border-bottom:1px solid #E0E4E8}
.sv-detail:last-child{border-bottom:none}
.sv-detail h2{font-size:1.5rem;font-weight:800;color:#1B5E4A;margin-bottom:12px}
.sv-num{display:inline-flex;align-items:center;justify-content:center;width:36px;height:36px;background:#4CAF50;color:#FFF;border-radius:50%;font-size:1rem;margin-left:8px}
.sv-detail p{font-size:1rem;color:#555;line-height:1.8;margin-bottom:20px}
.sv-detail-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:20px}
.sv-detail-box{background:#FFF;border-radius:12px;padding:24px;border:1px solid #E0E4E8}
.sv-detail-box h4{font-size:1rem;font-weight:800;color:#005E80;margin-bottom:12px}
.sv-detail-box ul{list-style:none;padding:0;margin:0}
.sv-detail-box ul li{font-size:0.9rem;color:#555;line-height:1.8;padding-right:20px;position:relative}
.sv-detail-box ul li::before{content:'•';position:absolute;right:0;color:#4CAF50;font-weight:800}
.sv-detail-cta{display:inline-block;color:#4CAF50;font-weight:700;text-decoration:none;font-size:0.9rem}
.sv-space-passport{padding:60px 0;background:#FFF}
.sv-passport-layout{display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center}
.sv-badge-green{display:inline-block;background:#4CAF50;color:#FFF;font-size:0.9rem;font-weight:700;padding:8px 24px;border-radius:50px;margin-bottom:16px}
.sv-passport-content h2{font-size:1.6rem;font-weight:800;color:#1B5E4A;margin-bottom:16px;line-height:1.5}
.sv-passport-content p{font-size:0.95rem;color:#555;line-height:1.8;margin-bottom:16px}
.sv-sample-label{display:inline-block;font-size:0.8rem;color:#D32F2F;border:1px solid #D32F2F;padding:4px 12px;border-radius:50px;margin-bottom:16px}
.sv-passport-link{display:inline-block;color:#4CAF50;font-weight:700;text-decoration:none}
.sv-passport-image img{width:100%;border-radius:12px}
.sv-process{padding:80px 0;background:#F9F9F9}
.sv-process-header{text-align:center;margin-bottom:60px}
.sv-process-badge{display:inline-block;background:#E8F5E9;color:#1B5E4A;font-size:0.85rem;font-weight:700;padding:6px 20px;border-radius:50px;margin-bottom:16px}
.sv-center-title{font-size:1.8rem;font-weight:800;color:#005E80;margin-bottom:12px}
.sv-process-subtitle{font-size:0.95rem;color:#666;max-width:600px;margin:0 auto}
.sv-process-timeline{display:flex;align-items:stretch;justify-content:space-between;position:relative;gap:0}
.sv-process-step{flex:1;position:relative;z-index:2;display:flex;align-items:center}
.sv-step-card{background:#FFF;border-radius:12px;padding:20px 16px;text-align:center;width:100%;border:1px solid #E0E4E8;transition:all 0.4s ease;box-shadow:0 2px 8px rgba(0,0,0,0.04)}
.sv-step-card:hover{transform:translateY(-6px);box-shadow:0 12px 30px rgba(76,175,80,0.15);border-color:#4CAF50}
.sv-step-circle{display:flex;align-items:center;justify-content:center;width:56px;height:56px;background:linear-gradient(135deg,#4CAF50 0%,#2E7D32 100%);color:#FFF;border-radius:50%;margin:0 auto 12px;box-shadow:0 4px 15px rgba(76,175,80,0.3);transition:all 0.4s cubic-bezier(0.25,1,0.5,1);font-weight:900;font-size:1.2rem}
.sv-step-card:hover .sv-step-circle{transform:scale(1.1);box-shadow:0 8px 25px rgba(76,175,80,0.5)}
.sv-step-content h4{font-size:0.95rem;font-weight:800;color:#005E80;margin-bottom:4px}
.sv-step-content p{font-size:0.8rem;color:#888;margin:0;opacity:0;max-height:0;overflow:hidden;transition:all 0.4s ease}
.sv-step-card:hover .sv-step-content p{opacity:1;max-height:50px}
.sv-process-arrow{flex:0 0 30px;display:flex;align-items:center;justify-content:center;color:#4CAF50}
.sv-process-arrow svg{width:20px;height:20px}
.sv-scope{padding:60px 0;background:#FFF}
.sv-center-desc{font-size:0.9rem;color:#555;line-height:1.8;text-align:center;max-width:800px;margin:0 auto 30px}
.sv-scope-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.sv-scope-card{background:#F9F9F9;border-radius:12px;padding:24px;border:1px solid #E0E4E8;transition:all 0.3s ease}
.sv-scope-card:hover{transform:translateY(-4px);box-shadow:0 8px 30px rgba(0,0,0,0.08);background:#FFF}
.sv-scope-header{display:flex;align-items:center;gap:10px;margin-bottom:12px}
.sv-scope-header h4{font-size:1.1rem;font-weight:800;color:#005E80;margin:0}
.sv-scope-divider{height:2px;background:linear-gradient(to left,#4CAF50,#C8E6C9,transparent);margin-bottom:16px;border-radius:2px}
.sv-scope-card p{font-size:0.9rem;font-weight:600;color:#1B5E4A;line-height:1.7;margin:0}
@media(max-width:1024px){
.sv-cards-grid,.sv-scope-grid{grid-template-columns:repeat(2,1fr)}
.sv-passport-layout,.sv-detail-grid{grid-template-columns:1fr}
.sv-process-timeline{flex-wrap:wrap}
.sv-process-step{flex:0 0 50%;margin-bottom:20px}
.sv-process-arrow{display:none}
}
@media(max-width:600px){
.sv-cards-grid,.sv-scope-grid{grid-template-columns:1fr}
.sv-container{padding:0 16px}
.sv-title{font-size:1.6rem}
.sv-process-step{flex:0 0 100%}
}
.sv-actions .btn{position:relative;display:inline-flex;align-items:center;gap:8px;padding:14px 28px;font-size:1rem;font-weight:600;border-radius:50px;text-decoration:none;overflow:hidden;transition:all 0.4s cubic-bezier(0.25,1,0.5,1)}
.sv-actions .btn::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,215,0,0.4),rgba(255,255,255,0.6),transparent);transition:left 0.6s ease}
.sv-actions .btn:hover::before{left:100%}
.sv-actions .btn-primary{background:linear-gradient(to top,#388E3C 0%,#35BA38 100%);color:#FFF;border:none;box-shadow:0 4px 10px rgba(0,0,0,0.15)}
.sv-actions .btn-primary:hover{box-shadow:0 6px 16px rgba(0,0,0,0.2);transform:translateY(-2px)}
.sv-actions .btn-primary:active{transform:translateY(1px);box-shadow:0 2px 5px rgba(0,0,0,0.1);animation:svEdgeGlow 0.6s ease-out}
.sv-actions .btn-outline{background:transparent;color:#005E80;border:2px solid #005E80}
.sv-actions .btn-outline:hover{background:#005E80;color:#FFF;box-shadow:0 6px 16px rgba(0,94,128,0.3);transform:translateY(-2px)}
.sv-actions .btn-outline:active{transform:translateY(1px);box-shadow:0 2px 5px rgba(0,94,128,0.2);animation:svEdgeGlow 0.6s ease-out}
@keyframes svEdgeGlow{0%{box-shadow:0 0 0 0 rgba(255,215,0,0.7)}100%{box-shadow:0 0 0 10px rgba(255,215,0,0)}}
.sv-docs-section{padding:60px 0;background:#FFF}
.sv-docs-header{text-align:center;margin-bottom:40px}
.sv-docs-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.sv-doc-card{background:#F9F9F9;border-radius:12px;overflow:hidden;border:1px solid #E0E4E8;transition:all 0.3s ease}
.sv-doc-card:hover{transform:translateY(-4px);box-shadow:0 8px 30px rgba(0,0,0,0.08);background:#FFF}
.sv-doc-image{position:relative;width:100%;height:160px;overflow:hidden;background:#E8F5E9}
.sv-doc-image img{width:100%;height:100%;object-fit:cover}
.sv-doc-label{position:absolute;top:10px;right:10px;background:#4CAF50;color:#FFF;font-size:0.7rem;font-weight:700;padding:4px 12px;border-radius:50px}
.sv-doc-card h4{font-size:0.95rem;font-weight:800;color:#005E80;padding:16px 16px 4px;margin:0}
.sv-doc-card p{font-size:0.8rem;color:#666;padding:0 16px 16px;margin:0;line-height:1.5}
@media(max-width:1024px){.sv-docs-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.sv-docs-grid{grid-template-columns:1fr}}
</style>

<section class="sv-hero">
<div class="sv-container">
<span class="sv-badge">خدمات پاک پژوه</span>
<h1 class="sv-title"><?php echo wp_kses_post( $services_hero_title ); ?></h1>
<p class="sv-desc"><?php echo wp_kses_post( $services_hero_desc ); ?></p>
<div class="sv-actions">
<a href="/#request-form" class="btn btn-primary">درخواست بازدید اولیه رایگان</a>
<a href="#sv-cards" class="btn btn-outline">مشاهده خدمات</a>
</div>
</div>
</section>

<section class="sv-cards-section" id="sv-cards">
<div class="sv-container">
<h2 class="sv-section-title"><?php echo wp_kses_post( $services_cards_title ); ?></h2>
<div class="sv-cards-grid">
<a href="#design" class="sv-card-link"><div class="sv-card"><div class="sv-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="1.5"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div><h3>شناخت محیط و طراحی برنامه</h3><p>بررسی ویژگی‌ها و تدوین برنامه متناسب با هر محیط.</p><span class="sv-card-more">اطلاعات بیشتر ←</span></div></a>
<a href="#execution" class="sv-card-link"><div class="sv-card"><div class="sv-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg></div><h3>مدیریت و اجرای عملیات</h3><p>سازمان‌دهی و هماهنگی اجرای خدمات بر اساس برنامه.</p><span class="sv-card-more">اطلاعات بیشتر ←</span></div></a>
<a href="#quality-control" class="sv-card-link"><div class="sv-card"><div class="sv-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div><h3>کنترل کیفیت و پیگیری</h3><p>ارزیابی نتایج، ثبت نواقص و پیگیری اقدامات اصلاحی.</p><span class="sv-card-more">اطلاعات بیشتر ←</span></div></a>
<a href="#documentation" class="sv-card-link"><div class="sv-card"><div class="sv-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="1.5"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg></div><h3>مستندسازی و گزارش‌دهی</h3><p>ثبت اطلاعات و نتایج برای بررسی و تصمیم‌گیری.</p><span class="sv-card-more">اطلاعات بیشتر ←</span></div></a>
</div>
</div>
</section>

<section class="sv-details-section">
<div class="sv-container">
<div class="sv-detail" id="design"><h2><span class="sv-num">۱</span> شناخت محیط و طراحی برنامه پاکیزگی</h2><p>این خدمت با بررسی ویژگی‌های فضا، نوع فعالیت، شرایط بهره‌برداری و نیازهای هر محیط، برنامه‌ای متناسب با همان فضا تدوین می‌کند.</p><div class="sv-detail-grid"><div class="sv-detail-box"><h4>فعالیت‌های اصلی</h4><ul><li>شناخت فضاها و کاربری هر بخش</li><li>بررسی نوع سطوح و آلودگی‌های غالب</li><li>تعیین روش و تناوب خدمات</li><li>تنظیم برنامه زمانی و مسئولیت‌ها</li></ul></div><div class="sv-detail-box"><h4>خروجی‌های قابل ارائه (متناسب با توافق)</h4><ul><li>شناسنامه فضا</li><li>برنامه خدمات پاکیزگی</li><li>برنامه زمان‌بندی</li></ul></div></div><a href="/#request-form?service=design" class="sv-detail-cta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    درخواست مشاوره درباره این خدمت
                </a></div>
<div class="sv-detail" id="execution"><h2><span class="sv-num">۲</span> مدیریت و اجرای عملیات پاکیزگی</h2><p>این خدمت سازمان‌دهی و هماهنگی اجرای خدمات را بر اساس برنامه مصوب و شرایط عملیاتی محیط بر عهده دارد.</p><div class="sv-detail-grid"><div class="sv-detail-box"><h4>فعالیت‌های اصلی</h4><ul><li>تعیین نیاز منابع انسانی و اجرایی</li><li>برنامه‌ریزی شیفت‌ها و فعالیت‌ها</li><li>هماهنگی نیروهای داخلی و همکاران قراردادی</li><li>نظارت بر اجرای برنامه توافق‌شده</li></ul></div><div class="sv-detail-box"><h4>خروجی‌های قابل ارائه (متناسب با توافق)</h4><ul><li>برنامه اجرایی</li><li>برنامه تقسیم وظایف</li><li>سوابق اجرای خدمات</li></ul></div></div><a href="/#request-form?service=execution" class="sv-detail-cta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    درخواست مشاوره درباره این خدمت
                </a></div>
<div class="sv-detail" id="quality-control"><h2><span class="sv-num">۳</span> کنترل کیفیت و پیگیری اصلاحات</h2><p>این خدمت نتایج خدمات را بر اساس معیارهای توافق‌شده ارزیابی می‌کند، نواقص را ثبت می‌کند و اقدامات اصلاحی را پیگیری می‌کند.</p><div class="sv-detail-grid"><div class="sv-detail-box"><h4>فعالیت‌های اصلی</h4><ul><li>تعریف معیارهای ارزیابی</li><li>کنترل کیفیت فضاها و فعالیت‌ها</li><li>ثبت موارد عدم انطباق با برنامه</li><li>پیگیری اصلاحات و ثبت نتیجه</li></ul></div><div class="sv-detail-box"><h4>خروجی‌های قابل ارائه (متناسب با توافق)</h4><ul><li>چک‌لیست کنترل کیفیت</li><li>گزارش نواقص</li><li>سوابق اقدامات اصلاحی</li></ul></div></div><a href="/#request-form?service=quality-control" class="sv-detail-cta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    درخواست مشاوره درباره این خدمت
                </a></div>
<div class="sv-detail" id="documentation"><h2><span class="sv-num">۴</span> مستندسازی و گزارش‌دهی</h2><p>این خدمت اطلاعات و نتایج اجرای خدمات را ثبت می‌کند تا امکان بررسی، پیگیری و تصمیم‌گیری مدیریتی فراهم شود.</p><div class="sv-detail-grid"><div class="sv-detail-box"><h4>فعالیت‌های اصلی</h4><ul><li>ثبت برنامه‌ها و سوابق اجرا</li><li>ثبت نتایج ارزیابی</li><li>تهیه گزارش وضعیت خدمات</li><li>ارائه گزارش‌های دوره‌ای در چارچوب قرارداد</li></ul></div><div class="sv-detail-box"><h4>خروجی‌های قابل ارائه (متناسب با توافق)</h4><ul><li>گزارش عملکرد</li><li>سوابق اجرای برنامه</li><li>گزارش وضعیت و اصلاحات</li></ul></div></div><a href="/#request-form?service=documentation" class="sv-detail-cta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    درخواست مشاوره درباره این خدمت
                </a></div>
</div>
</section>

<section class="sv-docs-section">
    <div class="sv-container">
        <div class="sv-docs-header">
            <span class="sv-process-badge">نمونه مستندات</span>
            <h2 class="sv-center-title"><?php echo wp_kses_post( $services_docs_title ); ?></h2>
            <p class="sv-process-subtitle"><?php echo wp_kses_post( $services_docs_subtitle ); ?></p>
        </div>
        <div class="sv-docs-grid">
            <div class="sv-doc-card">
                <div class="sv-doc-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a1.jpg' ); ?>" alt="برنامه نظافت" loading="lazy">
                    <span class="sv-doc-label">نمونه نمایشی</span>
                </div>
                <h4>برنامه نظافت</h4>
                <p>فعالیت‌ها و زمان‌بندی</p>
            </div>
            <div class="sv-doc-card">
                <div class="sv-doc-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a2.jpg' ); ?>" alt="چک‌لیست کنترل کیفیت" loading="lazy">
                    <span class="sv-doc-label">نمونه نمایشی</span>
                </div>
                <h4>چک‌لیست کنترل کیفیت</h4>
                <p>معیارها و نتایج ارزیابی</p>
            </div>
            <div class="sv-doc-card">
                <div class="sv-doc-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a3.jpg' ); ?>" alt="گزارش نواقص و اصلاحات" loading="lazy">
                    <span class="sv-doc-label">نمونه نمایشی</span>
                </div>
                <h4>گزارش نواقص و اصلاحات</h4>
                <p>ثبت و پیگیری موارد</p>
            </div>
            <div class="sv-doc-card">
                <div class="sv-doc-image">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/a4.jpg' ); ?>" alt="گزارش عملکرد خدمات" loading="lazy">
                    <span class="sv-doc-label">نمونه نمایشی</span>
                </div>
                <h4>گزارش عملکرد خدمات</h4>
                <p>نتایج و شاخص‌ها</p>
            </div>
        </div>
    </div>
</section>
<section class="sv-space-passport"><div class="sv-container"><div class="sv-passport-layout"><div class="sv-passport-content"><span class="sv-badge-green">شناسنامه فضا</span><h2><?php echo wp_kses_post( $services_passport_title ); ?></h2><p><?php echo wp_kses_post( $services_passport_desc ); ?></p><span class="sv-sample-label">نمونه نمایشی</span><a href="/#space-passport" class="sv-passport-link">آشنایی با شناسنامه فضا ←</a></div><div class="sv-passport-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/palet.webp' ); ?>" alt="نمونه شناسنامه فضا" loading="lazy"></div></div></div></section>

<section class="sv-process"><div class="sv-container"><div class="sv-process-header"><span class="sv-process-badge">فرایند شش‌مرحله‌ای</span><h2 class="sv-center-title"><?php echo wp_kses_post( $services_process_title ); ?></h2><p class="sv-process-subtitle"><?php echo wp_kses_post( $services_process_subtitle ); ?></p></div><div class="sv-process-timeline">
<div class="sv-process-step"><div class="sv-step-card"><div class="sv-step-circle"><span>۱</span></div><div class="sv-step-content"><h4>شناخت محیط</h4><p>بررسی فضاها و نیازها</p></div></div><div class="sv-process-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg></div></div>
<div class="sv-process-step"><div class="sv-step-card"><div class="sv-step-circle"><span>۲</span></div><div class="sv-step-content"><h4>طراحی برنامه</h4><p>تعیین روش‌ها و تناوب</p></div></div><div class="sv-process-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg></div></div>
<div class="sv-process-step"><div class="sv-step-card"><div class="sv-step-circle"><span>۳</span></div><div class="sv-step-content"><h4>اجرای خدمات</h4><p>مطابق برنامه مصوب</p></div></div><div class="sv-process-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg></div></div>
<div class="sv-process-step"><div class="sv-step-card"><div class="sv-step-circle"><span>۴</span></div><div class="sv-step-content"><h4>ارزیابی کیفیت</h4><p>بر اساس معیارها</p></div></div><div class="sv-process-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg></div></div>
<div class="sv-process-step"><div class="sv-step-card"><div class="sv-step-circle"><span>۵</span></div><div class="sv-step-content"><h4>اصلاح و پیگیری</h4><p>ثبت و رفع نواقص</p></div></div><div class="sv-process-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg></div></div>
<div class="sv-process-step"><div class="sv-step-card"><div class="sv-step-circle"><span>۶</span></div><div class="sv-step-content"><h4>گزارش‌دهی و بهبود</h4><p>مستندسازی و پیشنهاد</p></div></div></div>
</div></div></section>

<section class="sv-scope"><div class="sv-container"><h2 class="sv-center-title"><?php echo wp_kses_post( $services_scope_title ); ?></h2><p class="sv-center-desc"><?php echo wp_kses_post( $services_scope_desc ); ?></p><div class="sv-scope-grid">
<div class="sv-scope-card"><div class="sv-scope-header"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><h4>بازدید اولیه</h4></div><div class="sv-scope-divider"></div><p>بازدید مقدماتی و رایگان، با هماهنگی قبلی و در محدوده جغرافیایی اعلام‌شده شرکت، برای شناخت اولیه شرایط و نیازهای سازمان.</p></div>
<div class="sv-scope-card"><div class="sv-scope-header"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg><h4>ارزیابی تخصصی و طراحی تفصیلی</h4></div><div class="sv-scope-divider"></div><p>در صورت نیاز، دامنه و هزینه آن جداگانه و پیش از انجام کار توافق می‌شود.</p></div>
<div class="sv-scope-card"><div class="sv-scope-header"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><h4>اجرای آزمایشی</h4></div><div class="sv-scope-divider"></div><p>در صورت توافق طرفین، محدوده، مدت، هزینه، معیار ارزیابی و مسئولیت‌ها پیش از شروع مشخص می‌شود؛ اجرای آزمایشی لزوماً رایگان نیست.</p></div>
</div></div></section>

<?php get_footer(); ?>