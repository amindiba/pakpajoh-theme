<?php
/**
 * قالب نوشته تکی (مقاله)
 */
get_header();
?>

<section class="pp-article-hero">
    <div class="container">
        <div class="pp-article-hero-inner">
            <span class="pp-article-badge">مقاله</span>
            <h1 class="pp-article-title"><?php the_title(); ?></h1>
            <p class="pp-article-date"><?php echo esc_html( get_the_date() ); ?></p>
        </div>
    </div>
</section>

<section class="pp-article-section">
    <div class="container pp-article-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="pp-article-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
            <?php endif; ?>
            <div class="pp-article-content"><?php the_content(); ?></div>
            <div class="pp-article-footer">
                <a href="/blog/" class="pp-article-back">بازگشت به مقالات</a>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
