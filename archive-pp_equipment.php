<?php
/**
 * آرشیو ماشین‌آلات
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">ماشین‌آلات و تجهیزات</h1>
        <p class="page-subtitle">فناوری‌های مکانیزه نظافت</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="equipment-grid">
                <?php while ( have_posts() ) : the_post(); ?>
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
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>هنوز دستگاهی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();