<?php
/**
 * اسکریپت راه‌اندازی خودکار صفحه خدمات
 * این فایل را یک بار در ریشه سایت قرار دهید، سپس آدرس آن را در مرورگر باز کنید.
 * پس از اجرا، خود را حذف می‌کند.
 */
require_once( dirname( __FILE__ ) . '/wp-load.php' );

if ( ! current_user_can( 'manage_options' ) ) {
    wp_die( 'شما دسترسی لازم برای اجرای این اسکریپت را ندارید.' );
}

$page_title = 'خدمات ما';
$page_slug  = 'services';
$template   = 'page-services.php';

// بررسی وجود صفحه
$existing = get_page_by_path( $page_slug );

if ( $existing ) {
    $page_id = $existing->ID;
    update_post_meta( $page_id, '_wp_page_template', $template );
    echo '<p style="color:green;">صفحه «خدمات ما» از قبل وجود داشت. قالب آن به «صفحه خدمات ما» تغییر کرد.</p>';
} else {
    $page_id = wp_insert_post( array(
        'post_title'   => $page_title,
        'post_name'    => $page_slug,
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
    ) );

    if ( is_wp_error( $page_id ) ) {
        wp_die( 'خطا در ایجاد صفحه: ' . $page_id->get_error_message() );
    }

    update_post_meta( $page_id, '_wp_page_template', $template );
    echo '<p style="color:green;">صفحه «خدمات ما» با موفقیت ایجاد و منتشر شد.</p>';
}

// حذف خود اسکریپت
@unlink( __FILE__ );
echo '<p style="color:green;">اسکریپت راه‌اندازی حذف شد. حالا به صفحه <a href="' . esc_url( home_url( '/services/' ) ) . '">خدمات ما</a> بروید.</p>';