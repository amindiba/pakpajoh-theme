<?php
/**
 * Testimonials Section (اسلایدر در موبایل، گرید در دسکتاپ)
 */
$testimonials = array(
    array(
        'name'  => 'مهندس رضایی',
        'role'  => 'مدیر فنی شرکت صنعتی',
        'text'  => 'کیفیت نظافت و نظم تیم پاک‌پژوه در پروژه ما بی‌نظیر بود. سرپرست مقیم و چک‌لیست‌های تحویل کار، خیال ما را راحت کرد.',
        'stars' => 5,
        'initial' => 'ر',
    ),
    array(
        'name'  => 'خانم احمدی',
        'role'  => 'مدیر اداری',
        'text'  => 'خشک‌شویی مبلمان اداری بدون هیچ آبریزی و در کمترین زمان انجام شد. کیفیت کار واقعاً حرفه‌ای بود.',
        'stars' => 5,
        'initial' => 'ا',
    ),
    array(
        'name'  => 'آقای کریمی',
        'role'  => 'مدیر هتل',
        'text'  => 'برای نظافت سالن همایش‌مان از پاک‌پژوه کمک گرفتیم. سرعت و دقت تیم عالی بود و هیچ اختلالی در برنامه ما ایجاد نشد.',
        'stars' => 5,
        'initial' => 'ک',
    ),
);
?>
<section class="section testimonials-section testimonials-center">
    <div class="container">
        <span class="section-badge">نظرات مشتریان</span>
        <h2 class="section-title">آن‌ها به پاک‌پژوه اعتماد کردند</h2>
        <div class="testimonials-carousel" data-carousel>
                        <div class="testimonials-carousel-viewport">
                <div class="testimonials-carousel-track">
                    <?php foreach ( $testimonials as $t ) : ?>
                        <article class="testimonial-card carousel-slide">
                            <div class="testimonial-stars" aria-label="<?php echo esc_attr( $t['stars'] ); ?> ستاره">
                                <?php for ( $i = 0; $i < $t['stars']; $i++ ) : ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-content">«<?php echo esc_html( $t['text'] ); ?>»</p>
                            <div class="testimonial-author">
                                <div class="testimonial-avatar"><?php echo esc_html( $t['initial'] ); ?></div>
                                <div class="testimonial-meta">
                                    <h4><?php echo esc_html( $t['name'] ); ?></h4>
                                    <span><?php echo esc_html( $t['role'] ); ?></span>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
                        <div class="carousel-dots" role="tablist"></div>
        </div>
    </div>
</section>
