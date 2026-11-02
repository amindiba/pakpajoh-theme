<?php
/**
 * مراحل همکاری
 */
$steps = array(
    array( 'تماس اول', 'ثبت درخواست از طریق فرم یا تلفن' ),
    array( 'ارزیابی فنی', 'کارشناسی رایگان در محل' ),
    array( 'پیش‌فاکتور', 'ارائه قیمت و زمان‌بندی' ),
    array( 'قرارداد و استقرار', 'اعزام اکیپ با سرپرست' ),
    array( 'تحویل و ارزیابی', 'ارزیابی کیفی با چک‌لیست' ),
);
?>
<section id="process" class="process section section-light">
    <div class="container">
        <div class="section-header text-right">
            <h2 class="section-title">فرآیند همکاری</h2>
            <p class="section-subtitle">مسیر شفاف از تماس تا تحویل</p>
        </div>
        <div class="process-steps">
            <?php foreach ( $steps as $index => $step ) : ?>
                <div class="process-step">
                    <div class="step-number"><?php echo esc_html( $index + 1 ); ?></div>
                    <h3 class="step-title"><?php echo esc_html( $step[0] ); ?></h3>
                    <p class="step-text"><?php echo esc_html( $step[1] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>