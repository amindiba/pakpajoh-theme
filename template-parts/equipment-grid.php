<?php
/**
 * گرید ماشین‌آلات
 */
$equipment = new WP_Query( array(
    'post_type'      => 'pp_equipment',
    'posts_per_page' => 4,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
?>
<section id="equipment" class="equipment-section section reveal">
    <div class="container">
        <div class="section-header text-right reveal-up">
            <h2 class="section-title">ماشین‌آلات و تجهیزات</h2>
            <p class="section-subtitle">فناوری‌های مکانیزه برای نظافت حرفه‌ای</p>
        </div>
        <?php if ( $equipment->have_posts() ) : ?>
            <div class="equipment-grid reveal-up">
                <?php while ( $equipment->have_posts() ) : $equipment->the_post(); ?>
                    <article class="equipment-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="equipment-thumb">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="equipment-body">
                            <h3 class="equipment-title"><?php the_title(); ?></h3>
                            <p class="equipment-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?></p>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <p class="empty-notice">هنوز دستگاهی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>