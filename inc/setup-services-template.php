<?php
/**
 * تنظیم خودکار قالب برگه خدمات (بدون نیاز به لاگین)
 * آدرس اجرا: https://pakpajoh.ir/?setup_services_template=1
 */
add_action( 'init', function() {
    if ( ! isset( $_GET['setup_services_template'] ) || '1' !== $_GET['setup_services_template'] ) { return; }

    $page = get_page_by_path( 'services' );
    if ( ! $page ) {
        echo '<p>❌ صفحه «خدمات» یافت نشد. لطفاً ابتدا آن را از پیشخوان بسازید.</p>';
        exit;
    }

    update_post_meta( $page->ID, '_wp_page_template', 'page-services.php' );
    echo '<p>✅ قالب «صفحه خدمات» روی برگه «خدمات» تنظیم شد. (ID: ' . $page->ID . ')</p>';
    echo '<p><a href="/services/">رفتن به صفحه خدمات</a></p>';
    exit;
});