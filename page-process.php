<?php
/**
 * قالب برگه مراحل همکاری
 */
get_header();
?>
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">مراحل همکاری</h1>
        <p class="page-subtitle">مسیر شفاف از تماس اولیه تا تحویل نهایی</p>
    </div>
</section>
<section class="section">
    <div class="container content-wrap">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content" style="margin-bottom: 4rem;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        
        <div class="process-steps" style="margin-top: 2rem;">
            <?php
            $steps = array(
                array( 'تماس اول', 'ثبت درخواست از طریق فرم یا تلفن' ),
                array( 'ارزیابی فنی', 'کارشناسی رایگان در محل' ),
                array( 'پیش‌فاکتور', 'ارائه قیمت و زمان‌بندی' ),
                array( 'قرارداد و استقرار', 'اعزام اکیپ با سرپرست' ),
                array( 'تحویل و ارزیابی', 'ارزیابی کیفی با چک‌لیست' ),
            );
            foreach ( $steps as $index => $step ) : ?>
                <div class="process-step">
                    <div class="step-number">۰<?php echo esc_html( $index + 1 ); ?></div>
                    <h3 class="step-title"><?php echo esc_html( $step[0] ); ?></h3>
                    <p class="step-text"><?php echo esc_html( $step[1] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
get_footer();