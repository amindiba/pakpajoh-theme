<?php
/**
 * قالب نوشته تکی (بلاگ)
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p class="page-subtitle"><?php echo esc_html( get_the_date() ); ?></p>
    </div>
</section>
<section class="section">
    <div class="container content-wrap">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="single-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
            <?php endif; ?>
            <div class="entry-content"><?php the_content(); ?></div>
            <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();