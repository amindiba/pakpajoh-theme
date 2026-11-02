<?php
/**
 * صفحه اصلی
 */
get_header();
?>

<section class="hero">
    <div class="container hero-inner">
        <h1 class="hero-title">نظافت مدرن صنعتی؛ تلاقی فناوری، شوینده‌های بایو و نظارت مستمر</h1>
        <p class="hero-subtitle">ارائه خدمات مکانیزه نگهداری و نظافت واحدهای مسکونی، تجاری، اداری، درمانی، ترابری و صنعتی.</p>
        <div class="hero-actions">
            <a href="/contact/" class="btn btn-accent btn-lg">ثبت درخواست کارشناسی رایگان</a>
            <a href="#services" class="btn btn-outline btn-lg">مشاهده خدمات</a>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/about-summary' ); ?>
<?php get_template_part( 'template-parts/services-grid' ); ?>
<?php get_template_part( 'template-parts/equipment-grid' ); ?>
<?php get_template_part( 'template-parts/process-steps' ); ?>
<?php get_template_part( 'template-parts/cta' ); ?>

<?php
get_footer();