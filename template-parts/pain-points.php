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
.pain-card:focus-visible { outline: 3px solid rgba(74,144,226,0.45); outline-offset: 3px; }
.pain-card-image img { width: 60px; height: 60px; object-fit: contain; margin-bottom: 0.8rem; transition: transform 0.4s cubic-bezier(0.25,1,0.5,1); }
.pain-card:hover .pain-card-image img { transform: scale(1.15) rotate(5deg); }
.pain-card-title { font-size: 1.3rem; font-weight: 800; color: #0A2540; margin-bottom: 0.4rem; }
.pain-card-desc { font-size: 0.98rem; color: #5A6B7C; line-height: 1.6; margin: 0; }
/* Desktop: keep only image, title and short desc — hide expandable details */
.pain-card-details { display: none; }
@media (max-width: 640px) {
    .pain-points-section { padding: 1.75rem 0 2rem; }
    .pain-points-header { margin-bottom: 1.25rem !important; }
    .pain-points-grid { grid-template-columns: repeat(2, minmax(0, 1fr)) !important; gap: 0.65rem; margin-bottom: 1rem; }
    .pain-card { padding: 0.85rem 0.65rem 0.75rem !important; border-radius: 14px !important; }
    .pain-card-image { width: 44px; height: 44px; }
    .pain-card-image img { width: 44px; height: 44px; margin-bottom: 0.45rem; }
    .pain-card-title { font-size: 0.88rem; line-height: 1.45; margin-bottom: 0.25rem; }
    .pain-card-desc { font-size: 0.78rem; line-height: 1.55; }
    .pain-card-details { display: none !important; }
    .pain-points-note {
        gap: 7px;
        padding: 10px 12px !important;
        border-radius: 14px !important;
        margin-top: 0 !important;
    }
    .pain-points-note p { font-size: 0.78rem !important; line-height: 1.65 !important; }
    .pain-points-note .note-icon svg { width: 16px; height: 16px; }

    .pp-pain-modal-overlay { padding: 10px; align-items: center; }
    .pp-pain-modal {
        max-width: 94vw;
        max-height: calc(100dvh - 20px);
        border-radius: 14px;
        padding: 0.85rem 0.9rem 0.75rem;
        overflow-y: auto;
        overscroll-behavior: contain;
    }
    .pp-pain-modal h3 { font-size: 0.92rem; line-height: 1.45; margin: 0 1.8rem 0.45rem 0; }
    .pp-pain-modal p { font-size: 0.76rem; line-height: 1.55; margin-bottom: 0.42rem; text-align: right; text-align-last: right; }
    .pp-pain-modal ul { margin-bottom: 0; }
    .pp-pain-modal ul li { font-size: 0.72rem; line-height: 1.5; padding: 2px 14px 2px 0; }
    .pp-pain-modal-close { top: 7px; left: 7px; width: 24px; height: 24px; font-size: 14px; }
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
            <div class="pain-card" role="button" tabindex="0" aria-haspopup="dialog" onclick="ppOpenPainModal('pp-pain-modal-1')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-plan.png' ); ?>" alt="نبود برنامه مشخص" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود برنامه مشخص</h3>
                <p class="pain-card-desc">فعالیت‌های پراکنده و زمان‌بندی نامنظم</p>
            </div>

            <!-- کارت ۲ -->
            <div class="pain-card" role="button" tabindex="0" aria-haspopup="dialog" onclick="ppOpenPainModal('pp-pain-modal-2')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-quality.png' ); ?>" alt="نبود معیار کیفیت" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود معیار کیفیت</h3>
                <p class="pain-card-desc">مشخص نبودن سطح قابل قبول خدمات</p>
            </div>

            <!-- کارت ۳ -->
            <div class="pain-card" role="button" tabindex="0" aria-haspopup="dialog" onclick="ppOpenPainModal('pp-pain-modal-3')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-repetition.png' ); ?>" alt="تکرار نواقص" loading="lazy">
                </div>
                <h3 class="pain-card-title">تکرار نواقص</h3>
                <p class="pain-card-desc">نبود پیگیری مؤثر برای رفع مشکلات</p>
            </div>

            <!-- کارت ۴ -->
            <div class="pain-card" role="button" tabindex="0" aria-haspopup="dialog" onclick="ppOpenPainModal('pp-pain-modal-4')" style="cursor:pointer;">
                <div class="pain-card-image">
                    <img src="<?php echo esc_url( $img_uri . '/pain-no-report.png' ); ?>" alt="نبود گزارش مستند" loading="lazy">
                </div>
                <h3 class="pain-card-title">نبود گزارش مستند</h3>
                <p class="pain-card-desc">نبود اطلاعات روشن از نتایج خدمات</p>
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
.pp-pain-modal-overlay { overscroll-behavior: contain; }
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
.pp-pain-modal p { font-size: 1.05rem; color: #4A5568; line-height: 1.75; margin-bottom: 0.65rem; text-align: justify; text-align-last: right; }
.pp-pain-modal ul { list-style: none; padding: 0; margin: 0 0 0.8rem; }
.pp-pain-modal ul li { font-size: 1rem; color: #4A5568; line-height: 1.7; padding: 4px 0 4px 18px; position: relative; }
.pp-pain-modal ul li::before { content: '•'; position: absolute; right: 0; color: #4A90E2; font-weight: bold; }
</style>

<div class="pp-pain-modal-overlay" id="pp-pain-modal-1" onclick="if(event.target===this) ppClosePainModal('pp-pain-modal-1')">
    <div class="pp-pain-modal">
        <button class="pp-pain-modal-close" onclick="ppClosePainModal('pp-pain-modal-1')">×</button>
        <h3>نبود برنامه مشخص</h3>
        <p>در بسیاری از محیط‌ها، خدمات پاکیزگی به‌صورت پراکنده و بدون برنامهٔ مشخص انجام می‌شوند. در نتیجه، فعالیت‌ها تکراری، ناکارآمد و غیرقابل پیگیری می‌شوند.</p>
        <p>ما با طراحی برنامه‌ای مدون و تعیین تناوب و مسئولیت‌های روشن، پاکیزگی را از اقدامی پراکنده به فرایندی مدیریت‌شده تبدیل می‌کنیم.</p>
        <ul>
            <li>تعیین برنامهٔ زمان‌بندی‌شده برای هر فضا</li>
            <li>مشخص‌کردن مسئولیت‌ها</li>
            <li>پیگیری و نظارت مستمر</li>
        </ul>
    </div>
</div>

<div class="pp-pain-modal-overlay" id="pp-pain-modal-2" onclick="if(event.target===this) ppClosePainModal('pp-pain-modal-2')">
    <div class="pp-pain-modal">
        <button class="pp-pain-modal-close" onclick="ppClosePainModal('pp-pain-modal-2')">×</button>
        <h3>نبود معیار کیفیت</h3>
        <p>بدون معیار مشخص، کیفیت خدمات قابل ارزیابی نیست و هر فرد برداشت خود را از «تمیز» دارد. این موضوع باعث اختلاف‌نظر و نارضایتی می‌شود.</p>
        <p>ما معیارهای قابل‌اندازه‌گیری و چک‌لیست‌های استاندارد تعریف می‌کنیم تا کیفیت به‌صورت عینی و قابل بررسی باشد.</p>
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
        <p>ما سازوکاری برای ثبت و پیگیری نواقص و تأیید رفع آن‌ها ایجاد می‌کنیم تا از تکرار مشکلات جلوگیری شود.</p>
        <ul>
            <li>ثبت نواقص مشاهده‌شده</li>
            <li>اقدام اصلاحی مشخص</li>
            <li>تأیید رفع نقص</li>
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
            <li>تحلیل داده‌ها</li>
        </ul>
    </div>
</div>

<script>
var ppPainTrigger = null;
function ppOpenPainModal(id){
    var m=document.getElementById(id);
    if(m){
        ppPainTrigger=document.activeElement;
        m.setAttribute('role','dialog');
        m.setAttribute('aria-modal','true');
        m.setAttribute('aria-hidden','false');
        m.classList.add('active');
        document.body.style.overflow='hidden';
        var closeButton=m.querySelector('.pp-pain-modal-close');
        if(closeButton){ closeButton.setAttribute('aria-label','بستن توضیحات'); closeButton.focus(); }
    }
}
function ppClosePainModal(id){
    var m=document.getElementById(id);
    if(m){
        m.classList.remove('active');
        m.setAttribute('aria-hidden','true');
        document.body.style.overflow='';
        if(ppPainTrigger){ ppPainTrigger.focus(); ppPainTrigger=null; }
    }
}
document.addEventListener('keydown', function(e){ if(e.key==='Escape'){ document.querySelectorAll('.pp-pain-modal-overlay.active').forEach(function(m){ ppClosePainModal(m.id); }); } });
document.querySelectorAll('.pain-card[role="button"]').forEach(function(card){ card.addEventListener('keydown', function(e){ if(e.key==='Enter'||e.key===' '){ e.preventDefault(); card.click(); } }); });
</script>