<?php
/**
 * گرید خدمات
 */
$services = new WP_Query( array(
    'post_type'      => 'pp_service',
    'posts_per_page' => 6,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
?>
<section id="services" class="services-section section section-dark reveal">
    <div class="container">
        <div class="section-header text-right reveal-up">
            <h2 class="section-title text-white">خدمات ما</h2>
            <p class="section-subtitle text-muted">راهکارهای تخصصی نظافت برای هر فضا</p>
        </div>
        <?php if ( $services->have_posts() ) : ?>
            <div class="services-list reveal-up">
                <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="service-list-item">
                        <span class="service-list-title"><?php the_title(); ?></span>
                        <span class="service-list-arrow">←</span>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <p class="empty-notice">هنوز خدمتی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>