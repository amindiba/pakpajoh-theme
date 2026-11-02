<?php
/**
 * قالب برگه پیش‌فرض
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
</section>
<section class="section">
    <div class="container content-wrap">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();