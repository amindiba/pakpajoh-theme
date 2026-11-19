<?php
/**
 * Hero Section — Services — PakPajoh Theme
 */
?>
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
            <h1 class="hero-title">خدمات پاکیزگی فراتر از نظافت روزمره</h1>
            <p class="hero-desc">پاک پژوه با شناخت شرایط هر محیط ، طراحی برنامه متناسب ، مدیریت اجرا خدماتو ارزیابی ککیفیت خدمات، به سازمان کمک میکند که پاکیزگی محیط به یک فرایند برنامه ریزی شده تبیدل شود.</p>

            <div class="hero-actions">
                <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="btn btn-primary">
                    <span>درخواست بازدید اولیه رایگان</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">
                    <span>مشاهده خدمات</span>
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
