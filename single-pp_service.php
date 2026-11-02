<?php
/**
 * نمایش یک خدمت
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p class="page-subtitle">جزئیات خدمت</p>
    </div>
</section>
<section class="section">
    <div class="container content-wrap">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="single-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
            <?php endif; ?>
            <div class="entry-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();