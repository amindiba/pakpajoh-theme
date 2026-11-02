<?php
/**
 * نظرات مشتریان (Testimonials) - استفاده از تصاویر ثابت
 */
$items = array(
    array(
        'name' => 'مهندس رضایی',
        'role' => 'مدیر فنی شرکت صنعتی',
        'text' => 'کیفیت نظافت و نظم تیم پاک‌پژوه در پروژه ما بی‌نظیر بود. سرپرست مقیم و چک‌لیست‌های تحویل کار، خیال ما را راحت کرد.',
        'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-2.jpeg'
    ),
    array(
        'name' => 'خانم احمدی',
        'role' => 'مدیر اداری',
        'text' => 'خشک‌شویی مبلمان اداری بدون هیچ آبریزی و در کمترین زمان انجام شد. کیفیت کار واقعاً حرفه‌ای بود.',
        'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-2.jpeg'
    ),
    array(
        'name' => 'آقای کریمی',
        'role' => 'مدیر هتل',
        'text' => 'برای نظافت سالن همایش‌مان از پاک‌پژوه کمک گرفتیم. سرعت و دقت تیم عالی بود و هیچ اختلالی در برنامه ما ایجاد نشد.',
        'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-2.jpeg'
    ),
);
?>
<section class="testimonials-section section section-dark reveal">
    <div class="container">
        <div class="section-header text-right reveal-up">
            <h2 class="section-title text-white">رضایت مشتریان</h2>
            <p class="section-subtitle text-muted">اعتماد شما، اعتبار ماست</p>
        </div>
        <div class="testimonials-grid reveal-up">
            <?php foreach ( $items as $item ) : ?>
                <div class="testimonial-card">
                    <div class="testimonial-content">"<?php echo esc_html( $item['text'] ); ?>"</div>
                    <div class="testimonial-author">
                        <div class="author-img"><img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" loading="lazy"></div>
                        <div class="author-info">
                            <h4><?php echo esc_html( $item['name'] ); ?></h4>
                            <span><?php echo esc_html( $item['role'] ); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>