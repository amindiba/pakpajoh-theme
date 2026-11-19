<?php
/**
 * قالب تک‌خدمت (pp_service)
 */
get_header();
?>

<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge">خدمات پاک‌پژوه</span>
            <h1 class="services-hero-title"><?php the_title(); ?></h1>
            <p class="services-hero-slogan">«درخشش در عمل»</p>
            <p class="services-hero-desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
        </div>
    </div>
</section>

<section class="section pp-service-single">
    <div class="container pp-service-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="pp-service-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
            <?php endif; ?>
            <div class="pp-service-content"><?php the_content(); ?></div>
            <div class="pp-service-cta">
                <a href="/request/" class="btn btn-primary">ثبت درخواست مشاوره رایگان</a>
                <a href="/services/" class="pp-service-back">بازگشت به خدمات</a>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
