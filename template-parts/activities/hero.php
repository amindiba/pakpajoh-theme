<section class="hero-section" aria-label="بخش معرفی" style="min-height: 39vh;">
    <div class="hero-slider">
        <div class="hero-slide active">
            <div class="hero-bg">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/activities-hero.jpg' ); ?>" alt="نظافت صنعتی پاک پژوه" loading="eager" fetchpriority="high">
                <div class="hero-overlay"></div>
            </div>
        </div>
    </div>

    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">پاکیزگی متناسب با محیط</h1>
            <p class="hero-desc">هر محیط کاری، شرایط و نیازهای خاص خود را دارد، پاک پژوه با شناخت ویژگی های هر فضا، برنامه ای مناسب طزاحی و خدمات پاکیزگی را به صورت حرفه ای اجرا میکند.</p>

            <div class="hero-actions">
                <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="btn btn-primary">
                    <span>درخواست بازدید اولیه رایگان</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/activities/' ) ); ?>" class="btn btn-outline">
                    <span>مشاهده حوزه های فعالیت</span>
                </a>
            </div>

            <div class="hero-pagination" aria-hidden="true">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
</section>
