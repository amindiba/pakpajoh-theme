<?php
/**
 * Process Timeline Section — PakPajoh Theme (v5.0) - طراحی مدرن پریمیوم با تایم‌لاین عمودی
 */
?>
<style>
/* ===== Isolated: process-timeline section ===== */
.pp-pt-section {
    padding: 5rem 0;
    background: linear-gradient(180deg, #F8FAFC 0%, #FFFFFF 100%);
    position: relative;
    overflow: hidden;
}
.pp-pt-section::before {
    content: '';
    position: absolute;
    top: -100px; right: -100px;
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(39,174,96,0.08) 0%, transparent 70%);
    pointer-events: none;
}
.pp-pt-container { max-width: 100%; margin: 0 auto; padding: 0 24px; position: relative; z-index: 2; }
.pp-pt-header { text-align: center; margin-bottom: 3.5rem; }
.pp-pt-title {
    font-size: 2.2rem;
    font-weight: 900;
    color: #0A2540;
    margin: 0 0 0.8rem;
    line-height: 1.3;
    position: relative;
    display: inline-block;
}
.pp-pt-title::after {
    content: '';
    position: absolute;
    bottom: -10px; left: 50%; transform: translateX(-50%);
    width: 60px; height: 4px;
    background: linear-gradient(90deg, #27AE60 0%, #4A90E2 100%);
    border-radius: 2px;
}
.pp-pt-subtitle {
    color: #6B7280;
    font-size: 1rem;
    max-width: 600px;
    margin: 1.5rem auto 0;
    line-height: 1.9;
}
.pp-pt-sub-mobile { display: none; }

.pp-pt-timeline {
    position: relative;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 1rem;
}
.pp-pt-timeline::before {
    content: '';
    position: absolute;
    top: 60px;
    left: 5%; right: 5%;
    height: 2px;
    background: linear-gradient(90deg, transparent 0%, #27AE60 15%, #4A90E2 50%, #27AE60 85%, transparent 100%);
    z-index: 0;
}

.pp-pt-step {
    position: relative;
    z-index: 1;
    background: #fff;
    border-radius: 20px;
    padding: 2rem 1.5rem 1.5rem;
    text-align: center;
    box-shadow: 0 10px 40px rgba(10,37,64,0.06);
    border: 1px solid rgba(10,37,64,0.05);
    transition: all 0.4s cubic-bezier(0.25,1,0.5,1);
    opacity: 0;
    transform: translateY(30px);
    animation: pp-pt-fadeUp 0.6s ease forwards;
}
.pp-pt-step:nth-child(1) { animation-delay: 0.1s; }
.pp-pt-step:nth-child(2) { animation-delay: 0.2s; }
.pp-pt-step:nth-child(3) { animation-delay: 0.3s; }
.pp-pt-step:nth-child(4) { animation-delay: 0.4s; }
.pp-pt-step:nth-child(5) { animation-delay: 0.5s; }
.pp-pt-step:nth-child(6) { animation-delay: 0.6s; }

@keyframes pp-pt-fadeUp {
    to { opacity: 1; transform: translateY(0); }
}

.pp-pt-step:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(10,37,64,0.12);
    border-color: rgba(39,174,96,0.3);
}

.pp-pt-marker {
    position: relative;
    width: 64px;
    height: 64px;
    margin: 0 auto 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
.pp-pt-number {
    position: relative;
    z-index: 2;
    width: 48px; height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, #0A2540 0%, #1a3a5c 100%);
    color: #fff;
    font-weight: 900;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 20px rgba(10,37,64,0.25);
    transition: all 0.3s ease;
}
.pp-pt-step:hover .pp-pt-number {
    background: linear-gradient(135deg, #27AE60 0%, #1E8449 100%);
    transform: scale(1.1);
}
.pp-pt-ring {
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px solid rgba(39,174,96,0.3);
    animation: pp-pt-pulse 2s ease-out infinite;
}
@keyframes pp-pt-pulse {
    0% { transform: scale(1); opacity: 0.6; }
    100% { transform: scale(1.4); opacity: 0; }
}

.pp-pt-icon {
    width: 40px; height: 40px;
    margin: 0 auto 1rem;
    color: #27AE60;
    transition: color 0.3s ease;
}
.pp-pt-step:hover .pp-pt-icon { color: #0A2540; }

.pp-pt-step-title {
    font-size: 1.05rem;
    font-weight: 800;
    color: #0A2540;
    margin: 0 0 0.5rem;
    line-height: 1.4;
}
.pp-pt-step-desc {
    font-size: 0.88rem;
    color: #6B7280;
    line-height: 1.7;
    margin: 0;
}

.pp-pt-cta {
    text-align: center;
    margin-top: 3rem;
}
.pp-pt-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #27AE60 0%, #1E8449 100%);
    color: #fff;
    padding: 0.5rem 1.6rem;
    border-radius: 50px;
    font-weight: 800;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 14px rgba(39,174,96,0.25);
    position: relative;
    overflow: hidden;
}
.pp-pt-cta-btn::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.35) 50%, transparent 100%);
    transition: left 0.5s ease;
}
.pp-pt-cta-btn:hover::before {
    left: 100%;
}
.pp-pt-cta-btn:hover {
    background: linear-gradient(135deg, #2ECC71 0%, #27AE60 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(39,174,96,0.4);
}
.pp-pt-cta-btn:hover {
    background: linear-gradient(135deg, #27AE60 0%, #1E8449 100%);
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(39,174,96,0.35);
}

@media (max-width: 992px) {
    .pp-pt-timeline { grid-template-columns: repeat(3, 1fr); gap: 0.8rem; }
    .pp-pt-timeline::before { display: none; }
    .pp-pt-title { font-size: 1.8rem; }
    .pp-pt-step { padding: 1.2rem 0.8rem; }
    .pp-pt-number { width: 36px; height: 36px; font-size: 0.95rem; }
    .pp-pt-marker { width: 48px; height: 48px; margin-bottom: 0.8rem; }
    .pp-pt-icon { width: 28px; height: 28px; margin-bottom: 0.6rem; }
    .pp-pt-step-title { font-size: 0.85rem; }
    .pp-pt-step-desc { font-size: 0.75rem; line-height: 1.5; }
}
@media (max-width: 640px) {
    .pp-pt-timeline { grid-template-columns: repeat(3, 1fr); gap: 5px; }
    .pp-pt-section { padding: 2.5rem 0; }
    .pp-pt-title { font-size: 1.4rem; }
    .pp-pt-step { padding: 2px; border-radius: 14px; }
    .pp-pt-number { width: 32px; height: 32px; font-size: 0.85rem; }
    .pp-pt-marker { width: 40px; height: 40px; margin-bottom: 0.6rem; }
    .pp-pt-ring { border-width: 1.5px; }
    .pp-pt-icon { width: 22px; height: 22px; margin-bottom: 0.5rem; }
    .pp-pt-step-title { font-size: 0.75rem; margin-bottom: 0.3rem; }
    .pp-pt-step-desc { font-size: 0.65rem; line-height: 1.4; }
    .pp-pt-header { margin-bottom: 2rem; }
    .pp-pt-subtitle { font-size: 0.85rem; margin-top: 1rem; }
    .pp-pt-sub-desktop { display: none; }
    .pp-pt-sub-mobile { display: inline; }
    .pp-pt-cta { margin-top: 2rem; }
    .pp-pt-cta-btn { padding: 0.7rem 1.5rem; font-size: 0.85rem; }
}
</style>

<section class="pp-pt-section" aria-label="روش کار">
    <div class="pp-pt-container">
        <div class="pp-pt-header">
            <h2 class="pp-pt-title"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_process_title", "از شناخت محیط تا بهبود مستمر" ) ); ?></h2>
            <p class="pp-pt-subtitle">
                <span class="pp-pt-sub-desktop">فرآیندی شش‌مرحله‌ای برای تضمین کیفیت و بهبود مستمر خدمات پاکسازی</span>
                <span class="pp-pt-sub-mobile">فرآیند شش‌مرحله‌ای تضمین کیفیت</span>
            </p>
        </div>

        <div class="pp-pt-timeline">
            <article class="pp-pt-step" data-step="1">
                <div class="pp-pt-marker">
                    <span class="pp-pt-number">۱</span>
                    <span class="pp-pt-ring"></span>
                </div>
                <svg class="pp-pt-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <h3 class="pp-pt-step-title">شناخت محیط</h3>
                <p class="pp-pt-step-desc">بررسی فضاها و نیازهای تخصصی</p>
            </article>

            <article class="pp-pt-step" data-step="2">
                <div class="pp-pt-marker">
                    <span class="pp-pt-number">۲</span>
                    <span class="pp-pt-ring"></span>
                </div>
                <svg class="pp-pt-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <h3 class="pp-pt-step-title">طراحی برنامه</h3>
                <p class="pp-pt-step-desc">تدوین روش‌ها و معیارهای کیفیت</p>
            </article>

            <article class="pp-pt-step" data-step="3">
                <div class="pp-pt-marker">
                    <span class="pp-pt-number">۳</span>
                    <span class="pp-pt-ring"></span>
                </div>
                <svg class="pp-pt-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-8.5"/><path d="M9 18H5a2 2 0 0 1-2-2v-5"/><path d="M15 18h4a2 2 0 0 0 2-2v-5"/><path d="M8 13h8"/><path d="M12 7v4"/></svg>
                <h3 class="pp-pt-step-title">اجرای خدمات</h3>
                <p class="pp-pt-step-desc">اجرای برنامه با نظارت مستمر</p>
            </article>

            <article class="pp-pt-step" data-step="4">
                <div class="pp-pt-marker">
                    <span class="pp-pt-number">۴</span>
                    <span class="pp-pt-ring"></span>
                </div>
                <svg class="pp-pt-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                <h3 class="pp-pt-step-title">ارزیابی کیفیت</h3>
                <p class="pp-pt-step-desc">چک‌لیست استاندارد و ارزیابی</p>
            </article>

            <article class="pp-pt-step" data-step="5">
                <div class="pp-pt-marker">
                    <span class="pp-pt-number">۵</span>
                    <span class="pp-pt-ring"></span>
                </div>
                <svg class="pp-pt-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                <h3 class="pp-pt-step-title">اصلاح و پیگیری</h3>
                <p class="pp-pt-step-desc">ثبت نقص و اقدام اصلاحی</p>
            </article>

            <article class="pp-pt-step" data-step="6">
                <div class="pp-pt-marker">
                    <span class="pp-pt-number">۶</span>
                    <span class="pp-pt-ring"></span>
                </div>
                <svg class="pp-pt-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10"/><path d="M12 20V4"/><path d="M6 20v-6"/></svg>
                <h3 class="pp-pt-step-title">گزارش و بهبود</h3>
                <p class="pp-pt-step-desc">مستندسازی و بهبود مستمر</p>
            </article>
        </div>

        <div class="pp-pt-cta">
            <a href="<?php echo esc_url( home_url( '/process/' ) ); ?>" class="pp-pt-cta-btn">
                <span>مشاهده روش کار کامل</span>
                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
            </a>
        </div>
    </div>
</section>