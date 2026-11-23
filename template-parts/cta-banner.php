<?php
/**
 * CTA Banner Section — PakPajoh Theme (v3.0) - دقیقاً مطابق موکاپ
 */
$request_visit_label = is_front_page()
    ? 'درخواست بازدید اولیه'
    : get_option( 'pakpajoh_text_home_hero_btn1', 'درخواست بازدید اولیه رایگان' );
$request_visit_cta_class = is_front_page() ? '' : ' request-visit-cta';
?>
<section class="cta-banner-section" aria-label="درخواست بازدید">
    <div class="cta-banner-container">
        <div class="cta-leaf-right"></div>
        <!-- برگ تزئینی سمت چپ -->
        <div class="cta-leaf-left"></div>
        
        <!-- محتوا (متن راست، دکمه چپ) -->
        <div class="cta-banner-content">
            <h2 class="cta-banner-title">پاکیزگی محیط کار را به یک فرایند قابل مدیریت تبدیل کنید.</h2>
            <p class="cta-banner-desc">برای شناخت نیازهای مجموعه خود و بررسی امکان همکاری با ما در ارتباط باشید.</p>
        </div>
        
        <a href="<?php echo esc_url( home_url( '/request/' ) ); ?>" class="cta-banner-btn<?php echo esc_attr( $request_visit_cta_class ); ?>">
            <?php if ( is_front_page() ) : ?>
                <span>درخواست بازدید اولیه</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1B5E4A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            <?php else : ?>
                <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <span><?php echo esc_html( $request_visit_label ); ?></span>
            <?php endif; ?>
        </a>
    </div>
</section>