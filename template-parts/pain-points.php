<?php
/**
 * Pain Points Section — PakPajoh Theme (v3.1) - با تصاویر
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<?php
/**
 * Pain Points Section — PakPajoh Theme (v3.1) - با تصاویر
 */
$img_uri = get_template_directory_uri() . '/assets/images';
?>
<style>
/* ===== Isolated pain-points sky-blue cards ===== */
.pain-points-section { padding: 4rem 0; background: linear-gradient(180deg, #FFFFFF 0%, #F0F7FC 100%); }
.pain-points-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem; }
.pain-card {
    background: linear-gradient(135deg, #E8F4FC 0%, #D6ECF7 100%) !important;
    border-radius: 18px !important;
    padding: 1.5rem 1.2rem !important;
    text-align: center;
    border: 1px solid rgba(74,144,226,0.15) !important;
    transition: all 0.4s cubic-bezier(0.25,1,0.5,1) !important;
    position: relative;
    overflow: hidden;
}
.pain-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #4A90E2 0%, #27AE60 100%);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
}
.pain-card:hover::before { transform: scaleX(1); }
.pain-card:hover {
    transform: translateY(-8px) !important;
    box-shadow: 0 16px 40px rgba(74,144,226,0.18) !important;
    border-color: rgba(74,144,226,0.35) !important;
    background: linear-gradient(135deg, #FFFFFF 0%, #F8FBFF 100%) !important;
}
.pain-card-image img { width: 60px; height: 60px; object-fit: contain; margin-bottom: 0.8rem; transition: transform 0.4s cubic-bezier(0.25,1,0.5,1); }
.pain-card:hover .pain-card-image img { transform: scale(1.15) rotate(5deg); }
.pain-card-title { font-size: 1.3rem; font-weight: 800; color: #0A2540; margin-bottom: 0.4rem; }
.pain-card-desc { font-size: 0.98rem; color: #5A6B7C; line-height: 1.6; margin: 0; }
@media (max-width: 640px) {
    .pain-points-section { padding: 2rem 0; }
    .pain-points-grid { grid-template-columns: 1fr !important; gap: 1rem; }
    .pain-card { padding: 1.2rem 1rem !important; border-radius: 16px !important; min-height: auto; }
    .pain-card-image img { width: 48px; height: 48px; margin-bottom: 0.6rem; }
    .pain-card-title { font-size: 1.1rem; margin-bottom: 0.3rem; }
    .pain-card-desc { font-size: 0.9rem; line-height: 1.5; margin-bottom: 0.8rem; }

    /* Inline detail content for mobile */
    .pain-card-details { margin-top: 1rem; border-top: 1px solid rgba(74,144,226,0.2); padding-top: 0.8rem; }
    .pain-card-toggle {
        width: 100%;
        background: transparent;
        border: none;
        color: #4A90E2;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        padding: 0.6rem 0;
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: all 0.3s ease;
        font-family: inherit;
    }
    .pain-card-toggle:hover { color: #27AE60; }
    .pain-card-toggle svg { width: 16px; height: 16px; transition: transform 0.3s ease; }
    .pain-card-toggle.expanded svg { transform: rotate(180deg); }

    .pain-card-detail-content {
        display: none;
        padding: 0.8rem 0;
        text-align: right;
        direction: rtl;
        animation: painSlideDown 0.3s ease;
    }
    .pain-card-detail-content.visible { display: block; }

    @keyframes painSlideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pain-card-detail-content p {
        font-size: 0.9rem;
        color: #5A6B7C;
        line-height: 1.7;
        margin: 0 0 0.6rem;
    }
    .pain-card-detail-content ul {
        list-style: none;
        padding: 0;
        margin: 0 0 0.6rem;
        text-align: right;
    }
    .pain-card-detail-content ul li {
        font-size: 0.85rem;
        color: #5A6B7C;
        line-height: 1.6;
        padding: 4px 0;
        position: relative;
        padding-left: 20px;
    }
    .pain-card-detail-content ul li::before {
        content: '•';
        position: absolute;
        left: 0;
        color: #4A90E2;
        font-weight: bold;
    }

    .pp-pain-modal { padding: 1.4rem 1.2rem; border-radius: 18px; max-width: 92vw; }
    .pp-pain-modal h3 { font-size: 1.3rem; }
    .pp-pain-modal p { font-size: 1rem; }
    .pp-pain-modal ul li { font-size: 0.95rem; }
    .pp-pain-modal-close { width: 28px; height: 28px; font-size: 16px; }
}
.pain-points-header .line-decor {
    display: block !important;
    width: 120px !important;
    height: 3px !important;
    background: linear-gradient(90deg, transparent 0%, #27AE60 50%, transparent 100%) !important;
    border-radius: 2px !important;
    opacity: 0.8 !important;
}
@media (max-width: 640px) { .pain-points-title { font-size: 1.1rem !important; } .pain-points-header .line-decor { display: block !important; width: 40px !important; height: 2px !important; } .pain-title-desktop { display: none !important; } .pain-title-mobile { display: inline !important; } }
</style>
<section class="pain-points-section" aria-label="چالش‌های نظافت">
    <div class="pain-points-container">
        
        <div class="pain-points-header">
            <span class="line-decor"></span>
            <h2 class="pain-points-title">
    <span class="pain-title-desktop"><?php echo wp_kses_post( get_option( "pakpajoh_text_home_pain_title", "آیا نظافت محیط شما انجام می‌شود یا واقعاً مدیریت می‌شود؟" ) ); ?></span>
    <span class="pain-title-mobile" style="display:none;">نظافت یا مدیریت پاکیزگی؟</span>
</h2>
            <span class="line-decor"></span>
        </div>

        <div class="pain-points-grid">
            <!-- کارت ۱ -->
            <div class="pain-card" onclick="ppOpenPainModal('pp-pain-modal-1')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-plan.png' ); ?>" alt="نبود برنامه مشخص" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود برنامه مشخص</h3>
                <p class="pain-card-desc">فعالیت‌های پراکنده و زمان‌بندی نامنظم</p>
                <div class="pain-card-details">
                    <button class="pain-card-toggle" onclick="event.stopPropagation(); togglePainDetail(this, 'pain-detail-1')" aria-expanded="false">
                        <span>بیشتر بدانیم</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="pain-card-detail-content" id="pain-detail-1">
                        <p>در بسیاری از محیط‌ها، خدمات پاکیزگی به صورت پراکنده و بدون برنامه مشخص انجام می‌شود. این موضوع باعث می‌شود فعالیت‌ها تکراری، ناکارآمد و غیرقابل پیگیری باشند.</p>
                        <p>ما با طراحی برنامه‌ای مدون، تناوب و مسئولیت‌های مشخص، پاکیزگی را از یک اقدام پراکنده به یک فرآیند مدیریت‌شده تبدیل می‌کنیم.</p>
                        <ul>
                            <li>تعیین برنامه زمان‌بندی شده برای هر فضا</li>
                            <li>مشخص کردن مسئولیت‌ها</li>
                            <li>پیگیری و نظارت مستمر</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- کارت ۲ -->
            <div class="pain-card" onclick="ppOpenPainModal('pp-pain-modal-2')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-quality.png' ); ?>" alt="نبود معیار کیفیت" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود معیار کیفیت</h3>
                <p class="pain-card-desc">مشخص نبودن سطح قابل قبول خدمات</p>
                <div class="pain-card-details">
                    <button class="pain-card-toggle" onclick="event.stopPropagation(); togglePainDetail(this, 'pain-detail-2')" aria-expanded="false">
                        <span>بیشتر بدانیم</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="pain-card-detail-content" id="pain-detail-2">
                        <p>بدون معیار مشخص، کیفیت خدمات قابل ارزیابی نیست و هر فرد برداشت خود را از "تمیز" دارد. این موضوع باعث اختلاف نظر و عدم رضایت می‌شود.</p>
                        <p>ما معیارهای اندازه‌گیری‌پذیر و چک‌لیست‌های استاندارد تعریف می‌کنیم تا کیفیت به صورت عینی و قابل بررسی باشد.</p>
                        <ul>
                            <li>تعریف معیارهای قابل ارزیابی</li>
                            <li>چک‌لیست‌های استاندارد</li>
                            <li>ارزیابی دوره‌ای</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- کارت ۳ -->
            <div class="pain-card" onclick="ppOpenPainModal('pp-pain-modal-3')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-repetition.png' ); ?>" alt="تکرار نواقص" loading="lazy">
                </div>
                <h3 class="pain-card-title">تکرار نواقص</h3>
                <p class="pain-card-desc">نبود پیگیری مؤثر برای رفع مشکلات</p>
                <div class="pain-card-details">
                    <button class="pain-card-toggle" onclick="event.stopPropagation(); togglePainDetail(this, 'pain-detail-3')" aria-expanded="false">
                        <span>بیشتر بدانیم</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="pain-card-detail-content" id="pain-detail-3">
                        <p>وقتی نواقص ثبت و پیگیری نمی‌شوند، مشکلات تکرار می‌شوند و هزینه و زمان بیشتری صرف می‌شود.</p>
                        <p>ما سیستم ثبت، پیگیری و تایید رفع نقص را پیاده‌سازی می‌کنیم تا نواقص یک بار برای همیشه رفع شوند.</p>
                        <ul>
                            <li>ثبت نواقص مشاهده‌شده</li>
                            <li>اقدام اصلاحی مشخص</li>
                            <li>تایید رفع نقص</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- کارت ۴ -->
            <div class="pain-card" onclick="ppOpenPainModal('pp-pain-modal-4')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-report.png' ); ?>" alt="نبود گزارش مستند" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود گزارش مستند</h3>
                <p class="pain-card-desc">نبود اطلاعات روشن از نتایج خدمات</p>
                <div class="pain-card-details">
                    <button class="pain-card-toggle" onclick="event.stopPropagation(); togglePainDetail(this, 'pain-detail-4')" aria-expanded="false">
                        <span>بیشتر بدانیم</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="pain-card-detail-content" id="pain-detail-4">
                        <p>بدون گزارش و مستندات، تصویر شفافی از عملکرد وجود ندارد و بهبود مستمر امکان‌پذیر نیست.</p>
                        <p>ما تمام فعالیت‌ها را ثبت و گزارش می‌کنیم تا تصویری شفاف از عملکرد ارائه شود و مسیر بهبود هموار گردد.</p>
                        <ul>
                            <li>ثبت فعالیت‌ها</li>
                            <li>گزارش‌دهی دوره‌ای</li>
                            <li>آنالیز داده‌ها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pain-points-note">
            <span class="note-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#1B5E4A">
                    <circle cx="12" cy="12" r="10" fill="#1B5E4A"/>
                    <rect x="11" y="6" width="2" height="8" rx="1" fill="#FFFFFF"/>
                    <circle cx="12" cy="17" r="1.2" fill="#FFFFFF"/>
                </svg>
            </span>
            <p style="font-size: 1.3rem; font-weight: 800;">پاکیزگی محیط کار نباید به اقدامات پراکنده وابسته باشد؛ باید برنامه، معیار و مسئولیت مشخص داشته باشد.</p>
        </div>

    </div>
</section>

<style>
.pp-pain-modal-overlay {
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(10,37,64,0.55);
    backdrop-filter: blur(6px);
    display: flex; align-items: center; justify-content: center;
    padding: 20px;
    opacity: 0; pointer-events: none;
    transition: opacity 0.3s ease;
}
.pp-pain-modal-overlay.active { opacity: 1; pointer-events: auto; }
.pp-pain-modal {
    background: #fff; border-radius: 24px; max-width: 560px; width: 100%;
    padding: 2.2rem 2rem; position: relative;
    box-shadow: 0 30px 80px rgba(10,37,64,0.25);
    transform: scale(0.85) translateY(20px);
    transition: transform 0.4s cubic-bezier(0.25,1,0.5,1);
    max-height: 80vh; overflow-y: auto;
}
.pp-pain-modal-overlay.active .pp-pain-modal { transform: scale(1) translateY(0); }
.pp-pain-modal-close {
    position: absolute; top: 12px; left: 12px;
    width: 34px; height: 34px; border-radius: 50%;
    background: #F0F4F8; border: none; cursor: pointer;
    font-size: 20px; color: #0A2540;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.3s ease;
}
.pp-pain-modal-close:hover { background: #E0E6ED; transform: rotate(90deg); }
.pp-pain-modal h3 { font-size: 1.69rem; font-weight: 900; background: linear-gradient(135deg, #0A2540 0%, #4A90E2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 0.8rem; }
.pp-pain-modal p { font-size: 1.235rem; color: #4A5568; line-height: 1.9; margin-bottom: 0.8rem; text-align: justify; text-align-last: right; }
.pp-pain-modal ul { list-style: none; padding: 0; margin: 0 0 0.8rem; }
.pp-pain-modal ul li { font-size: 1.17rem; color: #4A5568; line-height: 1.8; padding: 4px 0 4px 18px; position: relative; }
.pp-pain-modal ul li::before { content: '•'; position: absolute; right: 0; color: #4A90E2; font-weight: bold; }
</style>

<div class="pp-pain-modal-overlay" id="pp-pain-modal-1" onclick="if(event.target===this) ppClosePainModal('pp-pain-modal-1')">
    <div class="pp-pain-modal">
        <button class="pp-pain-modal-close" onclick="ppClosePainModal('pp-pain-modal-1')">×</button>
        <h3>نبود برنامه مشخص</h3>
        <p>در بسیاری از محیط‌ها، خدمات پاکیزگی به صورت پراکنده و بدون برنامه مشخص انجام می‌شود. این موضوع باعث می‌شود فعالیت‌ها تکراری، ناکارآمد و غیرقابل پیگیری باشند.</p>
        <p>ما با طراحی برنامه‌ای مدون، تناوب و مسئولیت‌های مشخص، پاکیزگی را از یک اقدام پراکنده به یک فرآیند مدیریت‌شده تبدیل می‌کنیم.</p>
        <ul>
            <li>تعیین برنامه زمان‌بندی شده برای هر فضا</li>
            <li>مشخص کردن مسئولیت‌ها</li>
            <li>پیگیری و نظارت مستمر</li>
        </ul>
    </div>
</div>

<div class="pp-pain-modal-overlay" id="pp-pain-modal-2" onclick="if(event.target===this) ppClosePainModal('pp-pain-modal-2')">
    <div class="pp-pain-modal">
        <button class="pp-pain-modal-close" onclick="ppClosePainModal('pp-pain-modal-2')">×</button>
        <h3>نبود معیار کیفیت</h3>
        <p>بدون معیار مشخص، کیفیت خدمات قابل ارزیابی نیست و هر فرد برداشت خود را از "تمیز" دارد. این موضوع باعث اختلاف نظر و عدم رضایت می‌شود.</p>
        <p>ما معیارهای اندازه‌گیری‌پذیر و چک‌لیست‌های استاندارد تعریف می‌کنیم تا کیفیت به صورت عینی و قابل بررسی باشد.</p>
        <ul>
            <li>تعریف معیارهای قابل ارزیابی</li>
            <li>چک‌لیست‌های استاندارد</li>
            <li>ارزیابی دوره‌ای</li>
        </ul>
    </div>
</div>

<div class="pp-pain-modal-overlay" id="pp-pain-modal-3" onclick="if(event.target===this) ppClosePainModal('pp-pain-modal-3')">
    <div class="pp-pain-modal">
        <button class="pp-pain-modal-close" onclick="ppClosePainModal('pp-pain-modal-3')">×</button>
        <h3>تکرار نواقص</h3>
        <p>وقتی نواقص ثبت و پیگیری نمی‌شوند، مشکلات تکرار می‌شوند و هزینه و زمان بیشتری صرف می‌شود.</p>
        <p>ما سیستم ثبت، پیگیری و تایید رفع نقص را پیاده‌سازی می‌کنیم تا نواقص یک بار برای همیشه رفع شوند.</p>
        <ul>
            <li>ثبت نواقص مشاهده‌شده</li>
            <li>اقدام اصلاحی مشخص</li>
            <li>تایید رفع نقص</li>
        </ul>
    </div>
</div>

<div class="pp-pain-modal-overlay" id="pp-pain-modal-4" onclick="if(event.target===this) ppClosePainModal('pp-pain-modal-4')">
    <div class="pp-pain-modal">
        <button class="pp-pain-modal-close" onclick="ppClosePainModal('pp-pain-modal-4')">×</button>
        <h3>نبود گزارش مستند</h3>
        <p>بدون گزارش و مستندات، تصویر شفافی از عملکرد وجود ندارد و بهبود مستمر امکان‌پذیر نیست.</p>
        <p>ما تمام فعالیت‌ها را ثبت و گزارش می‌کنیم تا تصویری شفاف از عملکرد ارائه شود و مسیر بهبود هموار گردد.</p>
        <ul>
            <li>ثبت فعالیت‌ها</li>
            <li>گزارش‌دهی دوره‌ای</li>
            <li>آنالیز داده‌ها</li>
        </ul>
    </div>
</div>

<script>
function ppOpenPainModal(id){ var m=document.getElementById(id); if(m){ m.classList.add('active'); document.body.style.overflow='hidden'; } }
function ppClosePainModal(id){ var m=document.getElementById(id); if(m){ m.classList.remove('active'); document.body.style.overflow=''; } }
document.addEventListener('keydown', function(e){ if(e.key==='Escape'){ document.querySelectorAll('.pp-pain-modal-overlay.active').forEach(function(m){ m.classList.remove('active'); }); document.body.style.overflow=''; } });
function togglePainDetail(btn, id){ var content=document.getElementById(id); var expanded=btn.classList.toggle('expanded'); btn.setAttribute('aria-expanded', expanded); if(content){ content.classList.toggle('visible', expanded); } }
</script>