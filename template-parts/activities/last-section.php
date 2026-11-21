<?php
/**
 * Last Section — PakPajoh Theme
 */
?>
<section class="last-section">
    <div class="last-container">
        <div class="last-left">
            <div class="last-card">
                <div class="last-card-image-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/modern-corporate-building-stockcake.jpg' ); ?>" alt="ساختمان اداری" class="last-card-image">
                </div>
                <div class="last-card-title">سایر محیط‌های کاری</div>
                <div class="last-card-text">علاوه بر پنج حوزه اصلی فعالیت، امکان بررسی شرایط و نیازهای سایر محیط‌های کاری نیز وجود دارد. ارائه خدمات در این محیط‌ها پس از شناخت نیازها، بررسی الزامات و ارزیابی امکان اجرای پروژه انجام می‌شود.</div>
                <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="last-card-link">
                    <span>مشاهده و بررسی شرایط</span>
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="last-card">
                <div class="last-card-image-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partnership-in-motion-stockcake.jpg?v=2' ); ?>" alt="دست دادن" class="last-card-image">
                </div>
                <div class="last-card-title">فرآیند آغاز همکاری</div>
                <div class="last-card-text">از درخواست تا اجرای خدمات، در چند گام ساده.</div>
                <a href="#cooperation-process" class="last-card-link">
                    <span>مشاهده مراحل</span>
                    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <div class="last-right">
            <div class="last-card">
                <div class="last-card-title" style="margin-bottom: 18px; font-size: 18px;">پرسش‌های متداول</div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-1">
                        <span>آیا پاک پژوه فقط در کارخانه‌ها فعالیت می‌کند؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-1" aria-hidden="true">
                        خیر. پاک پژوه پنج حوزه اصلی فعالیت شامل محیط‌های تولیدی، انبارها، مراکز لجستیکی، مراکز درمانی و هتلها را در اولویت دارد. سایر محیط‌های کاری نیز بر اساس شرایط و نیاز پروژه قابل بررسی هستند.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-2">
                        <span>آیا برنامه پاکیزگی برای همه مجموعه‌ها یکسان است؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-2" aria-hidden="true">
                        خیر. برنامه بر اساس نوع فعالیت، شرایط فضا، سطوح، میزان تردد، محدودیت‌های عملیاتی و نیازهای کارفرما طراحی می‌شود.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-3">
                        <span>آیا پاک پژوه صرفًا نیروی خدماتی تأمین می‌کند؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-3" aria-hidden="true">
                        رویکرد پاک پژوه محدود به تأمین نیروی انسانی نیست. خدمات می تواند شامل طراحی برنامه، مدیریت اجرا، کنترل کیفیت و مستندسازی باشد. ترکیب منابع اجرایی نیز بر اساس نیاز هر پروژه تعیین می شود.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-4">
                        <span>آیا پاک پژوه در بیمارستانها و درمانگاهها نیز فعالیت می کند؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-4" aria-hidden="true">
                        مراکز درمانی از حوزه‌های اولویت دار پاک پژوه هستند. دامنه خدمات هر مرکز با توجه به نوع فضا، الزامات بهداشتی، دستورالعمل‌های مرکز و شرایط اجرایی پروژه تعیین می‌شود.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-5">
                        <span>آیا خدمات پاک پژوه شامل ضدعفونی تخصصی مراکز درمانی است؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-5" aria-hidden="true">
                        خدمات مرتبط با ضدعفونی و فضاهای حساس درمانی صرفًا پس از بررسی الزامات، مواد و روشهای مجاز، صلاحیت عوامل اجرایی و توافق با مرکز درمانی قابل تعریف است.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-6">
                        <span>آیا پاک پژوه در هتلها خدمات ارائه می‌کند؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-6" aria-hidden="true">
                        بله. هتلها و مراکز اقامتی از حوزه‌های اولویتدار فعالیت هستند. برنامه خدمات می تواند متناسب با اتاقها، لابی، راهروها، رستورانها، فضاهای عمومی و بخشهای پشتیبانی طراحی شود.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-7">
                        <span>آیا بازدید اولیه رایگان است؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-7" aria-hidden="true">
                        بازدید اولیه با هماهنگی قبلی و در محدوده جغرافیایی اعلام‌شده شرکت رایگان است. ارزیابی تخصصی و طراحی تفصیلی، در صورت نیاز، موضوعی جداگانه و تابع توافق خواهد بود.
                    </div>
                </div>

                <div class="last-faq-item">
                    <button type="button" class="last-faq-question" onclick="toggleLastFaq(this)" aria-expanded="false" aria-controls="last-faq-answer-8">
                        <span>آیا امکان اجرای آزمایشی خدمات وجود دارد؟</span>
                        <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="last-faq-answer" id="last-faq-answer-8" aria-hidden="true">
                        در صورت تناسب با شرایط پروژه، امکان بررسی اجرای آزمایشی وجود دارد. دامنه، مدت، هزینه، معیارهای ارزیابی و مسئولیتها باید پیش از شروع به توافق برسند.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.last-section { padding: 40px 20px; background: #fff; }
.last-container { display: flex; gap: 24px; max-width: 1400px; width: 100%; flex-wrap: wrap; justify-content: center; margin: 0 auto; align-items: flex-start; }
.last-left { flex: 0 0 30%; display: flex; flex-direction: column; gap: 24px; }
.last-right { flex: 0 0 70%; }
.last-card { background: linear-gradient(145deg, #e8f4fc, #d6eefb); border-radius: 20px; padding: 24px; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer; border: 1px solid #c5e5f8; position: relative; overflow: hidden; }
.last-card::before { content: ""; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(145deg, rgba(255,255,255,0.4), rgba(255,255,255,0)); opacity: 0; transition: opacity 0.4s ease; pointer-events: none; }
.last-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 20px 40px rgba(0, 120, 170, 0.25), 0 0 0 1px rgba(144, 208, 240, 0.5); border-color: #90d0f0; }
.last-card:hover::before { opacity: 1; }
.last-card-image-wrapper { width: 100%; height: 170px; border-radius: 16px; overflow: hidden; margin-bottom: 18px; position: relative; }
.last-card-image { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.last-card:hover .last-card-image { transform: scale(1.08); }
.last-card-title { color: #1a5276; font-size: 18px; font-weight: 700; margin-bottom: 12px; }
.last-card-text { color: #2874a6; font-size: 14px; line-height: 1.9; margin-bottom: 18px; font-weight: 400; }
.last-card-link { color: #1a5276; font-size: 14px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: all 0.3s ease; position: relative; }
.last-card-link::after { content: ""; position: absolute; bottom: -2px; right: 0; width: 0; height: 2px; background-color: #1a5276; transition: width 0.3s ease; }
.last-card-link:hover { color: #0d3a52; gap: 10px; }
.last-card-link:hover::after { width: 100%; }
.last-card-link svg { width: 16px; height: 16px; fill: none; stroke: currentColor; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; transition: transform 0.3s ease; }
.last-card-link:hover svg { transform: translateX(-4px); }
.last-faq-item { background-color: #d6eefb; border-radius: 10px; margin-bottom: 10px; overflow: hidden; transition: all 0.3s ease; border: 1px solid transparent; }
.last-faq-item:hover { background-color: #c5e5f8; border-color: #90d0f0; transform: translateX(-3px); }
.last-faq-question { padding: 14px 16px; color: #1a5276; font-size: 14px; font-weight: 500; cursor: pointer; display: flex; justify-content: space-between; align-items: center; user-select: none; }
.last-faq-question svg { width: 18px; height: 18px; fill: none; stroke: #1a5276; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; transition: transform 0.3s ease; flex-shrink: 0; margin-right: 10px; }
.last-faq-item.active .last-faq-question svg { transform: rotate(180deg); }
.last-faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0 16px; color: #2874a6; font-size: 13px; line-height: 1.8; }
.last-faq-item.active .last-faq-answer { max-height: 300px; padding: 0 16px 14px 16px; }
@media (max-width: 768px) { .last-left, .last-right { flex: 0 0 100%; } }
</style>
<script>
function toggleLastFaq(element) {
    const item = element.parentElement;
    const isActive = item.classList.contains('active');
    document.querySelectorAll('.last-faq-item').forEach(faq => {
        faq.classList.remove('active');
        faq.querySelector('.last-faq-question').setAttribute('aria-expanded', 'false');
        faq.querySelector('.last-faq-answer').setAttribute('aria-hidden', 'true');
    });
    if (!isActive) {
        item.classList.add('active');
        element.setAttribute('aria-expanded', 'true');
        item.querySelector('.last-faq-answer').setAttribute('aria-hidden', 'false');
    }
}
</script>
