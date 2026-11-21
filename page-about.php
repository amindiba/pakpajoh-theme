<?php
/**
 * Template Name: صفحه درباره ما
 */
get_header();

$about_hero_badge = get_option( 'pakpajoh_text_about_hero_badge', 'درباره پاک‌پژوه' );
$about_hero_title = get_option( 'pakpajoh_text_about_hero_title', 'پاک‌پژوه؛ نگاهی متفاوت به پاکیزگی محیط‌های کاری' );
$about_hero_slogan = get_option( 'pakpajoh_text_about_hero_slogan', 'پاکیزگی، بخشی از مدیریت حرفه‌ای محیط کار است.' );
$about_hero_desc = get_option( 'pakpajoh_text_about_hero_desc', 'برای هر محیط کاری، راهکاری متناسب با نوع فعالیت و نیازهای واقعی مجموعه طراحی می‌کنیم.' );
$about_history_badge = get_option( 'pakpajoh_text_about_history_badge', 'تاریخچه ما' );
$about_history_title = get_option( 'pakpajoh_text_about_history_title', 'از سال ۱۴۰۳ در خدمت صنعت' );
$about_history_desc = get_option( 'pakpajoh_text_about_history_desc', 'شرکت آتیه مهرگان انعکاس (شماره ثبت ۶۳۸۲۱۷) با برند پاک‌پژوه، فعالیت خود را در حوزه مدیریت خدمات مهندسی نظافت صنعتی آغاز کرده است.' );
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
                    <h2>چرا پاک‌پژوه؟</h2>
                    <p>مدیریت پاکیزگی را به بخشی از عملکرد حرفه‌ای محیط کار تبدیل می‌کنیم.</p>
                </article>
                <article class="about-pillar">
                    <span class="about-pillar-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M17 29c0-3.5-6-6.2-6-13a13 13 0 0 1 26 0c0 6.8-6 9.5-6 13H17Z" />
                            <path d="M18 35h12m-10 5h8M24 7v4m-10 4 3 2m17-2-3 2" />
                        </svg>
                    </span>
                    <h2>فلسفه فعالیت</h2>
                    <p>با پاکیزگی هدفمند، برای کارکنان و سازمان‌ها ارزش واقعی می‌سازیم.</p>
                </article>
                <article class="about-pillar">
                    <span class="about-pillar-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="m5 18 9-7 9 6-7 8-7-3-6 4m40-8-9-7-9 6 7 8 7-3 6 4M16 25l9 9a4 4 0 0 0 6-5l-7-8" />
                            <path d="m14 30 5 5a4 4 0 0 0 6 0m-9-10-4 4a4 4 0 0 0 6 6m14-12 5 5a4 4 0 0 1-6 6" />
                        </svg>
                    </span>
                    <h2>اصول ما</h2>
                    <p>کیفیت، شفافیت و مسئولیت‌پذیری را در تمام مراحل همکاری جدی می‌گیریم.</p>
                </article>
                <article class="about-pillar">
                    <span class="about-pillar-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M7 39V27m11 12V19m11 20V11m11 28V5" />
                            <path d="m6 20 12-8 10 4L42 5m-8 0h8v8" />
                        </svg>
                    </span>
                    <h2>چشم‌انداز ما</h2>
                    <p>به سوی آینده‌ای حرفه‌ای‌تر و قابل‌اندازه‌گیری در خدمات پاکیزگی حرکت می‌کنیم.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-approach" aria-labelledby="about-approach-title">
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
                    <span class="about-section-kicker">نگاه مهندسی به پاکیزگی</span>
                    <h2 id="about-approach-title">رویکرد ما؛ راهکاری متناسب با هر محیط</h2>
                    <p>پاک‌پژوه با توجه به نوع فعالیت، ویژگی‌های فضا و نیازهای هر سازمان، راهکاری روشن و قابل ارزیابی طراحی می‌کند.</p>
                    <p>از برنامه‌ریزی تا اجرا و پایش، کیفیت، ایمنی و تداوم کار مجموعه را در کنار هم می‌بینیم.</p>
                </div>
                <div class="about-history-note">
                    <span><?php echo wp_kses_post( $about_history_badge ); ?></span>
                    <h3><?php echo wp_kses_post( $about_history_title ); ?></h3>
                    <p><?php echo wp_kses_post( $about_history_desc ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-values" aria-labelledby="about-values-title">
        <div class="about-container">
            <div class="about-section-heading">
                <span class="about-section-kicker">آنچه به آن پایبندیم</span>
                <h2 id="about-values-title">ارزش‌های ما</h2>
            </div>
            <div class="about-values-grid">
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M24 5 39 11v11c0 10-6 17-15 21C15 39 9 32 9 22V11l15-6Z" />
                            <path d="m17 24 5 5 10-11" />
                        </svg>
                    </span>
                    <h3>کیفیت‌گرایی</h3>
                    <p>کیفیت را با چک‌لیست، پایش و گزارش مستند می‌کنیم.</p>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="m5 18 9-7 9 6-7 8-7-3-6 4m40-8-9-7-9 6 7 8 7-3 6 4M16 25l9 9a4 4 0 0 0 6-5l-7-8" />
                            <path d="m14 30 5 5a4 4 0 0 0 6 0m-9-10-4 4a4 4 0 0 0 6 6m14-12 5 5a4 4 0 0 1-6 6" />
                        </svg>
                    </span>
                    <h3>شناخت نیاز مشتری</h3>
                    <p>پیش از طراحی، شرایط و انتظارها را می‌شناسیم.</p>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M8 11h32v26H8zM15 19h18m-18 7h12" />
                            <circle cx="34" cy="32" r="5" />
                        </svg>
                    </span>
                    <h3>شفافیت و همکاری</h3>
                    <p>مسئولیت‌ها، معیارها و گزارش‌ها روشن‌اند.</p>
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
                    <h3>تناسب راهکار</h3>
                    <p>برنامه را با واقعیت هر محیط هماهنگ می‌کنیم.</p>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="16" r="7" />
                            <path d="M10 40v-4a14 14 0 0 1 28 0v4M7 21a6 6 0 0 0 0 12m34-12a6 6 0 0 1 0 12" />
                        </svg>
                    </span>
                    <h3>مسئولیت‌پذیری</h3>
                    <p>با سرپرستی پیوسته، ایمنی نیروها و تداوم کار را حفظ می‌کنیم.</p>
                </article>
                <article class="about-value">
                    <span class="about-value-icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M7 39V27m11 12V19m11 20V11m11 28V5" />
                            <path d="m6 20 12-8 10 4L42 5m-8 0h8v8" />
                        </svg>
                    </span>
                    <h3>یادگیری و بهبود</h3>
                    <p>با فناوری مکانیزه و شوینده‌های بایو، مصرف منابع را کاهش می‌دهیم.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-cta" aria-labelledby="about-cta-title">
        <div class="about-cta-decoration" aria-hidden="true"></div>
        <div class="about-cta-inner">
            <div class="about-cta-actions">
                <a class="about-cta-primary" href="<?php echo esc_url( home_url( '/request/' ) ); ?>">درخواست بازدید اولیه</a>
                <a class="about-cta-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">تماس با پاک‌پژوه</a>
            </div>
            <div class="about-cta-copy">
                <span class="about-section-kicker">همراهی مطمئن برای محیط کار</span>
                <h2 id="about-cta-title">برای ساختن محیطی پاکیزه‌تر، کنار شما هستیم.</h2>
                <p>برای شناخت نیازهای مجموعه و بررسی مسیر همکاری با ما در ارتباط باشید.</p>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
