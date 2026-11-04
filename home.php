<?php
/**
 * صفحه مقالات (Blog)
 */
get_header();
?>

<!-- هیرو -->
<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge">مقالات</span>
            <h1 class="services-hero-title">آخرین مقالات و اخبار</h1>
            <p class="services-hero-slogan">«دانش روز نظافت صنعتی»</p>
            <p class="services-hero-desc">جدیدترین مقالات تخصصی در حوزه نظافت صنعتی، فناوری‌های نوین و شوینده‌های بایو.</p>
        </div>
    </div>
</section>

<!-- گرید مقالات -->
<section class="section blog-section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="blog-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="blog-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-thumb"><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php endif; ?>
                        <div class="blog-body">
                            <span class="blog-date"><?php echo esc_html( get_the_date() ); ?></span>
                            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="blog-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="blog-link">ادامه مطلب ←</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
        <?php else : ?>
            <p class="empty-notice">هنوز مقاله‌ای ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
