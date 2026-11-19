<?php
/**
 * آرشیو نمونه‌کارها (با مودال - بدون فوتر فنی)
 */
get_header();
?>

<section class="services-hero" style="background: linear-gradient(135deg, #0A2540 0%, #123456 50%, #0B1F35 100%);">
    <div class="container">
        <div class="services-hero-inner">
            <span class="services-hero-badge">نمونه‌کارها</span>
            <h1 class="services-hero-title">پروژه‌های پاک‌پژوه</h1>
            <p class="services-hero-slogan">«درخشش در عمل»</p>
            <p class="services-hero-desc">نگاهی به برخی از پروژه‌های نظافت صنعتی و تجاری که توسط تیم پاک‌پژوه انجام شده است.</p>
        </div>
    </div>
</section>

<section class="section portfolio-archive-section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="portfolio-archive-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="portfolio-archive-card" data-title="<?php the_title_attribute(); ?>" data-excerpt="<?php echo esc_attr( wp_trim_words( get_the_excerpt(), 30 ) ); ?>" data-location="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_location', true ) ); ?>" data-date="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_date', true ) ); ?>" data-level="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_level', true ) ); ?>" data-duration="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_duration', true ) ); ?>" data-type="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_type', true ) ); ?>" data-satisfaction="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_satisfaction', true ) ); ?>" data-difficulty="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_difficulty', true ) ); ?>" data-image="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="portfolio-archive-thumb"><?php the_post_thumbnail( 'large' ); ?></div>
                        <?php else : ?>
                            <div class="portfolio-archive-thumb"><img src="https://placehold.co/600x400/1A2A3A/C9A96E?text=Portfolio" alt="<?php the_title_attribute(); ?>" loading="lazy"></div>
                        <?php endif; ?>
                        <div class="portfolio-archive-body">
                            <h3 class="portfolio-card-title"><?php the_title(); ?></h3>
                            <p class="portfolio-card-summary"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 8 ) ); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p class="empty-notice">هنوز نمونه‌کاری ثبت نشده است.</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_template_part( 'template-parts/portfolio-modal' );
get_footer();
