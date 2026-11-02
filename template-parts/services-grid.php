<?php
/**
 * گرید خدمات
 */
$services = new WP_Query( array(
    'post_type'      => 'pp_service',
    'posts_per_page' => 8,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
?>
<section id="services" class="services section section-dark">
    <div class="container">
        <div class="section-header text-right">
            <h2 class="section-title text-white">خدمات ما</h2>
            <p class="section-subtitle text-muted">راهکارهای تخصصی نظافت برای هر فضا</p>
        </div>

        <?php if ( $services->have_posts() ) : ?>
            <div class="services-grid">
                <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                    <article class="service-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="service-thumb">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="service-body">
                            <h3 class="service-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="service-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="service-link">
                                مشاهده جزئیات ←
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <p class="empty-notice">هنوز خدمتی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>