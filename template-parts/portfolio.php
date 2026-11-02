<?php
/**
 * نمونه‌کارها (Portfolio) - استفاده از تصاویر ثابت
 */
$items = array(
    array( 'title' => 'نظافت کوره صنعتی', 'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-5.jpeg' ),
    array( 'title' => 'نظافت شیشه‌های برج تجاری', 'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-8.jpeg' ),
    array( 'title' => 'نظافت لابی شرکتی', 'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-7.jpeg' ),
    array( 'title' => 'نظافت سالن همایش', 'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-1.jpeg' ),
    array( 'title' => 'نظافت سالن جلسات شرکت', 'image' => 'https://pakpajoh.ir/wp-content/uploads/2026/11/pakpajoh-6.jpeg' ),
);
?>
<section class="portfolio-section section reveal">
    <div class="container">
        <div class="section-header text-right reveal-up">
            <h2 class="section-title">نمونه‌کارهای ما</h2>
            <p class="section-subtitle">کیفیت کار ما را در عمل ببینید</p>
        </div>
        <div class="portfolio-grid reveal-up">
            <?php foreach ( $items as $item ) : ?>
                <div class="portfolio-item">
                    <img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" loading="lazy">
                    <div class="portfolio-overlay">
                        <h3><?php echo esc_html( $item['title'] ); ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>