<?php
/**
 * تنظیم مستقیم قالب برگه در دیتابیس (بدون پیشخوان)
 */
require_once( dirname( __FILE__ ) . '/wp-load.php' );

$page = get_page_by_path( 'services', OBJECT, 'page' );
if ( ! $page ) {
    die( 'برگه services یافت نشد.' );
}

$page_id = $page->ID;

// تنظیم مستقیم متادیتای قالب در دیتابیس
update_post_meta( $page_id, '_wp_page_template', 'page-services.php' );

// پاک کردن کش
if ( function_exists( 'wp_cache_flush' ) ) { wp_cache_flush(); }
if ( function_exists( 'opcache_reset' ) ) { opcache_reset(); }

echo 'قالب برگه با شناسه ' . $page_id . ' به page-services.php تنظیم شد.';
echo '<br><a href="' . home_url( '/services/' ) . '">مشاهده صفحه</a>';

@unlink( __FILE__ );