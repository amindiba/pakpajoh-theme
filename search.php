<?php
/**
 * نتایج جستجو
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">نتایج جستجو</h1>
        <p class="page-subtitle">برای: <?php echo esc_html( get_search_query() ); ?></p>
    </div>
</section>
<section class="section">
    <div class="container content-wrap">
        <?php if ( have_posts() ) : ?>
            <div class="search-results">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="search-item" style="border-bottom:1px solid #eee; padding:1.5rem 0;">
                        <h2><a href="<?php the_permalink(); ?>" style="color:var(--pp-dark);"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>نتیجه‌ای یافت نشد.</p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();