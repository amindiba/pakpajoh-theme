<?php
/**
 * آرشیو خدمات
 */
get_header();
?>

<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge">خدمات ما</span>
            <h1 class="services-hero-title">خدمات نظافت صنعتی و تجاری</h1>
            <p class="services-hero-slogan">«درخشش در عمل»</p>
            <p class="services-hero-desc">از نظافت کارخانه‌ها تا لابی شرکت‌ها، با تجهیزات مکانیزه و شوینده‌های بایو.</p>
        </div>
    </div>
</section>

<section class="section services-archive">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="services-archive-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="service-archive-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-archive-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
                        <?php endif; ?>
                        <div class="service-archive-body">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="service-archive-link">مشاهده جزئیات ←</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p class="empty-notice">هنوز خدمتی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
