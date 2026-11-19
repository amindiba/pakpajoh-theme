<?php
/**
 * Portfolio Section — Carousel (مودال مشترک با آرشیو)
 */
$portfolio_query = new WP_Query( array(
    'post_type'      => 'pp_portfolio',
    'posts_per_page' => 9,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'no_found_rows'  => true,
) );
if ( ! $portfolio_query->have_posts() ) { return; }
?>
<section class="section portfolio-section">
    <div class="container">
        <span class="section-badge">نمونه‌کارها</span>
        <h2 class="section-title">پروژه‌های اخیر پاک‌پژوه</h2>
        <div class="portfolio-carousel" data-carousel data-carousel-loop>
                        <div class="portfolio-carousel-viewport">
                <div class="portfolio-carousel-track">
                    <?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
                        <article class="portfolio-card carousel-slide"
                            data-title="<?php the_title_attribute(); ?>"
                            data-excerpt="<?php echo esc_attr( wp_trim_words( get_the_excerpt(), 30 ) ); ?>"
                            data-location="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_location', true ) ); ?>"
                            data-date="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_date', true ) ); ?>"
                            data-level="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_level', true ) ); ?>"
                            data-duration="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_duration', true ) ); ?>"
                            data-type="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_type', true ) ); ?>"
                            data-satisfaction="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_satisfaction', true ) ); ?>"
                            data-difficulty="<?php echo esc_attr( get_post_meta( get_the_ID(), '_pp_difficulty', true ) ); ?>"
                            data-image="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>">
                            <div class="portfolio-card-thumb">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                <?php else : ?>
                                    <img src="https://placehold.co/600x400/1A2A3A/C9A96E?text=Portfolio" alt="<?php the_title_attribute(); ?>" loading="lazy">
                                <?php endif; ?>
                                <span class="portfolio-card-overlay">
                                    <span class="portfolio-card-view">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                                    </span>
                                </span>
                            </div>
                            <div class="portfolio-card-caption">
                                <h3><?php the_title(); ?></h3>
                                <?php $loc = get_post_meta( get_the_ID(), '_pp_location', true ); if ( $loc ) : ?>
                                    <span class="portfolio-card-location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <?php echo esc_html( $loc ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
                        <div class="carousel-dots" role="tablist"></div>
        </div>
        <div class="portfolio-section-actions">
            <a href="/portfolio/" class="btn btn-outline">
                <span>مشاهده همه نمونه‌کارها</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>
