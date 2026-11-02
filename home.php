<?php
/**
 * قالب صفحه وبلاگ (مقالات)
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">مقالات</h1>
        <p class="page-subtitle">آخرین اخبار و مقالات تخصصی نظافت صنعتی</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="blog-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="blog-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-thumb">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="blog-body">
                            <span class="blog-date"><?php echo esc_html( get_the_date() ); ?></span>
                            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="blog-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-link">ادامه مطلب ←</a>
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