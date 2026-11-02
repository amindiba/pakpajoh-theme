<?php
/**
 * آرشیو خدمات
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">خدمات پاک‌پژوه</h1>
        <p class="page-subtitle">راهکارهای تخصصی نظافت صنعتی</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="services-list archive-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="service-list-item">
                        <span class="service-list-title"><?php the_title(); ?></span>
                        <span class="service-list-arrow">←</span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>هنوز خدمتی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();