<?php
/**
 * Template Name: صفحه درباره ما
 */
get_header();

$about_hero_badge = get_option( 'pakpajoh_text_about_hero_badge', 'دربارهٔ پاک‌پژوه' );
$about_hero_title = get_option( 'pakpajoh_text_about_hero_title', 'پاک‌پژوه؛ نگاهی متفاوت به پاکیزگی محیط‌های کاری' );
$about_hero_slogan = get_option( 'pakpajoh_text_about_hero_slogan', 'پاکیزگی، بخشی از مدیریت حرفه‌ای محیط کار است.' );
$about_hero_desc = get_option( 'pakpajoh_text_about_hero_desc', 'برای هر محیط کاری، راهکاری متناسب با نوع فعالیت و نیازهای واقعی مجموعه طراحی می‌کنیم.' );
$about_history_badge = get_option( 'pakpajoh_text_about_history_badge', 'تاریخچه ما' );
$about_history_title = get_option( 'pakpajoh_text_about_history_title', 'از سال ۱۴۰۳ در خدمت صنعت' );
$about_history_desc = get_option( 'pakpajoh_text_about_history_desc', 'شرکت آتیه مهرگان انعکاس (شماره ثبت ۶۳۸۲۱۷) با برند پاک‌پژوه، فعالیت خود را در حوزه مدیریت خدمات مهندسی نظافت صنعتی آغاز کرده است.' );
$about_identity_detail = get_option( 'pakpajoh_text_about_identity_detail', '<p>پاک‌پژوه با این باور شکل گرفته است که پاکیزگی محیط‌های کاری، فراتر از یک فعالیت خدماتی روزمره است و باید بخشی از مدیریت و نگهداری محیط کار باشد.</p><p>ما می‌خواهیم نگاه به خدمات پاکیزگی را از فعالیت‌های پراکنده و صرفاً اجرایی، به رویکردی برنامه‌ریزی‌شده، هدفمند و قابل ارزیابی نزدیک کنیم.</p><p>هر سازمان برای حفظ شرایط مناسب محیط کاری خود به راهکاری متناسب با نیازها، ساختار و شرایط بهره‌برداری‌اش نیاز دارد. به همین دلیل، پاک‌پژوه پاکیزگی را یک فرایند مدیریتی می‌داند، نه صرفاً یک فعالیت اجرایی.</p>' );
$about_why_detail = get_option( 'pakpajoh_text_about_why_detail', '<p>در بسیاری از سازمان‌ها، پاکیزگی محیط کار به فعالیت‌هایی روزمره و تکرارشونده محدود می‌شود؛ درحالی‌که مدیریت درست آن می‌تواند به نظم محیط، نگهداری مناسب فضاها و تجهیزات و کیفیت شرایط کاری کمک کند.</p><p>مدیران همچنین به اطلاعات روشن‌تری درباره نحوه ارائه خدمات، محدوده مسئولیت‌ها، کیفیت عملکرد و میزان انطباق فعالیت‌ها با انتظارهایشان نیاز دارند.</p><p>پاک‌پژوه با توجه به این نیاز شکل گرفته است تا خدمات پاکیزگی، با شناخت نیاز سازمان، برنامه‌ریزی و ارزیابی، ساختاری منسجم‌تر و حرفه‌ای‌تر پیدا کنند.</p>' );
$about_philosophy_detail = get_option( 'pakpajoh_text_about_philosophy_detail', '<p>خدمات پاکیزگی زمانی ارزشمندترند که متناسب با نیاز محیط طراحی شوند، به‌درستی سازماندهی شوند و نتایج آن‌ها قابل بررسی باشد.</p><p>با مدیریت مناسب، پاکیزگی می‌تواند به بخشی منسجم از فرایند نگهداری و بهره‌برداری محیط‌های کاری تبدیل شود؛ نه مجموعه‌ای از فعالیت‌های جدا از هم.</p><p>به‌دنبال رابطه‌ای حرفه‌ای و بلندمدت با سازمان‌ها هستیم؛ رابطه‌ای بر پایه شناخت متقابل، انتظارهای روشن، مسئولیت‌پذیری و توجه به کیفیت خدمات.</p>' );
$about_needs_detail = get_option( 'pakpajoh_text_about_needs_detail', '<p>هر سازمان شرایط، ساختار و انتظارهای خاص خود را دارد. پیش از پیشنهاد راهکار، نیازهای مجموعه و ویژگی‌های محیط را می‌شناسیم تا نقطه شروع همکاری بر اطلاعات واقعی استوار باشد.</p>' );
$about_transparency_detail = get_option( 'pakpajoh_text_about_transparency_detail', '<p>محدوده خدمات، ظرفیت اجرایی، مسئولیت‌ها و شرایط همکاری باید روشن و قابل توافق باشند. از وعده‌های غیرواقعی یا تعهدهایی فراتر از ظرفیت پروژه پرهیز می‌کنیم.</p>' );
$about_quality_detail = get_option( 'pakpajoh_text_about_quality_detail', '<p>کیفیت باید در تعریف خدمات و انتظارهای طرفین جایگاه مشخصی داشته باشد و امکان بررسی آن فراهم شود. برای همین، معیارهای کیفیت را متناسب با دامنه خدمات و توافق‌های پروژه روشن می‌کنیم.</p>' );
$about_responsibility_detail = get_option( 'pakpajoh_text_about_responsibility_detail', '<p>پایبندی به توافق‌ها، توجه به مسئولیت‌های تعریف‌شده و پیگیری مسائل مرتبط با خدمات، پایه همکاری حرفه‌ای است. مسئولیت‌ها را از ابتدا روشن می‌کنیم و در طول همکاری پیگیر آن‌ها می‌مانیم.</p>' );
$about_fit_detail = get_option( 'pakpajoh_text_about_fit_detail', '<p>راهکار مناسب الزاماً پیچیده‌ترین یا پرهزینه‌ترین راهکار نیست؛ باید با نیاز، شرایط محیط و امکانات پروژه تناسب داشته باشد. انتخاب و سازماندهی خدمات را بر همین مبنا انجام می‌دهیم.</p>' );
$about_improvement_detail = get_option( 'pakpajoh_text_about_improvement_detail', '<p>شناخت بهتر نیازهای بازار، تجربه‌های اجرایی و بازخورد مشتریان، مبنای اصلاح و توسعه خدمات ماست. بهبود را بخشی پیوسته از همکاری می‌دانیم.</p>' );
$about_model_detail = get_option( 'pakpajoh_text_about_model_detail', '<p>پاک‌پژوه برای ارائه خدمات به ساختاری ثابت و یکسان برای همه پروژه‌ها متکی نیست. ماهیت فعالیت، وسعت پروژه، شرایط محیط، سطح خدمات و الزامات اجرایی هر مجموعه می‌تواند متفاوت باشد.</p><p>ساختار تأمین منابع و سازماندهی فعالیت‌ها بر پایه نیاز واقعی پروژه شکل می‌گیرد و می‌تواند ترکیبی از نیروهای داخلی و همکاران قراردادی باشد. انتخاب منابع با توجه به شرایط پروژه و توافق با کارفرما انجام می‌شود.</p><p>هدف این است که ساختار اجرایی، منابع و تعهدات با محدوده خدمات تعریف‌شده تناسب داشته باشند. انعطاف‌پذیری در کنار شفافیت مسئولیت‌ها و مدیریت مناسب، امکان پاسخ‌گویی به شرایط متنوع سازمان‌ها را فراهم می‌کند.</p>' );
$about_vision_detail = get_option( 'pakpajoh_text_about_vision_detail', '<p>چشم‌انداز پاک‌پژوه، مشارکت در توسعه رویکردی حرفه‌ای‌تر به خدمات پاکیزگی محیط‌های کاری است؛ رویکردی که در آن برنامه‌ریزی، مدیریت، کیفیت و مستندسازی جایگاه مشخصی داشته باشند.</p><p>در مسیر توسعه فعالیت، به دنبال تقویت دانش و توان اجرایی، توسعه ابزارهای مناسب برای مدیریت و گزارش‌دهی و بهبود مستمر راهکارها هستیم.</p><p>فناوری را ابزاری برای ارتقای شفافیت، نظم اطلاعاتی و ارزیابی بهتر می‌دانیم؛ نه جایگزینی برای شناخت محیط و مدیریت صحیح عملیات. هدف بلندمدت، ایجاد مجموعه‌ای قابل اتکا برای سازمان‌هایی است که پاکیزگی را بخشی از مدیریت حرفه‌ای خود می‌دانند.</p>' );
$about_cta_title = get_option( 'pakpajoh_text_about_cta_title', 'آغاز یک همکاری حرفه‌ای، با شناخت نیازهای شما' );
$about_cta_desc = get_option( 'pakpajoh_text_about_cta_desc', 'بازدید اولیه رایگان، با هماهنگی قبلی و در محدوده جغرافیایی تحت پوشش انجام می‌شود.' );
$about_cta_btn2 = get_option( 'pakpajoh_text_about_cta_btn2', 'تماس با پاک‌پژوه' );
?>

