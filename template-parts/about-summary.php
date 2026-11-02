<?php
/**
 * تعهدات سازمانی
 */
$defaults = array(
    1 => array( 'بهینه‌سازی مصرف', 'استفاده از فناوری‌های مکانیزه و شوینده‌های بایو برای کاهش مصرف آب و انرژی.' ),
    2 => array( 'تضمین کیفیت', 'پایداری کیفیت خدمات با چک‌لیست‌های مدون تحویل کار.' ),
    3 => array( 'محیط بهداشتی', 'ایجاد محیطی تمیز و ایمن، شایسته مشتریان و ساکنان.' ),
);
?>
<section class="commitments-section section reveal">
    <div class="container">
        <div class="commitments-layout">
            <div class="commitments-text reveal-up">
                <h2 class="section-title">تعهدات ما</h2>
                <p class="section-desc">سه اصل اساسی در تمام پروژه‌های پاک‌پژوه که ما را به یک انتخاب مطمئن تبدیل می‌کند.</p>
                <a href="/about/" class="btn-link">درباره پاک‌پژوه بیشتر بدانید ←</a>
            </div>
            <div class="commitments-cards reveal-up" style="transition-delay: 0.2s;">
                <?php for ( $i = 1; $i <= 3; $i++ ) :
                    $title = get_theme_mod( "pakpajoh_commit_{$i}_title", $defaults[ $i ][0] );
                    $text  = get_theme_mod( "pakpajoh_commit_{$i}_text", $defaults[ $i ][1] );
                    ?>
                    <div class="commit-card">
                        <div class="commit-number">۰<?php echo esc_html( $i ); ?></div>
                        <div class="commit-content">
                            <h3 class="commit-title"><?php echo esc_html( $title ); ?></h3>
                            <p class="commit-text"><?php echo esc_html( $text ); ?></p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>