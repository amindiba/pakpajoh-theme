<?php
/**
 * آرشیو ماشین‌آلات
 */
get_header();
?>

<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge">ناوگان تجهیزات</span>
            <h1 class="services-hero-title">ماشین‌آلات و تجهیزات</h1>
            <p class="services-hero-slogan">«فناوری مکانیزه»</p>
            <p class="services-hero-desc">اسکرابرهای صنعتی، مکنده‌های آب و خاک و واترجت‌های گرم و سرد.</p>
        </div>
    </div>
</section>

<section class="section equipment-archive">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="equipment-archive-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="equipment-archive-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="equipment-archive-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
                        <?php endif; ?>
                        <div class="equipment-archive-body">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 15 ) ); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p class="empty-notice">هنوز دستگاهی ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