<div class="about-page">
    <section class="about-hero" aria-labelledby="about-hero-title">
        <div class="about-hero-media">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-hero.jpeg' ); ?>"
                alt="ساختمان اداری مدرن در میان فضای سبز"
                fetchpriority="high"
            >
        </div>
        <div class="about-hero-inner">
            <div class="about-hero-copy">
                <img
                    class="about-brand"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>"
                    alt="پاک‌پژوه"
                    width="112"
                    height="112"
                >
                <span class="about-eyebrow"><?php echo wp_kses_post( $about_hero_badge ); ?></span>
                <h1 id="about-hero-title"><?php echo wp_kses_post( $about_hero_title ); ?></h1>
                <p class="about-hero-slogan"><?php echo wp_kses_post( $about_hero_slogan ); ?></p>
                <p class="about-hero-desc"><?php echo wp_kses_post( $about_hero_desc ); ?></p>
            </div>
        </div>
        <div class="about-hero-edge" aria-hidden="true"></div>
    </section>

    <section class="about-approach" aria-labelledby="about-identity-title">
        <div class="about-container">
            <div class="about-approach-panel">
                <div class="about-approach-visual" aria-hidden="true">
                    <div class="about-visual-orbit about-visual-orbit-one"></div>
                    <div class="about-visual-orbit about-visual-orbit-two"></div>
                    <div class="about-visual-document">
                        <span class="about-visual-kicker">شناخت محیط</span>
                        <span class="about-visual-check"></span>
                        <span class="about-visual-check"></span>
                        <span class="about-visual-check"></span>
                        <span class="about-visual-footer">برنامه‌ریزی دقیق، اجرای مطمئن</span>
                    </div>
                    <span class="about-visual-caption">راهکار متناسب با هر فضا</span>
                </div>

                <div class="about-approach-copy">
                    <span class="about-section-kicker">هویت پاک‌پژوه</span>
                    <h2 id="about-identity-title">
                        <button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-identity">
                            پاکیزگی؛ فرایندی مدیریتی
                            <span class="about-dialog-mark" aria-hidden="true">+</span>
                        </button>
                    </h2>
                    <p>پاک‌پژوه پاکیزگی محیط کار را فراتر از یک خدمت روزمره می‌بیند؛ بخشی از مدیریت و نگهداری حرفه‌ای فضا.</p>
                    <p>برای هر سازمان، راهکاری متناسب با نیازها و شرایط بهره‌برداری طراحی می‌کنیم؛ برنامه‌ریزی‌شده، هدفمند و قابل ارزیابی.</p>
                    <span class="about-dialog-hint">برای آشنایی بیشتر با نگاه پاک‌پژوه، عنوان را انتخاب کنید</span>
                </div>
                <div class="about-history-note">
                    <span><?php echo wp_kses_post( $about_history_badge ); ?></span>
                    <h3><?php echo wp_kses_post( $about_history_title ); ?></h3>
                    <p><?php echo wp_kses_post( $about_history_desc ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-pillars" aria-label="نگاهی به پاک‌پژوه">
        <div class="about-container">
            <div class="about-pillars-grid">
                <article class="about-pillar">
                    <span class="about-pillar-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <circle cx="21" cy="24" r="13" />
                            <circle cx="21" cy="24" r="6" />
                            <path d="m25.5 19.5 14-14m-7 0h7v7" />
                        </svg>
                    </span>
                    <h2>
                        <button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-why">
                            چرا پاک‌پژوه شکل گرفت؟
                            <span class="about-dialog-mark" aria-hidden="true">+</span>
                        </button>
                    </h2>
                    <p>برای منسجم‌تر شدن خدمات پاکیزگی و روشن‌تر شدن کیفیت و مسئولیت‌ها.</p>
                    <span class="about-dialog-hint">مطالعه جزئیات</span>
                </article>
                <article class="about-pillar">
                    <span class="about-pillar-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M17 29c0-3.5-6-6.2-6-13a13 13 0 0 1 26 0c0 6.8-6 9.5-6 13H17Z" />
                            <path d="M18 35h12m-10 5h8M24 7v4m-10 4 3 2m17-2-3 2" />
                        </svg>
                    </span>
                    <h2>
                        <button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-philosophy">
                            فلسفه فعالیت ما
                            <span class="about-dialog-mark" aria-hidden="true">+</span>
                        </button>
                    </h2>
                    <p>خدمات زمانی ارزشمندند که متناسب با نیاز محیط طراحی و قابل بررسی باشند.</p>
                    <span class="about-dialog-hint">مطالعه جزئیات</span>
                </article>
            </div>
        </div>
    </section>

    <section class="about-values" aria-labelledby="about-values-title">
        <div class="about-container">
            <div class="about-section-heading">
                <span class="about-section-kicker">اصولی که مبنای فعالیت ما هستند</span>
                <h2 id="about-values-title">اصول و ارزش‌های حرفه‌ای</h2>
            </div>
            <div class="about-values-grid">
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="m5 18 9-7 9 6-7 8-7-3-6 4m40-8-9-7-9 6 7 8 7-3 6 4M16 25l9 9a4 4 0 0 0 6-5l-7-8" />
                            <path d="m14 30 5 5a4 4 0 0 0 6 0m-9-10-4 4a4 4 0 0 0 6 6m14-12 5 5a4 4 0 0 1-6 6" />
                        </svg>
                    </span>
                    <h3><button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-needs">شناخت نیاز مشتری<span class="about-dialog-mark" aria-hidden="true">+</span></button></h3>
                    <p>شناخت شرایط و انتظارها، نقطه شروع راهکار است.</p>
                    <span class="about-dialog-hint">جزئیات</span>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M8 11h32v26H8zM15 19h18m-18 7h12" />
                            <circle cx="34" cy="32" r="5" />
                        </svg>
                    </span>
                    <h3><button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-transparency">صداقت و شفافیت<span class="about-dialog-mark" aria-hidden="true">+</span></button></h3>
                    <p>دامنه خدمات، ظرفیت و مسئولیت‌ها روشن و قابل توافق‌اند.</p>
                    <span class="about-dialog-hint">جزئیات</span>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M24 5 39 11v11c0 10-6 17-15 21C15 39 9 32 9 22V11l15-6Z" />
                            <path d="m17 24 5 5 10-11" />
                        </svg>
                    </span>
                    <h3><button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-quality">کیفیت‌گرایی<span class="about-dialog-mark" aria-hidden="true">+</span></button></h3>
                    <p>کیفیت خدمات را روشن و قابل بررسی تعریف می‌کنیم.</p>
                    <span class="about-dialog-hint">جزئیات</span>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="16" r="7" />
                            <path d="M10 40v-4a14 14 0 0 1 28 0v4M7 21a6 6 0 0 0 0 12m34-12a6 6 0 0 1 0 12" />
                        </svg>
                    </span>
                    <h3><button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-responsibility">مسئولیت‌پذیری<span class="about-dialog-mark" aria-hidden="true">+</span></button></h3>
                    <p>به توافق‌ها پایبند می‌مانیم و مسائل را پیگیری می‌کنیم.</p>
                    <span class="about-dialog-hint">جزئیات</span>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M7 12h34M7 24h34M7 36h34" />
                            <circle cx="18" cy="12" r="4" />
                            <circle cx="31" cy="24" r="4" />
                            <circle cx="21" cy="36" r="4" />
                        </svg>
                    </span>
                    <h3><button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-fit">تناسب راهکار<span class="about-dialog-mark" aria-hidden="true">+</span></button></h3>
                    <p>راهکار باید با نیاز، شرایط و امکانات پروژه تناسب داشته باشد.</p>
                    <span class="about-dialog-hint">جزئیات</span>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M7 39V27m11 12V19m11 20V11m11 28V5" />
                            <path d="m6 20 12-8 10 4L42 5m-8 0h8v8" />
                        </svg>
                    </span>
                    <h3><button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-improvement">یادگیری و بهبود مستمر<span class="about-dialog-mark" aria-hidden="true">+</span></button></h3>
                    <p>تجربه اجرا و بازخورد مشتریان را مبنای اصلاح خدمات می‌دانیم.</p>
                    <span class="about-dialog-hint">جزئیات</span>
                </article>
            </div>
        </div>
    </section>

    <section class="about-approach" aria-labelledby="about-model-title">
        <div class="about-container">
            <div class="about-approach-panel">
                <div class="about-approach-visual" aria-hidden="true">
                    <div class="about-visual-orbit about-visual-orbit-one"></div>
                    <div class="about-visual-orbit about-visual-orbit-two"></div>
                    <div class="about-visual-document">
                        <span class="about-visual-kicker">تناسب با پروژه</span>
                        <span class="about-visual-check"></span>
                        <span class="about-visual-check"></span>
                        <span class="about-visual-check"></span>
                        <span class="about-visual-footer">نیازسنجی، سازماندهی، ارزیابی</span>
                    </div>
                    <span class="about-visual-caption">ساختار متناسب با هر فضا</span>
                </div>

                <div class="about-approach-copy">
                    <span class="about-section-kicker">مدل کسب‌وکار و نگرش اجرایی</span>
                    <h2 id="about-model-title">
                        <button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-model">
                            راهکار متناسب با هر پروژه
                            <span class="about-dialog-mark" aria-hidden="true">+</span>
                        </button>
                    </h2>
                    <p>ساختار اجرا و تأمین منابع را با ماهیت فعالیت، وسعت پروژه و سطح خدمات مورد انتظار هماهنگ می‌کنیم.</p>
                    <p>ترکیب نیروهای داخلی و همکاران قراردادی نیز بر پایه نیاز پروژه و توافق روشن با کارفرما تعیین می‌شود.</p>
                    <span class="about-dialog-hint">برای آشنایی با مدل اجرایی، عنوان را انتخاب کنید</span>
                </div>
            </div>
        </div>
    </section>

    <section class="about-vision" aria-labelledby="about-vision-title">
        <div class="about-container">
            <div class="about-vision-card">
                <span class="about-section-kicker">نگاه به آینده</span>
                <h2 id="about-vision-title">
                    <button class="about-dialog-trigger" type="button" aria-haspopup="dialog" aria-controls="about-dialog-vision">
                    حرکت به سوی آینده‌ای حرفه‌ای‌تر
                        <span class="about-dialog-mark" aria-hidden="true">+</span>
                    </button>
                </h2>
                <p>برای توسعه دانش، توان اجرایی و ابزارهای مدیریت و گزارش‌دهی، با نگاه به بهبود مستمر پیش می‌رویم.</p>
                <span class="about-dialog-hint">مشاهده چشم‌انداز پاک‌پژوه</span>
            </div>
        </div>
    </section>

    <section class="about-cta" aria-labelledby="about-cta-title">
        <div class="about-cta-decoration" aria-hidden="true"></div>
        <div class="about-cta-inner">
            <div class="about-cta-actions">
                <a class="about-cta-primary request-visit-cta" href="<?php echo esc_url( home_url( '/request/' ) ); ?>">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <span><?php echo esc_html( get_option( 'pakpajoh_text_home_hero_btn1', 'درخواست بازدید اولیه رایگان' ) ); ?></span>
                </a>
                <a class="about-cta-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php echo esc_html( $about_cta_btn2 ); ?></a>
            </div>
            <div class="about-cta-copy">
                <span class="about-section-kicker">همراهی مطمئن برای محیط کار</span>
                <h2 id="about-cta-title"><?php echo esc_html( $about_cta_title ); ?></h2>
                <p><?php echo esc_html( $about_cta_desc ); ?></p>
            </div>
        </div>
    </section>

    <dialog class="about-dialog" id="about-dialog-identity" aria-labelledby="about-dialog-identity-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">هویت پاک‌پژوه</span>
            <h2 id="about-dialog-identity-title">پاکیزگی؛ فرایندی مدیریتی</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_identity_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-why" aria-labelledby="about-dialog-why-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">چرایی شکل‌گیری</span>
            <h2 id="about-dialog-why-title">یک نیاز واقعی در مدیریت محیط‌های کاری</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_why_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-philosophy" aria-labelledby="about-dialog-philosophy-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">فلسفه فعالیت</span>
            <h2 id="about-dialog-philosophy-title">از انجام خدمات تا ایجاد ارزش در محیط کار</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_philosophy_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-needs" aria-labelledby="about-dialog-needs-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">اصل همکاری</span>
            <h2 id="about-dialog-needs-title">شناخت و درک نیاز مشتری</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_needs_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-transparency" aria-labelledby="about-dialog-transparency-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">اصل همکاری</span>
            <h2 id="about-dialog-transparency-title">صداقت و شفافیت</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_transparency_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-quality" aria-labelledby="about-dialog-quality-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">اصل همکاری</span>
            <h2 id="about-dialog-quality-title">کیفیت‌گرایی</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_quality_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-responsibility" aria-labelledby="about-dialog-responsibility-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">اصل همکاری</span>
            <h2 id="about-dialog-responsibility-title">مسئولیت‌پذیری</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_responsibility_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-fit" aria-labelledby="about-dialog-fit-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">اصل همکاری</span>
            <h2 id="about-dialog-fit-title">تناسب راهکار با شرایط واقعی</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_fit_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-improvement" aria-labelledby="about-dialog-improvement-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">اصل همکاری</span>
            <h2 id="about-dialog-improvement-title">یادگیری و بهبود مستمر</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_improvement_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-model" aria-labelledby="about-dialog-model-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">مدل کسب‌وکار و نگرش اجرایی</span>
            <h2 id="about-dialog-model-title">سازماندهی متناسب با نیاز پروژه</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_model_detail ); ?>
            </div>
        </div>
    </dialog>

    <dialog class="about-dialog" id="about-dialog-vision" aria-labelledby="about-dialog-vision-title">
        <div class="about-dialog-panel">
            <form method="dialog" class="about-dialog-close-form">
                <button class="about-dialog-close" type="submit" aria-label="بستن پنجره">×</button>
            </form>
            <span class="about-section-kicker">چشم‌انداز پاک‌پژوه</span>
            <h2 id="about-dialog-vision-title">حرکت به سوی آینده‌ای حرفه‌ای‌تر در خدمات پاکیزگی</h2>
            <div class="about-dialog-body">
                <?php echo wp_kses_post( $about_vision_detail ); ?>
            </div>
        </div>
    </dialog>
</div>

<?php
get_footer();
